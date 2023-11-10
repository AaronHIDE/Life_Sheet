<?php

session_start();

include_once "../modelo/formatoModelo.php";

class formatoControl
{

    public $nombre;
    public $documento;
    public $cargo;
    public $telefono;
    public $email;
    public $direccion;
    public $estudios1;
    public $estudios2;
    public $estudios3;
    public $estudios4;
    public $experiencia1;
    public $experiencia2;
    public $experiencia3;
    public $habilidades1;
    public $habilidades2;
    public $habilidades3;
    public $referencias1;
    public $referencias2;
    public $referencias3;


            public function ctrAgregarFormato(){
                $objRespuesta = formatoModelo::mdlAgregarFormato($this -> nombre,$this -> documento,$this -> cargo,$this -> telefono,$this -> email,$this -> direccion,$this -> estudios1,$this -> estudios2,$this -> estudios3,$this -> estudios4,$this -> experiencia1,$this -> experiencia2,$this -> experiencia3,$this -> habilidades1,$this -> habilidades2,$this -> habilidades3,$this -> referencias1,$this -> referencias2,$this -> referencias3);
                echo json_encode($objRespuesta);
            }
            
            public function ctrListarFormato(){
                $objRespuesta = formatoModelo::mdlListarFormato();
                echo json_encode($objRespuesta);
            }

}

if (isset($_POST["nombre"], $_POST["documento"], $_POST["cargo"], $_POST["telefono"], $_POST["email"], $_POST["direccion"], $_POST["estudios1"], $_POST["estudios2"], $_POST["estudios3"], $_POST["estudios4"], $_POST["experiencia1"], $_POST["experiencia2"], $_POST["experiencia3"], $_POST["habilidades1"], $_POST["habilidades2"], $_POST["habilidades3"], $_POST["referencias1"], $_POST["referencias2"], $_POST["referencias3"])) {
    $objAgregar = new formatoControl();
    $objAgregar->nombre = $_POST["nombre"];
    $objAgregar->documento = $_POST["documento"];
    $objAgregar->cargo = $_POST["cargo"];
    $objAgregar->telefono = $_POST["telefono"];
    $objAgregar->email = $_POST["email"];
    $objAgregar->direccion = $_POST["direccion"];
    $objAgregar->estudios1 = $_POST["estudios1"];
    $objAgregar->estudios2 = $_POST["estudios2"];
    $objAgregar->estudios3 = $_POST["estudios3"];
    $objAgregar->experiencia1 = $_POST["experiencia1"];
    $objAgregar->experiencia2 = $_POST["experiencia2"];
    $objAgregar->experiencia3 = $_POST["experiencia3"];
    $objAgregar->habilidades1 = $_POST["habilidades1"];
    $objAgregar->habilidades2 = $_POST["habilidades2"];
    $objAgregar->habilidades3 = $_POST["habilidades3"];
    $objAgregar->referencias1 = $_POST["referencias1"];
    $objAgregar->referencias2 = $_POST["referencias2"];
    $objAgregar->referencias3 = $_POST["referencias3"];

    $objAgregar->ctrAgregarFormato();
}



if (isset($_POST["listarFormato"]) == "ok") {
    $objFormato = new FormatoControl();
    $objFormato->ctrListarFormato();
}