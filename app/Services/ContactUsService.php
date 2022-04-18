<?php

namespace App\Services;


use App\Jobs\ContactUsEmail;
use App\Jobs\ContactUsJob;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

/**
 * Class AddressService
 * @package App\Services\Address
 */
class ContactUsService
{

    /**
     * @throws \Exception
     */
    public function sendContactMail($data): bool
    {
        ContactUsEmail::dispatch($data);

        return true;

    }


}






