<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store() {
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10'
        ]);
        $verifiedSend = true;
        Mail::to('codex.literary@gmail.com')->queue(new MessageReceived($msg));

        return view('contact', compact('verifiedSend'));
    }
}
