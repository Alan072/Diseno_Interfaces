<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class controlador_tareas extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tarea = DB::table('tickets')
        ->join('empleado', 'tickets.empleado_id', '=', 'empleado.id_empleado')
        ->join('departamento', 'empleado.departamento_id', '=', 'departamento.id_departamento')
        ->join('estatus', 'tickets.estatus_id', '=', 'estatus.id_estatus')
        ->select('tickets.*','departamento.nombre as departamento','estatus.nombre_estatus as estatus',
         DB::raw("CONCAT(empleado.nombre, ' ', empleado.apellido_paterno, ' ', empleado.apellido_materno) AS nombre_completo"))        
        ->get();  
        return view('reporte_ticket', ['tarea' => $tarea]);
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
    public function store(Request $req)
    {
        DB::table('tarea')->insert([
            "ticket_id"=>$req->input('ticket_id'),
            "empleado_id"=>$req->input('empleado_id'),
            "departamento_id"=>$req->input('departamento_id'),
            "comentarios"=>$req->input('comentarios'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/asignar_ticket')->with('mensaje','Tu recuerdo se ha guardado en la BD');
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
         // Manejar el caso en que no se encuentra el ticket
        
        
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id_ticket)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
