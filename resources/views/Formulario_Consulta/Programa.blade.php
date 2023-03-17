<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/styleconsul.css') }}">
    <title>Tabla de Resultados Sedes</title>
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
					<th colspan="8">Tabla de Resultados Programa de Formacion</th>
				</tr>
			</tr>
			<tr bgcolor="#4E9F3D">
				<th>Codigo Programa</th>
                <th>Nombre del programa</th>
                <th>Version</th>
                <th>Nivel de formacion</th>
                <th>Duracion maxima</th>
                <th>Tipo De Formacion</th>
                <th>Estado</th>
                <th>Codigo Area</th>

			</tr>
        </thead>
        <tbody>
            @foreach ($mostrar as $a)
                <tr bgcolor="#ececec">
                    <th>
                        {{$a->programas_Codigo}}
                    </th>
                    <th>
                        {{$a->Nombre_programa}}
                    </th>
                    <th>
                        {{$a->Version}}
                    </th>
                    <th>
                        {{$a->Nivel_formación}}
                    </th>
                    <th>
                        {{$a->Duracion_maxima}}
                    </th>
                    <th>
                        {{$a->Tipo_de_Formacion}}
                    </th>
                    <th>
                        @if($a->Estado)
                        <span style="color: green">Activo </span>
                        @else
                        <span style="color: red">Inactivo </span>
                        @endif
                    </th>
                    <th>
                        {{$a->Codigo_area}}
                    </th>
                </tr>
            @endforeach
            <button class="icon-btn add-btn">
                    <div class="add-icon"></div>
                    <div class="btn-txt">
                        <form action="Programa_a/actualizar">
                            <input type="submit" value="Actualizar"></input>
                        </form>
                    </div>
            </button>
        </tbody>
    </table>
</body>
</html>