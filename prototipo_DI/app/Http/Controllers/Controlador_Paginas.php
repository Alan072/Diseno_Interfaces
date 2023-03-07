<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador_Paginas extends Controller
{
    //

    function finicio(){
        return view('jefe_ticket');
    }

    function fread(){
        return view('jefe_ticket_read');
    }

    function feditar(){
        return view('jefe_ticket_editar');
    }

    function fdep(){
        return view('jefe_departamento');
    }

    function fdep_read(){
        return view('jefe_departamento_read');
    }

    function fdep_editar(){
        return view('jefe_departamento_editar');
    }


}
