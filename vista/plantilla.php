<?php

include_once "vista/modulos/cabecera.php";

include_once "vista/modulos/registro.php";
include_once "vista/modulos/login.php";

include_once "vista/modulos/pie.php";


session_start();

include_once "vista/modulos/cabecera.php";

if (isset($_SESSION["ruta"])) {

    include_once "vista/modulos/inicio.php";

    if($_GET["ruta"] == "registro" ||
       $_GET["ruta"] == "login" ||
       $_GET["ruta"] == "cerrarSesion"){

    include_once "vista/modulos/".$_GET["ruta"].".php";
    }
} else {
    include_once "vista/modulos/login.php";
}

include_once "vista/modulos/pie.php";

