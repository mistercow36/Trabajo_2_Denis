<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::resource("clientes", \App\Http\Controllers\ClienteController::class);
Route::resource("facturas", \App\Http\Controllers\FacturaController::class);
Route::resource("empleados", \App\Http\Controllers\EmpleadoController::class);



Route::get('/', function () {
    return view('acceso');
})->name("main");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {
        return view('acceso');
    })->name("main");
    Route::get('/empleados/idiomas/{id}', [EmpleadoController::class,"get_idiomas"]);
    Route::get('/clientes/facturas/{id}', [ClienteController::class,"get_facturas"]);
    Route::get('/facturas/clientes/{id}', [FacturaController::class, "get_clientes"]);
    Route::resource("clientes", ClienteController::class);
    Route::resource("facturas", FacturaController::class);
    Route::resource("empleados", EmpleadoController::class);
});

require __DIR__.'/auth.php';
