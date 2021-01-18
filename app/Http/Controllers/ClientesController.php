<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getclientes() {
        
        return view('clientes.visualizar.cliente');
    }

    public function formularioReg(){
        return view('clientes.form_registro') ;
    }

    public function registrar(){
        return view('clientes.form_registro') ;
    }

    
    public function actualizar(){
        return view('clientes.form_actualiza') ;
    }

    public function eliminar(){
        return view('clientes.eliminar') ;
    }
}
