<?php
use App\Http\Controllers\Controlador_Paginas;
use App\Http\Controllers\controlador_empleado;
use App\Http\Controllers\controlador_departamento;

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



Route::get('/',[Controlador_Paginas::class,'finicio']) ->name('Jticket');
#Esta es la ruta en donde se mostrara la tabla de la vista usuarios
Route::get('/tb_usuarios',[controlador_empleado::class, 'index'])->name('usuarioindex');
Route::delete('/tb_usuarios/{id_empleado}',[controlador_empleado::class, 'destroy'])->name('usuariodestroy');
Route::get('/tb_usuarios/{id_empleado}', [controlador_empleado::class, 'show'])->name('usuarioshow');
Route::put('/tb_usuarios/{id_empleado}',[controlador_empleado::class,'update'])->name('usuarioupdate');
Route::get('/tb_usuarios/{id_empleado}/edit',[controlador_empleado::class,'edit'])->name('usuarioedit');
Route::post('/insertar/create',[controlador_empleado::class,'store'])->name('insertar.create');


#Esta es la ruta en donde se mostrara la tabla de la vista reportes
Route::get('/tb_reportes',[Controlador_Paginas::class,'ftbreport']) ->name('Jtbreport');

Route::get('/jefe_ticket_read',[Controlador_Paginas::class,'fread']) ->name('Jread');
Route::get('/jefe_ticket_editar',[Controlador_Paginas::class,'feditar']) ->name('Jeditar');
//Funcion de Create empleado


//Rutas de las vistas de departamento
Route::get('/tb_departamento',[controlador_departamento::class,'index']) ->name('depindex');
Route::get('/jefe_departamento',[Controlador_Paginas::class,'fdep']) ->name('Jdep');
Route::get('/jefe_departamento_read',[Controlador_Paginas::class,'fdep_read']) ->name('Jdep_read');
Route::get('/jefe_departamento_editar',[Controlador_Paginas::class,'fdep_editar']) ->name('Jdep_editar');
Route::post('/jefe_departamento/create',[controlador_departamento::class,'store']) ->name('insertar_dep');
Route::get('/tb_departamento/{id_departamento}',[controlador_departamento::class, 'show'])->name('depshow');
Route::get('/tb_departamento/{id_departamento}/edit',[controlador_departamento::class,'edit'])->name('depedit');
Route::put('/tb_departamento/{id_departamento}',[controlador_departamento::class,'update'])->name('depupdate');
Route::delete('/tb_departamento/{id_departamento}',[controlador_departamento::class, 'destroy'])->name('depdestroy');


//Rutas de las vistas de ticket
Route::get('/reporte_ticket',[Controlador_Paginas::class,'frepoticket']) ->name('rticket');
Route::get('/vista_ticket',[Controlador_Paginas::class,'fvistaticket']) ->name('vticket');

//Rutas de los reportes
Route::get('/departamentos',[Controlador_Paginas::class,'fdepartamento']) ->name('ddepartamento');
Route::get('/vistadepa',[Controlador_Paginas::class,'fvistadepa']) ->name('vdepa');
Route::get('/reportesdepa',[Controlador_Paginas::class,'freportedepa']) ->name('rdepartamento');