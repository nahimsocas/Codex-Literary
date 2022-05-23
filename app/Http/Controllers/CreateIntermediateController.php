<?php

namespace App\Http\Controllers;

use App\Models\CodexAuthor;
use App\Models\CodexContent;
use App\Models\CodexDraft;
use App\Models\Library;

class CreateIntermediateController extends Controller
{
    public function index($url, $CLnumber)
    {
        $clSerial = $this->detectCodex($url, $CLnumber);

        $archive = CodexAuthor::join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
            ->join('authors', 'codex_authors.authors_id', '=', 'authors.id')
            ->join('codex_genres', 'codex_genres.genres_id', '=', 'codex_genres.codexes_id')
            ->join('genres', 'codex_genres.codexes_id', '=', 'genres.id')
            ->join('languages', 'codexes.languages_id', '=', 'languages.id')
            ->where('codexes.CLnumber', '=', $clSerial)
            ->select('codex_authors.id', 'codexes.cover', 'codexes.title', 'codexes.description', 'codexes.CLnumber', 'authors.author', 'genres.genre', 'languages.language')
            ->get();

        $chapters = CodexAuthor::join('codex_contents', 'codex_authors.id', '=', 'codex_contents.codex_authors')
            ->where('codex_authors.id', '=', $archive[0]->id)
            ->select('codex_contents.id', 'codex_contents.title', 'codex_contents.chapters')
            ->get();

        $drafts = CodexAuthor::join('codex_drafts', 'codex_authors.id', '=', 'codex_drafts.codex_authors')
            ->where('codex_authors.id', '=', $archive[0]->id)
            ->select('codex_drafts.id', 'codex_drafts.title')
            ->get();

        return view('create.archive', [
            'archive' => $archive,
            'chapters' => count($chapters) ? $chapters : 0,
            'drafts' => count($drafts) ? $drafts : 0,
            'url' => $url,
            'CLnumber' => $clSerial
        ]);
    }

    public function edit($url, $CLnumber, $id, $type)
    {
        $clSerial = $this->detectCodex($url, $CLnumber);
        
        $codexAuthor = CodexAuthor::join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
        ->where('codexes.CLnumber', '=', $clSerial)
        ->select('codex_authors.id')->get();

        if ( $type == 'chapter' ) {
            $edit = CodexContent::where('codex_authors', '=', $codexAuthor[0]->id)->where('id', '=', $id)->get();
        } else if ( $type == 'draft' ) {
            $edit = CodexDraft::where('codex_authors', '=', $codexAuthor[0]->id)->where('id', '=', $id)->get();
        }

        return view('create.edit-chapter', [
            'edit' => $edit,
            'url' => $url,
            'CLnumber' => $clSerial
        ]);
    }

    public function store($url, $CLnumber)
    {
        request()->validate([
            'title' => 'required|min:3|max:100',
            'text' => 'required|min:100',
        ]);
        
        $clSerial = $this->detectCodex($url, $CLnumber);

        $codexAuthor = CodexAuthor::join('codexes', 'codex_authors.codexes_id', '=', 'codexes.id')
        ->where('codexes.CLnumber', '=', $clSerial)
        ->select('codex_authors.id')->get();

        $chapters = CodexContent::where('codex_authors', '=', $codexAuthor[0]->id)->count();

        if ( request('finish') == 'draft' ) {
            CodexDraft::insert([
                'title' => request('title'),
                'text' => trim(request('converted-text')),
                'thoughts' => (empty(request('thoughts'))) ? ' ' : request('thoughts'),
                'codex_authors' => $codexAuthor[0]->id
            ]);
        } else if ( request('finish') == 'publish' ) {
            CodexContent::insert([
                'title' => request('title'),
                'text' => trim(request('converted-text')),
                'thoughts' => (empty(request('thoughts'))) ? ' ' : request('thoughts'),
                'chapters' => ($chapters + 1),
                'codex_authors' => $codexAuthor[0]->id
            ]);
        }

        return redirect()->route('create.archive', [
            'url' => $url,
            'CLnumber' => $CLnumber
        ]);
    }

    public function create($url, $CLnumber)
    {
        $clSerial = $this->detectCodex($url, $CLnumber);
        return view('create.chapter', [
            'url' => $url,
            'CLnumber' => $clSerial
        ]);
    }

    public function update($url, $CLnumber)
    {
        $clSerial = $this->detectCodex($url, $CLnumber);

        if ( request()->post()['qwhs'] ) {
            if ( request()->post()['converted-text'] ) {
                CodexContent::where('id', '=', request()->post()['chp-drf'])
                ->update(['title' => request()->post()['title'], 'text' => request()->post()['converted-text'], 'thoughts' => request()->post()['thoughts']]);
            } else {
                CodexContent::where('id', '=', request()->post()['chp-drf'])
                ->update(['title' => request()->post()['title'], 'thoughts' => request()->post()['thoughts']]);
            }
        } else {
            if ( request()->post()['converted-text'] ) {
                CodexDraft::where('id', '=', request()->post()['chp-drf'])
                ->update(['title' => request()->post()['title'], 'text' => request()->post()['converted-text'], 'thoughts' => request()->post()['thoughts']]);
            } else {
                CodexDraft::where('id', '=', request()->post()['chp-drf'])
                ->update(['title' => request()->post()['title'], 'thoughts' => request()->post()['thoughts']]);
            }
        }

        return redirect()->route('create.archive', [
            'url' => $url,
            'CLnumber' => $CLnumber
        ]);
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
