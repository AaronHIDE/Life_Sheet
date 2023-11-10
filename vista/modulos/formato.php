<div class="container mt-3">
    <div class="h1-container">
        <FONT FACE="Montserrat" COLOR="black" class="h1">Hoja de Vida</FONT>
        <div class="col-md-2 offset-md-4">
        <button type="button" class="btn btn-danger" onclick="imprimir()"> Descargar en PDF</button>
        <script>
            function imprimir(){
                window.print();
            }
        </script>
        </div>  
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="formato1">
            <tbody>
                <tr>
                    <td>
                        <!-- Nombre -->
                        <div class="container nombre-container">
                            <div class="inputboxf">
                            <ion-icon name="person"></ion-icon>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                <label for="nombre" class="form-label">
                                    <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Nombre Completo:</FONT>
                                </label>
                            </div>
                    </td>
                    <td>
                        <!-- Cargo -->
                        <div class="inputboxf">
                        <ion-icon name="document-text"></ion-icon>
                            <input type="text" class="form-control" id="cargo" name="cargo" required>
                            <label for="cargo" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Cargo:</FONT>
                            </label>
                        </div>
                    </td>
                    <td>
                    <img src="vista/imagenes/life_sheet_logo0.png" style="height: 100px; width:310px;">
                    </td>
                </tr>

                <tr>
                    <td><img src="vista/imagenes/logoo.png" style="height: 320px; width:320px;"></td>
                    <td>
                        <!-- Datos Personales -->
                        <div class="inputboxf">
                        <ion-icon name="id-card"></ion-icon>
                            <input type="number" class="form-control" id="documento" name="documento" required>
                            <label for="documento" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Documento:</FONT>
                            </label>
                        </div>

                        <div class="inputboxf">
                        <ion-icon name="call"></ion-icon>
                            <input type="number" class="form-control" id="telefono" name="telefono" required>
                            <label for="telefono" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Telefono:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="mail"></ion-icon>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <label for="email" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Email:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="compass"></ion-icon>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                            <label for="direccion" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Direccion:</FONT>
                            </label>
                        </div>
                    </td>

                    <td>
                        <!-- Estudios o Certificados -->
                        <div class="inputboxf">
                        <ion-icon name="library"></ion-icon>
                            <input type="text" class="form-control" id="estudios1" name="estudios1" required>
                            <label for="estudios1" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Estudios1:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="library"></ion-icon>
                            <input type="text" class="form-control" id="estudios2" name="estudios2" required>
                            <label for="estudios2" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Estudios2:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="library"></ion-icon>
                            <input type="text" class="form-control" id="estudios3" name="estudios3" required>
                            <label for="estudios3" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Estudios3:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="library"></ion-icon>
                            <input type="text" class="form-control" id="estudios4" name="estudios4" required>
                            <label for="estudios4" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Estudios4:</FONT>
                            </label>
                        </div> 
                    </td>
                </tr>

                <tr>
                    <td>
                        <!-- Experiencia Laboral -->
                        <div class="inputboxf">
                        <ion-icon name="ribbon"></ion-icon>
                            <input type="text" class="form-control" id="experiencia1" name="experiencia1" required>
                            <label for="experiencia1" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Experiencia1:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="ribbon"></ion-icon>
                            <input type="text" class="form-control" id="experiencia2" name="experiencia2" required>
                            <label for="experiencia2" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Experiencia2:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="ribbon"></ion-icon>
                            <input type="text" class="form-control" id="experiencia3" name="experiencia3" required>
                            <label for="experiencia3" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Experiencia3:</FONT>
                            </label>
                        </div>
                    </td>

                    <td>
                        <!-- Habilidades Personales y Sociales -->
                        <div class="inputboxf">
                        <ion-icon name="barbell"></ion-icon>
                            <input type="text" class="form-control" id="habilidades1" name="habilidades1" required>
                            <label for="habilidades1" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Habilidades1:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="barbell"></ion-icon>
                            <input type="text" class="form-control" id="habilidades2" name="habilidades2" required>
                            <label for="habilidades2" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Habilidades2:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="barbell"></ion-icon>
                            <input type="text" class="form-control" id="habilidades3" name="habilidades3" required>
                            <label for="habilidades3" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Habilidades3:</FONT>
                            </label>
                        </div>
                    </td>

                    <td>
                        <!-- Referencias Personales-->
                        <div class="inputboxf">
                            <ion-icon name="people"></ion-icon>
                            <input type="text" class="form-control" id="referencias1" name="referencias1" required>
                            <label for="referencias1" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Referencias1:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="people"></ion-icon>
                            <input type="text" class="form-control" id="referencias2" name="referencias2" required>
                            <label for="referencias2" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Referencias2:</FONT>
                            </label>
                        </div>
                        <div class="inputboxf">
                        <ion-icon name="people"></ion-icon>
                            <input type="text" class="form-control" id="referencias3" name="referencias3" required>
                            <label for="referencias3" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h5">Referencias3:</FONT>
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2 offset-md-11">
                <button type="button" class="btn btn-outline-info" style="width: 100px; height: 100px;">
                    <img src="vista/imagenes/chat.png" style="width: 110px; height: 80px;">
                </button>
            </div>
</div>
