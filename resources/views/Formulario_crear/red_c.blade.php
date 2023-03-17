<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Red</title>
    <link rel="stylesheet" href="{{ asset('/css/style_formu.css') }}">
</head>
<br><br><br><br>
@extends('Pags_principales.index2')
<body>
    <form action="{{route('guardar_red')}}" method="POST" class="form">
        @csrf
            <h1 class="form_title">Formulario Red</h1><br><br>
            <h5 class="form_paragraph">Digita los datos en los campos correspondientes</h5><br><br>
            
            <div class="form__container">
                <div class="form__group">
                    <input type="text"  name="Codigo_red" class="form__input" placeholder="Codigo Red">
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" name="Nombre_red" class="form__input" placeholder="Nombre Red">
                    <span class="form__line"></span>
                </div>
                <input type="submit" class="form_submit" value="Enviar">
            </div>
            
    </form>
</body>

</html>