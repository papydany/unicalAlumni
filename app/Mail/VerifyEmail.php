<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $token;
    public function __construct($body,$name,$subject,$token)
    {
        $this->body =$body;
        $this->name =$name;
        $this->subject =$subject;
        $this->token =url('/').'/updateProfile/'.$token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.index')->with([
            'body' => $this->body,
            'name' => $this->name,
            'subject' => $this->subject,
            'token'=>$this->token,
        ]);
    }
}
