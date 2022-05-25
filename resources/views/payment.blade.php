@extends('layouts.template')

@section('title', 'Payment')

@section('css, javascript')
    <link href="{{ asset('css/small-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/payment.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section id="payment_form">
            <h2>BUY BOOKS</h2>
            <form action="{{ route('store.index') }}" method="POST" id="payment_submit">
                @csrf
                <h3>PAYMENT INFORMATION</h3>
                <section>
                    <input type="text" name="name" id="name" pattern="[a-zA-Z]" placeholder="name" required autofocus>
                    {!! $errors->first('name', '<small>:message</small>') !!}
                    <input type="text" name="cardnumber" id="cardnumber" pattern="[0-9]" placeholder="card number" required>
                    {!! $errors->first('cardnumber', '<small>:message</small>') !!}
                    <input type="text" name="cvv" id="cvv" pattern="[0-9]" placeholder="cvv" required>
                    {!! $errors->first('name', '<small>:message</small>') !!}
                </section>
                <h3>ADDRESS INFORMATION</h3>
                <section>
                    <input type="text" name="address" id="address" placeholder="address" required>
                    {!! $errors->first('address', '<small>:message</small>') !!}
                </section>
                <section>
                    <input type="text" name="secondaddress" id="secondaddress" placeholder="additional address" required>
                    {!! $errors->first('secondaddress', '<small>:message</small>') !!}
                </section>
                <section id="price">
                    @php
                        $total = 0;
                        foreach ($amount as $value) {
                            $total += $value->quantity;
                        }
                    @endphp
                    <p id="total">Total: <strong>{{ $total * 10 }}&euro;</strong></p>
                </section>
                <section>
                    <button type="submit">Place Order</button>
                </section>
            </form>
        </section>
    </main>
@endsection