<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style_formu.css') }}">
    <title>Formulario Instructor</title>
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
    <form action="{{route('guardar_instructor')}}" method="post" class="form">
            @csrf
                <h1 class="form_title">Formulario Instructor</h1><br><br>
                <h5 class="form_paragraph">Digita los datos en los campos correspondientes</h5><br><br>
                
                <div class="form__container">
                <select name="Tipo_Documento">
                    <option>Cedula de Ciudadania</option>
                    <option>Tarjeta de Identidad</option>
                    <option>Cedula de Extranjeria</option>
                    <option>PEP</option>
                    <option>Permiso por Proteccion Temporal</option>
                </select>
                    <div class="form__group">
                        <input type="text"  name="Nro_Doc" class="form__input" placeholder="Numero de Documento">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text" name="Nombres" class="form__input" placeholder="Nombres Completos">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text" name="Apellidos" class="form__input" placeholder="Apellidos Completos">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text" name="Correo_Electronico" class="form__input" placeholder="Correo Electronico">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text" name="Estado" class="form__input" placeholder="Estado">
                        <span class="form__line"></span>
                    </div>
                    <input type="submit" class="form_submit" value="Enviar">
                </div>
                
        </form>
    
</body>
</html>