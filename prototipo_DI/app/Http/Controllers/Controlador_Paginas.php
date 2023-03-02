<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador_Paginas extends Controller
{
    //

    function finicio(){
        return view('jefe_ticket');
    }
}
