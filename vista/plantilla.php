<?php


session_start();

include_once "vista/modulos/cabecera.php";
include_once "vista/modulos/nav.php";

if (isset($_SESSION["ruta"])) {

    include_once "vista/modulos/nav.php";

    if($_GET["ruta"] == "registro"
    || $_GET["ruta"] == "login"
    || $_GET["ruta"] == "contacto"
    || $_GET["ruta"] == "formato"
    || $_GET["ruta"] == "formatoSena"
    || $_GET["ruta"] == "cerrarSesion"){

    include_once "vista/modulos/".$_GET["ruta"].".php";
    }

} else {
    
    if($_GET["ruta"] == "login" 
    || $_GET["ruta"] == "registro" 
    || $_GET["ruta"] == "contacto" 
    || $_GET["ruta"] == "admin"
    || $_GET["ruta"] == "formatoSena"
    || $_GET["ruta"] == "formato"
    || $_GET["ruta"] == "mail"){
        include_once "vista/modulos/".$_GET["ruta"].".php";

    }else{
        include_once "vista/modulos/nav.php";
        include_once "vista/modulos/jumbutron.php";
    }
     
}

include_once "vista/modulos/pie.php";
