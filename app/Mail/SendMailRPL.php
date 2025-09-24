<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailRPL extends Mailable implements ShouldQueue
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
    /*public function build()
    {
        \Log::info("💡 SendMailRPL: iniciando build()");

        try {
            \Log::info("📨 Datos del correo:", (array) $this->arrDatos ?? []);

            return $this->from('info@redplazalegal.cl', 'Red Plaza Legal')
                ->subject('Información importante Tarjeta Ripley')
                ->view('mail.send_mail_rpl')
                ->text('mail.send_mail_text');
        } catch (\Throwable $e) {
            \Log::error("❌ Error en build() del mailable: " . $e->getMessage());
            throw $e; // importante: vuelve a lanzar la excepción para que falle el job correctamente
        }


    }*/
    public function build()
{
    \Log::info("💡 SendMailRPL: iniciando build()");

    try {
        \Log::info("📨 Datos del correo:", (array) $this->arrDatos);

        return $this->from('info@redplazalegal.cl', 'Red Plaza Legal')
            ->subject('Información importante Tarjeta Ripley')
            ->view('mail.send_mail_rpl')
            ->text('mail.send_mail_text')
            ->with([
                'data' => (array) $this->arrDatos
            ]);
    } catch (\Throwable $e) {
        \Log::error("❌ Error en build() del mailable: " . $e->getMessage());
        throw $e;
    }
}

}
