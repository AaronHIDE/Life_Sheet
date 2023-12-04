<!-- <?php

include_once "conexion.php";
?>
class fotoModelo{

    public static function mdlSubirFoto($nombreFoto,$foto){
        $mensaje = array();
        $ruta = "../vista/imagenes/";
        $rutaPrincipal = "vista/imagenes/".$nombreFoto;
        $extencion = strtoupper(substr($nombreFoto,-4));

        if ($extencion == ".JPG" || $extencion == ".PNG" || $extencion == "JPEG" ){
            if (move_uploaded_file($foto['tmp_name'],$ruta.$nombreFoto)){
                try {
                    $objRespuesta = Conexion::conectar()->prepare("INSERT INTO foto(nombre,url)VALUES(:nombre,:url)");
                    $objRespuesta->bindParam(":nombre",$nombreArchivo);
                    $objRespuesta->bindParam(":url",$rutaPrincipal);
                    if ($objRespuesta->execute()){
                        $mensaje = array("codigo"=>"202","mensaje"=>"Foto subido correctamente");
                    }
                } catch (Exception $e) {
                    $mensaje = array("codigo"=>"404","mensaje"=>$e->getMessage());
                }
            }else{
                $mensaje = array("codigo"=>"404","mensaje"=>"Error al subir la foto");
            }
        }else{
            $mensaje = array("codigo"=>"404","mensaje"=>"El tipo de archivo no es compatible con las extenciones permitidas jpg,png y jpeg.");
        }

        return $mensaje;
    }


    public static function mdlCargarFoto(){
        $mensaje = array();
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM foto");
            $objRespuesta->execute();
            $mensaje = $objRespuesta->fetchAll();
            $objRespuesta = null;           
        } catch (Exception $e) {
            $mensaje = array("mensaje"=>$e->getMessage());
        }

        return $mensaje;
    }

} -->
