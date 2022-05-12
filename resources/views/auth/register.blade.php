@extends('layouts.template')

@section('title', 'Register')

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section id="auth_form">
            <h2 id="auth_title">REGISTER</h2>
            <form action="{{ route('register') }}" method="POST" id="auth_sumbition">
                @csrf
                <section>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
                    {!! $errors->first('name', '<small>:message</small>') !!}
                </section>
                <section>
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
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
                    <button type="submit">Register</button>
                </section>
            </form>
        </section>
    </main>
@endsection