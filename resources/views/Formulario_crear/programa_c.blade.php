<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style_formu.css') }}">
    <title>Formulario Programa de Formacion</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
        *{
            font-family: 'Nunito', sans-serif;
            font-size: 18px;
        }
        user-box{
            border-radius: 8px;
            
        }
    </style>
</head>
<br><br><br><br>
@extends('Pags_principales.index2')
<body>
    <form action="{{route('guardar_programa')}}" method="post" class="form">
            @csrf
                <h1 class="form_title">Formulario Programa de Formacion</h1><br><br>
                <h5 class="form_paragraph">Digita los datos en los campos correspondientes</h5><br><br>
                
                <div class="form__container">
                    <div class="form__group">
                        <input type="text"  name="Codigo" class="form__input" placeholder="Codigo">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text" name="Nombre_programa" class="form__input" placeholder="Nombre del Programa">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text" name="Version" class="form__input" placeholder="Version">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text"  name="Nivel_formación" class="form__input" placeholder="Nivel de formación">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__la">
                        <label>Estado</label>
                    </div>
                        <select name="Estado">
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    <div class="form__group">
                        <input type="text" name="Duracion_maxima" class="form__input" placeholder="Duracion maxima">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__la">
                        <label>Tipo de Formacion</label>
                    </div>
                        <select name="Tipo_de_Formacion">
                            <option>Cadena de Formacion</option>
                            <option>Cadena Regular</option>
                        </select>
                        <div class="form__group">
                        <input type="text" name="Codigo_area" class="form__input" placeholder="Codigo Area">
                        <span class="form__line"></span>
                    </div>
                    <input type="submit" class="form_submit" value="Enviar">
                </div>
                
        </form>
</body>
</html>