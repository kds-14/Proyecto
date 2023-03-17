<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/estilito.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
    <script src="{{asset('/js/calen.js')}}" defer></script>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/css/estilito.css')}}"> 
    <title>Horarios</title>
</head>
<body>
    <div class="siderbar">
        <div class="logo-details">
        <i class='bx bxs-calendar-star'></i>       
        <span class="logo_name">Horarios</span>
        </div>
    
        <ul class="nav-links">
    <li>
        <a href="{{ url('slider_h') }}">
        <i class='bx bxs-home-alt-2'></i>
            <span class="link_name">Inicio</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link-name" href="{{ url('slider_h') }}">Inicio</a></li>
        </ul>
    </li>
    <li>
        <div class="icon-link">
        <a href="#">
            <i class='bx bxs-collection' ></i>
            <span class="link_name">Tablas Consultas</span>
        </a>
        <i class='bx bx-chevron-down arrow' ></i>
        </div>
        
        <ul class="sub-menu">
            <li><a href="{{ url('Red') }}">Red</a></li>
            <li><a href="{{ url('Area') }}">Area</a></li>
            <li><a href="{{ url('Programa') }}">Programa</a></li>
            <li><a href="{{ url('Ficha') }}">Ficha</a></li>
            <li><a href="{{ url('Competencia') }}">Competencia</a></li>
            <li><a href="{{ url('Sede') }}">Sede</a></li>
            <li><a href="{{ url('Ambiente') }}">Ambiente</a></li>
            <li><a href="{{ url('Instructor') }}">Instructor</a></li>
            <li><a href="{{ url('Resultado') }}">Resultado</a></li>
            <li><a href="{{ url('Semaforo') }}">Semaforo</a></li>
        </ul>
    </li>
    <li>
    <div class="icon-link">
        <a href="#">
        <i class='bx bx-food-menu' ></i>
            <span class="link_name">Formularios</span>
        </a>
        <i class='bx bx-chevron-down arrow' ></i>
    </div>
        <ul class="sub-menu">
            <li><a href="{{route('crear_red')}}">Formulario Red</a></li>
            <li><a href="{{route('crear_area')}}">Formulario Area</a></li>
            <li><a href="{{route('crear_programa')}}">Formulario Programa</a></li>
            <li><a href="{{route('crear_ficha')}}">Formulario Ficha</a></li>
            <li><a href="{{route('crear_competencia')}}">Formulario Competencia</a></li>
            <li><a href="{{route('crear_sede')}}">Formulario Sedes</a></li>
            <li><a href="{{route('crear_ambiente')}}">Formulario Ambiente</a></li>
            <li><a href="{{route('crear_instructor')}}">Formulario Instructor</a></li>
            <li><a href="{{route('crear_resultado')}}">Formulario Resultado</a></li>
            <li><a href="{{route('crear_semaforo')}}">Formulario Semaforo</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ url('calendario') }}">
        <i class='bx bxs-calendar-alt' ></i> 
            <span class="link_name">Gestion de Calendario</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link-name" href="{{ url('calendario') }}">Gestion de Calendario</a></li>
        </ul>
    </li>
   
    <li>
    <div class="profile-details">
        <div class="profile-content">
            <img src="{{asset('/imgs/image.png')}}" alt="Imagen logo CHIFD">
        </div>
        
        <div class="name-job">
            <div class="profile_name">Grupo CHIFD</div>
            <div class="job">Version 1.0.</div>
        </div>
    </div>
    <i class='bx bx-log-out'></i>
    </div>
    </li>
    </ul>
    </div>
    <section class="home-section">
       <div class="home-content">
       <i class='bx bx-menu'></i>
       <span class="text">Gestion Horaria</span>
       </div> 
    </section>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e)=>{
              console.log(e);
                let arrrowParent = e.target.parentElement.parentElement;
                console.log(arrrowParent);
                arrrowParent.classList.toggle("showMenu");
            });
        }
        let siderbar = document.querySelector(".siderbar");
        let siderbarbtn = document.querySelector(".bx-menu");
        console.log("siderbar");
        siderbarbtn.addEventListener("click", ()=>{
            siderbar.classList.toggle("close"); 
        })

    </script>
</body>
</html>