<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function getdesayunos() {
        
        return view('catalogo.desayunos');
    }

    public function getflores() {
        
        return view('catalogo.flores');
    }

    public function getpeluches() {
        
        return view('catalogo.peluches');
    }

    public function getanchetas() {
        
        return view('catalogo.anchetas');
    }
}
