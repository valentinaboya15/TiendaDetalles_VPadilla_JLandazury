<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function getnosotros() {
        
        return view('presentacion.nosotros');
    }

    public function getmision() {
        
        return view('presentacion.mision');
    }

    public function getubicacion() {
        
        return view('presentacion.ubicacion');
    }

    public function getcontactos() {
        
        return view('contactos');
    }

    public function getPQR() {
        
        return view('PQR');
    }

   
}
