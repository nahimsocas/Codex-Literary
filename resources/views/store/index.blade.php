@extends('layouts.template')

@section('title', 'Store')
    
@section('css, javascript')
    <script type="text/javascript" src="{{ asset('js/store.js')}}" defer></script>
    @if ( is_null(auth()->user()) )
        <link rel="stylesheet" href="{{ asset('css/storef.css') }}">
    @else
        @if ( empty(auth()->user()->email_verified_at) )
            <link rel="stylesheet" href="{{ asset('css/storef.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('css/store.css') }}">
        @endif
    @endif
    <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">
@endsection

@section('content')
    <main>
        <section id="store"></section>
        @if ( is_null(auth()->user()) )
            <input type="hidden" id="cart" value="false">
        @else
            <input type="hidden" id="cart" value="{{ (empty(auth()->user()->email_verified_at) ? 'false' : 'true') }}">
        @endif
        <iframe style="display: none;" name="storeFrame" id="storeFrame"></iframe>
    </main>
@endsection