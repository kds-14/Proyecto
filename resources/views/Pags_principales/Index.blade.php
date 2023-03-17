<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal - Horarios</title>
    <link rel="stylesheet" href="{{ asset('/css/style_princ.css') }}">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    

    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                <img src="{{asset('/imgs/logo-chifd.png')}}" alt="Logo - CHIFD">
                </a>
            </div>
            
            <div class="menu">
            <nav>
                <ul>
                    <li><a href="#">   Bienvenido al nuevo sistema de horarios CHIFD    </a></li>
                </ul>
            </nav>
            <a href="{{ url('./login') }}" class="btn__quote">Inicia Sesion Aquí</a>

            <div class="socialmedia">
                <a href="https://www.facebook.com/SENAenSoacha" target="_blank">
                    <img src="{{asset('/imgs/Facebook.png')}}" alt="Facebook-Logo">
                </a>
                <a href="https://www.instagram.com/senacundinamarca/?hl=es" target="_blank">
                    <img src="{{asset('/imgs/Instagram.png')}}" alt="Instragram-Logo ">
                </a>
                <a href="https://twitter.com/SENASoacha" target="_blank">
                    <img src="{{asset('/imgs/Twitter.png')}}" alt="Twitter-Logo">
                </a>
                <a href="https://www.youtube.com/@comunicacide" target="_blank">
                    <img src="{{asset('/imgs/Youtube.png')}}" alt="Youtube-Logo">
                </a>
            </div>
        </div>
        </div>
    </header>

    <main>

        <div class="container__cover div_offset">
            <div class="cover">
                <section class="text__cover">
                    <h1>Gestiona Tus Horarios de manera eficiente y a tiempo. ⏱🔥</h1>
                    <p>Sabemos en realidad lo pesado que puede llegar a hacer la gestion horaria y toda la informacion que se necesita para dar una correcta programacion de horarios. CHIFD quiere darte una mano, quiere ser tu mano derecha en la
                    gestion de todos tus procesos, quiere esucharte para satisfacer todas aquellas necesidades que tienes que llevar a acabo en tu programacion de horarios. 
                    <br> <br> Queremos ser precisos y no desperdiciar ni una gota de tu tiempo. </br>
                    </p>
                    <a href="{{ url('./login') }}" class="btn__text-cover btn__text">Inicia Sesion ahora</a>
                </section>
                <section class="image__cover">
                    <img src="{{asset('/imgs/CHID.png')}}" alt="Imagen-Principal">
                </section>
            </div>
        </div>

        <div class="container__trust container__card-primary">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
            <div class="trust card__primary">
                <div class="text__trust text__card-primary">
                    <p>DESCUBRE QUE PUEDES GESTIONAR</p>
                    <h1>Controla los Horarios que necesites a un solo toque ☝</h1>
                </div>
                <div class="container__trust container__box-cardPrimary">
                    <div class="card__trust box__card-primary">
                        <lord-icon
                        src="https://cdn.lordicon.com/dxoycpzg.json"
                        trigger="morph"
                        colors="primary:#30e849,secondary:#646e78,tertiary:#109121,quaternary:#ebe6ef,quinary:#9cf4a7"
                        style="width:250px;height:250px">
                        </lord-icon>
                        <h2>Controla Las Fichas de Formacion actuales</h2>
                        <p>Da un control completo a aquellas fichas que estan en ejecucion de formacion. 📒</p>
                    </div>
                    <div class="card__trust box__card-primary">
                        <lord-icon
                        src="https://cdn.lordicon.com/ajkxzzfb.json"
                        trigger="hover"
                        colors="primary:#ffc738,secondary:#109121"
                        style="width:250px;height:250px">
                        </lord-icon>
                        
                        <h2>Controla Los Instructores de Formacion actuales</h2>
                        <p>Da un control completo a aquellos Instructores que estan en preparados para dar formacion. 👩‍🏫</p>
                    </div>
                    <div class="card__trust box__card-primary">
                    
                    <lord-icon
                    src="https://cdn.lordicon.com/oaflahpk.json"
                    trigger="hover"
                    colors="primary:#109121"
                    style="width:250px;height:250px">
                    </lord-icon>
                    <h2>Controla Los Ambientes para formacion</h2>
                    <p>Da un control completo a aquellos ambientes de formacion que estan preparados. 🏫</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container__about div__offset" id="sobre">
            <div class="about">
                <div class="text__about">
                    <h1>El equipo creativo más innovador</h1>
                    <p>Somos un gran equipo, y como equipo necesitamos saber de nuestros clientes y escuchar sus necesidades estamos abiertos a muchas opiniones.</p>
                </div>
                <div class="image__about">
                    <img src="{{asset('/imgs/reloj.png')}}" alt="Reloj">
                    <img src="{{asset('/imgs/gente.png')}}" alt="Grupo">
                </div>
            </div>
        </div>
        <div class="container__service container__card-primary div__offset" id="servicios">
            <div class="service card__primary">
                <div class="text__service text__card-primary">
                    <p>¿QUE QUEREMOS HACER?</p>
                    <h1>Servicios para resolver la Gestion Horaria 🕓</h1>
                </div>
                <div class="container__card-service container__box-cardPrimary">
                    <div class="box__card-primary card__service">
                    <lord-icon
                        src="https://cdn.lordicon.com/kipaqhoz.json"
                        trigger="morph"
                        colors="primary:#109121"
                        style="width:110px;height:110px">
                    </lord-icon>
                        <h2>Fichas/Programas de Formacion</h2>
                        <p>Las fichas/programas de formacion siempre estaran actualizadas y preparadas.👨‍🎓👩‍🎓</p>
                    </div>
                    <div class="box__card-primary card__service">
                        <lord-icon
                        src="https://cdn.lordicon.com/bhfjfgqz.json"
                        trigger="hover"
                        colors="primary:#0a5c15"
                        style="width:110px;height:110px">
                        </lord-icon>
                        <h2>Instructores</h2>
                        <p>La informacion general de un Instructor siempre estara disponible cuando lo necesites. 👩‍🏫</p>
                       
                    </div>
                    <div class="box__card-primary card__service">
                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/vufjamqa.json"
                            trigger="hover"
                            colors="primary:#109121"
                            style="width:110px;height:110px">
                        </lord-icon>
                        <h2>¿Competencias?</h2>
                        <p>Claro que las competencias estaran disponibles para ser programadas 📚</p>
                        
                    </div>
                    <div class="box__card-primary card__service">
                    <lord-icon
                        src="https://cdn.lordicon.com/hhuxpesi.json"
                        trigger="hover"
                        colors="primary:#109121,secondary:#109121"
                        style="width:110px;height:110px">
                    </lord-icon>
                        <h2>Ambientes de Formacion</h2>
                        <p>La informacion general de un Ambiente de Formacion siempre estara disponible cuando lo necesites. 🏫</p>
                       
                    </div>
                    <div class="box__card-primary card__service">
                        <lord-icon
                            src="https://cdn.lordicon.com/qjuahhae.json"
                            trigger="hover"
                            colors="primary:#109121"
                            style="width:110px;height:110px">
                        </lord-icon>
                        <h2>Calendario</h2>
                        <p>Un Calendario dispuesto a brindarte las herramientas necesarias.🗓📅</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container__footer">
            <div class="row__information-footer">
                <div class="box__footer">
                    <a href="#">
                        <img src="../imgs/logo-chifd.png" alt="">
                    </a>
                    <p>Siempre queremos mejorar, y que mejor manera que aprender errando.</p>
                </div>
                
                <div class="box__footer">
                    <h2>Contáctenos - SENA - Centro Industrial y de Desarrollo Empresarial Soacha - Regional Cundinamarca</h2>
                    <div class="box__contact-footer">
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="tel:+18290000000">Teléfono: (601) 5978250 Ext: 18002</a>
                    </div>
                    <div class="box__contact-footer">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:ejemplo@gmail.com">Conmutador Nacional (601) 5461500 - Extensiones</a>
                    </div>
                    <div class="box__contact-footer">
                        <i class="fa-solid fa-location-arrow"></i>
                        <a href="https://goo.gl/maps/LVK9XuxUy6vmvh2VA" target="_blank">Dirección: Calle 13 No. 10-63 Soacha Centro</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script type="text/javascript" src="{!! asset('/js/home1.js') !!}" async></script>
</body>
</html>