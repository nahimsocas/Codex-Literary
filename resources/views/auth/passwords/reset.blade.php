@extends('layouts.template')

@section('title', 'Reset Password')

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section id="auth_form">
            <h2 id="auth_title">RESET PASSWORD</h2>
            <form action="{{ route('password.update') }}" method="POST" id="auth_sumbition">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <section>
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" value="{{ $email ?? old('email') }}" required autofocus>
                    {!! $errors->first('email', '<small>:message</small>') !!}
                </section>
                <section>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    {!! $errors->first('password', '<small>:message</small>') !!}
                </section>
                <section>
                    <label for="password-confirm">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password-confirm" required>
                </section>
                <section>
                    <button type="submit">Reset Password</button>
                </section>
            </form>
        </section>
    </main>
@endsection