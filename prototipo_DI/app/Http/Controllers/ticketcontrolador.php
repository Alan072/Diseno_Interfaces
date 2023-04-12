<?php

namespace App\Http\Controllers;
use DB;
use Dompdf\Dompdf;
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

    public function index_2()
    {
        //
        $ticket = DB::table('tickets')
        ->join('empleado', 'tickets.empleado_id', '=', 'empleado.id_empleado')
        ->join('departamento', 'empleado.departamento_id', '=', 'departamento.id_departamento')
        ->join('estatus', 'tickets.estatus_id', '=', 'estatus.id_estatus')
        ->select('tickets.*','departamento.nombre as departamento','estatus.nombre_estatus as estatus',
         DB::raw("CONCAT(empleado.nombre, ' ', empleado.apellido_paterno, ' ', empleado.apellido_materno) AS nombre_completo"))        
        ->get();        
        return view('reportesdepa',compact('ticket'));
    }

    

    public function generarPDF($id_ticket)
    {
        // Obtiene la información del ticket
        $ticket = DB::table('tickets')
            ->join('empleado', 'tickets.empleado_id', '=', 'empleado.id_empleado')
            ->join('departamento', 'empleado.departamento_id', '=', 'departamento.id_departamento')
            ->join('estatus', 'tickets.estatus_id', '=', 'estatus.id_estatus')
            ->select('tickets.*','departamento.nombre as departamento','estatus.nombre_estatus as estatus',
            DB::raw("CONCAT(empleado.nombre, ' ', empleado.apellido_paterno, ' ', empleado.apellido_materno) AS nombre_completo"))
            ->where('id_ticket', $id_ticket)
            ->first();

        // Genera el HTML para el PDF
        $html = '<h1>Información del ticket</h1>';
        $html .= '<p>ID: ' . $ticket->id_ticket . '</p>';
        $html .= '<p>Nombre del solicitante: ' . $ticket->nombre_completo . '</p>';
        $html .= '<p>Departamento: ' . $ticket->departamento . '</p>';
        $html .= '<p>Fecha de creación: ' . $ticket->created_at . '</p>';
        $html .= '<p>Comentarios: ' . $ticket->comentarios . '</p>';
        $html .= '<p>Detalles: ' . $ticket->detalles . '</p>';
        $html .= '<p>Estatus: ' . $ticket->estatus . '</p>';

        // Crea una instancia de Dompdf
        $dompdf = new Dompdf();
        // Genera el PDF a partir del HTML
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Descarga el PDF en el navegador
        $dompdf->stream('ticket.pdf');
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
    public function show(string $id_ticket)
    {
        //
         //
         $dep = DB::table('tickets')
         ->select('tickets.*')
         ->where('tickets.id_ticket', $id_ticket)
         ->first();
 
     if (!$dep) {
         abort(404);
     }
 
     return view('modalEjem2', compact('dep'));
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
