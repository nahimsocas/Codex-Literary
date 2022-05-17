<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function index()
    {
        $library = Library::select('*')
            ->join('codexes', 'libraries.codexes_id', '=', 'codexes.id')
            ->join('codex_authors', 'codexes.id', '=', 'codex_authors.codexes_id')
            ->join('authors', 'codex_authors.authors_id', '=', 'authors.id')
            ->simplePaginate(12);
        return view('library.index', [
            'library' => $library
        ]);
    }

    public function show($url)
    {
        $original = DB::select("SELECT * FROM libraries WHERE (`url` = \"$url\")");
        $codexID = $original[0]->codexes_id;
        
        $library = DB::select("SELECT * FROM codex_authors INNER JOIN codexes ON (codex_authors.codexes_id = codexes.id AND codexes.id = $codexID) INNER JOIN authors ON (authors.id = codex_authors.authors_id) INNER JOIN languages ON (languages.id = codexes.languages_id) INNER JOIN codex_genres ON (codex_genres.codexes_id = $codexID) INNER JOIN genres ON (genres.id = codex_genres.genres_id)");
        $authorID = $library[0]->authors_id;
        $chapters = DB::select("SELECT * FROM codex_contents WHERE (codex_contents.codexes_id = $codexID AND codex_contents.authors_id = $authorID)");
        return view('library.show', [
            'content' => $library,
            'chapters' => $chapters
        ]);
    }
}
