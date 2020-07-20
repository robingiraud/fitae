<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mailjet\LaravelMailjet\Exception\MailjetException;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use Mockery\Exception;

// use Mailjet\LaravelMailjet\Facades\Mailjet;

class ContactFormController extends Controller
{
    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // $lists = Mailjet::getAllLists();

        try {
            Mailjet::getSingleContact($data['email']);
        } catch (MailjetException $e) {
            if ($e->getCode() == 404) {
                Mailjet::createContact([
                    'email' => $data['email']
                ]);
            }
        }

        Mail::to('contact.fitae@gmail.com')->send(new ContactFormMail($data));

        return redirect()->route('offre-club')->with('success', 'Votre demande a bien été envoyée.');
    }
}
