<?php
session_start();

include_once "vista/modulos/cabecera.php";
include_once "vista/modulos/nav.php";

// Comprobar si $_GET["ruta"] está definido
if (isset($_GET["ruta"])) {
    if (isset($_SESSION["ruta"])) {

    // include_once "vista/modulos/principal.php";

        if ($_GET["ruta"] == "registro"
            || $_GET["ruta"] == "login"
            || $_GET["ruta"] == "contacto"
            || $_GET["ruta"] == "mail"
            || $_GET["ruta"] == "admin"
            || $_GET["ruta"] == "formato"
            || $_GET["ruta"] == "formatoSena"
            || $_GET["ruta"] == "configuracion"
            || $_GET["ruta"] == "formatoSena"
            || $_GET["ruta"] == "principal"
            || $_GET["ruta"] == "inicio"
            || $_GET["ruta"] == "cerrarSesion") {

            include_once "vista/modulos/".$_GET["ruta"].".php";
        }
    } else {
        if ($_GET["ruta"] == "login" 
            || $_GET["ruta"] == "registro" 
            || $_GET["ruta"] == "contacto" 
            || $_GET["ruta"] == "mail" 
            || $_GET["ruta"] == "admin"

            // borrar despues del inicio de sesion
            || $_GET["ruta"] == "formatoSena"
            || $_GET["ruta"] == "principal"
            || $_GET["ruta"] == "configuracion"
            || $_GET["ruta"] == "formato"
            || $_GET["ruta"] == "mail") {

            include_once "vista/modulos/".$_GET["ruta"].".php";
        } else {
            include_once "vista/modulos/inicio.php";
        }
    }
} else {
    // Si $_GET["ruta"] no está definido, se puede manejar de manera predeterminada aquí
    // Por ejemplo, puedes incluir la página principal o una página de inicio aquí.
    include_once "vista/modulos/error.php";
}

include_once "vista/modulos/pie.php";
