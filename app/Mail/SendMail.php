<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $arrDatos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($arrDatos)
    {
        //dd($arrDatos);
        $this->arrDatos = $arrDatos;
        //dd($this->arrDatos);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contacto@fenrirtecnologia.cl', 'Fenrir Soluciones Informaticas')
        ->subject('Un café virtual para hablar de tecnología')
        ->view('mail.fenrir.campana-julio-2025.mail')
        ->text('mail.fenrir.campana-julio-2025.text');
        //->view('mail.send_mail')
        //->text('mail.send_mail_text');
    }
}
