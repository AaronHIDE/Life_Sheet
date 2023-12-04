document.addEventListener("DOMContentLoaded", function () {
    // Obtén la ruta actual de la página
    var rutaActual = window.location.pathname;

    // Oculta todos los elementos del navbar
    var elementosNavbar = document.querySelectorAll(".navbar-nav li");
    elementosNavbar.forEach(function (elemento) {
        elemento.style.display = "none";
    });

    // Muestra solo los elementos correspondientes a las rutas deseadas
    if (rutaActual.includes("/inicio")) {
        document.getElementById("inicio").style.display = "block";
        document.getElementById("registro").style.display = "block";
    }

    // Muestra solo los elementos correspondientes a la ruta deseada
    if (rutaActual.includes("/principal")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("compartir").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    }

    if (rutaActual.includes("/mail")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    }

    if (rutaActual.includes("/mail")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    }

    if (rutaActual.includes("/formato")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("compartir").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    }

    if (rutaActual.includes("/formatoSena")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("compartir").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    }

    if (rutaActual.includes("/login")) {
        document.getElementById("registro").style.display = "block";
        document.getElementById("home").style.display = "block";
    }

    if (rutaActual.includes("/registro")) {
        document.getElementById("inicio").style.display = "block";
        document.getElementById("home").style.display = "block";
    }

    // if (rutaActual.includes("/")) {
    //     document.getElementById("inicio").style.display = "block";
    //     document.getElementById("registro").style.display = "block";
    // }



    
    // Puedes agregar más condiciones según tus necesidades

    // También puedes usar un switch o estructuras if adicionales dependiendo de tu lógica
});