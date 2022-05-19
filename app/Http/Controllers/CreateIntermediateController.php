<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CreateIntermediateController extends Controller
{
    public function index($url)
    {
        $original = DB::select("SELECT * FROM libraries WHERE (`url` = \"$url\")");
        $codexID = $original[0]->codexes_id;

        $archive = DB::select("SELECT * FROM codex_authors INNER JOIN codexes ON (codex_authors.codexes_id = codexes.id AND codexes.id = $codexID) INNER JOIN authors ON (authors.id = codex_authors.authors_id) INNER JOIN languages ON (languages.id = codexes.languages_id) INNER JOIN codex_genres ON (codex_genres.codexes_id = $codexID) INNER JOIN genres ON (genres.id = codex_genres.genres_id)");
        $authorID = $archive[0]->authors_id;
        $numberChapters = DB::select("SELECT COUNT(*) AS ROWNUMBERS FROM codex_contents");
        $numberDrafts = DB::select("SELECT COUNT(*) AS ROWNUMBERS FROM codex_drafts");

        if ($numberChapters[0]->ROWNUMBERS) {
            $chapters = DB::select("SELECT * FROM codex_contents WHERE (codexes_id = $codexID AND authors_id = $authorID)");
        }
        if ($numberDrafts[0]->ROWNUMBERS) {
            $drafts = DB::select("SELECT * FROM codex_drafts WHERE (codexes_id = $codexID AND authors_id = $authorID)");
        }

        return view('create.archive', [
            'archive' => $archive,
            'chapters' => $chapters ?? 0,
            'drafts' => $drafts ?? 0,
            'url' => $url
        ]);
    }

    public function store($url)
    {
        request()->validate([
            'title' => 'required|min:3',
            'text' => 'required|min:100',
        ]);

        $original = DB::select("SELECT * FROM libraries WHERE (`url` = \"$url\")");
        $codexID = $original[0]->codexes_id;
        $user = auth()->user()->username;
        $theAuthor = DB::select("SELECT id FROM authors WHERE (`author` = \"$user\")");
        $authorID = $theAuthor[0]->id;

        $title = request('title');
        $convertedText = trim(request('converted-text'));
        $thoughts = " ";
        if ( request('thoughts') ) {
            $thoughts = request('thoughts');
        }

        $chapters = DB::select("SELECT COUNT(`chapters`) AS CHAPTERS FROM codex_contents WHERE (`codexes_id` = $codexID)");        
        $chapterNumber = $chapters[0]->CHAPTERS + 1;

        if ( request('finish') == 'draft' ) {
            DB::insert("INSERT INTO codex_drafts (`title`, `text`, `thoughts`, `codexes_id`, `authors_id`) VALUES (\"$title\", \"$convertedText\", \"$thoughts\", $codexID, $authorID)");
        } else if ( request('finish') == 'publish' ) {
            DB::insert("INSERT INTO codex_contents (`title`, `text`, `thoughts`, `chapters`, `codexes_id`, `authors_id`) VALUES (\"$title\", \"$convertedText\", \"$thoughts\", $chapterNumber, $codexID, $authorID)");
        }

        return redirect()->route('create.archive', [
            'url' => $url
        ]);
    }

    public function create($url)
    {
        return view('create.chapter', [
            'url' => $url
        ]);
    }
}
