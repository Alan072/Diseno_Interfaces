<?php
use App\Http\Controllers\Controlador_Paginas;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jefe_ticket',[Controlador_Paginas::class,'finicio']) ->name('Jticket');

Route::get('/jefe_ticket_read',[Controlador_Paginas::class,'fread']) ->name('Jread');
Route::get('/jefe_ticket_editar',[Controlador_Paginas::class,'feditar']) ->name('Jeditar');



Route::get('/jefe_departamento',[Controlador_Paginas::class,'fdep']) ->name('Jdep');
Route::get('/jefe_departamento_read',[Controlador_Paginas::class,'fdep_read']) ->name('Jdep_read');
Route::get('/jefe_departamento_editar',[Controlador_Paginas::class,'fdep_editar']) ->name('Jdep_editar');

