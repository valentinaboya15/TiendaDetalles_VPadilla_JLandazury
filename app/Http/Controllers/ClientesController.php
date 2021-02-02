<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{


    public function getclientes() {
        
        $Usuario= DB::table('usuarios')
        ->get();
        return view('clientes.visualizar.cliente',['usuarios'=>$Usuario]);
    }

    public function formularioReg(){
        return view('clientes.form_registro') ;
    }

    


    public function registrarCli(Request $request) {
        $Usuario = new Cliente();
        $Usuario->login = $request->input('login');
        $Usuario->Contraseña = $request->input('Password');
        $Usuario->Nombre = $request->input('nombre');
        $Usuario->Apellido= $request->input('apellido');
        $Usuario->Cedula = $request->input('cedula');
        $Usuario->Domicilio = $request->input('domicilio');
        $Usuario->Celular = $request->input('celular');
        $Usuario->email = $request->input('email');
        $Usuario->Genero = $request->input('genero');
        $Usuario->Foto = $request->input('foto');
        $Usuario->save();
        return redirect()->route('listado_clientes');
    }

    
    public function actualizar(){
        return view('clientes.form_actualiza') ;
    }

    public function eliminar(){
        return view('clientes.eliminar') ;
    }
}
