<script src="vista/librerias/js/registro.js"></script>

<section class="section-registrar">
        <div class="form-boxr">
            <div class="form-value">
                <form action="" class="" method="POST" id="registro">
                    <h2 class="h2registrar">Registrarse</h2>
                    <div class="inputboxr">
                        <ion-icon name="pencil-outline"></ion-icon>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                        <label for="text" class="form-label">Nombres:</label>
                    </div>
                    <div class="inputboxr">
                        <ion-icon name="pencil-outline"></ion-icon>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        <label for="text" class="form-label">Apellidos:</label>
                    </div>
                    <div class="inputboxr">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="number" class="form-control" id="telefono" name="telefono" required>
                        <label for="number" class="form-label">Telefono:</label>
                    </div>
                    <div class="inputboxr">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <label for="email" class="form-label">Email:</label>
                    </div>
                    <div class="inputboxr">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class="form-control" id="passwordR" name="pswd" required>
                        <label for="pwd" class="form-label">Contraseña:</label>
                    </div>
                    <button class="btn btn-success">Crear Cuenta <i class="bi bi-plus-circle"></i></button>
                    <div class="registerr">
                        <p>Ya tengo una Cuenta <a href="login">Iniciar Sesion</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>