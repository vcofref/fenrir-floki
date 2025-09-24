<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEMail extends Mailable implements ShouldQueue
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'licitaciones:enviar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $hoy = date('Y-m-d');


            //dd($licitaciones);
            $objMail = new \stdClass();
                //dd($key);
                $data = array(
                    'CodigoExterno' => "",
                    'FechaFinal' => ""
                );
                $objMail->datos= $data;

            Mail::to('victor@fenrir.cl')->send(new SendMail($objMail));
            return 1;
        } catch (\Throwable $th) {
            return 0;
        }
        
    }
}
