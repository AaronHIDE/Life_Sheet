<!-- <?php
include_once "../modelo/fotoModelo.php";
?>
class fotoControl{
    public $nombreFoto;
    public $foto;

    public function ctrSubirFoto(){
        $objRespuesta = fotoModelo::mdlSubirFoto($this->nombreFoto,$this->foto);
        echo json_encode($objRespuesta);
    }

    public function ctrCargarFoto(){
        $objRespuesta = fotoModelo::mdlCargarFoto();
        echo json_encode($objRespuesta);
    }

}

// subir foto
if (isset($_FILES["foto"])){
    $objFoto = new fotoControl();
    $objFoto->nombreFoto = $_FILES["foto"]["name"];
    $objFoto->foto = $_FILES["foto"];
    $objFoto->ctrSubirFoto();
}

// listar foto
if (isset($_POST["cargarFoto"]) == "ok"){
    $objFoto = new fotoControl();
    $objFoto->ctrCargarFoto();
} -->