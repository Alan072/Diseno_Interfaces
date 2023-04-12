<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class controlador_aux extends Controller
{
    //Vistas auxiliar
    function fauxt(){
        return view('ticket_auxiliar');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tarea = DB::table('tarea')
        ->join('tickets', 'tarea.ticket_id', '=', 'tickets.id_ticket')
        ->join('empleado as e1', 'tickets.empleado_id', '=', 'e1.id_empleado')
        ->join('empleado as e2', 'tarea.empleado_id', '=', 'e2.id_empleado')
        ->join('departamento', 'tarea.departamento_id', '=', 'departamento.id_departamento')
        ->where('tickets.estatus_id', [6]) // condición para solo mostrar estatus_id = 6
        ->select('tickets.id_ticket','tarea.created_at','tickets.detalles as detalles_ticket', 'tarea.comentarios as comentario_tarea', 'tickets.comentarios as comentario_ticket',
        'e1.nombre as nombre_empleado_ticket', 'e2.nombre as nombre_empleado_tarea',  'e2.id_empleado as numero_empleado','departamento.nombre as nombre_departamento')
        ->get();


        return view('ticket_auxiliar',compact('tarea'));
    }

    public function index_2(Request $request)
    {
        //
        $query = DB::table('tickets')
        ->join('empleado', 'tickets.empleado_id', '=', 'empleado.id_empleado')
        ->join('departamento', 'empleado.departamento_id', '=', 'departamento.id_departamento')
        ->join('estatus', 'tickets.estatus_id', '=', 'estatus.id_estatus')
        ->select('tickets.*','departamento.nombre as departamento','estatus.nombre_estatus as estatus',
         DB::raw("CONCAT(empleado.nombre, ' ', empleado.apellido_paterno, ' ', empleado.apellido_materno) AS nombre_completo"));

    if ($request->has('status')) {
        $query->where('estatus.nombre_estatus', $request->input('status'));
    }

    $ticket = $query->get();

    return view('busqueda_auxiliar', compact('ticket'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_ticket)
    {
        //
        $tarea = DB::table('tickets')->where('id_ticket', $id_ticket)->first();
        return view('drawaux', ['ticket' => $tarea]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id_ticket)
    {
        //
        DB::table('tickets')->where('id_ticket', $id_ticket)->update([
            "estatus_id"=>$req->input('estatus_id'),
            "comentarios_aux"=>$req->input('comentarios_aux'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/ticket_auxiliar')->with('mensaje','Tu recuerdo se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
