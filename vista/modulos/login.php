<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
        <a href="inicio"><img src="vista\imagenes\lsLogo.png" width="80"></a>
        <FONT SIZE="6" FACE="Cooper Black" COLOR="black">LIFE SHEET</FONT>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item-dos">
                    <a class="nav-link mx-2 active" aria-current="page" href="registro">Registrarse</a>
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

  
  <section class="section-login">
    <div class="form-boxl">
      <div class="form-value">

      <!-- form -->
        <form id="loginForm" class="needs-validation" novalidate>
          <h2 class="h2login">Iniciar Sesion</h2>
          <div class="inputboxl">

            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" class="form-control" id="email" name="email" required>
            <label for="email" class="form-label">Email:</label>
            <div class="valid-feedback">¡Se ve bien!</div>
            <div class="invalid-feedback">Por favor, ingresa tu correo.</div>
          </div>

          <div class="inputboxl">

            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" class="form-control" id="password" name="password" required>
            <label for="pwd" class="form-label">Contraseña:</label>
            <div class="valid-feedback">¡Se ve bien!</div>
            <div class="invalid-feedback">Por favor, ingresa tu contraseña.</div>
          </div>

          <button type="submit" class="btn btn-success">Ingresar <i class="bi bi-door-closed"></i></button>
          <div class="registerl">
            <p>No tengo una cuenta <a href="registro">Registrarse</a></p>

          </div>
        </form>
      </div>
    </div>
  </section>