<?php

include_once "conexion.php";

class LoginModelo{

    public static function mdlIniciarSesion($email, $password){

        $mensaje= array ();
        try {
            
            $sql = "SELECT * FROM usuario INNER JOIN tipo_usuario ON usuario.tipo_usuario_idtipo_usuario = tipo_usuario.idtipo_usuario WHERE usuario.email = :email AND usuario.password = :password";
            $objRespuesta = Conexion::conectar()->prepare($sql);
            $objRespuesta -> bindParam(":email",$email);
            $objRespuesta -> bindParam(":password",$password);
            $objRespuesta -> execute();
            $datosUsuario = $objRespuesta->fetch();
            $objRespuesta = null;


            if($datosUsuario != null){
                $_SESSION["ruta"] = "";
                
                if ($datosUsuario["idtipo_usuario"] == "1") {
                    $_SESSION["ruta"] = "inicioAdmin";
                } else if ($datosUsuario["idtipo_usuario"] == "2"){
                    $_SESSION["ruta"] = "inicioEmpleado";
                } else if ($datosUsuario["idtipo_usuario"] == "3"){
                    $_SESSION["ruta"] = "inicioCliente";
                }

                $mensaje = array("codigo"=>"200", "mensaje"=>$_SESSION["ruta"]);
                

            } else {
                $mensaje = array("codigo"=>"425", "mensaje" => "ERROR AL INICIAR SESION, POR FAVOR REVISAR LOS DATOS INGRESADOS");
            }

        } catch (Exception $e) {
            $mensaje = array("codigo"=>"425", "mensaje" => $e->getMessage());
        }
    return $mensaje; 
    
    }
}