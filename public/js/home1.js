 /*Cambiar color del menu al hacer Scroll*/

 window.onscroll = function(){

    scroll = document.documentElement.scrollTop;

    header = document.querySelector("header");

    if (scroll > 100){
        header.classList.add('header__active');
    }else if (scroll < 100){
        header.classList.remove('header__active');
    }

}