<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
        <div class="container">
            <a href="inicio"><img src="vista\imagenes\logoo.png" width="80"></a>
            <FONT SIZE="6" FACE="Cooper Black" COLOR="black" >LIFE SHEET</FONT>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">

                <FONT SIZE="6" FACE="Cooper Black" COLOR="black" >HOJA DE VIDA</FONT>

                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Opciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="contacto">Contacto</a></li>
                            <li><a class="dropdown-item" href="mail">Enviar Email</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<div class="col-md-2 offset-md-4">
        <button type="button" class="btn btn-danger" onclick="imprimir()"> Descargar en PDF</button>
        <script>
            function imprimir(){
                window.print();
            }
        </script>
        </div>  
<div class="container1">
      <div class="header">
        <div class="img-area">
        <img src="vista/imagenes/logoo.png" >
        </div>
        <div class="container nombre-container">
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
          <h2>Información Personal</h2>
            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Documento</FONT>
                <ion-icon name="id-card"></ion-icon>
                <input type="number" class="form-control" id="documento" name="documento" required>
                <label for="documento" class="form-label"></label>
            </div>
            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Telefono</FONT>
                <ion-icon name="call"></ion-icon>
                <input type="number" class="form-control" id="telefono" name="telefono" required>
                <label for="telefono" class="form-label"></label>
            </div>
            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Email</FONT>
                <ion-icon name="mail"></ion-icon>
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="email" class="form-label"></label>
            </div>
            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Direccion</FONT>
                <ion-icon name="compass"></ion-icon>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
                <label for="direccion" class="form-label"></label>
            </div>

          <h2>Habilidades</h2>
          
            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidad 1</FONT>
                <ion-icon name="barbell"></ion-icon>
                <input type="text" class="form-control" id="habilidades1" name="habilidades1" required>
                <label for="habilidades1" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidad 2</FONT>
                <ion-icon name="barbell"></ion-icon>
                <input type="text" class="form-control" id="habilidades2" name="habilidades2" required>
                <label for="habilidades2" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidad 3</FONT>
                <ion-icon name="barbell"></ion-icon>
                <input type="text" class="form-control" id="habilidades3" name="habilidades3" required>
                <label for="habilidades3" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidad 4</FONT>
                <ion-icon name="barbell"></ion-icon>
                <input type="text" class="form-control" id="habilidades3" name="habilidades4" required>
                <label for="habilidades4" class="form-label"></label>
            </div>

        <h2>Referencias</h2>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencia 1</FONT>
                <ion-icon name="people"></ion-icon>
                <input type="text" class="form-control" id="referencias1" name="referencias1" required>
                <label for="referencias1" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencia 2</FONT>
                <ion-icon name="people"></ion-icon>
                <input type="text" class="form-control" id="referencias2" name="referencias2" required>
                <label for="referencias2" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencia 3</FONT>
                <ion-icon name="people"></ion-icon>
                <input type="text" class="form-control" id="referencias3" name="referencias3" required>
                <label for="referencias3" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencia 4</FONT>
                <ion-icon name="people"></ion-icon>
                <input type="text" class="form-control" id="referencias3" name="referencias4" required>
                <label for="referencias4" class="form-label"></label>
            </div>

        </div>
        
        <div class="right">
          <h2>Experiencia</h2>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia 1</FONT>
                <ion-icon name="ribbon"></ion-icon>
                <input type="text" class="form-control" id="experiencia1" name="experiencia1" required>
                <label for="experiencia1" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia 2</FONT>
                <ion-icon name="ribbon"></ion-icon>
                <input type="text" class="form-control" id="experiencia2" name="experiencia2" required>
                <label for="experiencia2" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia 3</FONT>
                <ion-icon name="ribbon"></ion-icon>
                <input type="text" class="form-control" id="experiencia3" name="experiencia3" required>
                <label for="experiencia3" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia 4</FONT>
                <ion-icon name="ribbon"></ion-icon>
                <input type="text" class="form-control" id="experiencia3" name="experiencia4" required>
                <label for="experiencia4" class="form-label"></label>
            </div>

          <h2>Educación</h2>
          
            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudio 1</FONT>
                <ion-icon name="library"></ion-icon>
                <input type="text" class="form-control" id="estudios1" name="estudios1" required>
                <label for="estudios1" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudio 2</FONT>
                <ion-icon name="library"></ion-icon>
                <input type="text" class="form-control" id="estudios2" name="estudios2" required>
                <label for="estudios2" class="form-label"></label>
            </div>
            
            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudio 3</FONT>
                <ion-icon name="library"></ion-icon>
                <input type="text" class="form-control" id="estudios3" name="estudios3" required>
                <label for="estudios3" class="form-label"></label>
            </div>

            <div class="inputboxi">
                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudio 4</FONT>
                <ion-icon name="library"></ion-icon>
                <input type="text" class="form-control" id="estudios4" name="estudios4" required>
                <label for="estudios4" class="form-label"></label>
            </div>

        </div>
      </div>
    </div> 

