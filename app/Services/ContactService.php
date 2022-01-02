<?php

namespace App\Services;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactService
{
    public static function create(array $data)
    {
        $contact = Contact::create($data);
        $contact->status = $contact->status == 1 ? 'Sim' : 'Não';
        Mail::to('thales.serra97@gmail.com')
            ->send(new ContactMail($contact));
    }
}
