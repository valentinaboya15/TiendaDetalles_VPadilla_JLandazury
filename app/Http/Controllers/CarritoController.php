<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    
    public function getcarro() {
        
        return view('carrito.carro');
    }
}
