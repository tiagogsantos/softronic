<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {
        Newsletter::create($request->all());
        return \redirect()->back()
            ->with('success', 'Solicitação adicionada');
    }
}
