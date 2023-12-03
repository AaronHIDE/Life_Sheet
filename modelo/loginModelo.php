<?php

include_once "conexion.php";

class LoginModelo {

    public static function mldIniciarSesion($email, $password) {
        $mensaje = array();

        try {
            $sql = "SELECT * FROM usuario WHERE email = :email AND password = :password";

            $objRespuesta = Conexion::conectar()->prepare($sql);
            $objRespuesta->bindParam(":email", $email);
            $objRespuesta->bindParam(":password", $password);
            $objRespuesta->execute();
            
            $datosUsuario = $objRespuesta->fetch();
            $objRespuesta = null;

            if ($datosUsuario != null) {
                $_SESSION["ruta"] = "";

                // Puedes personalizar estas rutas según tus necesidades
                $_SESSION["ruta"] = "principal";

                $mensaje = array("codigo" => "200", "mensaje" => $_SESSION["ruta"]);
            } else {
                $mensaje = array("codigo" => "425", "mensaje" => "Error al iniciar sesión, por favor verifica tus datos");
            }

        } catch (Exception $e) {
            $mensaje = array("codigo" => "425", "mensaje" => $e->getMessage());
        }

        return $mensaje;
    }
}
