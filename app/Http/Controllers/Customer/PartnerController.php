<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Services\PartnerService;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;

class PartnerController extends Controller
{
    public function index()
    {
        return view('customer.pages.partner.index');
    }

    public function store(PartnerRequest $request)
    {
        PartnerService::create($request->all());
        return \redirect()->back()
        ->with('success', 'Mensagem enviada, entraremos em contato em breve!');
    }
}
