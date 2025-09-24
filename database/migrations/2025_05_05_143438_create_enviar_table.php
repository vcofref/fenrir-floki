<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateEnviarTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enviar', function (Blueprint $table) {
            $table->id();
            $table->string('rut', 45)->nullable();
            $table->string('razon_social', 255)->nullable();
            $table->string('usuario', 255)->nullable();
            $table->string('mail', 255)->nullable();
            $table->string('region', 100)->nullable();
            $table->string('estado', 45)->default('pendiente');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // Insertar datos por defecto
        DB::table('enviar')->insert([
            [
                'rut' => '77699620-3',
                'razon_social' => 'FENRIR SOLUCIONES INFORMATICAS',
                'usuario' => 'Victor Cofre Farias',
                'mail' => 'victor.cofre.f@gmail.com',
                'region' => 'Región Metropolitana de Santiago',
                'estado' => 'pendiente',
                'created_at' => '2025-05-05 10:30:00',
                'updated_at' => NULL,
            ],
            [
                'rut' => '76563806-2',
                'razon_social' => 'FENRIR SOLUCIONES INFORMATICAS',
                'usuario' => 'Alejandro Osses',
                'mail' => 'alejandro.osses.r@gmail.com',
                'region' => 'Región de los Lagos',
                'estado' => 'pendiente',
                'created_at' => '2025-05-05 10:30:00',
                'updated_at' => NULL,
            ],
            [
                'rut' => '76563806-2',
                'razon_social' => 'FENRIR SOLUCIONES INFORMATICAS',
                'usuario' => 'Alejandro Osses',
                'mail' => 'oteroexacto1@gmail.com',
                'region' => 'Región de los Lagos',
                'estado' => 'pendiente',
                'created_at' => '2025-05-05 10:30:00',
                'updated_at' => NULL,
            ],
            [
                'rut' => '77699620-3',
                'razon_social' => 'FENRIR SOLUCIONES INFORMATICAS',
                'usuario' => 'Victor Cofre Farias',
                'mail' => 'victor.cofre@docente.ipss.cl',
                'region' => 'Región Metropolitana de Santiago',
                'estado' => 'pendiente',
                'created_at' => '2025-05-05 10:30:00',
                'updated_at' => NULL,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enviar');
    }
}

