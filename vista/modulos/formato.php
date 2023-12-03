<nav class="navbar navbar-expand-sm navbar-light mb-3" id="neubar">
    <div class="container">
    <a href="inicio"><img src="vista\imagenes\logoo.png" width="80"></a>
        <FONT SIZE="6" FACE="Cooper Black" COLOR="black">LIFE SHEET</FONT>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">

                <FONT SIZE="6" FACE="Cooper Black" COLOR="black">HOJA DE VIDA</FONT>

                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Opciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="mail">Enviar Email  <i class="bi bi-envelope"></i></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="row col-md-3 offset-md-2 btn">
    <a href="principal">
        <button class="button">
            <div class="button-box">
                <span class="button-elem">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 40">
                        <path d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z"></path>
                    </svg>
                </span>
                <span class="button-elem">
                    <svg viewBox="0 0 46 40">
                        <path d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z"></path>
                    </svg>
                </span>
            </div>
        </button>
    </a>
</div>


<div class="container1">

<div class="header">
    <h1 class="marcoh2">HOJA DE VIDA</h1>
        <div class="container nombre-container needs-validation">
            <form action="" method="POST" id="formato">
                <div class="inputboxf">
                    <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Nombre Completo</FONT>
                    <ion-icon name="person"></ion-icon>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <label for="nombre" class="form-label"></label>
                </div>
                <div class="inputboxf">
                    <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Cargo</FONT>
                    <ion-icon name="document-text"></ion-icon>
                    <input type="text" class="form-control" id="cargo" name="cargo" required>
                    <label for="cargo" class="form-label"></label>
                </div>
            </div>

            <div class="main">
                <div class="left">
                    <h2 class="marcoh2">Información Personal</h2>
                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Documento</FONT>
                        <ion-icon name="id-card"></ion-icon>
                        <input type="number" class="form-control" id="documento" name="documento" required>
                        <label for="documento" class="form-label"></label>
                    </div>
                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Telefono</FONT>
                        <ion-icon name="call"></ion-icon>
                        <input type="number" class="form-control" id="telefono" name="telefono" required>
                        <label for="telefono" class="form-label"></label>
                    </div>
                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Email</FONT>
                        <ion-icon name="mail"></ion-icon>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <label for="email" class="form-label"></label>
                    </div>
                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Direccion</FONT>
                        <ion-icon name="compass"></ion-icon>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                        <label for="direccion" class="form-label"></label>
                    </div>

                    <h2 class="marcoh2">Habilidades</h2>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidad 1</FONT>
                        <ion-icon name="barbell"></ion-icon>
                        <input type="text" class="form-control" id="habilidades1" name="habilidades1" required>
                        <label for="habilidades1" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidad 2</FONT>
                        <ion-icon name="barbell"></ion-icon>
                        <input type="text" class="form-control" id="habilidades2" name="habilidades2" required>
                        <label for="habilidades2" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidad 3</FONT>
                        <ion-icon name="barbell"></ion-icon>
                        <input type="text" class="form-control" id="habilidades3" name="habilidades3" required>
                        <label for="habilidades3" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidad 4</FONT>
                        <ion-icon name="barbell"></ion-icon>
                        <input type="text" class="form-control" id="habilidades3" name="habilidades4" required>
                        <label for="habilidades4" class="form-label"></label>
                    </div>

                    <h2 class="marcoh2">Referencias</h2>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencia 1</FONT>
                        <ion-icon name="people"></ion-icon>
                        <input type="text" class="form-control" id="referencias1" name="referencias1" required>
                        <label for="referencias1" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencia 2</FONT>
                        <ion-icon name="people"></ion-icon>
                        <input type="text" class="form-control" id="referencias2" name="referencias2" required>
                        <label for="referencias2" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencia 3</FONT>
                        <ion-icon name="people"></ion-icon>
                        <input type="text" class="form-control" id="referencias3" name="referencias3" required>
                        <label for="referencias3" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencia 4</FONT>
                        <ion-icon name="people"></ion-icon>
                        <input type="text" class="form-control" id="referencias3" name="referencias4" required>
                        <label for="referencias4" class="form-label"></label>
                    </div><br><br>

                    <div class="col-md-2 offset-md-4">
                        <button type="button" class="btn btn-danger" onclick="imprimir()">Descargar
                        <i class="bi bi-filetype-pdf"></i></button>
                        <script>
                            function imprimir() {
                            window.print();
                        }
                        </script>
                    </div>

                </div>

                <div class="right">
                    
                    <h2 class="marcoh2">Experiencia</h2>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia 1</FONT>
                        <ion-icon name="ribbon"></ion-icon>
                        <input type="text" class="form-control" id="experiencia1" name="experiencia1" required>
                        <label for="experiencia1" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia 2</FONT>
                        <ion-icon name="ribbon"></ion-icon>
                        <input type="text" class="form-control" id="experiencia2" name="experiencia2" required>
                        <label for="experiencia2" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia 3</FONT>
                        <ion-icon name="ribbon"></ion-icon>
                        <input type="text" class="form-control" id="experiencia3" name="experiencia3" required>
                        <label for="experiencia3" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia 4</FONT>
                        <ion-icon name="ribbon"></ion-icon>
                        <input type="text" class="form-control" id="experiencia3" name="experiencia4" required>
                        <label for="experiencia4" class="form-label"></label>
                    </div>

                    <h2 class="marcoh2">Educación</h2>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudio 1</FONT>
                        <ion-icon name="library"></ion-icon>
                        <input type="text" class="form-control" id="estudios1" name="estudios1" required>
                        <label for="estudios1" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudio 2</FONT>
                        <ion-icon name="library"></ion-icon>
                        <input type="text" class="form-control" id="estudios2" name="estudios2" required>
                        <label for="estudios2" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudio 3</FONT>
                        <ion-icon name="library"></ion-icon>
                        <input type="text" class="form-control" id="estudios3" name="estudios3" required>
                        <label for="estudios3" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudio 4</FONT>
                        <ion-icon name="library"></ion-icon>
                        <input type="text" class="form-control" id="estudios4" name="estudios4" required>
                        <label for="estudios4" class="form-label"></label>
                    </div>

                
                <h2 class="marcoh2">Contacto Referencia</h2>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Telefono</FONT>
                        <ion-icon name="call"></ion-icon>
                        <input type="text" class="form-control" id="telefonoReferencia1" name="telefonoReferencia1" required>
                        <label for="telefonoReferencia1" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Telefono</FONT>
                        <ion-icon name="call"></ion-icon>
                        <input type="text" class="form-control" id="telefonoReferencia2" name="telefonoReferencia2" required>
                        <label for="telefonoReferencia2" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Telefono</FONT>
                        <ion-icon name="call"></ion-icon>
                        <input type="text" class="form-control" id="telefonoReferencia3" name="telefonoReferencia3" required>
                        <label for="telefonoReferencia3" class="form-label"></label>
                    </div>

                    <div class="inputboxf">
                        <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Telefono</FONT>
                        <ion-icon name="call"></ion-icon>
                        <input type="text" class="form-control" id="telefonoReferencia4" name="telefonoReferencia4" required>
                        <label for="telefonoReferencia4" class="form-label"></label>
                    </div>
                </form><br><br>
                <div class="col-md-2 offset-md-4" id="transferir">
                        <button type="submit" class="btn btn-info"">Guardar
                        <i class="bi bi-save"></i>
                </div>

            </div>
        </div>
    </div>