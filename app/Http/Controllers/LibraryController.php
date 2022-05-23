<?php

namespace App\Http\Controllers;

use App\Models\CodexContent;
use App\Models\Library;

class LibraryController extends Controller
{
    public function index()
    {
        $library = Library::join('codex_authors', 'libraries.codex_authors', '=', 'codex_authors.id')
        ->join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
        ->join('authors', 'codex_authors.authors_id', '=', 'authors.id')
        ->select('libraries.url', 'codexes.cover', 'codexes.title', 'codexes.description', 'authors.author')
        ->simplePaginate();

        return view('library.index', [
            'library' => $library
        ]);
    }

    public function show($url)
    {
        $inside = Library::join('codex_authors', 'libraries.codex_authors', '=', 'codex_authors.id')
        ->join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
        ->join('authors', 'codex_authors.authors_id', '=', 'authors.id')
        ->join('codex_genres', 'codex_genres.genres_id', '=', 'codex_genres.codexes_id')
        ->join('genres', 'codex_genres.codexes_id', '=', 'genres.id')
        ->join('languages', 'codexes.languages_id', '=', 'languages.id')
        ->where('libraries.url', '=', "$url")
        ->select('codex_authors.id', 'codexes.cover', 'codexes.title', 'codexes.description', 'authors.author', 'genres.genre', 'languages.language')
        ->get();
        $chapters = CodexContent::where('codex_authors', '=', $inside[0]->id)->get();

        return view('library.show', [
            'inside' => $inside,
            'chapters' => $chapters
        ]);
    }
}
