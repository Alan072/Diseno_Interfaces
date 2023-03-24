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
            "departamento"=>$req->input('departamento'),
            "puesto"=>$req->input('puesto'),
            "email"=>$req->input('email'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/insertar')->with('mensaje','Tu recuerdo se ha guardado en la BD');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = DB::table('empleado')->where('id',$id)->first();
        return view('jefe_ticket_read', compact('empleado'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $empleadoid = DB::table('empleado')->where('id',$id)->first();
        return view ('jefe_ticket_read', compact('empleadoid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('empleado')->where('id',$id)->delete();
        return redirect('/tb_usuarios')->with('mensaje',"Recuerdo borrado");
    }
}
