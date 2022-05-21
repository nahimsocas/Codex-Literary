<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\CodexAuthor;
use App\Models\CodexContent;
use App\Models\CodexDraft;
use Illuminate\Support\Facades\DB;

class CreateIntermediateController extends Controller
{
    public function index($url)
    {
        $original = DB::select("SELECT * FROM libraries WHERE (`url` = \"$url\")");
        $codexID = $original[0]->codexes_id;

        $archive = CodexAuthor::join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
            ->where('codexes.id', '=', $codexID)
            ->join('authors', 'authors.id', '=', 'codex_authors.authors_id')
            ->join('languages', 'languages.id', '=', 'codexes.languages_id')
            ->join('codex_genres', 'codex_genres.codexes_id', '=', 'codexes.id')
            ->join('genres', 'genres.id', '=', 'codex_genres.genres_id')
            ->select('codex_authors.*', 'codexes.*', 'authors.author', 'languages.language', 'codex_genres.*', 'genres.genre')
            ->get();

        $authorID = $archive[0]->authors_id;
        $numberChapters = DB::select("SELECT COUNT(*) AS ROWNUMBERS FROM codex_contents");
        $numberDrafts = DB::select("SELECT COUNT(*) AS ROWNUMBERS FROM codex_drafts");

        if ($numberChapters[0]->ROWNUMBERS) {
            $chapters = CodexContent::select('*')->where('codexes_id', '=', $codexID)->where('authors_id', '=', $authorID)->get();
        }
        if ($numberDrafts[0]->ROWNUMBERS) {
            $drafts = CodexDraft::select('*')->where('codexes_id', '=', $codexID)->where('authors_id', '=', $authorID)->get();
        }

        return view('create.archive', [
            'archive' => $archive,
            'chapters' => $chapters ?? 0,
            'drafts' => $drafts ?? 0,
            'url' => $url
        ]);
    }

    public function edit($url, $id, $type)
    {
        $original = DB::select("SELECT * FROM libraries WHERE (`url` = \"$url\")");
        $codexID = $original[0]->codexes_id;
        $theAuthor = Author::where('author', '=', auth()->user()->username)->select('*')->get();
        $authorID = $theAuthor[0]->id;

        if ( $type == 'chapter' ) {
            $theEdit = CodexContent::where('id', '=', $id)->where('authors_id', '=', $authorID)->where('codexes_id', '=', $codexID)->get();
        } else if ( $type == 'draft' ) {
            $theEdit = CodexDraft::where('id', '=', $id)->where('authors_id', '=', $authorID)->where('codexes_id', '=', $codexID)->get();
        }
        $inText = strip_tags($theEdit[0]->text);

        return view('create.edit-chapter', [
            'edit' => $theEdit,
            'text' => $inText,
            'url' => $url
        ]);
    }

    public function store($url)
    {
        request()->validate([
            'title' => 'required|min:3|max:100',
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
        if (request('thoughts')) {
            $thoughts = request('thoughts');
        }

        $chapters = DB::select("SELECT COUNT(`chapters`) AS CHAPTERS FROM codex_contents WHERE (`codexes_id` = $codexID)");
        $chapterNumber = $chapters[0]->CHAPTERS + 1;

        if (request('finish') == 'draft') {
            DB::insert("INSERT INTO codex_drafts (`title`, `text`, `thoughts`, `codexes_id`, `authors_id`) VALUES (\"$title\", \"$convertedText\", \"$thoughts\", $codexID, $authorID)");
        } else if (request('finish') == 'publish') {
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

    public function update($url)
    {
        $data = request()->post();
        $title = $data['title'];
        $thoughts = $data['thoughts'];
        $chpDrfID = $data['chp-drf'];
        
        if ( $data['qwhs'] ) {
            if ( $data['converted-text'] ) {
                DB::update("UPDATE codex_contents SET `title` = \"$title\", `thoughts` = \"$thoughts\" WHERE `id` = $chpDrfID");
            } else {
                $text = $data['converted-text'];
                DB::update("UPDATE codex_contents SET `title` = \"$title\", `text` = \"$text\", `thoughts` = \"$thoughts\" WHERE `id` = $chpDrfID");
            }
        } else {
            if ( $data['converted-text'] ) {
                DB::update("UPDATE codex_drafts SET `title` = \"$title\", `thoughts` = \"$thoughts\" WHERE `id` = $chpDrfID");
            } else {
                $text = $data['converted-text'];
                DB::update("UPDATE codex_drafts SET `title` = \"$title\", `text` = \"$text\", `thoughts` = \"$thoughts\" WHERE `id` = $chpDrfID");
            }
        }

        $original = DB::select("SELECT * FROM libraries WHERE (`url` = \"$url\")");
        $codexID = $original[0]->codexes_id;

        $archive = CodexAuthor::join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
            ->where('codexes.id', '=', $codexID)
            ->join('authors', 'authors.id', '=', 'codex_authors.authors_id')
            ->join('languages', 'languages.id', '=', 'codexes.languages_id')
            ->join('codex_genres', 'codex_genres.codexes_id', '=', 'codexes.id')
            ->join('genres', 'genres.id', '=', 'codex_genres.genres_id')
            ->select('codex_authors.*', 'codexes.*', 'authors.author', 'languages.language', 'codex_genres.*', 'genres.genre')
            ->get();

        $authorID = $archive[0]->authors_id;
        $numberChapters = DB::select("SELECT COUNT(*) AS ROWNUMBERS FROM codex_contents");
        $numberDrafts = DB::select("SELECT COUNT(*) AS ROWNUMBERS FROM codex_drafts");

        if ($numberChapters[0]->ROWNUMBERS) {
            $chapters = CodexContent::select('*')->where('codexes_id', '=', $codexID)->where('authors_id', '=', $authorID)->get();
        }
        if ($numberDrafts[0]->ROWNUMBERS) {
            $drafts = CodexDraft::select('*')->where('codexes_id', '=', $codexID)->where('authors_id', '=', $authorID)->get();
        }

        return view('create.archive', [
            'archive' => $archive,
            'chapters' => $chapters ?? 0,
            'drafts' => $drafts ?? 0,
            'url' => $url
        ]);
    }
}
