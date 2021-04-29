<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Informacion de contacto";
    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message. 
     *
     * @return $this
     */
    public function build()
    {
        //aqui nos retorna una vista en la cual es el contenido de nuestra vista.
        return $this->view('emails.contactanos');
    }
}
