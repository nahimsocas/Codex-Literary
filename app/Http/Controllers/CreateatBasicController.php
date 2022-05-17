<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Facades\DB;

class CreateatBasicController extends Controller
{
    public function index()
    {
        $authorId = Author::where('author', '=', auth()->user()->username)->get();
        if (!count($authorId)) {
            return view('create.index');
        }
        $finalId = $authorId[0]->id;
        $projects = DB::select("SELECT * FROM codexes INNER JOIN codex_authors WHERE (codexes.id = codexes_id AND authors_id = $finalId)");
        return view('create.index', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        $languages = DB::select('SELECT * FROM languages');
        $genres = DB::select('SELECT * FROM genres');
        return view('create.create', [
            'languages' => $languages,
            'genres' => $genres
        ]);
    }

    public function store()
    {
        request()->validate([
            'title' => 'required|min:3',
            'type' => 'required',
            'genre' => 'required',
            'language' => 'required',
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
}
