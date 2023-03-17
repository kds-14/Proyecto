<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style_formu.css') }}">
    <title>Actualización de Ambientes</title>
</head>
<br><br><br><br><br><br><br><br>
@extends('Pags_principales.index2')
<body>
    <form action="{{route('actua_ambiente')}}" method="POST" class="form">
        @csrf
            <h1 class="form_title">Actualización de Ambientes</h1><br><br>
            
            <div class="form__container">
                <div class="form__group">
                    <input type="text"  name="Nro_ambi" class="form__input" placeholder="Numero de Ambiente">
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" name="Elementos_del_Ambiente" class="form__input" placeholder="Elementos del Ambiente">
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" name="Especializacion" class="form__input" placeholder="Especializacion">
                    <span class="form__line"></span>
                </div>
                <div class="form__la">
                    <label>Codigo Sede</label>
                </div>
                <select name="Codigo_sede">
                    <option>201</option>
                    <option>202</option>
                </select>
					<input type="submit" class="form_submit" value="Enviar">
            </div>   
    </form>
</body>

</html>
 
