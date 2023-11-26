<nav class="navbar navbar-expand-sm navbar-light" id="neubar" style="background-color: #0fc7c7;">
    <div class="container">
        <a href="inicio"><img src="vista\imagenes\logoo.png" width="80"></a>
        <FONT SIZE="6" FACE="Cooper Black" COLOR="black">LIFE SHEET</FONT>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="login">Iniciar Sesion</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Opciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="contacto">Contacto</a></li>
                        <li><a class="dropdown-item" href="login">Admin</a></li>
                        <li><a class="dropdown-item" href="mail">Enviar Email</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="section-registrar">
        <div class="form-boxr">
            <div class="form-value">
                <form action="/action_page.php">
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
                        <input type="password" class="form-control" id="pwd" name="pswd" required>
                        <label for="pwd" class="form-label">Contraseña:</label>
                    </div>
                    <button class="buttonregistrar">Crear Cuenta</button>
                    <div class="registerr">
                        <p>Ya tengo una Cuenta <a href="#">Iniciar Sesion</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>