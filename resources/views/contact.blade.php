@extends('layouts.template')

@section('title', 'Contact')

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section id="contact_form">
            <h2>CONTACT US</h2>
            <form action="{{ route('contact') }}" method="POST" id="contact_submit">
                @csrf
                <section>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
                    {!! $errors->first('name', '<small>:message</small>') !!}
                </section>
                <section>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    {!! $errors->first('email', '<small>:message</small>') !!}
                </section>
                <section>
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" minlength="3" maxlength="40" value="{{ old('subject') }}" required>
                    {!! $errors->first('subject', '<small>:message</small>') !!}
                </section>
                <section>
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="30" rows="5" minlength="10" required>{{ old('message') }}</textarea>
                    {!! $errors->first('message', '<small>:message</small>') !!}
                </section>
                <section>
                    <button type="submit">Send</button>
                </section>
            </form>
        </section>
        @isset ($verifiedSend)
            <section id="message_sent">    
                <p>Message Sent</p>
            </section>
        @endisset
    </main>
@endsection