<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    

    public function login(Request $request)
    {
        $matricula = $request->input('Matricula');
        $password = $request->input('Password');
        $empleado = DB::table('empleado')->where('id_empleado', $matricula)->first();
        
        if ($empleado && $password == $empleado->password) {
            if ($empleado->puesto_id == 1) {
                return view('jefe_ticket');
            } elseif ($empleado->puesto_id == 2) {
                return view('ticket_auxiliar');
            } elseif ($empleado->puesto_id == 3) {
                return view('clientticket');
            }
        }
    
    return redirect()->back()->withErrors(['Matricula' => 'Las credenciales ingresadas son incorrectas']);
}


    
    
}
