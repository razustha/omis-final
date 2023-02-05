<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CommonMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $mail_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_data, $item = '')
    {
        $this->mail_data = $mail_data;
        $this->item = $item;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['mail_data'] = $this->mail_data;
        $data['item'] = $this->item;
        return $this->view($data['mail_data']['view'], $data)->subject($data['mail_data']['subject'] ?? 'FROM ' . env('APP_NAME'));
    }
}
