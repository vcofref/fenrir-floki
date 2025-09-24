<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enviar extends Model
{
    //use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'enviar';
    public $incrementing = true;

    protected $fillable = [
        'id',
        'rut',
        'razon_social',
        'usuario',
        'mail',
        'region',
        'estado',
        'created_at', 
        'updated_at'];
}
  