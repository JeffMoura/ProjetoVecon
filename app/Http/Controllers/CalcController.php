<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{

    public function inicio(){
        return view('paginas.home');
    }
    public function sobre(){
        return view('paginas.sobre');
    }
    public function instrucao(){
        return view('paginas.instrucao');
    }
}
