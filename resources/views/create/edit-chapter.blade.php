@extends('layouts.template')

@section('title', 'Edit')

@section('css, javascript')
    <script type="text/javascript" src="{{ asset('js/create.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chapter.css') }}">
@endsection

@section('content')
    <main>
        <section id="write">
            <p>. . .</p>
            <form action="{{ route('create.chapterupdate', [$url, hash('crc32', $CLnumber, false)]) }}" method="POST" name="chapters" id="chapters">
                @csrf @method('PATCH')
                <section id="flex-data">
                    <section id="input-data">
                        <input type="text" name="title" id="title" placeholder="the title..." value="{{ $edit[0]->title }}" required>
                        <input type="hidden" name="chp-drf" value="{{ $edit[0]->id }}">
                        @if ( $edit[0]->chapters )
                            <input type="hidden" name="qwhs" value="{{ $edit[0]->chapters }}">                        
                        @endif
                        {!! $errors->first('title', '<small>:message</small>') !!}
                    </section>
                    <section id="submit-buttons">
                        <button id="edit" name="finish" value="edit" type="submit">Edit</button>
                    </section>
                </section>
                <section id="text-data">
                    <textarea name="text" name="text" id="text" minlength="100" placeholder="chapter's text..." required>{{ strip_tags($edit[0]->text) }}</textarea>
                    <input type="hidden" name="converted-text" id="converted-text" value="">
                    {!! $errors->first('text', '<small>:message</small>') !!}
                </section>
                <section id="thoughts-data">
                    <textarea name="thoughts" id="thoughts" placeholder="author's thoughts...">{{ empty($edit[0]->thoughts) ? '' : $edit[0]->thoughts }}</textarea>
                </section>
            </form>
        </section>
    </main>
@endsection