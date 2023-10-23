<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="/action_page.php">
          <h2>Iniciar Sesion</h2>
          <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" class="form-control" id="email" name="email" required>
            <label for="email" class="form-label">Email:</label>
          </div>
          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" class="form-control" id="pwd" name="pswd" required>
            <label for="pwd" class="form-label">Contraseña:</label>
          </div>
          <div class="forget">
            <label for=""><input type="checkbox" name="remember">Recordar Datos <a href="#">Olvide mi constraseña</a></label>
          </div>
          <button>Ingresar</button>
          <div class="register">
            <p>No tengo una cuenta <a href="#">Registrarse</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>