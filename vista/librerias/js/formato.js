$(function () {
  cargarCards();

  const forms = document.querySelectorAll("#formato");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        event.preventDefault();
        if (!form.checkValidity()) {
          event.stopPropagation();
          form.classList.add("was-validated");
          
        } else {
          let nombre = $("#nombre").val();
          let documento = $("#documento").val();
          let cargo = $("#cargo").val();
          let telefono = $("#telefono").val();
          let email = $("#email").val();
          let direccion = $("#direccion").val();
          let estudios1 = $("#estudios1").val();
          let estudios2 = $("#estudios2").val();
          let estudios3 = $("#estudios3").val();
          let estudios4 = $("#estudios4").val();
          let experiencia1 = $("#experiencia1").val();
          let experiencia2 = $("#experiencia2").val();
          let experiencia3 = $("#experiencia3").val();
          let experiencia4 = $("#experiencia4").val();
          let habilidades1 = $("#habilidades1").val();
          let habilidades2 = $("#habilidades2").val();
          let habilidades3 = $("#habilidades3").val();
          let habilidades4 = $("#habilidades4").val();
          let referencias1 = $("#referencias1").val();
          let referencias2 = $("#referencias2").val();
          let referencias3 = $("#referencias3").val();
          let referencias4 = $("#referencias4").val();
          let telefonoReferencia1 = $("#telefonoReferencia1").val();
          let telefonoReferencia2 = $("#telefonoReferencia2").val();
          let telefonoReferencia3 = $("#telefonoReferencia3").val();
          let telefonoReferencia4 = $("#telefonoReferencia4").val();

          let objData = new FormData();
          objData.append("nombre", nombre);
          objData.append("documento", documento);
          objData.append("cargo", cargo);
          objData.append("telefono", telefono);
          objData.append("email", email);
          objData.append("direccion", direccion);
          objData.append("estudios1", estudios1);
          objData.append("estudios2", estudios2);
          objData.append("estudios3", estudios3);
          objData.append("estudios4", estudios4);
          objData.append("experiencia1", experiencia1);
          objData.append("experiencia2", experiencia2);
          objData.append("experiencia3", experiencia3);
          objData.append("experiencia4", experiencia4);
          objData.append("habilidades1", habilidades1);
          objData.append("habilidades2", habilidades2);
          objData.append("habilidades3", habilidades3);
          objData.append("habilidades4", habilidades4);
          objData.append("referencias1", referencias1);
          objData.append("referencias2", referencias2);
          objData.append("referencias3", referencias3);
          objData.append("referencias4", referencias4);
          objData.append("telefonoReferencia1", telefonoReferencia1);
          objData.append("telefonoReferencia2", telefonoReferencia2);
          objData.append("telefonoReferencia3", telefonoReferencia3);
          objData.append("telefonoReferencia4", telefonoReferencia4);

          fetch("control/formatoControl.php", {
            method: "POST",
            body: objData,
          })
            .then((response) => response.json())
            .then((response) => {
              if (response["codigo"] == "200") {
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  title: "Formato Almacenado Correctamente",
                  showConfirmButton: false,
                  timer: 1500,
                });
              } else {
                Swal.fire({
                  position: "top-end",
                  icon: "error",
                  title: "Ocurrio un error al Almacenar el Formato",
                  showConfirmButton: false,
                  timer: 1500,
                });
              }
            });
        }
      },
      false
    );
  });

  function cargarCards() {
    // Corregir el uso de $("#contenedorCard")
    let usuario = $("#contenedorCard").attr("usuario");
    let objData = new FormData();
    objData.append("cargarCards", usuario);
    fetch("control/formatoControl.php", {
      method: "POST",
      body: objData,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response["codigo"] == "200") {
          $("#contenedorCard").html("");

          response["mensaje"].forEach(listarCardsUsuario);
          function listarCardsUsuario(item, index) {
            var interfaces = '<a href="formato2?' + item.idhoja_de_vida + '">';
            interfaces += '<div class="card2">LIFE SHEET</div>';
            interfaces += "</a>";

            $("#contenedorCard").append(interfaces);
          }
          
          console.log(response['mensaje']);
          $("#nombre").val(response['mensaje'][0]['nombre']);
          $("#documento").val(response['mensaje'][0]['documento']);
          $("#cargo").val(response['mensaje'][0]['cargo']);
          $("#telefono").val(response['mensaje'][0]['telefono']);
          $("#email").val(response['mensaje'][0]['email']);
          $("#direccion").val(response['mensaje'][0]['direccion']);
          $("#estudios1").val(response['mensaje'][0]['estudios1']);
          $("#estudios2").val(response['mensaje'][0]['estudios2']);
          $("#estudios3").val(response['mensaje'][0]['estudios3']);
          $("#estudios4").val(response['mensaje'][0]['estudios4']);
          $("#experiencia1").val(response['mensaje'][0]['experiencia1']);
          $("#experiencia2").val(response['mensaje'][0]['experiencia2']);
          $("#experiencia3").val(response['mensaje'][0]['experiencia3']);
          $("#experiencia4").val(response['mensaje'][0]['experiencia4']);
          $("#habilidades1").val(response['mensaje'][0]['habilidades1']);
          $("#habilidades2").val(response['mensaje'][0]['habilidades2']);
          $("#habilidades3").val(response['mensaje'][0]['habilidades3']);
          $("#habilidades4").val(response['mensaje'][0]['habilidades4']);
          $("#referencias1").val(response['mensaje'][0]['referencias1']);
          $("#referencias2").val(response['mensaje'][0]['referencias2']);
          $("#referencias3").val(response['mensaje'][0]['referencias3']);
          $("#referencias4").val(response['mensaje'][0]['referencias4']);
          $("#telefonoReferencia1").val(response['mensaje'][0]['telefonoReferencia1']);
          $("#telefonoReferencia2").val(response['mensaje'][0]['telefonoReferencia2']);
          $("#telefonoReferencia3").val(response['mensaje'][0]['telefonoReferencia3']);
          $("#telefonoReferencia4").val(response['mensaje'][0]['telefonoReferencia4']);
          $("#usuario_idusuario").val(response['mensaje'][0]['usuario_idusuario']);
        }
      });
  }

  function cargarFormato() {
    // Corregir el uso de $("#contenedorCard")
    let objData = new FormData();
    objData.append("cargarDatosForm", window.location.search.split('?')[1]);
    fetch("control/formatoControl.php", {
      method: "POST",
      body: objData,
    })
      .then((response) => response.json())
      .then((response) => {
        if (response["codigo"] == "200") {
          $("#contenedorCard").html("");

          response["mensaje"].forEach(listarCardsUsuario);
          function listarCardsUsuario(item, index) {
            var interfaces = '<a href="formato2?' + item.idhoja_de_vida + '">';
            interfaces += '<div class="card2">LIFE SHEET</div>';
            interfaces += "</a>";

            $("#contenedorCard").append(interfaces);
          }
          console.log(response['mensaje']);
          $("#nombre").val(response['mensaje'][0]['nombre']);
          $("#documento").val(response['mensaje'][0]['documento']);
          $("#cargo").val(response['mensaje'][0]['cargo']);
          $("#telefono").val(response['mensaje'][0]['telefono']);
          $("#email").val(response['mensaje'][0]['email']);
          $("#direccion").val(response['mensaje'][0]['direccion']);
          $("#estudios1").val(response['mensaje'][0]['estudios1']);
          $("#estudios2").val(response['mensaje'][0]['estudios2']);
          $("#estudios3").val(response['mensaje'][0]['estudios3']);
          $("#estudios4").val(response['mensaje'][0]['estudios4']);
          $("#experiencia1").val(response['mensaje'][0]['experiencia1']);
          $("#experiencia2").val(response['mensaje'][0]['experiencia2']);
          $("#experiencia3").val(response['mensaje'][0]['experiencia3']);
          $("#experiencia4").val(response['mensaje'][0]['experiencia4']);
          $("#habilidades1").val(response['mensaje'][0]['habilidades1']);
          $("#habilidades2").val(response['mensaje'][0]['habilidades2']);
          $("#habilidades3").val(response['mensaje'][0]['habilidades3']);
          $("#habilidades4").val(response['mensaje'][0]['habilidades4']);
          $("#referencias1").val(response['mensaje'][0]['referencias1']);
          $("#referencias2").val(response['mensaje'][0]['referencias2']);
          $("#referencias3").val(response['mensaje'][0]['referencias3']);
          $("#referencias4").val(response['mensaje'][0]['referencias4']);
          $("#telefonoReferencia1").val(response['mensaje'][0]['telefonoReferencia1']);
          $("#telefonoReferencia2").val(response['mensaje'][0]['telefonoReferencia2']);
          $("#telefonoReferencia3").val(response['mensaje'][0]['telefonoReferencia3']);
          $("#telefonoReferencia4").val(response['mensaje'][0]['telefonoReferencia4']);
          $("#usuario_idusuario").val(response['mensaje'][0]['usuario_idusuario']);
        }
      });
  }

  if(window.location.search.split('?')[1]) {
    cargarFormato();
  }
});
