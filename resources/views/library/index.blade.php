@extends('layouts.template')

@section('title', 'Library')

@section('css, javascript')
    <link href="{{ asset('css/library.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section id="lib">
            @isset($library)
                @foreach ($library as $value)
                    <article class="lib_codex">
                        <a href="{{ route('library.show', $value->url, $value->codexes_id) }}" target="_self">
                            <section class="lib_codex--img">
                                <img src="{{ $value->cover }}" alt="{{ $value->title }}">
                            </section>
                            <section class="lib_codex--information">
                                <h1>{{ $value->title }}</h1>
                                <h2>{{ $value->author }}</h2>
                                <p>{{ $value->description }}</p>
                            </section>
                        </a>
                    </article>
                @endforeach
                <section id="lib_codex--pagination">
                    {{ $library->links() }}
                </section>
            @else
                <p>Database Error!</p>
            @endisset
        </section>
    </main>
@endsection