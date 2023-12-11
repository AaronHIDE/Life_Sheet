<?php

include_once "conexion.php";

class formatoModelo
{

    public static function mdlAgregarFormato($nombre, $documento, $cargo, $telefono, $email, $direccion, $estudios1, $estudios2, $estudios3, $estudios4, $experiencia1, $experiencia2, $experiencia3, $experiencia4, $habilidades1, $habilidades2, $habilidades3, $habilidades4, $referencias1, $referencias2, $referencias3, $referencias4, $telefonoReferencia1, $telefonoReferencia2, $telefonoReferencia3, $telefonoReferencia4, $usuario_idusuario)
    {
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare("INSERT INTO hoja_de_vida(nombre,documento,cargo,telefono,email,direccion,estudios1,estudios2,estudios3,estudios4,experiencia1,experiencia2,experiencia3,experiencia4,habilidades1,habilidades2,habilidades3,habilidades4,referencias1,referencias2,referencias3,referencias4,telefonoReferencia1,telefonoReferencia2,telefonoReferencia3,telefonoReferencia4,usuario_idusuario) VALUES(:nombre,:documento,:cargo,:telefono,:email,:direccion,:estudios1,:estudios2,:estudios3,:estudios4,:experiencia1,:experiencia2,:experiencia3,:experiencia4,:habilidades1,:habilidades2,:habilidades3,:habilidades4,:referencias1,:referencias2,:referencias3,:referencias4,:telefonoReferencia1,:telefonoReferencia2,:telefonoReferencia3,:telefonoReferencia4,:usuario_idusuario)");
            $objRespuesta->bindParam(":nombre", $nombre);
            $objRespuesta->bindParam(":documento", $documento);
            $objRespuesta->bindParam(":cargo", $cargo);
            $objRespuesta->bindParam(":telefono", $telefono);
            $objRespuesta->bindParam(":email", $email);
            $objRespuesta->bindParam(":direccion", $direccion);
            $objRespuesta->bindParam(":estudios1", $estudios1);
            $objRespuesta->bindParam(":estudios2", $estudios2);
            $objRespuesta->bindParam(":estudios3", $estudios3);
            $objRespuesta->bindParam(":estudios4", $estudios4);
            $objRespuesta->bindParam(":experiencia1", $experiencia1);
            $objRespuesta->bindParam(":experiencia2", $experiencia2);
            $objRespuesta->bindParam(":experiencia3", $experiencia3);
            $objRespuesta->bindParam(":experiencia4", $experiencia4);
            $objRespuesta->bindParam(":habilidades1", $habilidades1);
            $objRespuesta->bindParam(":habilidades2", $habilidades2);
            $objRespuesta->bindParam(":habilidades3", $habilidades3);
            $objRespuesta->bindParam(":habilidades4", $habilidades4);
            $objRespuesta->bindParam(":referencias1", $referencias1);
            $objRespuesta->bindParam(":referencias2", $referencias2);
            $objRespuesta->bindParam(":referencias3", $referencias3);
            $objRespuesta->bindParam(":referencias4", $referencias4);
            $objRespuesta->bindParam(":telefonoReferencia1", $telefonoReferencia1);
            $objRespuesta->bindParam(":telefonoReferencia2", $telefonoReferencia2);
            $objRespuesta->bindParam(":telefonoReferencia3", $telefonoReferencia3);
            $objRespuesta->bindParam(":telefonoReferencia4", $telefonoReferencia4);
            $objRespuesta->bindParam(":usuario_idusuario", $usuario_idusuario);


            if ($objRespuesta->execute()) {
                $mensaje = array("codigo" => "200", "mensaje" => "FORMATO REGISTRADO CORRECTAMENTE");
            } else {
                $mensaje = array("codigo" => "425", "mensaje" => "ERROR AL REGISTRAR EL FORMATO");
            }
        } catch (Exception $e) {
            $mensaje = array("codigo" => "425", "mensaje" => $e->getMessage());
        }

        return $mensaje;
    }

    public static function mdlListarFormato($idUsuario)
    {
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM hoja_de_vida WHERE usuario_idusuario = :usuario_idusuario ORDER BY idhoja_de_vida  DESC LIMIT 1");
            $objRespuesta->bindParam(":usuario_idusuario", $idUsuario);
            $objRespuesta->execute();
            $listarFormato = $objRespuesta->fetchAll();
            $mensaje = array("codigo"=>"200","mensaje"=>$listarFormato);
            $objRespuesta = null;
        } catch (Exception $e) {
            $mensaje = array("codigo"=>"401","mensaje"=>$e->getMessage());
        }

        return $mensaje;
    }

    public static function mdlListarFormatoForm($idFormato)
    {
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM hoja_de_vida WHERE idhoja_de_vida = :idFormato ORDER BY idhoja_de_vida  DESC LIMIT 1");
            $objRespuesta->bindParam(":idFormato", $idFormato);
            $objRespuesta->execute();
            $listarFormato = $objRespuesta->fetchAll();
            $mensaje = array("codigo"=>"200","mensaje"=>$listarFormato);
            $objRespuesta = null;
        } catch (Exception $e) {
            $mensaje = array("codigo"=>"401","mensaje"=>$e->getMessage());
        }

        return $mensaje;
    }
}
