<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\SendMailRPL;
use Illuminate\Support\Facades\Mail;
use DateTime;
use DateTimeZone;
use IntlDateFormatter;

use App\Models\Enviar;
use App\Models\EnviarRPL;


class enviosController extends Controller
{
    public function index(){
    }
    public function SendMail(){
        $hoy = date('Y-m-d');
        $ahora = date('Y-m-d H:i:s');

        //$hoy = '2025-05-04';

        //dd($hoy);

        Enviar::where('created_at','>',$hoy)
        ->where('estado','pendiente')    
        //->whereNotNull('updated_at')      
        //->limit(193)
        ->update(
            array(
                'updated_at'=> $ahora,
                'estado'=> 'enviado'
            )
        );
        
        //php artisan queue:work

        $correos = Enviar::where('updated_at',$ahora)
        ->get();

        $objMail = new \stdClass();
        foreach ($correos as $key => $value) {
            $objMail->nombre = $value->usuario;
            $objMail->empresa = $value->razon_social;

            Mail::to($value->mail)->queue(new SendMail($objMail));
        } 
        return "correo enviado";        

    }

    //SendMailRedPlaza

    public function SendMailRedPlaza(){
        $hoy = date('Y-m-d');
        $ahora = date('Y-m-d H:i:s');


        EnviarRPL::where('created_at','>',$hoy)
        ->where('estado','pendiente')    
        ->limit(10000)
        ->update(
            array(
                'updated_at'=> $ahora,
                'estado'=> 'enviado'
            )
        );
        
        //php artisan queue:work

        $hoy = new DateTime('now', new DateTimeZone('America/Santiago'));

        $fmt = new IntlDateFormatter(
            'es_CL',                     // Locale en español (Chile)
            IntlDateFormatter::NONE,     // Sin estilo predefinido de fecha
            IntlDateFormatter::NONE,     // Sin hora
            $hoy->getTimezone(),
            IntlDateFormatter::GREGORIAN,
            "dd 'de' MMMM 'de' yyyy"     // Patrón deseado
        );

        $fecha = $fmt->format($hoy);

        $correos = EnviarRPL::where('updated_at',$ahora)
        ->get();

        $objMail = new \stdClass();
        foreach ($correos as $key => $value) {
            /*
            $objMail->nombre = $value->nombre;
            $objMail->contrato = $value->contrato;
            $objMail->saldo_general = $value->saldo_general;
            $objMail->fecha_vencimiento = $value->fecha_vencimiento;
            $objMail->dias_mora = $value->dias_mora;
            $objMail->fecha_oferta = $value->fecha_oferta;
            $objMail->monto_a_pagar = $value->monto_a_pagar;
            $objMail->fecha = $fecha;            
            Mail::to($value->mail)->queue(new SendMailRPL($objMail));*/

            $data = [
                'nombre' => $value->nombre,
                'contrato' => $value->contrato,
                'saldo_general' => $value->saldo_general,
                'fecha_vencimiento' => $value->fecha_vencimiento,
                'dias_mora' => $value->dias_mora,
                'fecha_oferta' => $value->fecha_oferta,
                'monto_a_pagar' => $value->monto_a_pagar,
                'fecha' => $fecha,
            ];

            Mail::to($value->mail)->queue(new SendMailRPL($data));


            //Mail::to($value->mail)->send(new SendMailRPL($objMail));
            //Mail::to($value->mail)->later(now()->addMinutes(5), new SendMailRPL($objMail));
        } 
        return "correo enviado";        

    }
}
