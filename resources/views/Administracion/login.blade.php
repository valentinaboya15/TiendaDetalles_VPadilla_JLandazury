@extends('main')
@section('contenido')


<div class="mx-auto" style="width: 400px; height: 400px; background-color: rgba(0,0,255,.1)">

<div class="mx-auto" style="width: 200px; height: 50px;">
<main>
        <section class="content">
            <form class="form-login" action="login.blade.php" method="post">
                    <h2 class="form-title">Iniciar sesión</h2>
                    <div class="form-error">
                        <?php
                            if(isset($find))
                                if($find == false){
                                    echo 'Usuario o clave incorrecto <br> Intente nuevamente';
                            }
                        ?>
                    </div>
                    <label class="form-label" >Usuario: </label>
                    <input class="form-text" type="text" name="user">
                    <label class="form-label" >Clave: </label>
                    <input class="form-text" type="password" name="password">
                    <button type="button" class="btn btn-primary">Iniciar</button>
                    <button type="button" class="btn btn-light">Volver</button>
                   
                    <a class="form-link" href="http://localhost/Tienda_Detalles/public/clientes/form_registro">Registrate</a>
            </form>
        </section>
    </main>
</div>

    

</div>
@endsection

