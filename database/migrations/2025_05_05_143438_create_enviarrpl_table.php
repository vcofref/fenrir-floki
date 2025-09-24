<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateEnviarRPLTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enviarrpl', function (Blueprint $table) {
            $table->id();
            $table->string('mail', 100)->nullable();
            $table->string('nombre', 255)->nullable();
            $table->string('contrato', 255)->nullable();
            $table->string('saldo_general', 255)->nullable();
            $table->string('fecha_vencimiento', 255)->nullable();
            $table->string('dias_mora', 255)->nullable();
            $table->string('fecha_oferta', 255)->nullable();
            $table->string('monto_a_pagar', 255)->nullable();
            $table->string('estado', 100)->default('pendiente');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enviarrpl');
    }
}

