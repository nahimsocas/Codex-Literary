@extends('layouts.template')

@section('title', 'Reset Password')

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <style>
        #auth_form {
          width: 30% !important;
        }
        
        #auth_form label {
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
            <h2 id="auth_title">RESET PASSWORD</h2>
            <form action="{{ route('password.email') }}" method="POST" id="auth_sumbition">
                @csrf
                @if (session('status'))
                    <p>{{ session('status') }}</p>
                @endif
                <section>
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
                    {!! $errors->first('email', '<small>:message</small>') !!}
                </section>
                <section>
                    <button type="submit">Send Password Reset Link</button>
                </section>
            </form>
        </section>
    </main>
@endsection