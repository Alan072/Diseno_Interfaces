<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class controlador_departamento extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dep = DB::table('departamento')->get();
        return view('tb_departamento',compact('dep'));
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
        DB::table('departamento')->insert([
            "nombre"=>$req->input('nombre'),
            "numero_maquinas"=>$req->input('numero_maquinas'),
            "maquinas_disponibles"=>$req->input('maquinas_disponibles'),
            "numero_empleados"=>$req->input('numero_empleados'),
            "extra"=>$req->input('extra'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/jefe_departamento')->with('mensaje','Tu recuerdo se ha guardado en la BD');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_departamento)
    {
        //
        $dep = DB::table('departamento')
        ->select('departamento.*')
        ->where('departamento.id_departamento', $id_departamento)
        ->first();

    if (!$dep) {
        abort(404);
    }

    return view('jefe_departamento_read', compact('dep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_departamento)
    {
        //
        $dep = DB::table('departamento')->where('id_departamento', $id_departamento)->first();
        return view ('jefe_departamento_editar', ['dep' => $dep]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id_departamento)
    {
        //
        DB::table('departamento')->where('id_departamento', $id_departamento)->update([
            "nombre"=>$req->input('nombre'),
            "numero_maquinas"=>$req->input('numero_maquinas'),
            "maquinas_disponibles"=>$req->input('maquinas_disponibles'),
            "numero_empleados"=>$req->input('numero_empleados'),
            "extra"=>$req->input('extra'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/tb_departamento')->with('mensaje','Tu recuerdo se ha actualizado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_departamento)
    {
        //
        DB::table('departamento')->where('id_departamento',$id_departamento)->delete();
        return redirect('/tb_departamento')->with('mensaje',"Recuerdo borrado");
    }
}
