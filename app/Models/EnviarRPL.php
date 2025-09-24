<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnviarRPL extends Model
{
    //use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'enviarrpl';
    public $incrementing = true;

    protected $fillable = [
        'id',
        'mail',
        'nombre',
        'contrato',
        'saldo_general',
        'fecha_vencimiento',
        'dias_mora',
        'fecha_oferta',
        'monto_a_pagar',
        'estado',
        'created_at', 
        'updated_at'];
}
  