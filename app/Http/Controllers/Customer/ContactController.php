<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('customer.pages.contact.index');
    }

    public function store(ContactRequest $request)
    {
        ContactService::create($request->all());
        return \redirect()->back()
        ->with('success', 'Mensagem enviada, entraremos em contato em breve!');
    }
}
