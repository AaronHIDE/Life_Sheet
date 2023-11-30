<?php

session_start();

include_once "../modelo/registroModelo.php";

class registroControl {
    public $nombres;
    public $apellidos;
    public $telefono;
    public $email;
    public $passwordR;

    public function ctrAgregarUsuario(){
        $objRespuesta = registroModelo::mdlAgregarUsuario($this -> nombres, $this -> apellidos, $this -> telefono, $this ->email, $this -> passwordR);
        echo json_encode($objRespuesta);
    }
}

if (isset($_POST["nombres"],$_POST["apellidos"],$_POST["telefono"],$_POST["email"],$_POST["passwordR"])) {
    $objRespuesta = new registroControl();
    $objRespuesta -> nombres = $_POST["nombres"];
    $objRespuesta -> apellidos = $_POST["apellidos"];
    $objRespuesta -> telefono = $_POST["telefono"];
    $objRespuesta -> email = $_POST["email"];
    $objRespuesta -> passwordR = $_POST["passwordR"];
    $objRespuesta -> ctrAgregarUsuario();
}