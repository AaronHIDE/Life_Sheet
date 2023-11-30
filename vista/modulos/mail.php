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
            <div class="d-flex flex-column align-items-center justify-content-center">

                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-danger mb-3 col-md-5 " data-bs-toggle="modal" data-bs-target="#myModal">
                    Más Información <i class="bi bi-info-circle"></i>
                </button>
                <img style="width: 280px;" src="vista\imagenes\Koala_PDF-removebg-preview.png">
            </div>
        </div>


        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header justify-content-center">
                        <h4 class="modal-title">¡Importante!</h4>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Life Sheet te permite compartir por correo tu hoja de vida previamente descargada como PDF, sin embargo, tén en cuenta que éste proceso de envío se hace a traves de nuestro correo GMAIL.

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cerrar <i class="bi bi-x-circle"></i></button>
                    </div>

                </div>
            </div>
        </div>


        <!-- Segundo container -->
        <div class="col-md-5 mb-5 bg-gray rounded">
            <div class="row">
                <div class="contact-section">
                    <div class="contact-form mx-auto">
                        <br>
                        <FONT SIZE="6" FACE="Cooper Black" COLOR="black" class="h2">¡Adjunta tu hoja de vida!</FONT>
                        <hr>

                        <div class="container bg-white rounded mt-3">

                            <!-- Formulario  -->
                            <form id="emailForm" class="contact" action="" method="post" enctype="multipart/form-data">

                                <br>

                                <!-- Input Email Address -->
                                <div class="mb-3">
                                    <input type="email" id="destinatario" name="destinatario" class="form-control" placeholder="Escribe el correo del destinatario:" required>
                                </div>

                                <!-- Input Asunto Correo -->
                                <div class="mb-3">
                                    <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Escribe el asunto del correo:" required>
                                </div>

                                <!-- Textarea Contenido Correo Electronico -->
                                <div class="mb-3">
                                    <textarea name="contenido" id="contenido" rows="5" class="form-control" placeholder="Escribe el contenido del correo:" required></textarea>
                                </div>

                                <!-- Files Input -->
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Adjunta tu hoja de vida (PDF).</label>
                                    <input class="form-control" type="file" id="formFile" name="file" required>
                                </div>

                                <!-- Boton Enviar -->
                                <div class="mb-3">
                                    <button type="button" id="submitButton" name="submit" class="btn btn-danger mb-4">
                                        Enviar <i class="bi bi-send"></i>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>