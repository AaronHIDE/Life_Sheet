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