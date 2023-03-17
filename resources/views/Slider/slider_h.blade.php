<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style_slider.css') }}">
    <title>Slider</title>
</head>
@extends('Pags_principales.index2')
<body>
    <div class="main">
        <div class="slider">
            <img src="imgs/slider1.jpg" alt="image">
            <div class="btn">
                <button onclick="back()"><i class='bx bx-chevron-left' ></i></button>
                <button onclick="next()"><i class='bx bx-chevron-right' ></i></button>
            </div>
        </div>
    </div>

    <!--JAVASCRIPT-->
    <script>
       var mainimg=document.querySelector("img");
       var images=["imgs/slider1.jpg","imgs/slider2.jpg","imgs/slider3.jpg","imgs/slider4.jpg"];
        var num=0;

        function next(){
            num++;
            if (num>=images.length) {
                num=0;
                mainimg.src=images[num]
            }else{
                mainimg.src=images[num]
            }
        };

        function back(){
            num--;
            if (num<0) {
                num=images.length-1;
                mainimg.src=images[num]
            }else{
                mainimg.src=images[num]
            }
        };
    </script>
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
</body>
</html>