<!-- <div class="container mt-3">
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
                        <!-- Nombre --
                        <div class="container nombre-container">
                            <div class="inputboxi">
                            <ion-icon name="person"></ion-icon>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                <label for="nombre" class="form-label">
                                    <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Nombre Completo:</FONT>
                                </label>
                            </div>
                    </td>
                    <td>
                        <!-- Cargo --
                        <div class="inputboxi">
                        <ion-icon name="document-text"></ion-icon>
                            <input type="text" class="form-control" id="cargo" name="cargo" required>
                            <label for="cargo" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Cargo:</FONT>
                            </label>
                        </div>
                    </td>
                    <td>
                    <img src="vista/imagenes/life_sheet_logo0.png" style="height: 100px; width:200px;">
                    </td>
                </tr>

                <tr>
                    <td><img src="vista/imagenes/logoo.png" style="height: 200x; width:200px;"></td>
                    <td>
                        <!-- Datos Personales --
                        <div class="inputboxi">
                        <ion-icon name="id-card"></ion-icon>
                            <input type="number" class="form-control" id="documento" name="documento" required>
                            <label for="documento" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Documento:</FONT>
                            </label>
                        </div>

                        <div class="inputboxi">
                        <ion-icon name="call"></ion-icon>
                            <input type="number" class="form-control" id="telefono" name="telefono" required>
                            <label for="telefono" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Telefono:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="mail"></ion-icon>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <label for="email" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Email:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="compass"></ion-icon>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                            <label for="direccion" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Direccion:</FONT>
                            </label>
                        </div>
                    </td>

                    <td>
                        <!-- Estudios o Certificados --
                        <div class="inputboxi">
                        <ion-icon name="library"></ion-icon>
                            <input type="text" class="form-control" id="estudios1" name="estudios1" required>
                            <label for="estudios1" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudios1:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="library"></ion-icon>
                            <input type="text" class="form-control" id="estudios2" name="estudios2" required>
                            <label for="estudios2" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudios2:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="library"></ion-icon>
                            <input type="text" class="form-control" id="estudios3" name="estudios3" required>
                            <label for="estudios3" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudios3:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="library"></ion-icon>
                            <input type="text" class="form-control" id="estudios4" name="estudios4" required>
                            <label for="estudios4" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Estudios4:</FONT>
                            </label>
                        </div> 
                    </td>
                </tr>

                <tr>
                    <td>
                        <!-- Experiencia Laboral 
                        <div class="inputboxi">
                        <ion-icon name="ribbon"></ion-icon>
                            <input type="text" class="form-control" id="experiencia1" name="experiencia1" required>
                            <label for="experiencia1" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia1:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="ribbon"></ion-icon>
                            <input type="text" class="form-control" id="experiencia2" name="experiencia2" required>
                            <label for="experiencia2" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia2:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="ribbon"></ion-icon>
                            <input type="text" class="form-control" id="experiencia3" name="experiencia3" required>
                            <label for="experiencia3" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Experiencia3:</FONT>
                            </label>
                        </div>
                    </td>

                    <td>
                        <!-- Habilidades Personales y Sociales 
                        <div class="inputboxi">
                        <ion-icon name="barbell"></ion-icon>
                            <input type="text" class="form-control" id="habilidades1" name="habilidades1" required>
                            <label for="habilidades1" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidades1:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="barbell"></ion-icon>
                            <input type="text" class="form-control" id="habilidades2" name="habilidades2" required>
                            <label for="habilidades2" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidades2:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="barbell"></ion-icon>
                            <input type="text" class="form-control" id="habilidades3" name="habilidades3" required>
                            <label for="habilidades3" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Habilidades3:</FONT>
                            </label>
                        </div>
                    </td>

                    <td>
                        <!-- Referencias Personales
                        <div class="inputboxi">
                            <ion-icon name="people"></ion-icon>
                            <input type="text" class="form-control" id="referencias1" name="referencias1" required>
                            <label for="referencias1" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencias1:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="people"></ion-icon>
                            <input type="text" class="form-control" id="referencias2" name="referencias2" required>
                            <label for="referencias2" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencias2:</FONT>
                            </label>
                        </div>
                        <div class="inputboxi">
                        <ion-icon name="people"></ion-icon>
                            <input type="text" class="form-control" id="referencias3" name="referencias3" required>
                            <label for="referencias3" class="form-label">
                                <FONT SIZE="6 " FACE="Montserrat" COLOR="black" class="h6">Referencias3:</FONT>
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2 offset-md-9">
                <button type="button" class="btn btn-outline-info" style="width: 100px; height: 100px;">
                    <img src="vista/imagenes/chat.png" style="width: 110px; height: 80px;">
                </button>
            </div>
</div> -->
