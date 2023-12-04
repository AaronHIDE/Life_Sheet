  
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

          <button type="submit" class="btn btn-success">Ingresar <i class="bi bi-door-open"></i></button>
          <div class="registerl">
            <p>No tengo una cuenta <a href="registro">Registrarse</a></p>

          </div>
        </form>
      </div>
    </div>
  </section>