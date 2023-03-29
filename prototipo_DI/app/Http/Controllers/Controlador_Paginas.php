<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador_Paginas extends Controller
{
    //

    function flog(){
        return view('login');
    }

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

    function frepoticket(){
        return view('reporte_ticket');
    }

    function fvistaticket(){
        return view('vista_ticket');
    }

    function fdepartamento(){
        return view('departamentos');
    }
    
    function fvistadepa(){
        return view('vistadepa');
    }

    function freportedepa(){
        return view('reportesdepa');
    }


    function ftbdepa(){
        return view('tb_departamento');
    }

    function ftbreport(){
        return view('tb_reportes');
    }

    function fprofile(){
        return view('perfil');
    }

    //Vistas auxiliar
    function fauxt(){
        return view('ticket_auxiliar');
    }

    function fauxbus(){
        return view('busqueda_auxiliar');
    }

    //Vistas cliente
    function fclientticket(){
        return view('clientticket');
    }

    //Vistas cliente
    function ftabcliente(){
        return view('tabcliente');
    }
}
