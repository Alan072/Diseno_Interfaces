<?php
use App\Http\Controllers\Controlador_Paginas;
use App\Http\Controllers\controlador_empleado;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\controlador_departamento;
use App\Http\Controllers\ticketcontrolador;
use App\Http\Controllers\controlador_tareas;
use App\Http\Controllers\controlador_aux;



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



Route::get('/',[Controlador_Paginas::class,'flog']) ->name('Jlog');
Route::get('/jefe_ticket',[Controlador_Paginas::class,'finicio']) ->name('Jticket');
#Esta es la ruta en donde se mostrara la tabla de la vista usuarios
Route::get('/tb_usuarios',[controlador_empleado::class, 'index'])->name('usuarioindex');
Route::delete('/tb_usuarios/{id_empleado}',[controlador_empleado::class, 'destroy'])->name('usuariodestroy');
Route::get('/tb_usuarios/{id_empleado}', [controlador_empleado::class, 'show'])->name('usuarioshow');
Route::put('/tb_usuarios/{id_empleado}',[controlador_empleado::class,'update'])->name('usuarioupdate');
Route::get('/tb_usuarios/{id_empleado}/edit',[controlador_empleado::class,'edit'])->name('usuarioedit');
Route::post('/insertar/create',[controlador_empleado::class,'store'])->name('insertar.create');
Route::post('upload-image', 'controlador_empleado@upload')->name('image.upload');


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
Route::get('/vista_ticket',[Controlador_Paginas::class,'fvistaticket']) ->name('vticket');
Route::get('/asignar_ticket', [controlador_tareas::class, 'index'])->name('asignar_ticket');
Route::post('/asignar_ticket/create',[controlador_tareas::class,'store']) ->name('insertar_tarea');




//Rutas de los reportes
Route::get('/departamentos',[Controlador_Paginas::class,'fdepartamento']) ->name('ddepartamento');
Route::get('/vistadepa',[Controlador_Paginas::class,'fvistadepa']) ->name('vdepa');
Route::get('/reportesdepa',[Controlador_Paginas::class,'freportedepa']) ->name('rdepartamento');

//Vista del perfil
Route::get('/perfil',[Controlador_Paginas::class,'fprofile']) ->name('Jprofile');
Route::get('/perfilaux',[Controlador_Paginas::class,'fprofileaux']) ->name('Jprofileaux');
Route::get('/perfiluser',[Controlador_Paginas::class,'fprofileuser']) ->name('Jprofileuser');

//Vistas de auxiliar
Route::get('/ticket_auxiliar',[controlador_aux::class,'index']) ->name('tarea');

Route::get('/busqueda_auxiliar',[Controlador_Paginas::class,'fauxbus']) ->name('auxbus');
Route::get('/busqueda_auxiliar2',[controlador_aux::class,'index_2']) ->name('filtrar');

//Vistas de cliente
Route::get('/clientticket',[Controlador_Paginas::class,'fclientticket']) ->name('Jclientticket');
Route::get('/tabcliente',[Controlador_Paginas::class,'ftabcliente']) ->name('Jtabcliente');
Route::post('/clientticket/create',[ticketcontrolador::class,'store']) ->name('insertar_ticket');
Route::get('/tabcliente',[ticketcontrolador::class,'index']) ->name('ticket_index');






Route::post('/jefe_ticket', [LoginController::class, 'login']);

