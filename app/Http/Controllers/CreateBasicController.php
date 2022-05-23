<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Codex;
use App\Models\CodexAuthor;
use App\Models\CodexGenre;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Library;

class CreateBasicController extends Controller
{
    public function index()
    {
        $authorID = Author::where('author', '=', auth()->user()->username)->get();
        if (!count($authorID)) {
            return view('create.index');
        } else {
            $projects = Library::join('codex_authors', 'libraries.codex_authors', '=', 'codex_authors.id')
                ->join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
                ->join('authors', 'codex_authors.authors_id', '=', 'authors.id')
                ->where('authors.id', '=', $authorID[0]->id)
                ->select('libraries.url', 'codexes.title', 'codexes.description', 'codexes.CLnumber', 'authors.author')
                ->get();

            return view('create.index', [
                'projects' => $projects
            ]);
        }
    }

    public function edit($url, $CLnumber)
    {
        $clSerial = $this->detectCodex($url, $CLnumber);

        $edit = CodexAuthor::join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
            ->join('authors', 'codex_authors.authors_id', '=', 'authors.id')
            ->join('codex_genres', 'codex_genres.genres_id', '=', 'codex_genres.codexes_id')
            ->join('genres', 'codex_genres.codexes_id', '=', 'genres.id')
            ->join('languages', 'codexes.languages_id', '=', 'languages.id')
            ->where('codexes.CLnumber', '=', $clSerial)
            ->select('codex_authors.id', 'codexes.cover', 'codexes.title', 'codexes.description', 'codexes.CLnumber', 'authors.author', 'genres.genre', 'languages.language')
            ->get();

        return view('create.edit', [
            'edit' => $edit,
            'url' => $url,
            'languages' => Language::select('languages.id', 'languages.language')->get(),
            'genres' => Genre::select('genres.id', 'genres.genre')->get()
        ]);
    }

    public function create()
    {
        return view('create.create', [
            'languages' => Language::select('languages.id', 'languages.language')->get(),
            'genres' => Genre::select('genres.id', 'genres.genre')->get()
        ]);
    }

    public function destroy($url, $CLnumber)
    {
        $clSerial = $this->detectCodex($url, $CLnumber);

        Codex::where('codexes.CLnumber', '=', $clSerial)->delete();

        return redirect()->route('create.index');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required|min:3',
            'type' => 'required',
            'genre' => 'required|min:1',
            'language' => 'required|min:1',
            'synopsis' => 'min:20|max:1000',
        ]);

        if (!Author::where('author', '=', auth()->user()->username)->count()) {
            Author::insert(['author' => auth()->user()->username, 'users_id' => auth()->user()->id]);
        }

        $clSerial = "CL" . random_int(100, 4000) . '-' . random_int(100, 3000) . '-' . random_int(100, 2000) . '-' . random_int(100, 1000) . '-' . random_int(100, 1000);
        while (count(Codex::where('CLnumber', '=', $clSerial)->get())) {
            $clSerial = "CL" . random_int(100, 4000) . '-' . random_int(100, 3000) . '-' . random_int(100, 2000) . '-' . random_int(100, 1000) . '-' . random_int(100, 1000);
        }

        Codex::insert([
            'cover' => '../imgs/Cover.png',
            'title' => request('title'),
            'description' => request('synopsis'),
            'languages_id' => request('language'),
            'CLnumber' => $clSerial,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $codexID = Codex::where('CLnumber', '=', $clSerial)->get();
        CodexGenre::insert([
            'genres_id' => request('genre'),
            'codexes_id' => $codexID[0]->id
        ]);

        $authorID = Author::where('author', '=', auth()->user()->username)->get();
        CodexAuthor::insert([
            'authors_id' => $authorID[0]->id,
            'codexes_id' => $codexID[0]->id
        ]);

        $codexAuthor = CodexAuthor::where('codexes_id', '=', $codexID[0]->id)->where('authors_id', '=', $authorID[0]->id)->get();
        Library::insert([
            'url' => strtolower(implode('-', explode(' ', trim(request('title'))))),
            'codex_authors' => $codexAuthor[0]->id
        ]);

        return redirect()->route('create.index');
    }

    public function update($url, $CLnumber)
    {
        $clSerial = $this->detectCodex($url, $CLnumber);

        Codex::where('codexes.CLnumber', '=', $clSerial)
            ->update(['title' => request()->post()['title'], 'description' => request()->post()['synopsis'], 'languages_id' => request()->post()['language']]);

        CodexGenre::join('codexes', 'codexes.id', '=', 'codex_genres.codexes_id')
            ->where('codexes.CLnumber', '=', $clSerial)
            ->update(['codex_genres.genres_id' => request()->post()['genre']]);

        Library::join('codex_authors', 'libraries.codex_authors', '=', 'codex_authors.id')
            ->join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
            ->where('codexes.CLnumber', '=', $clSerial)
            ->update(['url' => strtolower(implode('-', explode(' ', trim(request()->post()['title']))))]);

        return redirect()->route('create.index');
    }

    public function detectCodex($url, $CLnumber)
    {
        $library = Library::join('codex_authors', 'libraries.codex_authors', '=', 'codex_authors.id')
            ->join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
            ->where('libraries.url', '=', $url)
            ->select('codexes.id', 'codexes.CLnumber')
            ->get();
        $clSerial = '';

        foreach ($library as $value) {
            if (hash('crc32', $value['CLnumber'], false) == $CLnumber) {
                $clSerial = $value['CLnumber'];
                break;
            }
        }
        return $clSerial;
    }
}
