@extends('layouts.template')

@section('title', 'Create')

@section('css, javascript')

@endsection

@section('content')
    <main>
        <section>
            @if (auth()->user()->type == 'reader-writer')
            @else
                                
            @endif
        </section>
    </main>
@endsection