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

                                                $empresa, $telefono_empresa, $funcionario_empresa, $fecha_diligenciamiento1, 
                                                $firma,


                                                )
    {
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare("INSERT INTO hoja_de_vida_sena(nombres_apellidos, documento, fecha_nacimiento, edad, telefono_aprendiz, 
                                                            email_misena, libreta_militar, direccion, ciudad,

                                                            titulo_obtenido, institucion_educativa, fecha_grado, nivel, nombre_estudios, institucion_educativa2, 
                                                            semestres_aprobados, 
                                                            
                                                            nombre_programa, ficha, perfil, ocupaciones, centro_formacion, ciudad_formacion, fecha_inicio, 
                                                            fecha_final, etapa, coordinador_academico, telefono_coordinador, email_coordinador,

                                                            fecha_diligenciamiento, firma_aprendiz,

                                                            funcionario, telefono_funcionario, email_funcionario, 
                                                            
                                                            nit, centro_formacion1, representante_legal, email_representante, telefono_representante,

                                                            empresa, telefono_empresa, funcionario_empresa, fecha_diligenciamiento1, firma
                                                                                                                        
                                                            ) 
                                                            
                                                            VALUES(:nombres_apellidos, :documento, :fecha_nacimiento, :edad, :telefono_aprendiz, 
                                                            :email_misena, :libreta_militar, :direccion, :ciudad,

                                                            :titulo_obtenido, :institucion_educativa, :fecha_grado, :nivel, :nombre_estudios, :institucion_educativa2, 
                                                            :semestres_aprobados, 
                                                            
                                                            :nombre_programa, :ficha, :perfil, :ocupaciones, :centro_formacion, :ciudad_formacion, :fecha_inicio, 
                                                            :fecha_final, :etapa, :coordinador_academico, :telefono_coordinador, :email_coordinador,

                                                            :fecha_diligenciamiento, :firma_aprendiz,

                                                            :funcionario, :telefono_funcionario, :email_funcionario, 
                                                            
                                                            :nit, :centro_formacion1, :representante_legal, :email_representante, :telefono_representante,

                                                            :empresa, :telefono_empresa, :funcionario_empresa, :fecha_diligenciamiento1, :firma

                                                            )");

            
            $objRespuesta->bindParam(":nombres_apellidos", $nombres_apellidos);
            $objRespuesta->bindParam(":documento", $documento);
            $objRespuesta->bindParam(":fecha_nacimiento", $fecha_nacimiento);
            $objRespuesta->bindParam(":edad", $edad);
            $objRespuesta->bindParam(":telefono_aprendiz", $telefono_aprendiz);
            $objRespuesta->bindParam(":email_misena", $email_misena);
            $objRespuesta->bindParam(":libreta_militar", $libreta_militar);
            $objRespuesta->bindParam(":direccion", $direccion);
            $objRespuesta->bindParam(":estrato", $estrato);
            $objRespuesta->bindParam(":ciudad", $ciudad);

            $objRespuesta->bindParam(":titulo_obtenido", $titulo_obtenido);
            $objRespuesta->bindParam(":institucion_educativa", $institucion_educativa);
            $objRespuesta->bindParam(":fecha_grado", $fecha_grado);
            $objRespuesta->bindParam(":nivel", $nivel);
            $objRespuesta->bindParam(":nombre_estudios", $nombre_estudios);
            $objRespuesta->bindParam(":institucion_educativa2", $institucion_educativa2);
            $objRespuesta->bindParam(":semestres_aprobados", $semestres_aprobados);
        
            $objRespuesta->bindParam(":nombre_programa", $nombre_programa);
            $objRespuesta->bindParam(":ficha", $ficha);
            $objRespuesta->bindParam(":perfil", $perfil);
            $objRespuesta->bindParam(":ocupaciones", $ocupaciones);
            $objRespuesta->bindParam(":centro_formacion", $centro_formacion);
            $objRespuesta->bindParam(":ciudad_formacion", $ciudad_formacion);
            $objRespuesta->bindParam(":fecha_inicio", $fecha_inicio);
            $objRespuesta->bindParam(":fecha_final", $fecha_final);
            $objRespuesta->bindParam(":etapa", $etapa);
            $objRespuesta->bindParam(":coordinador_academico", $coordinador_academico);
            $objRespuesta->bindParam(":telefono_coordinador", $telefono_coordinador);
            $objRespuesta->bindParam(":email_coordinador", $email_coordinador);

            $objRespuesta->bindParam(":fecha_diligenciamiento", $fecha_diligenciamiento);
            $objRespuesta->bindParam(":firma_aprendiz", $firma_aprendiz);

            $objRespuesta->bindParam(":funcionario", $funcionario);
            $objRespuesta->bindParam(":telefono_funcionario", $telefono_funcionario);
            $objRespuesta->bindParam(":email_funcionario", $email_funcionario);

            $objRespuesta->bindParam(":nit", $nit);
            $objRespuesta->bindParam(":centro_formacion1", $centro_formacion1);
            $objRespuesta->bindParam(":representante_legal", $representante_legal);
            $objRespuesta->bindParam(":email_representante", $email_representante);
            $objRespuesta->bindParam(":telefono_representante", $telefono_representante);

            $objRespuesta->bindParam(":empresa", $empresa);
            $objRespuesta->bindParam(":telefono_empresa", $telefono_empresa);
            $objRespuesta->bindParam(":funcionario_empresa", $funcionario_empresa);
            $objRespuesta->bindParam(":fecha_diligenciamiento1", $fecha_diligenciamiento1);
            $objRespuesta->bindParam(":firma", $firma);


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


}
