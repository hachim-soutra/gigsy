<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name, $email, $objet, $messageTxt;

    public function __construct($name, $email, $objet, $messageTxt)
    {
        $this->name     = $name;
        $this->email    = $email;
        $this->objet    = $objet;
        $this->messageTxt  = $messageTxt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact')
            ->replyTo($this->email, $this->name)
            ->subject('Welcome!');
    }
}
