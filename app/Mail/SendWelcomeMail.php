<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $details;
     public $msg;
    public $sub;

    public function __construct($msg,$sub)
    {
         $this->msg=$msg;
       $this->sub=$sub;
    }

    /**
     * Get the message envelope.
     */
  /*   public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Welcome Mail',
        );
    } */

    /**
     * Get the message content definition.
     */
   /*  public function content(): Content
    {
        return new Content(
            view: 'welcomemail',
        );
    } */

    
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {   
        $details=$this->msg;
        //print_r($details);
        return $this->subject('Welcome to Our App')
                    ->view('welcomemail', compact('details'));
    }
}
