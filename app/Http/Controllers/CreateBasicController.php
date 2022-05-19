<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Codex;
use App\Models\CodexAuthor;
use App\Models\CodexGenre;
use App\Models\Genre;
use App\Models\Language;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\DataCollector\RequestDataCollector;

class CreateBasicController extends Controller
{
    public function index()
    {
        $authorID = Author::where('author', '=', auth()->user()->username)->get();
        $theID = $authorID[0]->id;
        $codexAuthor = CodexAuthor::where('authors_id', '=', $theID)->get();
        if (!count($codexAuthor)) {
            return view('create.index');
        }
        $projects = DB::select("SELECT *, libraries.url  FROM codexes INNER JOIN codex_authors ON (codexes.id = codexes_id AND authors_id = $theID) INNER JOIN authors ON (authors.id = $theID) INNER JOIN libraries ON (libraries.codexes_id = codexes.id)");
        return view('create.index', [
            'projects' => $projects
        ]);
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
        //var_dump($edit);
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
        var_dump($data);
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