<?php

session_start();

include_once "../modelo/loginModelo.php";

class LoginControl {
    public $email;
    public $password;

    public $nombre;
    public $descripcion;
    public $valor;

    public $idinsumos;

    public function ctrIniciarSesion(){
        $objRespuesta = LoginModelo::mdlIniciarSesion($this -> email, $this -> password);
        echo json_encode($objRespuesta);
    }



}

if (isset($_POST["login_email"], $_POST["login_password"])){
    $objLogin = new LoginControl();
    $objLogin -> email = $_POST["login_email"];
    $objLogin -> password = $_POST["login_password"];
    $objLogin -> ctrIniciarSesion();
}
