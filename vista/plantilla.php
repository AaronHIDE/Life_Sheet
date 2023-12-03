<?php
session_start();

include_once "vista/modulos/cabecera.php";

// Comprobar si $_GET["ruta"] está definido
if (isset($_GET["ruta"])) {
    if (!isset($_SESSION["ruta"])) {
        if ($_GET["ruta"] == "login" 
            || $_GET["ruta"] == "registro" 
            || $_GET["ruta"] == "contacto" 
            || $_GET["ruta"] == "mail" 
            || $_GET["ruta"] == "admin"
            || $_GET["ruta"] == "formatoSena"
            || $_GET["ruta"] == "principal"
            || $_GET["ruta"] == "configuracion"
            || $_GET["ruta"] == "formato") {

            include_once "vista/modulos/".$_GET["ruta"].".php";
        } else {
        if ($_GET["ruta"] == "cerrarSesion") {
            include_once "vista/modulos/".$_GET["ruta"].".php";
        } else {
            include_once "vista/modulos/".$_GET["ruta"].".php";
            //include_once "vista/modulos/jumbutron.php";
            // Otros archivos que desees incluir después del inicio de sesión
        }
    }
} 
}
include_once "vista/modulos/pie.php";
?>
