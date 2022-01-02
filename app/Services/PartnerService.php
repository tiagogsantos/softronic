<?php

namespace App\Services;

use App\Models\Partner;
use App\Mail\PartnerMail;
use Illuminate\Support\Facades\Mail;

class PartnerService
{
    public static function create(array $data)
    {
        $partner = Partner::create($data);

        Mail::to('thales.serra97@gmail.com')
            ->send(new PartnerMail($partner));
    }
}