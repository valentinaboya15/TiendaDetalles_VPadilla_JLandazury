@extends('main')
@section('contenido')
    <h1> Registro de Clientes </h1>
  
    <div class="p-3 mb-2 bg-dark text-white">  <form action="{{url('clientes/registrar')}}" method="POST">
        @csrf

        <label for="login">Login </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" id='login' name='login'  placeholder="Login" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
   
            </div>
            <input type="hidden" class="form-control" id='id' name='id' value='oculto' placeholder="Login" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <label for="password">Contraseña </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="password" class="form-control" id='password' name='contraseña'  placeholder="password"  aria-describedby="basic-addon1">
        </div>

        <label for="nombre">Nombre </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" id='nombre' name='nombre' placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <label for="apellido">Apellido </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" id='apellido' name='apellido'  placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <label for="cedula">Cedula </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" id='cedula' name='cedula'  placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

       
        <label for="celular">Domicilio </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" id='domicilio' name='domicilio'  placeholder="domicilio" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <label for="celular">Celular </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" id='celular' name='celular'  placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

       
        <label for="correo">Correo Electronico </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="email" class="form-control" id='correo' name='correo'  placeholder="Correo"  aria-describedby="basic-addon1">
        </div>

        <label class="form-check-label">
                Genero
        </label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="fem" value="f" checked>
            <label class="form-check-label" for="fem">
               Femenino
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="mas" value="m">
            <label class="form-check-label" for="mas">
                Masculino
            </label>
        </div>

        <div class="form-group">
            <label for="foto">Suba su foto </label>
            <input type="file" class="form-control-file" id="foto" name="foto">
        </div>

        <br>
        <button type="submit" class="btn btn-primary" > Registrar </button> 

        <button type="reset" class="btn btn-danger">Borrar</button>
        
        <button type="button" class="btn btn-light">Volver</button>
           
    </form></div>
@stop