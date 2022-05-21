@extends('layouts.template')

@section('title', 'View')

@section('css, javascript')
    <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/archive.css') }}">
@endsection

@section('content')
    <main>
        <article id="archive">
            <section id="archive--img">
                <img src="../{{ $archive[0]->cover }}" alt="{{ ucwords(strtolower($archive[0]->title)) }}">
            </section>
            <section id="archive--information">
                <h1>{{ ucwords(strtolower($archive[0]->title)) }}</h1>
                <h2>Author: {{ $archive[0]->author }}</h2>
                <h3><em>Genre: {{ $archive[0]->genre }}</em></h3>
                <h3><em>Language: {{ $archive[0]->language }}</em></h3>
                <details open="true">
                    <summary>Synopsis</summary>
                    <p>{{ $archive[0]->description }}</p>
                </details>
            </section>
        </article>
        <section id="archive--data">
            <section id="archive--create">
                <a href="{{ route('create.chapter', $url) }}" target="_self">
                    <button type="submit">New Chapter</button>
                </a>
            </section>
            <section id="archive--db">
                <section id="archive--db-sections">
                    <a href="#archive--db-chapters">Chapters</a>
                    <a href="#archive--db-drafts">Draft</a>
                </section>
                <section id="archive--db-chapters">
                    @if ( $chapters )
                        @foreach ($chapters as $value)
                            <p class="archive--mini">Chapter - {{ $value->chapters . '. ' . $value->title }}</p>
                            <a href="{{ route('create.chapteredit', [$url, $value->id, $type = 'chapter']) }}">
                                <small class="archive--mini--edit">Edit</small>
                            </a>
                        @endforeach
                    @else
                        <p class="archive--mini" style="opacity: .6; text-align: center;">EMPTY</p>
                    @endif
                </section>
                <section id="archive--db-drafts">
                    @if ( $drafts )
                        @foreach ($drafts as $value)
                            <p class="archive--mini">Draft - {{ $value->title }}</p>
                            <a href="{{ route('create.chapteredit', [$url, $value->id, $type = 'draft']) }}">
                                <small class="archive--mini--edit">Edit</small>
                            </a>
                        @endforeach
                    @else
                        <p class="archive--mini" style="opacity: .6; text-align: center;">EMPTY</p>
                    @endif
                </section>
            </section>
        </section>
    </main>
@endsection