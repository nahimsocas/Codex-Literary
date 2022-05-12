@extends('layouts.template')

@section('title', 'Login')

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section id="auth_form">
            <h2 id="auth_title">LOGIN</h2>
            <form action="{{ route('login') }}" method="POST" id="auth_sumbition">
                @csrf
                <section>
                    <label for="email">Email Address:</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    {!! $errors->first('email', '<small>:message</small>') !!}
                </section>
                <section>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    {!! $errors->first('password', '<small>:message</small>') !!}
                </section id="remember_token--token">
                <section id="remember_token--token">
                    <label for="remember">Remember Me:</label>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </section>
                <section>
                    <button type="submit">Login</button>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    @endif
                    <a href="{{ route('register') }}">Register</a>
                </section>
            </form>
        </section>
    </main>
@endsection