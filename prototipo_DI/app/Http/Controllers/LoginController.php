<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $matricula = $request->input('Matricula');
        $password = $request->input('Password');
        
        if ($matricula == '123' && $password == 'admin') {
            return view('jefe_ticket');
        } elseif ($matricula == '456' && $password == 'aux') {
            return view('ticket_auxiliar');
        } elseif ($matricula == '789' && $password == 'user') {
            return view('clientticket');
        } else {
            return redirect()->back()->withErrors(['Matricula' => 'Las credenciales ingresadas son incorrectas']);
        }
    }
    
    
}
