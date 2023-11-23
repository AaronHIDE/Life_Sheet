<?php 
include_once "vista/modulos/nav.php";
?>

<div class="container">


    <!-- Primer container -->
    <div class="row">
        <div class="col-md-5 bg-orange mr mb-5 rounded">
            <br><br>
            <FONT SIZE="6" FACE="Cooper Black" class="h4 text-white">¡Comparte tu hoja de vida con nosotros!</FONT>
            <br><br><br><br>
            <p style="font-size:large;">Puedes compartir por correo tu hoja de vida previamente descargada como PDF.</p>
            <div style="display: flex; justify-content: center;">
                <img style="width: 280px;" src="vista\imagenes\Koala_PDF-removebg-preview.png">
            </div>
        </div>



        <!-- Segundo container -->
        <div class="col-md-5 mb-5 bg-gray rounded">
            <div class="row">
                <div class="contact-section">
                    <div class="contact-form mx-auto">
                        <br><br>
                        <FONT SIZE="6" FACE="Cooper Black" COLOR="black" class="h2">¡Adjunta tu hoja de vida!</FONT>
                        <br><br>

                        <div class="container bg-white rounded">

                            <!-- Formulario  -->
                            <form class="contact" action="" method="post" enctype="multipart/form-data">
                                <br>
                                <!-- Input Email Address -->
                                <div class="mb-3">
                                    <input type="email" name="destinatario" class="form-control" placeholder="Escribe el correo del destinatario:" required>
                                </div>

                                <!-- Input Asunto Correo -->
                                <div class="mb-3">
                                    <input type="text" name="asunto" class="form-control" placeholder="Escribe el asunto del correo:" required>
                                </div>

                                <!-- Textarea Contenido Correo Electronico -->
                                <div class="mb-3">
                                    <textarea name="contenido" rows="5" class="form-control" placeholder="Escribe el contenido del correo:" required></textarea>
                                </div>

                                <!-- Files Input -->
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Adjunta tu hoja de vida (PDF).</label>
                                    <input class="form-control" type="file" id="formFile" name="file">
                                </div>

                                <!-- Boton Enviar -->
                                <div class="mb-3">
                                    <button type="submit" name="submit" class="btn btn-danger text-dark">
                                        Enviar <i class="bi bi-send"></i>
                                    </button>
                                </div>
                                <br>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>