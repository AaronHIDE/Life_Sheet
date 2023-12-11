<?php

include_once "conexion.php";

class formatoSenaModelo
{

    public static function mdlAgregarFormatoSena($nombres_apellidos, $documento, $fecha_nacimiento, $edad, $telefono_aprendiz, $email_misena,
                                                $libreta_militar, $direccion, $estrato, $ciudad,
                                                
                                                $titulo_obtenido, $institucion_educativa, $fecha_grado, $nivel, $nombre_estudios, 
                                                $institucion_educativa2, $semestres_aprobados, 
                                                
                                                $nombre_programa, $ficha, $perfil, $ocupaciones, $centro_formacion, $ciudad_formacion, 
                                                $fecha_inicio, $fecha_final, $etapa, $coordinador_academico, $telefono_coordinador, 
                                                $email_coordinador,
                                                
                                                $fecha_diligenciamiento, $firma_aprendiz,

                                                $funcionario, $telefono_funcionario, $email_funcionario, 
                                                
                                                $nit, $centro_formacion1, $representante_legal, $email_representante, 
                                                $telefono_representante,

                                                $empresa, $telefono_empresa, $funcionario_empresa, $observaciones, $fecha_diligenciamiento1, 
                                                $firma,

                                                $estrato_idestrato, $nivel_idnivel, $etapa_idetapa, $usuario_idusuario
                                                )
    {
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare("INSERT INTO hoja_de_vida_sena(nombres_apellidos, documento, fecha_nacimiento, edad, telefono_aprendiz, 
                                                                email_misena, libreta_militar, direccion, estrato, ciudad,
                                                                
                                                                titulo_obtenido, institucion_educativa, fecha_grado, nivel, nombre_estudios, 
                                                                institucion_educativa2, semestres_aprobados, 
                                                                
                                                                nombre_programa, ficha, perfil, ocupaciones, centro_formacion, ciudad_formacion, 
                                                                fecha_inicio, fecha_final, etapa, coordinador_academico, telefono_coordinador, 
                                                                email_coordinador,
                                                                
                                                                fecha_diligenciamiento, firma_aprendiz,

                                                                funcionario, telefono_funcionario, email_funcionario, 
                                                                
                                                                nit, centro_formacion1, representante_legal, email_representante, 
                                                                telefono_representante,

                                                                empresa, telefono_empresa, funcionario_empresa, observaciones, fecha_diligenciamiento1, 
                                                                firma,

                                                                estrato_idestrato, nivel_idnivel, etapa_idetapa, usuario_idusuario                                                   
                                                            ) 
                                                            
                                                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
                                                                   ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
                                                                   ?, ?, ?, ?, ?, ?, ?, ?, ?
                                                            )");

            
            $objRespuesta->bindParam(1, $nombres_apellidos);
            $objRespuesta->bindParam(2, $documento);
            $objRespuesta->bindParam(3, $fecha_nacimiento);
            $objRespuesta->bindParam(4, $edad);
            $objRespuesta->bindParam(5, $telefono_aprendiz);
            $objRespuesta->bindParam(6, $email_misena);
            $objRespuesta->bindParam(7, $libreta_militar);
            $objRespuesta->bindParam(8, $direccion);
            $objRespuesta->bindParam(9, $estrato);
            $objRespuesta->bindParam(10, $ciudad);

            $objRespuesta->bindParam(11, $titulo_obtenido);
            $objRespuesta->bindParam(12, $institucion_educativa);
            $objRespuesta->bindParam(13, $fecha_grado);
            $objRespuesta->bindParam(14, $nivel);
            $objRespuesta->bindParam(15, $nombre_estudios);
            $objRespuesta->bindParam(16, $institucion_educativa2);
            $objRespuesta->bindParam(17, $semestres_aprobados);
        
            $objRespuesta->bindParam(18, $nombre_programa);
            $objRespuesta->bindParam(19, $ficha);
            $objRespuesta->bindParam(20, $perfil);
            $objRespuesta->bindParam(21, $ocupaciones);
            $objRespuesta->bindParam(22, $centro_formacion);
            $objRespuesta->bindParam(23, $ciudad_formacion);
            $objRespuesta->bindParam(24, $fecha_inicio);
            $objRespuesta->bindParam(25, $fecha_final);
            $objRespuesta->bindParam(26, $etapa);
            $objRespuesta->bindParam(27, $coordinador_academico);
            $objRespuesta->bindParam(28, $telefono_coordinador);
            $objRespuesta->bindParam(29, $email_coordinador);

            $objRespuesta->bindParam(30, $fecha_diligenciamiento);
            $objRespuesta->bindParam(31, $firma_aprendiz);

            $objRespuesta->bindParam(32, $funcionario);
            $objRespuesta->bindParam(33, $telefono_funcionario);
            $objRespuesta->bindParam(34, $email_funcionario);

            $objRespuesta->bindParam(35, $nit);
            $objRespuesta->bindParam(36, $centro_formacion1);
            $objRespuesta->bindParam(37, $representante_legal); 
            $objRespuesta->bindParam(38, $email_representante);
            $objRespuesta->bindParam(39, $telefono_representante);

            $objRespuesta->bindParam(40, $empresa);
            $objRespuesta->bindParam(41, $telefono_empresa);
            $objRespuesta->bindParam(42, $funcionario_empresa);
            $objRespuesta->bindParam(43, $observaciones);
            $objRespuesta->bindParam(44, $fecha_diligenciamiento1);
            $objRespuesta->bindParam(45, $firma);
            
            $objRespuesta->bindParam(46, $estrato_idestrato);
            $objRespuesta->bindParam(47, $nivel_idnivel);
            $objRespuesta->bindParam(48, $etapa_idetapa);
            $objRespuesta->bindParam(49, $usuario_idusuario);


            if ($objRespuesta->execute()) {
                $mensaje = array("codigo" => "200", "mensaje" => "FORMATO GUARDADO CORRECTAMENTE");
            } else {
                $mensaje = array("codigo" => "425", "mensaje" => "ERROR AL GUARDAR EL FORMATO");
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
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM hoja_de_vida_sena WHERE usuario_idusuario = :usuario_idusuario ORDER BY idhoja_de_vida_sena  DESC LIMIT 1");
            $objRespuesta->bindParam(":usuario_idusuario", $idUsuario);
            $objRespuesta->execute();
            $listarFormatoSena = $objRespuesta->fetchAll();
            $mensaje = array("codigo"=>"200","mensaje"=>$listarFormatoSena);
            $objRespuesta = null;
        } catch (Exception $e) {
            $mensaje = array("codigo"=>"401","mensaje"=>$e->getMessage());
        }

        return $mensaje;
    }


    public static function mdlListarFormatoSena($idFormatoSena)
    {
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM hoja_de_vida_sena WHERE idhoja_de_vida_sena = :idFormatoSena ORDER BY idhoja_de_vida_sena  DESC LIMIT 1");
            $objRespuesta->bindParam(":idFormatoSena", $idFormatoSena);
            $objRespuesta->execute();
            $listarFormatoSena = $objRespuesta->fetchAll();
            $mensaje = array("codigo"=>"200","mensaje"=>$listarFormatoSena);
            $objRespuesta = null;
        } catch (Exception $e) {
            $mensaje = array("codigo"=>"401","mensaje"=>$e->getMessage());
        }

        return $mensaje;
    }


}