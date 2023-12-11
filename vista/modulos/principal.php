<?php
  $usuario = null;
  if (isset($_SESSION["usuario"][0])){
    $usuario = $_SESSION["usuario"][0];
  }
  
?>    <!-- NAVBAR -->

    <h1 style="color:white;" class="text-center">Plantillas</h1>
    <div class="container mt-4 p-4 bg-black rounded">
      <div class="te">
        <!-- cards  -->
        <div class="container">
          <div class="card-group vgr-cards">
            <div class="card">
              <div class="card-img-body ">
                <img class="card-img" src="vista/imagenes/koalaCard.png" alt="Card image cap">
              </div>
              <div class="card-body">
                <h4 class="card-title">LIFE SHEET</h4>
                <p class="card-text">Con esta Plantilla tu podras adjuntar toda la informacion que necesites, de manera completa y organizada; para una Hoja de vida de calidad para cualquier empresa.</p>
                <a href="formato" class="btn btn-light">Probar <i class="bi bi-arrow-right-circle"></i></a>
              </div>
            </div>
            <div class="card">
              <div class="card-img-body">
                <img class="card-img w-100 h-100" src="vista/imagenes/1.png" alt="Card image cap">
              </div>
              <div class="card-body">
                <h4 class="card-title">FORMATO SENA</h4>
                <p class="card-text">Si eres aprendiz Sena, esta Plantilla es perfecta para ti, ya que tu podras adjuntar toda la informacion que sea necesaria, en base al formato principal que dispone el SENA para una Hoja de Vida completa y de calidad; con la cual podras presentarte a cualquier empresa en tu etapa Practica.</p>
                <a href="formatoSena" class="btn btn-light">Probar <i class="bi bi-arrow-right-circle"></i></a>
              </div>
            </div>
          </div>

    <h1 style="color:white;" class="text-center">Guardadas</h1>


          <div id="contenedorCard" class="card2-container" usuario="<?php echo $usuario; ?>"  >
            <!-- <a href="formato2">
              <div class="card2">LIFE SHEET</div>
            </a>


            <a href="formatoSena2">
              <div class="card2">FORMATO SENA</div> 
            </a>-->
          </div>

        </div>