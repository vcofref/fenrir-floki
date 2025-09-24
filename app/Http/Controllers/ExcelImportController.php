<?php

namespace App\Http\Controllers;

use App\Imports\EnviarRPLImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportController extends Controller
{
    public function form()
    {
        return view('excel.form');      // muestra el formulario
    }

    public function store(Request $request)
    {
        $request->validate([
            'archivo' => 'required|file|mimes:xlsx,xls'
        ]);
        //dd($request->file('archivo'));

       if (!$request->hasFile('archivo')) {
        return back()->withErrors(['archivo' => 'No se ha subido ningún archivo.']);
        }

        $file = $request->file('archivo');

        if (!$file->isValid()) {
            return back()->withErrors(['archivo' => 'El archivo no es válido o está corrupto.']);
        }


        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $destination = storage_path('app/imports');

        if (!file_exists($destination)) {
            mkdir($destination, 0775, true);
        }

        $file->move($destination, $filename);

        $path = 'imports/' . $filename;
        //$path = $file->store('', 'local'); // Usa disco local raíz (storage/app)


        $fullPath = storage_path('app/' . $path);    
             // storage/app/imports/XXXX.xlsx
        Excel::queueImport(new EnviarRPLImport, $fullPath);

        return back()->with('ok', 'Archivo recibido; revisa “storage/logs/imports.log” para el detalle.');

        /*
        $import = new EnviarRPLImport;
        Excel::queueImport($import, $request->file('archivo'));

        return back()->with('ok', "Registros cargados correctamente: "
                                  . $import->getRowCount());
                                  */
    }
}