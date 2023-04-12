<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ticketcontrolador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ticket = DB::table('tickets')
        ->join('empleado', 'tickets.empleado_id', '=', 'empleado.id_empleado')
        ->join('departamento', 'empleado.departamento_id', '=', 'departamento.id_departamento')
        ->join('estatus', 'tickets.estatus_id', '=', 'estatus.id_estatus')
        ->select('tickets.*','departamento.nombre as departamento','estatus.nombre_estatus as estatus',
         DB::raw("CONCAT(empleado.nombre, ' ', empleado.apellido_paterno, ' ', empleado.apellido_materno) AS nombre_completo"))        
        ->whereNotIn('tickets.estatus_id', [4, 5])
        ->get();        
        return view('tabcliente',compact('ticket'));

    }

    public function actualizar(string $id_ticket)
    {
        $ticket = DB::table('tickets')->where('id_ticket', $id_ticket)->first();
        $ticket->estatus_id = 5;
        DB::table('tickets')->where('id_ticket', $id_ticket)->update(['estatus_id' => 5]);

        return redirect()->back()->with('mensaje', 'Estatus actualizado exitosamente');
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
        //
        DB::table('tickets')->insert([
            "detalles"=>$req->input('detalles'),
            "comentarios"=>$req->input('comentarios'),
            "empleado_id"=>$req->input('empleado_id'),
            "departamento_id"=>$req->input('departamento_id'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/clientticket')->with('mensaje','Tu recuerdo se ha guardado en la BD');
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
        $tickets = DB::table('tickets')->where('id_ticket', $id_ticket)->first();
        return view ('drawaux', ['tickets' => $tickets]);
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
