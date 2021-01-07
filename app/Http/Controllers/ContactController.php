<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Mail;

class ContactController extends Controller
{
    public function getForm()
    {
        return \view('contact');
    }

    public function postForm(ContactRequest $request)
    {
        Mail::send('email_contact', $request->all(), function ($message) {
            $message->to('dondedieubolenge@gmail.com')->subject('Contact');
        });

        return \view('confirm');
    }
}
