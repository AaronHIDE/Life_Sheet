<?php 
include_once "vista/modulos/nav.php";
?>

<body style="background-image: url(vista/imagenes/fondo2.jpg);" class="fondo">

<br><br><br><br><br><br><br><br>
  
    <section class="container col-md-3">
      <div class="form-box">
        <div class="form-value">

          <form action="">
            <h2>INICIAR SESION</h2>

            <div class="inputbox">
              <ion-icon name="mail-outline"></ion-icon>
              <input type="email" class="form-control" id="txt_email" name="txt_email" required>
              <label for="txt_email" class="form-label">
                <FONT SIZE="6" FACE="Times new roman" COLOR="white" class="h5">Email:</FONT>
              </label>

            </div>
            <div class="inputbox">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input type="password" class="form-control" id="txt_password" name="txt_password" required>
              <label for="txt_password" class="form-label">
                <FONT SIZE="6" FACE="Times new roman" COLOR="white" class="h5">Contraseña:</FONT>
              </label>
            </div>
            <div class="forget">
              <label for=""><input type="checkbox" name="remember">Recordar Datos <a href="#">Olvide mi constraseña</a></label>
            </div>
            <button class="submit">Ingresar</button>
            <div class="register">
              <p>No tengo una cuenta <a href="registro">Registrarse</a></p>
            </div>
          </form>

        </div>
      </div>

  </section>


  <br><br><br>