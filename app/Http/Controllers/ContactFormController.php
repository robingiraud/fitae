<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mailjet\LaravelMailjet\Facades\Mailjet;

// use Mailjet\LaravelMailjet\Facades\Mailjet;

class ContactFormController extends Controller
{
    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $lists = Mailjet::getAllLists();

        dd($lists);

        Mail::to('test@test.com')->send(new ContactFormMail($data));
    }
}
