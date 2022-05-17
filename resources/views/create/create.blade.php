@extends('layouts.template')

@section('title', 'Create')

@section('css, javascript')
    <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-project.css') }}">
@endsection

@section('content')
    <main>
        <section id="create_project">
            <h2>CREATE YOUR OWN STORY</h2>
            <form action="{{ route('create.store') }}" method="POST">
                @csrf
                <section id="cover-section">
                    <label for="cover" class="section-label">COVER</label>
                    <img src="../imgs/Cover.png" alt="Default Cover">
                </section>
                <section id="second-box">
                    <section id="title-section">
                        <label for="title" class="section-label">TITLE</label>
                        <input type="text" name="title" id="title" placeholder="Type here the title..." value="{{ old('title') }}" required autofocus>
                    </section>
                    <section id="type-section">
                        <label class="section-label">TYPE</label>
                        <label for="novel">NOVEL</label>
                        <input type="radio" name="type" id="novel" required>
                        <label for="book">BOOK</label>
                        <input type="radio" name="type" id="book">
                    </section>
                    <section id="genre-section">
                        <label for="genre" class="section-label">GENRE</label>
                        <select name="genre" name="genre" id="genre" required>
                            <option value selected disabled>. . .</option>
                            @isset($genres)
                                @foreach ($genres as $value)
                                    <option value="{{ $value->id }}">{{ $value->genre }}</option>
                                @endforeach
                            @endisset
                        </select>
                    </section>
                    <section id="language-section">
                        <label for="language" class="section-label">LANGUAGE</label>
                        <select name="language" name="language" id="language" required>
                            <option value selected disabled>. . .</option>
                            @isset($languages)
                                @foreach ($languages as $value)
                                    <option value="{{ $value->id }}">{{ $value->language }}</option>
                                @endforeach
                            @endisset
                        </select>
                    </section>
                    <section id="synopsis-section">
                        <label for="synopsis" class="section-label">SYNOPSIS</label>
                        <textarea name="synopsis" id="synopsis" minlength="20" maxlength="1000" placeholder="Type here the synopsis..." required>{{ old('synopsis') }}</textarea>
                    </section>
                </section>
                <section id="submit-section">
                    <button type="submit">Submit</button>
                </section>
            </form>
        </section>
    </main>
@endsection