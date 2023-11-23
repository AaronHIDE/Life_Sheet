<?php
include_once "vista/modulos/nav.php";
?>

<body style="background-image: url(vista/imagenes/fondo2.jpg);" class="fondo">

    <section class="container col-md-3">
        <div class="form-box2">
            <div class="form-value">
                <form action="" id="registro">
                    <center><FONT SIZE="6" FACE="Cooper Black" COLOR="white">REGISTRARSE</FONT></center>

                    <div class="inputbox">
                        <ion-icon name="pencil-outline"></ion-icon>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                        <label for="text" class="form-label">
                            <FONT SIZE="6" FACE="Times new roman" COLOR="black" class="h5">Nombres:</FONT>
                        </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="pencil-outline"></ion-icon>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        <label for="text" class="form-label">
                            <FONT SIZE="6" FACE="Times new roman" COLOR="black" class="h5">Apellidos:</FONT>

                        </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="number" class="form-control" id="telefono" name="telefono" required>
                        <label for="number" class="form-label">
                            <FONT SIZE="6" FACE="Times new roman" COLOR="black" class="h5">Telefono:</FONT>

                        </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <label for="email" class="form-label">
                            <FONT SIZE="6" FACE="Times new roman" COLOR="black" class="h5">Email:</FONT>

                        </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="passwordR" class="form-control" id="passwordR" name="passwordR" required>
                        <label for="password" class="form-label">
                            <FONT SIZE="6" FACE="Times new roman" COLOR="black" class="h5">Contraseña:</FONT>

                        </label>
                    </div>
                    <button>Crear Cuenta</button>
                    <br><br>
                    <div class="register">
                        <p>Ya tengo una Cuenta <a href="login">Iniciar Sesion</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>