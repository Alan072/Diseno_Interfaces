<?php
use App\Http\Controllers\Controlador_Paginas;
use App\Http\Controllers\controlador_empleado;

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



Route::get('/insertar',[Controlador_Paginas::class,'finicio']) ->name('Jticket');

Route::get('/jefe_ticket_read',[Controlador_Paginas::class,'fread']) ->name('Jread');
Route::get('/jefe_ticket_editar',[Controlador_Paginas::class,'feditar']) ->name('Jeditar');
//Funcion de Create empleado
Route::post('/insertar/create',[controlador_empleado::class,'store'])->name('insertar.create');



Route::get('/jefe_departamento',[Controlador_Paginas::class,'fdep']) ->name('Jdep');
Route::get('/jefe_departamento_read',[Controlador_Paginas::class,'fdep_read']) ->name('Jdep_read');
Route::get('/jefe_departamento_editar',[Controlador_Paginas::class,'fdep_editar']) ->name('Jdep_editar');

//Rutas de las vistas de ticket
Route::get('/reporte_ticket',[Controlador_Paginas::class,'frepoticket']) ->name('rticket');
Route::get('/vista_ticket',[Controlador_Paginas::class,'fvistaticket']) ->name('vticket');

//Rutas de los reportes
Route::get('/departamentos',[Controlador_Paginas::class,'fdepartamento']) ->name('ddepartamento');
Route::get('/vistadepa',[Controlador_Paginas::class,'fvistadepa']) ->name('vdepa');
Route::get('/reportesdepa',[Controlador_Paginas::class,'freportedepa']) ->name('rdepartamento');