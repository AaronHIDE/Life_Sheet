<div class="container">



    <div class="row">
      <div class="col-md-5 bg-gray mr mb-5">
        <h2>¡Comparte tu Hoja de Vida!</h2>
        <p style="font-size:large;">Puedes compartir por correo tu hoja de vida previamente descargada como PDF.</p>
        <div style="display: flex; justify-content: center;">
        <img  style="width: 280px;" src="vista\imagenes\Koala_PDF-removebg-preview.png">
        </div>
    </div>




      <div class="col-md-5 mb-5 bg-blue">
        <h2>Ingresa tu hoja de vida Aquí.</h2>
        <div class="row">
            <div class="contact-section">
                <div class="contact-form mx-auto col-md-6">
                    <h2 style="color:black;">Enviar correo (GMAIL) por PHP.</h2>
                    <form class="contact" action="index.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" rows="5" class="form-control" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="submit" class="btn btn-danger text-dark" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
            </div>
      </div>
    </div>
  </div>

