document.addEventListener("DOMContentLoaded", function () {
    // Obtén la ruta actual de la página
    var rutaActual = window.location.pathname;

    // Oculta todos los elementos del navbar
    var elementosNavbar = document.querySelectorAll(".navbar-nav li");
    elementosNavbar.forEach(function (elemento) {
        elemento.style.display = "none";
    });


     // Muestra solo los elementos correspondientes a la ruta deseada
    if (rutaActual.includes("/principal")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("compartir").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    }

    // Muestra solo los elementos correspondientes a la ruta deseada
    if (rutaActual === "/Life_Sheet/") {
        document.getElementById("inicio").style.display = "block";
        document.getElementById("registro").style.display = "block";
    } else if (rutaActual.includes("/inicio")) {
        document.getElementById("inicio").style.display = "block";
        document.getElementById("registro").style.display = "block";
    } else if (rutaActual.includes("/principal")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("compartir").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    } else if (rutaActual.includes("/mail")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    } else if (rutaActual.includes("/login")) {
        document.getElementById("home").style.display = "block";
        document.getElementById("registro").style.display = "block";     
    } else if (rutaActual.includes("/registro")) {
        document.getElementById("home").style.display = "block";
        document.getElementById("inicio").style.display = "block";
    } else if (rutaActual.includes("/formato")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("compartir").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    } else if (rutaActual.includes("/formatoSena")) {
        document.getElementById("crear").style.display = "block";
        document.getElementById("compartir").style.display = "block";
        document.getElementById("cerrarSesion").style.display = "block";
    }



});