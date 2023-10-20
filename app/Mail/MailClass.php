<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email')
            ->from('admin@mail.com')
            ->replyTo('admin@mail.com')
            ->subject('Join catalonia construct')
            ->with(['name' => $this->data['name'], 'email' => $this->data['email'], 'text' => $this->data['text'], 'phone' => $this->data['phone'],'time' => $this->data['time']]);
    }


}
