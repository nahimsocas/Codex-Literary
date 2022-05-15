<?php

namespace App\Http\Controllers;

use App\Models\Codex;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function index() {
        $library = Library::select('*')
        ->join('codexes', 'libraries.codexes_id', '=', 'codexes.id')
        ->join('codex_authors', 'codexes.id', '=', 'codex_authors.codexes_id')
        ->join('authors', 'codex_authors.authors_id', '=', 'authors.id')
        ->simplePaginate(12);
        return view('library.index', [
            'library' => $library
        ]);
    }

    public function show($url) {
        Library::where('url', $url)->get();
        // return view('library.show');
    }
}
