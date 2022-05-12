@extends('layouts.template')

@section('title', 'Confirm Password')

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <style>
        #auth_form {
          width: 26% !important;
        }
        
        p {
          text-align: start;
          padding: .4em 0;
          margin: .4em;
        }
    </style>
@endsection

@section('content')
    <main>
        <section id="auth_form">
            <h2 id="auth_title">CONFIRM PASSWORD</h2>
            <form action="{{ route('password.confirm') }}" method="POST" id="auth_sumbition">
                @csrf
                <p>Please confirm your password before continuing.</p>
                <section>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    {!! $errors->first('password', '<small>:message</small>') !!}
                </section>
                <section>
                    <button type="submit">Confirm Password</button>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    @endif
                </section>
            </form>
        </section>
    </main>
@endsection