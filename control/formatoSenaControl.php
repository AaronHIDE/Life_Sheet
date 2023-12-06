<?php

session_start();

include_once "../modelo/formatoSenaModelo.php";

class formatoSenaControl
{

    public $nombres_apellidos;
    public $documento;
    public $fecha_nacimiento;
    public $edad;
    public $telefono_aprendiz;
    public $email_misena;
    public $libreta_militar;
    public $direccion;
    public $estrato;
    public $ciudad;

    public $titulo_obtenido;
    public $institucion_educativa;
    public $fecha_grado;
    public $nivel;
    public $nombre_estudios;
    public $institucion_educativa2;
    public $semestres_aprobados;

    public $nombre_programa;
    public $ficha;
    public $perfil;
    public $ocupaciones;
    public $centro_formacion;
    public $ciudad_formacion;
    public $fecha_inicio;
    public $fecha_final;
    public $etapa;
    public $coordinador_academico;
    public $telefono_coordinador;
    public $email_coordinador;

    public $fecha_diligenciamiento;
    public $firma_aprendiz;

    public $funcionario;
    public $telefono_funcionario;
    public $email_funcionario;

    public $nit;
    public $centro_formacion1;    
    public $representante_legal;
    public $email_representante;
    public $telefono_representante;

    public $empresa;
    public $telefono_empresa;    
    public $funcionario_empresa;
    public $observaciones;
    public $fecha_diligenciamiento1;
    public $firma;


    public $estrato_idestrato;
    public $nivel_idnivel;
    public $etapa_idetapa;
    public $usuario_idusuario;

        public function ctrAgregarFormatoSena(){
            $objRespuesta = formatoSenaModelo::mdlAgregarFormatoSena($this->nombres_apellidos, $this->documento, $this->fecha_nacimiento,
            $this->edad, $this->telefono_aprendiz, $this->email_misena, $this->libreta_militar, $this->direccion, $this->estrato, $this->ciudad,

            $this->titulo_obtenido, $this->institucion_educativa, $this->fecha_grado, $this->nivel, $this->nombre_estudios,
            $this->institucion_educativa2, $this->semestres_aprobados,
            
            $this->nombre_programa, $this->ficha, $this->perfil, $this->ocupaciones, $this->centro_formacion, $this->ciudad_formacion, 
            $this->fecha_inicio, $this->fecha_final, $this->etapa, $this->coordinador_academico, $this->telefono_coordinador, 
            $this->email_coordinador,
        
            $this->fecha_diligenciamiento, $this->firma_aprendiz,

            $this->funcionario, $this->telefono_funcionario, $this->email_funcionario,

            $this->nit, $this->centro_formacion1, $this->representante_legal, $this->email_representante,
            $this->telefono_representante, 
            
            $this->empresa, $this->telefono_empresa, $this->funcionario_empresa, $this->observaciones, $this->fecha_diligenciamiento1, 
            $this->firma,

            $this->estrato_idestrato, $this->nivel_idnivel, $this->etapa_idetapa, $this->usuario_idusuario
            );
            
            echo json_encode($objRespuesta);
        }

        public function ctrListarFormatoSena(){
            $objRespuesta = formatoSenaModelo::mdlListarFormatoSena();
            echo json_encode($objRespuesta);
        }
}



