<?php

namespace App\Imports;

use App\Models\EnviarRPL;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\{
    ToCollection, WithHeadingRow, WithChunkReading,
    WithBatchInserts, WithEvents
};
use Maatwebsite\Excel\Events\{
    BeforeImport, AfterImport, ImportFailed
};
use Illuminate\Contracts\Queue\ShouldQueue;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class EnviarRPLImport implements
ToCollection,
WithHeadingRow,
WithChunkReading,
WithBatchInserts,
ShouldQueue,          
WithEvents
{
    use \Illuminate\Bus\Queueable, \Illuminate\Queue\SerializesModels;

    private int $inserted = 0;
    private int $chunk    = 0;          // Nº del bloque que se procesa

    /** Ejecutado por cada chunk */
    public function collection(Collection $rows): void
    {
        $this->chunk++;

        //dd($rows);
    
        $now = now();

        Log::channel('imports')->debug("Chunk {$this->chunk}: {$rows->count()} filas recibidas");

        

        $first = $rows->first()->toArray();
        Log::channel('imports')->debug("Claves recibidas:", array_keys($first));
        Log::channel('imports')->debug("Primer registro raw:", $first);

        $data = [];

        foreach ($rows as $idx => $r) {
            try {
                // Salta filas vacías o sin e-mail
                if (empty($r['email'])) {
                    continue;
                }

                // 1) Saldo y monto: separar miles
                $saldo    = $r['valor_2'];
                $monto    = $r['valor_6'];

                if (is_numeric($saldo)) {
                    $saldo = number_format((float)$saldo, 0, '', '.');
                }
                if (is_numeric($monto)) {
                    $monto = number_format((float)$monto, 0, '', '.');
                }

                // 2) Fechas: convertir serial de Excel a 'd-m-Y'
                $rawFechaVenc = $r['valor_3'];
                $rawFechaOf   = $r['valor_5'];

                $fechaVenc = $rawFechaVenc;
                $fechaOf   = $rawFechaOf;

                if (is_numeric($rawFechaVenc)) {
                    $fechaVenc = ExcelDate::excelToDateTimeObject($rawFechaVenc)
                                    ->format('d-m-Y');
                }
                if (is_numeric($rawFechaOf)) {
                    $fechaOf = ExcelDate::excelToDateTimeObject($rawFechaOf)
                                    ->format('d-m-Y');
                }

                $data[] = [
                    'mail'              => trim($r['email']),
                    'nombre'            => trim($r['nombre']),
                    'contrato'          => $r['valor_1'],
                    'saldo_general'     => $saldo,
                    'fecha_vencimiento' => $fechaVenc,
                    'dias_mora'         => $r['valor_4'],
                    'fecha_oferta'      => $fechaOf,
                    'monto_a_pagar'     => $monto,
                    'estado'            => 'pendiente',
                    'created_at'        => $now,
                ];
                Log::channel('imports')->debug("Chunk {$this->chunk} fila {$idx}: preparado {$r['email']}");
            } catch (\Throwable $e) {
                Log::channel('imports')->error("Error fila {$idx} chunk {$this->chunk}: {$e->getMessage()}");
            }
        }
        if ($data) {
            Log::channel('imports')->debug("Data a insertar chunk {$this->chunk}:", $data);

            EnviarRPL::insert($data);
            $this->inserted += count($data);
            Log::channel('imports')->info("Chunk {$this->chunk}: insertadas " . count($data) . " filas (total {$this->inserted})");
        } else {
            Log::channel('imports')->warning("Chunk {$this->chunk}: ninguna fila válida para insertar");
        }
    }

    /** Tamaño del bloque leído */
    public function chunkSize(): int   { return 1000; }

    /** Tamaño del batch insert */
    public function batchSize(): int   { return 1000; }

    /** Eventos globales */
    public function registerEvents(): array
    {
        return [
            BeforeImport::class => fn() => Log::channel('imports')->info('=== INICIO DE IMPORTACIÓN ==='),
            AfterImport::class  => fn() => Log::channel('imports')->info("=== FIN: {$this->inserted} filas insertadas ==="),
            ImportFailed::class => fn(ImportFailed $e) => Log::channel('imports')->critical('Import failed: '.$e->getException()->getMessage()),
        ];
    }

    public function getRowCount(): int
    {
        return $this->inserted;
    }
}
