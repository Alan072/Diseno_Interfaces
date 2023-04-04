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

        $tarea = DB::table('tarea')
        ->join('tickets', 'tarea.ticket_id', '=', 'tickets.id_ticket')
        ->join('empleado as e1', 'tickets.empleado_id', '=', 'e1.id_empleado')
        ->join('empleado as e2', 'tarea.empleado_id', '=', 'e2.id_empleado')
        ->join('departamento', 'tarea.departamento_id', '=', 'departamento.id_departamento')
        ->select('tickets.id_ticket','tarea.created_at','tickets.detalles as detalles_ticket', 'tarea.comentarios as comentario_tarea', 'tickets.comentarios as comentario_ticket',
        'e1.nombre as nombre_empleado_ticket', 'e2.nombre as nombre_empleado_tarea',  'e2.id_empleado as numero_empleado','departamento.nombre as nombre_departamento')
        ->get();

        
        if ($empleado && $password == $empleado->password) {
            if ($empleado->puesto_id == 1) {
                return view('jefe_ticket');
            } elseif ($empleado->puesto_id == 2) {
                return view('ticket_auxiliar', compact('tarea'));
            } elseif ($empleado->puesto_id == 3) {
                return view('clientticket');
            }
        }
    
    return redirect()->back()->withErrors(['Matricula' => 'Las credenciales ingresadas son incorrectas']);
}


    
    
}
