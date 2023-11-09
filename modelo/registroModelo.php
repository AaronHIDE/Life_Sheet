<?php

include_once "conexion.php";

class registroModelo {

        // AGREGAR 
        public static function mdlAgregarUsuario($nombres, $apellidos, $telefono, $email, $passwordR){
            $mensaje = array();
            try {
                $objRespuesta = Conexion::conectar()->prepare("INSERT INTO usuario(nombres, apellidos, telefono, email, passwordR) VALUES(:nombres, :apellidos, :telefono, :email, :passwordR)");
                $objRespuesta->bindParam("nombres",$nombres);
                $objRespuesta->bindParam("apellidos",$apellidos);
                $objRespuesta->bindParam("telefono",$telefono);
                $objRespuesta->bindParam("email",$email);
                $objRespuesta->bindParam("passwordR",$passwordR);

    
                if ($objRespuesta->execute()){
                    $mensaje = array("codigo"=>"200","mensaje"=>"USUARIO REGISTRADO CORRECTAMENTE");
                }else{
                    $mensaje = array("codigo"=>"425","mensaje"=>"ERROR AL REGISTRAR EL USUARIO");
                }
            } catch (Exception $e) {
                $mensaje = array("codigo"=>"425","mensaje"=>$e->getMessage());
            }
    
            return $mensaje;
        }
    }

