<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Codex;
use App\Models\CodexAuthor;
use App\Models\Genre;
use App\Models\Language;
use Illuminate\Support\Facades\DB;

class CreateBasicController extends Controller
{
    public function index()
    {
        $authorID = Author::where('author', '=', auth()->user()->username)->get();
        if ( !count($authorID) ) {
            return view('create.index');
        } else {
            $projects = Codex::join('codex_authors', 'codexes.id', '=', 'codexes_id')
            ->where('authors_id', '=', $authorID[0]->id)
            ->join('authors', 'authors.id', '=', 'codex_authors.authors_id')
            ->join('libraries', 'libraries.codexes_id', '=', 'codexes.id')
            ->select('codexes.cover', 'codexes.title', 'codexes.description', 'codex_authors.*', 'authors.author', 'libraries.url')
            ->get();
            return view('create.index', [
                'projects' => $projects
            ]);
        }
    }

    public function edit($url)
    {
        $original = DB::select("SELECT * FROM libraries WHERE (`url` = \"$url\")");
        $codexID = $original[0]->codexes_id;

        $edit = CodexAuthor::join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
        ->where('codexes.id', '=', $codexID)
        ->join('authors', 'authors.id', '=', 'codex_authors.authors_id')
        ->join('languages', 'languages.id', '=', 'codexes.languages_id')
        ->join('codex_genres', 'codex_genres.codexes_id', '=', 'codexes.id')
        ->join('genres', 'genres.id', '=', 'codex_genres.genres_id')
        ->select('codex_authors.*', 'codexes.*', 'authors.author', 'languages.id', 'codex_genres.genres_id', 'genres.id')
        ->get()->first();
        return view('create.edit', [
            'edit' => $edit,
            'languages' => Language::all(),
            'genres' => Genre::all()
        ]);
    }

    public function create()
    {
        return view('create.create', [
            'languages' => Language::all(),
            'genres' => Genre::all()
        ]);
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

        $username = auth()->user()->username;
        $userID = auth()->user()->id;
        $title = request('title');
        $language = request('language');
        $synopsis = request('synopsis');
        $genre = request('genre');

        if (!DB::select("SELECT author FROM authors WHERE (`author` = \"$username\")")) {
            DB::insert("INSERT INTO authors (`author`, `users_id`) VALUES (\"$username\", $userID)");
        }
        DB::insert("INSERT INTO codexes (`cover`, `title`, `description`, `languages_id`) VALUES (\"../imgs/Cover.png\", \"$title\", \"$synopsis\", $language)");

        $codexID = DB::select("SELECT id FROM codexes WHERE (`title` = \"$title\")");
        $theCodexID = $codexID[0]->id;
        DB::insert("INSERT INTO codex_genres (`genres_id`, `codexes_id`) VALUES ($genre, $theCodexID)");

        $theUrl = strtolower(implode('-', explode(' ', trim(request('title')))));
        DB::insert("INSERT INTO libraries (`url`, `codexes_id`) VALUES (\"$theUrl\", $theCodexID)");

        $authorID = DB::select("SELECT id FROM authors WHERE (`author` = \"$username\")");
        $theAuthorID = $authorID[0]->id;
        DB::insert("INSERT INTO codex_authors (`authors_id`, `codexes_id`) VALUES ($theAuthorID, $theCodexID)");

        return redirect()->route('create.index');
    }

    public function update()
    {
        $data = request()->post();
        $username = auth()->user()->username;
        $title = $data['title'];
        $language = $data['language'];
        $synopsis = $data['synopsis'];
        $genre = $data['genre'];
        $codexesID = $data['position'];

        $theAuthor = DB::select("SELECT id FROM authors WHERE ( `author` = \"$username\")");
        $authorID = $theAuthor[0]->id;
        $comprobar = DB::select("SELECT authors_id FROM codex_authors WHERE ( `codexes_id` = $codexesID )");
        if ( $comprobar[0]->authors_id == $authorID ) {
            $theUrl = strtolower(implode('-', explode(' ', trim($title))));
    
            DB::update("UPDATE codexes SET `title` = \"$title\", `description` = \"$synopsis\", `languages_id` = $language WHERE ( `id` = $codexesID )");
            DB::update("UPDATE codex_genres SET `genres_id` = $genre, `codexes_id` = $codexesID WHERE ( `codexes_id` = $codexesID )");
            DB::update("UPDATE libraries SET `url` = \"$theUrl\" WHERE ( `codexes_id` = $codexesID )");
    
            return redirect()->route('create.index'); 
        }
    }
}