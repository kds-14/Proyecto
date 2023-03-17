<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style_formu.css') }}">
    <title>Formulario Area</title>
</head>
<br><br><br><br>
@extends('Pags_principales.index2')
<body>
    <form action="{{route('guardar_area')}}" method="POST" class="form">
        @csrf
            <h1 class="form_title">Formulario Area</h1><br><br>
            <h5 class="form_paragraph">Digita los datos en los campos correspondientes</h5><br><br>
            
            <div class="form__container">
                <div class="form__group">
                    <input type="text"  name="Codigo_area" class="form__input" placeholder="Codigo Area">
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" name="Nombre_area" class="form__input" placeholder="Nombre del Area">
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" name="Codigo_red" class="form__input" placeholder="Codigo Red">
                    <span class="form__line"></span>
                </div>
                <input type="submit" class="form_submit" value="Enviar">
            </div>
            
    </form>
</body>

</html>