if(isset($_POST["nombres_apellidos"], $_POST["documento"], $_POST["fecha_nacimiento"], $_POST["edad"], $_POST["telefono_aprendiz"], $_POST["email_misena"],
        $_POST["libreta_militar"], $_POST["direccion"], $_POST["estrato"], $_POST["ciudad"], 
 
        $_POST["titulo_obtenido"], $_POST["institucion_educativa"], $_POST["fecha_grado"], $_POST["nivel"], $_POST["nombre_estudios"], $_POST["institucion_educativa2"], 
        $_POST["semestres_aprobados"], 
        
        $_POST["nombre_programa"], $_POST["ficha"], $_POST["perfil"], $_POST["ocupaciones"], $_POST["centro_formacion"], $_POST["ciudad_formacion"], 
        $_POST["fecha_inicio"], $_POST["fecha_final"], $_POST["etapa"], $_POST["coordinador_academico"], $_POST["telefono_coordinador"], 
        $_POST["email_coordinador"], 
        
        $_POST["fecha_diligenciamiento"], $_POST["firma_aprendiz"], 
        
        $_POST["funcionario"], $_POST["telefono_funcionario"], $_POST["email_funcionario"],

        $_POST["nit"], $_POST["centro_formacion1"], $_POST["representante_legal"], $_POST["email_representante"], $_POST["telefono_representante"], 
        
        $_POST["empresa"], $_POST["telefono_empresa"], $_POST["funcionario_empresa"], $_POST["observaciones"], $_POST["fecha_diligenciamiento1"], $_POST["firma"]

        )) {
   
    $objAgregarFs = new formatoSenaControl();
    $objAgregarFs->nombres_apellidos = $_POST["nombres_apellidos"];
    $objAgregarFs->documento = $_POST["documento"];
    $objAgregarFs->fecha_nacimiento = $_POST["fecha_nacimiento"];
    $objAgregarFs->edad = $_POST["edad"];
    $objAgregarFs->telefono_aprendiz = $_POST["telefono_aprendiz"];
    $objAgregarFs->email_misena = $_POST["email_misena"];
    $objAgregarFs->libreta_militar = $_POST["libreta_militar"];
    $objAgregarFs->direccion = $_POST["direccion"];
    $objAgregarFs->estrato = $_POST["estrato"];
    $objAgregarFs->ciudad = $_POST["ciudad"];

    $objAgregarFs->titulo_obtenido = $_POST["titulo_obtenido"];
    $objAgregarFs->institucion_educativa = $_POST["institucion_educativa"];
    $objAgregarFs->fecha_grado = $_POST["fecha_grado"];
    $objAgregarFs->nivel = $_POST["nivel"];
    $objAgregarFs->nombre_estudios = $_POST["nombre_estudios"];
    $objAgregarFs->institucion_educativa2 = $_POST["institucion_educativa2"];
    $objAgregarFs->semestres_aprobados = $_POST["semestres_aprobados"];

    $objAgregarFs->nombre_programa = $_POST["nombre_programa"];
    $objAgregarFs->ficha = $_POST["ficha"];
    $objAgregarFs->perfil = $_POST["perfil"];
    $objAgregarFs->ocupaciones = $_POST["ocupaciones"];
    $objAgregarFs->centro_formacion = $_POST["centro_formacion"];
    $objAgregarFs->ciudad_formacion = $_POST["ciudad_formacion"];
    $objAgregarFs->fecha_inicio = $_POST["fecha_inicio"];
    $objAgregarFs->fecha_final = $_POST["fecha_final"];
    $objAgregarFs->etapa = $_POST["etapa"];
    $objAgregarFs->coordinador_academico = $_POST["coordinador_academico"];
    $objAgregarFs->telefono_coordinador = $_POST["telefono_coordinador"];
    $objAgregarFs->email_coordinador = $_POST["email_coordinador"];

    $objAgregarFs->fecha_diligenciamiento = $_POST["fecha_diligenciamiento"];
    $objAgregarFs->firma_aprendiz = $_POST["firma_aprendiz"];

    $objAgregarFs->funcionario = $_POST["funcionario"];
    $objAgregarFs->telefono_funcionario = $_POST["telefono_funcionario"];
    $objAgregarFs->email_funcionario = $_POST["email_funcionario"];

    $objAgregarFs->nit = $_POST["nit"];
    $objAgregarFs->centro_formacion1 = $_POST["centro_formacion1"];
    $objAgregarFs->representante_legal = $_POST["representante_legal"];
    $objAgregarFs->email_representante = $_POST["email_representante"];
    $objAgregarFs->telefono_representante = $_POST["telefono_representante"];

    $objAgregarFs->empresa = $_POST["empresa"];
    $objAgregarFs->telefono_empresa = $_POST["telefono_empresa"];
    $objAgregarFs->funcionario_empresa = $_POST["funcionario_empresa"];
    $objAgregarFs->observaciones = $_POST["observaciones"];
    $objAgregarFs->fecha_diligenciamiento1 = $_POST["fecha_diligenciamiento1"];
    $objAgregarFs->firma = $_POST["firma"];

    $objAgregarFs->estrato_idestrato = $_POST["estrato"];
    $objAgregarFs->nivel_idnivel = $_POST["nivel"];
    $objAgregarFs->etapa_idetapa = $_POST["etapa"];
    $objAgregarFs->usuario_idusuario = $_SESSION["usuario"][0];

    $objAgregarFs->ctrAgregarFormatoSena();
}


if (isset($_POST["listarFormatoSena"]) && $_POST["listarFormatoSena"] == "ok") {
    $objFormatoSena = new formatoSenaControl();
    $objFormatoSena->ctrListarFormatoSena();
}
