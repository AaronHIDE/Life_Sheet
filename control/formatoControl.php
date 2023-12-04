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
    public $experiencia4;
    public $habilidades1;
    public $habilidades2;
    public $habilidades3;
    public $habilidades4;
    public $referencias1;
    public $referencias2;
    public $referencias3;
    public $referencias4;
    public $telefonoReferencia1;
    public $telefonoReferencia2;
    public $telefonoReferencia3;
    public $telefonoReferencia4;
    public $usuario_idusuario;


    public function ctrAgregarFormato()
    {
        $objRespuesta = formatoModelo::mdlAgregarFormato($this->nombre, $this->documento, $this->cargo, $this->telefono, $this->email, $this->direccion, $this->estudios1, $this->estudios2, $this->estudios3, $this->estudios4, $this->experiencia1, $this->experiencia2, $this->experiencia3, $this->experiencia4, $this->habilidades1, $this->habilidades2, $this->habilidades3, $this->habilidades4, $this->referencias1, $this->referencias2, $this->referencias3, $this->referencias4, $this->telefonoReferencia1, $this->telefonoReferencia2, $this->telefonoReferencia3, $this->telefonoReferencia4, $this->usuario_idusuario);
        echo json_encode($objRespuesta);
    }

    public function ctrListarFormato()
    {
        $objRespuesta = formatoModelo::mdlListarFormato();
        echo json_encode($objRespuesta);
    }
}

if (isset($_POST["nombre"], $_POST["documento"], $_POST["cargo"], $_POST["telefono"], $_POST["email"], $_POST["direccion"], $_POST["estudios1"], $_POST["estudios2"], $_POST["estudios3"], $_POST["estudios4"], $_POST["experiencia1"], $_POST["experiencia2"], $_POST["experiencia3"], $_POST["experiencia4"], $_POST["habilidades1"], $_POST["habilidades2"], $_POST["habilidades3"], $_POST["habilidades4"], $_POST["referencias1"], $_POST["referencias2"], $_POST["referencias3"], $_POST["referencias4"], $_POST["telefonoReferencia1"], $_POST["telefonoReferencia2"], $_POST["telefonoReferencia3"], $_POST["telefonoReferencia4"])) {
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
    $objAgregar->estudios4 = $_POST["estudios4"];
    $objAgregar->experiencia1 = $_POST["experiencia1"];
    $objAgregar->experiencia2 = $_POST["experiencia2"];
    $objAgregar->experiencia3 = $_POST["experiencia3"];
    $objAgregar->experiencia4 = $_POST["experiencia4"];
    $objAgregar->habilidades1 = $_POST["habilidades1"];
    $objAgregar->habilidades2 = $_POST["habilidades2"];
    $objAgregar->habilidades3 = $_POST["habilidades3"];
    $objAgregar->habilidades4 = $_POST["habilidades4"];
    $objAgregar->referencias1 = $_POST["referencias1"];
    $objAgregar->referencias2 = $_POST["referencias2"];
    $objAgregar->referencias3 = $_POST["referencias3"];
    $objAgregar->referencias4 = $_POST["referencias4"];
    $objAgregar->telefonoReferencia1 = $_POST["telefonoReferencia1"];
    $objAgregar->telefonoReferencia2 = $_POST["telefonoReferencia2"];
    $objAgregar->telefonoReferencia3 = $_POST["telefonoReferencia3"];
    $objAgregar->telefonoReferencia4 = $_POST["telefonoReferencia4"];
    $objAgregar->usuario_idusuario = $_SESSION["usuario"][0];


    $objAgregar->ctrAgregarFormato();
}



if (isset($_POST["listarFormato"]) == "ok") {
    $objFormato = new FormatoControl();
    $objFormato->ctrListarFormato();
}
