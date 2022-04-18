<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var
     */
    public $data;
    /**
     * RequestCreateMail constructor.
     * @param array $data
     * @throws \Exception
     */
    public function __construct(array $data)
    {
        if (empty($data)) {
            throw new \Exception("Contact data is empty");
        }

        $this->data = $data;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
            ->subject('Message from contact us form')
            ->markdown('mails.contactUsForm',
                [
                    'data' =>  $this->data,
                ]);
    }
}
