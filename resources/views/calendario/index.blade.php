<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.cale.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <title>Calendario</title>
</head>
@extends('Pags_principales.index2')
<body>
    
    <div class="container">
        <div class="left">
            <div class="calendar">
                <div class="month">
                    <i class='bx bxs-left-arrow-square prev' ></i>
                    <div class="date"></div>
                    <i class='bx bxs-right-arrow-square next' ></i>
                </div>
                <div class="weekdays">
                    <div>Lun</div>
                    <div>Mar</div>
                    <div>Mie</div>
                    <div>Jue</div>
                    <div>Vie</div>
                    <div>Sab</div>
                    <div>Dom</div>
                </div>
                <div class="days">
                   
                </div>
                <div class="goto-today">
                    <div class="goto">
                        <input type="text" placeholder="mm/yyyy" class="date-input">
                        <button class="goto-btn">Ir</button>
                    </div>
                    <button class="today-btn">Hoy</button>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="today-date">
                <div class="event-day">Mie</div>
                <div class="event-date">16 de Marzo de 2023</div>
            </div>
            <div class="events">
            </div>
            <div class="add-event-wrapper">
                <div class="add-event-header">
                    <div class="title">Asigna un Horario</div>
                    <i class='bx bx-x close'></i>
                </div>
                <div class="add-event-body">
                    <div class="add-event-input">
                        <input type="text" placeholder="Nombre del Horario" class="event-name">
                    </div>
                    <div class="add-event-input">
                        <input type="text" placeholder="Tiempo Inicial" class="event-time-from">
                    </div>
                    <div class="add-event-input">
                        <input type="text" placeholder="Tiempo Final" class="event-time-to">
                    </div>
                </div>
                <div class="add-event-footer">
                    <button class="add-event-btn">Agregar Horario</button>
                </div>
            </div>
        </div>
        <button class="add-event">
            <i class='bx bxs-message-square-add bx-rotate-270' ></i>
        </button>
    </div>
    <script  src="{{asset('/js/calendario.js')}}" defer></script>
</body>
</html>