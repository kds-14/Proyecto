<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/styleconsul.css') }}">
    <title>Tabla de Resultados Instructores</title>
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
					<th colspan="6">Tabla de Resultados Instructores</th>
				</tr>
			</tr>
			<tr bgcolor="#4E9F3D">
				<th>Tipo de Documento</th>
                <th>Numero de Documento</th>
                <th>Nombres Completos</th>
                <th>Apellidos Completos</th>
                <th>Correo Electronico</th>
                <th>Estado</th>
			</tr>
        </thead>
        <tbody>
            @foreach ($mostrar as $a)
                <tr bgcolor="#ececec">
                    <th>
                        {{$a->Tipo_Documento}}
                    </th>
                    <th>
                        {{$a->Nro_Doc}}
                    </th>
                    <th>
                        {{$a->Nombres}}
                    </th>
                    <th>
                        {{$a->Apellidos}}
                    </th>
                    <th>
                        {{$a->Correo_Electronico}}
                    </th>
                    <th>
                        @if($a->Estado)
                        <span style="color: green">Activo </span>
                        @else
                        <span style="color: red">Inactivo </span>
                        @endif
                    </th>
                </tr>
            @endforeach
            <button class="icon-btn add-btn">
                    <div class="add-icon"></div>
                    <div class="btn-txt">
                        <form action="Instructor_a/actualizar">
                            <input type="submit" value="Actualizar"></input>
                        </form>
                    </div>
            </button>
        </tbody>
    </table>
</body>
</html>