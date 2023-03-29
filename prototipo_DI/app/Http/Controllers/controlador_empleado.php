<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class controlador_empleado extends Controller
{
    function ftbu(){
        return view('tb_usuarios');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleado = DB::table('empleado')->get();
        return view('tb_usuarios',compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
           
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //
        //
        DB::table('empleado')->insert([
            "nombre"=>$req->input('nombre'),
            "apellido_paterno"=>$req->input('apellido_paterno'),
            "apellido_materno"=>$req->input('apellido_materno'),
            "departamento_id"=>$req->input('departamento'),
            "puesto_id"=>$req->input('puesto'),
            "email"=>$req->input('email'),
            "password"=>$req->input('password'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/')->with('mensaje','Tu recuerdo se ha guardado en la BD');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_empleado)
    {
        $empleado = DB::table('empleado')
        ->join('departamento', 'empleado.departamento_id', '=', 'departamento.id_departamento')
        ->join('puesto', 'empleado.puesto_id', '=', 'puesto.id_puesto')
        ->select('empleado.*', 'departamento.nombre as departamento_nombre', 
        'puesto.nombre as puesto_nombre')
        ->where('empleado.id_empleado', $id_empleado)
        ->first();

    if (!$empleado) {
        abort(404);
    }
    return view('jefe_ticket_read', compact('empleado'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_empleado)
    {
        $empleado = DB::table('empleado')->where('id_empleado', $id_empleado)->first();
        return view ('jefe_ticket_editar', ['empleado' => $empleado]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id_empleado)
    {
        //

        DB::table('empleado')->where('id_empleado', $id_empleado)->update([
        "nombre"=>$req->input('nombre'),
        "apellido_paterno"=>$req->input('apellido_paterno'),
        "apellido_materno"=>$req->input('apellido_materno'),
        "departamento_id"=>$req->input('departamento'),
        "puesto_id"=>$req->input('puesto'),
        "email"=>$req->input('email'),
        "password"=>$req->input('password'),
        "updated_at"=>Carbon::now(),
    ]);
    return redirect('/tb_usuarios')->with('mensaje','Tu recuerdo se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_empleado)
    {
        //
        DB::table('empleado')->where('id_empleado',$id_empleado)->delete();
        return redirect('/tb_usuarios')->with('mensaje',"Recuerdo borrado");
    }
}
