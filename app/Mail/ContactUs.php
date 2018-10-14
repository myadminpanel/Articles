<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name; 
    public $email; 
    public $subject; 
    public $body; 

    public function __construct($name , $email , $subject , $body){
    
    $this->name = $name;
    $this->email = $email;
    $this->subject = $subject;
    $this->body = $body;

        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // no need to pass argument because they are public in the class
        return $this->view('email.contact');
    }
}
