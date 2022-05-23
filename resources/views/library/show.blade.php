@extends('layouts.template')

@section('title', $inside[0]->title)

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/library-inside.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <article id="chosen_codex">
            <section id="chosen_codex--img">
                <img src="{{ $inside[0]->cover }}" alt="{{ $inside[0]->title }}">
            </section>
            <section id="chosen_codex--information">
                <h1>{{ $inside[0]->title }}</h1>
                <h2>Author: {{ $inside[0]->author }}</h2>
                <h3><em>Genre: {{ $inside[0]->genre }}</em></h3>
                <h3><em>Language: {{ $inside[0]->language }}</em></h3>
                <details open="true">
                    <summary>Synopsis</summary>
                    <p>{{ $inside[0]->description }}</p>
                </details>
            </section>
        </article>
        <section id="chosen_codex--chapters">
            @isset($chapters)
                @if (!empty($chapters[0]->chapters))
                    <details open="false">
                        <summary>Volume I</summary>
                        @foreach ($chapters as $value)
                            <h2>Chapter {{ $value->chapters }} - {{ $value->title }}</h2>
                            @php
                                echo "$value->text";
                            @endphp
                        @endforeach
                    </details>
                @else
                    <details>
                        <summary>Volume I</summary>
                        <h2>Chapter 1 - Lorem Ipsum.</h2>
                        <p>
                            dolor sit, amet consectetur adipisicing elit. Modi facilis quas officiis quibusdam fugit 
                            culpa minus soluta doloremque tempora. 
                            Odit officia sapiente assumenda aperiam excepturi esse, omnis optio impedit dicta.
                        </p>
                    </details>
                @endif
            @endisset
        </section>
    </main>
@endsection