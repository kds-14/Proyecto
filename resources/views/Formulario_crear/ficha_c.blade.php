<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style_formu.css') }}">
    <title>Formulario Ficha</title>
</head>
<br><br><br><br>
@extends('Pags_principales.index2')
<body>
    <form action="{{route('guardar_ficha')}}" method="POST" class="form">
        @csrf
            <h1 class="form_title">Formulario Ficha</h1><br><br>
            <h5 class="form_paragraph">Digita los datos en los campos correspondientes</h5><br><br>
            
            <div class="form__container">
                <div class="form__group">
                    <input type="text"  name="Nro_ficha" class="form__input" placeholder="Numero Ficha">
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" name="Jornada" class="form__input" placeholder="Jornada">
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" name="Nro_aprendices" class="form__input" placeholder="Numero Aprendices">
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" name="programas_Codigo" class="form__input" placeholder="Codigo Programa">
                    <span class="form__line"></span>
                </div>
                <input type="submit" class="form_submit" value="Enviar">
            </div>
            
    </form>
</body>

</html>