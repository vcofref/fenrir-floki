<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\enviosController;
use App\Http\Controllers\ExcelImportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web/index', ['name' => 'index']);
});
Route::get('about', function () {
    return view('web/about', ['name' => 'about']);
});
Route::get('our-services', function () {
    return view('web/our-services', ['name' => 'our-services']);
});
Route::get('contact', function () {
    return view('web/contact', ['name' => 'contact']);
});

use App\Http\Controllers\ContactController;

//Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('success', [ContactController::class, 'result'])->name('success');



//Route::get('/', [enviosController::class, 'index']);
Route::get('/fenrir', [enviosController::class, 'SendMail']);
Route::get('/redplaza', [enviosController::class, 'SendMailRedPlaza']);


// routes/web.php
Route::get('/excel/cargar',  [ExcelImportController::class, 'form'])->name('excel.form');
Route::post('/excel/cargar', [ExcelImportController::class, 'store'])->name('excel.store');
