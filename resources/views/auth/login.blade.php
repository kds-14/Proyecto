<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="{{asset('/css/style_login.css')}}">
    <script>
            function enviar() {
                alert('enviando datos....');
            }
        </script>
</head>

<body>

<main>

    <div class="contenedor__todo">

<div class="caja__trasera">
    <div class="caja__trasera-login">
        <h3><center>Programa tus horarios</center></h3>
        <p><center>"Por medio de la programación se diseña, codifica, limpia y protege <br> el código fuente los programas de los ordenadores." <br><br>- Cruz<br></center><br></p>
        <button id="btn__iniciar-sesion">Iniciar Sesion</button>
    </div>
    <div class="caja__trasera-register">
        <h3><center>Aquí podrás programar tus nuevos horarios<br><br></center></h3>
        <p><center>Da click aquí para mayor información</center></p>
        <button id="btn__registrarse">Más Info</button>
    </div>
</div>
<!--Formulario de Login y Registro-->
    <div class="contenedor__login-register">
<!--Login-->
        <form action="{{route('login.verificador')}}" class="formulario__login" method="post">
            @csrf
         <h2>Iniciar Sesion</h2>
       
         @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    
        <select name="tipo_documento">
            <option>Cedula de Ciudadania</option>
            <option>Tarjeta de Identidad</option>
            <option>Cedula de Extranjeria</option>
            <option>PEP</option>
            <option>Permiso por Proteccion Temporal</option>
        </select>
         <input type="text" name="Nro_Doc" placeholder="Numero de Documento">
         <input type="password" name="password" placeholder="Contraseña">
         <button>Entrar</button>

        </form>

<!--Fondo img-->
        <form action="" class="formulario__register">
        <img src="{{asset('/imgs/IMG I.S.jpg')}}" alt="">
        </form>
    </div>
    </div>
</div>
</main>

<script src="{{asset('/js/login.js')}}"></script>

</body>
</html>
