<?php
session_start();

include_once "vista/modulos/cabecera.php";
include_once "vista/modulos/nav.php";

// Comprobar si hay una sesión iniciada
if (!isset($_SESSION["ruta"])) {
    // Comprobar si $_GET["ruta"] está definido
    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "login" || $_GET["ruta"] == "registro") {
            include_once "vista/modulos/" . $_GET["ruta"] . ".php";
        } else {
            // Si $_GET["ruta"] no está definido o no es "login" o "registro",
            // redirigir al login (o cualquier otra acción que desees)
            include_once "vista/modulos/login.php";
            
        }
    } else {
        // Si $_GET["ruta"] no está definido, se puede manejar de manera predeterminada aquí
        // Por ejemplo, puedes incluir la página principal o una página de inicio aquí.
        include_once "vista/modulos/inicio.php";
    }
} else {
    // Si ya hay una sesión iniciada, permitir el acceso a otras rutas
    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "cerrarSesion") {
            include_once "vista/modulos/" . $_GET["ruta"] . ".php";
        } else {
            include_once "vista/modulos/" . $_GET["ruta"] . ".php";
            // Otros archivos que desees incluir después del inicio de sesión
        }
    } else {
        // Si $_GET["ruta"] no está definido, se puede manejar de manera predeterminada aquí
        // Por ejemplo, puedes incluir la página principal o una página de inicio aquí.
        include_once "vista/modulos/inicio.php";
    }
}

include_once "vista/modulos/pie.php";
?>
