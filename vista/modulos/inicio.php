<?php

include_once "vista/modulos/nav.php";

?>


  <!-- Boton hacia arriba -->
  <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack" style="font-size: 2em;">
    <i class="bi bi-arrow-up-circle-fill"></i>
  </span>
</a>
  
<div id="mis-estilos">
<!-- Sección 1 -->
<div id="section1" class="section">
    <!-- Contenedor para la imagen y el título -->
    <div class="content-container">
      <!-- Contenedor de la imagen -->
      <div class="image-container">
        <!-- Imagen de fondo con opacidad -->
        <img class="background-image" src="https://s1.eestatic.com/2022/11/10/mujer/717438662_228605876_1706x960.jpg" alt="Imagen de fondo">
                <!-- Overlay oscuro -->
        <div class="overlay"></div>
        <div class="text-on-image">
            <h1>¡Life Sheet!</h1>
          </div>
      </div>
      
      <!-- ========================================================== -->
      
      <!-- Contenedor del texto -->
      <div class="text-container text-center">
        <!-- Contenido adicional de la sección 1 -->
        <!-- Título de la página -->
        <div>
        <h1>¡Bienvenido!</h1>
        <hr>
        <p class="mb-4">Acá podrás generar tus hojas de vida y descargarlas en PDF.</p>
        </div>
        <a href="login">
        <button type="button" class="btn btn-success mb-3">Comenzar <i class="bi bi-door-closed"></i></button>
        </a>
        <br>
        <img src="vista\imagenes\kokoCv.png" width="200">

        </div>
    </div>
  </div>


<!-- Sección 2 -->
<div id="section2" class="section">
  <div class="container">
    <div class="row">
      <!-- Lado izquierdo -->
      <div class="col-md-6">
        <h1>Usa nuestras plantillas</h1>
        <hr>
        <p>Puedes usar nuestras plantillas para generar tu hoja de vida en el formato que requieras.</p>
      </div>

      <!-- Lado derecho -->
      <div class="col-md-6">
        <h1>¡Descargalas como PDF!</h1>
        <hr>
        <p>Descargra tu hoja de vida como PDF para que puedas imprimirla o compartirla con nosotros.</p>
      </div>
    </div>
  </div>
</div>


  <!-- Sección 3 -->
  <div id="section3" class="section">
    <div class="container text-center">
      <h1>Puedes compartir tus hojas de vida con nosotros.</h1>
      <p>Te porporcionamos nuestro correo para que puedas compartir tus hojas de vida al destinatario deseado.</p>
      <img src="vista\imagenes\kokoShare.png" width="230">
      <br>
      <a href="login">
      <button type="button" class="btn btn-success mb-3">Compartir <i class="bi bi-share"></i></button>
      </a>
    </div>
  </div>

  <!-- Sección 4 -->
  <div id="section4" class="section">
    <div class="container">
      <h1>¿Quienes somos?</h1>
      <p>Somos un trio de aprendices del SENA, trabajando grupalmente para el desarrollo de ésta página web.</p>
      
      <div class="text-center">
      <!-- Button to Open the Modal -->
      <button type="button" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#myModal">
        Más Información <i class="bi bi-info-circle"></i>
      </button>
      <br>
      <img src="vista\imagenes\trio.png" width="250" class="mt-4">
      </div>
    </div>
  </div>


  <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">¿Quienes somos?</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

    <section>
        <h2>Sobre Nosotros: Life Sheet</h2>
        <hr>
        <p>¡Saludos! Somos un entusiasta grupo de tres estudiantes dedicados a hacer que tu experiencia en Life Sheet sea excepcional. Life Sheet es más que una simple página web; es un recurso diseñado para simplificar y mejorar tu vida diaria.</p>

        <h3>Nuestro Equipo:</h3>
        <ul>
            <li>Ginna Vargas</li>
            <li>Samuel Muñoz</li>
            <li>Aaron Ochoa</li>
        </ul>

        <p>Cada miembro de nuestro equipo aporta habilidades únicas y una pasión compartida por la innovación. Estamos comprometidos a ofrecerte contenido valioso, funciones intuitivas y un diseño atractivo que se adapte a tus necesidades.</p>
    </section>

    <section>
        <h3>Contáctanos:</h3>
        <p>¿Tienes preguntas, sugerencias o simplemente deseas ponerte en contacto con nosotros? No dudes en escribirnos a nuestro correo electrónico:</p>

        <p><strong>Correo Electrónico:</strong> <a href="mailto:Life.3.Sheet@gmail.com">Life.3.Sheet@gmail.com</a></p>

        <p>Estamos aquí para escucharte y mejorar continuamente Life Sheet para que sea una herramienta útil y valiosa para ti. ¡Gracias por ser parte de nuestra comunidad!</p>
    </section>

    
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cerrar <i class="bi bi-x-circle"></i></button>
      </div>

    </div>
  </div>
</div>
</div>


<div class="text-center">
<footer>
        <p>&copy; 2023 Life Sheet. Todos los derechos reservados.</p>
</footer>
</div>



