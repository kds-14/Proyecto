<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/styleconsul.css') }}">
    <title>Tabla de Resultados Area</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
    *{
        font-family: 'Nunito', sans-serif;
        font-size: 18px;
        
    }
    thead th{
        font-family: 'Nunito', sans-serif;
        font-size: 18px;
        color: white;
    }
    tbody th{
        font-family: 'Nunito', sans-serif;
        font-size: 18px;
        color: black;
    }
   
</style>
<br><br><br><br>
@extends('Pags_principales.index2')
<body>
    <table width="55%" align="center"  border="1">
        <thead>
            <tr bgcolor="#CE7777">
				<tr bgcolor="#1E5128">
					<th colspan="6">Tabla de Resultados Area</th>
				</tr>
			</tr>
			<tr bgcolor="#4E9F3D">
				<th>Codigo del Area Tematica</th>
                <th>Nombre del Area Tematica</th>
                <th>Codigo de Red Tematica</th>
        </thead>
        <tbody>
            @foreach ($mostrar as $a)
                <tr bgcolor="#ececec">
                    <th>
                        {{$a->Codigo_area}}
                    </th>
                    <th>
                        {{$a->Nombre_area}}
                    </th>
                    <th>
                        {{$a->Codigo_red}}
                    </th>
                </tr>
            @endforeach
            <button class="icon-btn add-btn">
                    <div class="add-icon"></div>
                    <div class="btn-txt">
                        <form action="Area_a/actualizar">
                            <input type="submit" value="Actualizar"></input>
                        </form>
                    </div>
            </button>
        </tbody>
    </table>
</body>
</html>