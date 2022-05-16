@extends('layouts.template')

@section('title', 'Create')

@section('css, javascript')

@endsection

@section('content')
    <main>
        <section id="create_text">
            @if (auth()->user()->type == 'reader-writer')
            @endif
            <textarea name="user-text" id="user-text" cols="" rows=""></textarea>
        </section>
    </main>
@endsection