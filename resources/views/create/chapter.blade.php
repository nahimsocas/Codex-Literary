@extends('layouts.template')

@section('title', 'New Chapter')

@section('css, javascript')
    <script type="text/javascript" src="{{ asset('js/create.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chapter.css') }}">
@endsection

@section('content')
    <main>
        <section id="write">
            <p>. . .</p>
            <form action="{{ route('create.chapterstore', [$url, hash('crc32', $CLnumber, false)]) }}" method="POST" name="chapters" id="chapters">
                @csrf
                <section id="flex-data">
                    <section id="input-data">
                        <input type="text" name="title" id="title" placeholder="the title..." value="{{ old('title') }}" required>
                        {!! $errors->first('title', '<small>:message</small>') !!}
                    </section>
                    <section id="submit-buttons">
                        <button id="draft" name="finish" value="draft" type="submit">Drafts</button>
                        <button id="publish" name="finish" value="publish" type="submit">Publish</button>
                    </section>
                </section>
                <section id="text-data">
                    <textarea name="text" name="text" id="text" minlength="100" placeholder="chapter's text..." required>{{ old('text') }}</textarea>
                    <input type="hidden" name="converted-text" id="converted-text" value="">
                    {!! $errors->first('text', '<small>:message</small>') !!}
                </section>
                <section id="thoughts-data">
                    <textarea name="thoughts" id="thoughts" placeholder="author's thoughts..."></textarea>
                </section>
            </form>
        </section>
    </main>
@endsection