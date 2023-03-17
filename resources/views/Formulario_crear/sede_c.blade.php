<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style_formu.css') }}">
    <title>Formulario Sede</title>
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
<form action="{{route('guardar_sede')}}" method="post" class="form">
            @csrf
                <h1 class="form_title">Formulario Sedes</h1><br><br>
                <h5 class="form_paragraph">Digita los datos en los campos correspondientes</h5><br><br>
                
                <div class="form__container">
                    <div class="form__group">
                        <input type="text"  name="Direccion" class="form__input" placeholder="Direccion">
                        
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text" name="Nombre_Sede" class="form__input" placeholder="Nombre Sede">
                        <span class="form__line"></span>
                    </div>
                    <div class="form__group">
                        <input type="text" name="Telefono" class="form__input" placeholder="Telefono">
                        <span class="form__line"></span>
                    </div>
                    <input type="submit" class="form_submit" value="Enviar">
                </div>
                
        </form>
</body>
</html>