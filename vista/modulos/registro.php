<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="/action_page.php">
                    <h2>Registrarse</h2>
                    <div class="inputbox">
                        <ion-icon name="pencil-outline"></ion-icon>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                        <label for="text" class="form-label">Nombres:</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="pencil-outline"></ion-icon>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        <label for="text" class="form-label">Apellidos:</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="number" class="form-control" id="telefono" name="telefono" required>
                        <label for="number" class="form-label">Telefono:</label>
                    </div>
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
                    <button>Crear Cuenta</button>
                    <div class="register">
                        <p>Ya tengo una Cuenta <a href="#">Iniciar Sesion</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>