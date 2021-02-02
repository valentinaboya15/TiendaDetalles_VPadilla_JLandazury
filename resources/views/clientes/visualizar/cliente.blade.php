@extends('main')
@section('contenido')
<h1>LISTADO DE Usuarios</h1>

<div class="container">
    <div class ="row">
    @foreach($usuarios as $c)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/$c->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"> {{ $c->login }} </h5>
                  <h5 class="card-title"> {{ $c->nombre }} </h5>
                  <h5 class="card-title"> {{ $c->apellido }} </h5>
                 
                    <p class="card-text">Cedula :  {{ $c->cedula }} </p>
                    <p class="card-text"> Genero :  {{ $c->genero }} </p>
                    <p class="card-text"> Domicilio :  {{ $c->domicilio }} </p>
                    <p class="card-text"> Celular:  {{ $c->celular }} </p>
                    <p class="card-text"> Email:  {{ $c->email }} </p>
                    
                    
                
                    <a href="#" class="btn btn-success"> Ver Detalles </a>
                </div>
            </div>
        </div>
    @endforeach

    @endsection