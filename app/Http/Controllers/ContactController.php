<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    protected $status; // para almacenar resultado

    public function showForm()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // 1. Validar datos
        $data = $request->validate([
            'userName'    => 'required|string|max:100',
            'userPhone'   => 'required',
            'userEmail'   => 'required|email',
            'userMessage' => 'required|string',
        ]);

        try {
            // 2. Enviar correo
            Mail::send('emails.contact', $data, function($msg) use ($data) {
                $msg->to('victor@fenrir.cl', 'Soporte')
                    ->subject('Nuevo mensaje de contacto');
                $msg->from($data['userEmail'], $data['userName']);
            });

            $status = 'success';
        } catch (\Exception $e) {
            // Captura error de envío
            \Log::error('Mail error: '.$e->getMessage());
            $status = 'error';
        }

        // 3. Redirigir con status en querystring
        return redirect()->route('success', ['status' => $status]);
    }

    public function result(Request $request)
    {
        // obtiene el parámetro status
        $status = $request->get('status', 'error');
        return view('web.success', compact('status'));
    }
}
