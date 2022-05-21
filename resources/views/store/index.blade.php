@extends('layouts.template')

@section('title', 'Store')
    
@section('css, javascript')
    <script type="text/javascript" src="{{ asset('js/store.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
    <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">
@endsection

@section('content')
    <main>
        <section id="store"></section>
        <iframe style="display: none;" name="storeFrame" id="storeFrame"></iframe>
    </main>
@endsection