<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/styleconsul.css') }}">
    <title>Tabla de Resultados Ambientes</title>
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
					<th colspan="6">Tabla de Resultados Ambientes</th>
				</tr>
			</tr>
			<tr bgcolor="#4E9F3D">
                
				<th>Numero de Ambiente</th>
                <th>Elementos del Ambiente</th>
                <th>Especializacion</th>
                <th>Nombre Sede</th>
			</tr>
        </thead>
        <tbody>
            @foreach ($mostrar as $a)
                <tr bgcolor="#ececec">
                    <th>
                        {{$a->Nro_ambi}}
                    </th>
                    <th>
                        {{$a->Elementos_del_Ambiente}}
                    </th>
                    <th>
                        {{$a->Especializacion}}
                    </th>
                    <th>
                        {{$a->Codigo_sede}}
                    </th>
                </tr>
                @endforeach
                <button class="icon-btn add-btn">
                    <div class="add-icon"></div>
                    <div class="btn-txt">
                        <!--<a href="#">Actualizar</a>-->
                        <form action="Ambiente_a/actualizar ">
                            <input type="submit" value="Actualizar"></input>
                        </form>
                    </div>
                </button>
        </tbody>
    </table>
</body>
</html>