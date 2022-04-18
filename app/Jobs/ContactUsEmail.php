<?php

namespace App\Jobs;

use App\Mail\ContactUsMail;
use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactUsEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     *
     * @var Contact
     */

    protected $requests;

    public function __construct($requests)
    {
        $this->requests = $requests;
    }

    /**
     * Execute the job.
     * @return void
     * @throws \Exception
     */
    public function handle()
    {
dd($this->requests);
        Mail::to(config('mail.from.address'))->send(new ContactUsMail((array)$this->requests));
    }
}
