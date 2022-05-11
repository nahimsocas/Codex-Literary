<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        @yield('css, javascript')
        <script type="text/javascript" src="{{ asset('js/search.js')}}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/search.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    </head>
    <body>
        <header id="cl_header">
            @include('layouts.header')
            <section id="bottom_header">
                <article id="search_section">
                    <form action="/CL/" method="POST" name="search">
                        <input list="cl_content" name="search_bar" id="search_bar" placeholder="Search in Codex Literary Library" autofocus>
                        <datalist id="cl_content"></datalist>
                        <input type="submit" hidden>
                    </form>
                </article>
            </section>
        </header>
        @yield('content')
        <footer id="cl_footer">
            @include('layouts.footer')
        </footer>
    </body>
</html>