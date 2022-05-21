@extends('layouts.template')

@section('title', 'Edit')

@section('css, javascript')
    <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-project.css') }}">
@endsection

@section('content')
    <main>
        <section id="create_project">
            <h2>EDIT {{ $edit->title }}</h2>
            <form action="{{ route('create.update', $update) }}" method="POST">
                @csrf @method('PATCH')
                <section id="cover-section">
                    <label for="cover" class="section-label">COVER</label>
                    <img src="../../imgs/Cover.png" alt="Default Cover">
                </section>
                <section id="second-box">
                    <section id="title-section">
                        <input type="hidden" name="position" value="{{ $edit->codexes_id }}">
                        <label for="title" class="section-label">TITLE</label>
                        <input type="text" name="title" id="title" placeholder="Type here the title..." value="{{ $edit->title }}" required autofocus>
                        {!! $errors->first('title', '<small>:message</small>') !!}
                    </section>
                    <section id="type-section">
                        <label class="section-label">TYPE</label>
                        <label for="novel">NOVEL</label>
                        <input type="radio" name="type" id="novel" required checked>
                        <label for="book">BOOK</label>
                        <input type="radio" name="type" id="book">
                        {!! $errors->first('type', '<small>:message</small>') !!}
                    </section>
                    <section id="genre-section">
                        <label for="genre" class="section-label">GENRE</label>
                        <select name="genre" name="genre" id="genre" required>
                            <option value disabled>. . .</option>
                            @isset($genres)
                                @foreach ($genres as $value)
                                    @if ( $edit->genres_id == $value->id )
                                        <option value="{{ $value->id }}" selected>{{ $value->genre }}</option>
                                    @else
                                        <option value="{{ $value->id }}">{{ $value->genre }}</option>
                                    @endif
                                @endforeach
                            @endisset
                        </select>
                        {!! $errors->first('genre', '<small>:message</small>') !!}
                    </section>
                    <section id="language-section">
                        <label for="language" class="section-label">LANGUAGE</label>
                        <select name="language" name="language" id="language" required>
                            <option value disabled>. . .</option>
                            @isset($languages)
                                @foreach ($languages as $value)
                                    @if ( $edit->languages_id == $value->id )
                                        <option value="{{ $value->id }}" selected>{{ $value->language }}</option>
                                    @else
                                        <option value="{{ $value->id }}">{{ $value->language }}</option>
                                    @endif
                                @endforeach
                            @endisset
                        </select>
                        {!! $errors->first('language', '<small>:message</small>') !!}
                    </section>
                    <section id="synopsis-section">
                        <label for="synopsis" class="section-label">SYNOPSIS</label>
                        <textarea name="synopsis" id="synopsis" minlength="20" maxlength="1000" placeholder="Type here the synopsis..." required>{{ $edit->description }}</textarea>
                        {!! $errors->first('synopsis', '<small>:message</small>') !!}
                    </section>
                </section>
                <section id="submit-section">
                    <button type="submit">Edit</button>
                </section>
            </form>
        </section>
    </main>
@endsection