$(function () {

  cargarCardsFs();
    const forms = document.querySelectorAll("#aggFormatoSena");

    Array.from(forms).forEach((form) => {
        form.addEventListener("submit", (event) => {
            event.preventDefault();
            if (!form.checkValidity()) {
                event.stopPropagation();
                form.classList.add("was-validated");
            } else {
                let nombres_apellidos = $("#nombres_apellidos").val();
                let documento = $("#documento").val();
                let fecha_nacimiento = $("#fecha_nacimiento").val();
                let edad = $("#edad").val();
                let telefono_aprendiz = $("#telefono_aprendiz").val();
                let email_misena = $("#email_misena").val();
                let libreta_militar = $("#libreta_militar").val();
                let direccion = $("#direccion").val();
                let estrato = $("#estrato").val();
                let ciudad = $("#ciudad").val();

                let titulo_obtenido = $("#titulo_obtenido").val();
                let institucion_educativa = $("#institucion_educativa").val();
                let fecha_grado = $("#fecha_grado").val();
                let nivel = $("#nivel").val();
                let nombre_estudios = $("#nombre_estudios").val();
                let institucion_educativa2 = $("#institucion_educativa2").val();
                let semestres_aprobados = $("#semestres_aprobados").val();

                let nombre_programa = $("#nombre_programa").val();
                let ficha = $("#ficha").val();
                let perfil = $("#perfil").val();
                let ocupaciones = $("#ocupaciones").val();
                let centro_formacion = $("#centro_formacion").val();
                let ciudad_formacion = $("#ciudad_formacion").val();
                let fecha_inicio = $("#fecha_inicio").val();
                let fecha_final = $("#fecha_final").val();
                let etapa = $("#etapa").val();
                let coordinador_academico = $("#coordinador_academico").val();
                let telefono_coordinador = $("#telefono_coordinador").val();
                let email_coordinador = $("#email_coordinador").val();

                let fecha_diligenciamiento = $("#fecha_diligenciamiento").val();
                let firma_aprendiz = $("#firma_aprendiz").val();

                let funcionario = $("#funcionario").val();
                let telefono_funcionario = $("#telefono_funcionario").val();
                let email_funcionario = $("#email_funcionario").val();

                let nit = $("#nit").val();
                let centro_formacion1 = $("#centro_formacion1").val();
                let representante_legal = $("#representante_legal").val();
                let email_representante = $("#email_representante").val();
                let telefono_representante = $("#telefono_representante").val();

                let empresa = $("#empresa").val();
                let telefono_empresa = $("#telefono_empresa").val();
                let funcionario_empresa = $("#funcionario_empresa").val();
                let observaciones = $("#observaciones").val();

                let fecha_diligenciamiento1 = $("#fecha_diligenciamiento1").val();
                let firma = $("#firma").val();


                let objData = new FormData();
                objData.append("nombres_apellidos", nombres_apellidos);
                objData.append("documento", documento);
                objData.append("fecha_nacimiento", fecha_nacimiento);
                objData.append("edad", edad);
                objData.append("telefono_aprendiz", telefono_aprendiz);
                objData.append("email_misena", email_misena);
                objData.append("libreta_militar", libreta_militar);
                objData.append("direccion", direccion);
                objData.append("estrato", estrato);
                objData.append("ciudad", ciudad);

                objData.append("titulo_obtenido", titulo_obtenido);
                objData.append("institucion_educativa", institucion_educativa);
                objData.append("fecha_grado", fecha_grado);
                objData.append("nivel", nivel);
                objData.append("nombre_estudios", nombre_estudios);
                objData.append("institucion_educativa2", institucion_educativa2);
                objData.append("semestres_aprobados", semestres_aprobados);

                objData.append("nombre_programa", nombre_programa);
                objData.append("ficha", ficha);
                objData.append("perfil", perfil);
                objData.append("ocupaciones", ocupaciones);
                objData.append("centro_formacion", centro_formacion);
                objData.append("ciudad_formacion", ciudad_formacion);
                objData.append("fecha_inicio", fecha_inicio);
                objData.append("fecha_final", fecha_final);
                objData.append("etapa", etapa);
                objData.append("coordinador_academico", coordinador_academico);
                objData.append("telefono_coordinador", telefono_coordinador);
                objData.append("email_coordinador", email_coordinador);

                objData.append("fecha_diligenciamiento", fecha_diligenciamiento);
                objData.append("firma_aprendiz", firma_aprendiz);

                objData.append("funcionario", funcionario);
                objData.append("telefono_funcionario", telefono_funcionario);
                objData.append("email_funcionario", email_funcionario);

                objData.append("nit", nit);
                objData.append("centro_formacion1", centro_formacion1);
                objData.append("representante_legal", representante_legal);
                objData.append("email_representante", email_representante);
                objData.append("telefono_representante", telefono_representante);

                objData.append("empresa", empresa);
                objData.append("telefono_empresa", telefono_empresa);
                objData.append("funcionario_empresa", funcionario_empresa);
                objData.append("observaciones", observaciones);
                
                objData.append("fecha_diligenciamiento1", fecha_diligenciamiento1);
                objData.append("firma", firma);
                console.log(objData);

                fetch("control/formatoSenaControl.php", {
                    method: "POST",
                    body: objData,
                })
                    .then((response) => response.json())
                    .then((response) => {
                        if (response["codigo"] == "200") {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "FORMATO GUARDADO CORRECTAMENTE",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        } else {
                            Swal.fire({
                                position: "top-end",
                                icon: "error",
                                title: "ERROR AL GUARDAR EL FORMATO",
                                showConfirmButton: false,
                                timer: 1500,
                            })
                            .catch((error) => {
                                console.log("OCURRIO UN ERROR AL SUBIR EL FORMULARIO");
                            });
                        }
                    })
            }

        }, false)
    })


    function cargarCardsFs() {
        let usuario = $("#contenedorCard2").attr("usuario");
        let objData = new FormData();
        objData.append("cargarCardsFs", usuario);
        fetch("control/formatoSenaControl.php", {
          method: "POST",
          body: objData,
        })
          .then((response) => response.json())
          .then((response) => {
            if (response["codigo"] == "200") {
              $("#contenedorCard2").html("");
    
              response["mensaje"].forEach(listarCardsUsuario);
              function listarCardsUsuario(item, index) {
                var interfaces = '<a href="formatoSena2?' + item.idhoja_de_vida_sena + '">';
                interfaces += '<div class="card2">FORMATO SENA</div>';
                interfaces += "</a>";
    
                $("#contenedorCard2").append(interfaces);
              }
              $("#nombres_apellidos").val(response['mensaje'][0]['nombres_apellidos']);
              $("#documento").val(response['mensaje'][0]['documento']);
              $("#fecha_nacimiento").val(response['mensaje'][0]['fecha_nacimiento']);
              $("#edad").val(response['mensaje'][0]['edad']);
              $("#telefono_aprendiz").val(response['mensaje'][0]['telefono_aprendiz']);
              $("#email_misena").val(response['mensaje'][0]['email_misena']);
              $("#libreta_militar").val(response['mensaje'][0]['libreta_militar']);
              $("#direccion").val(response['mensaje'][0]['direccion']);
              $("#estrato").val(response['mensaje'][0]['estrato']);
              $("#ciudad").val(response['mensaje'][0]['ciudad']); 
              
              $("#titulo_obtenido").val(response['mensaje'][0]['titulo_obtenido']);
              $("#institucion_educativa").val(response['mensaje'][0]['institucion_educativa']);
              $("#fecha_grado").val(response['mensaje'][0]['fecha_grado']);
              $("#nivel").val(response['mensaje'][0]['nivel']);
              $("#nombre_estudios").val(response['mensaje'][0]['nombre_estudios']);
              $("#institucion_educativa2").val(response['mensaje'][0]['institucion_educativa2']);
              $("#semestres_aprobados").val(response['mensaje'][0]['semestres_aprobados']);

              $("#nombre_programa").val(response['mensaje'][0]['nombre_programa']);
              $("#ficha").val(response['mensaje'][0]['ficha']);
              $("#perfil").val(response['mensaje'][0]['perfil']);
              $("#ocupaciones").val(response['mensaje'][0]['ocupaciones']);
              $("#centro_formacion").val(response['mensaje'][0]['centro_formacion']);
              $("#ciudad_formacion").val(response['mensaje'][0]['ciudad_formacion']);
              $("#fecha_inicio").val(response['mensaje'][0]['fecha_inicio']);
              $("#fecha_final").val(response['mensaje'][0]['fecha_final']);
              $("#etapa").val(response['mensaje'][0]['etapa']);
              $("#coordinador_academico").val(response['mensaje'][0]['coordinador_academico']);
              $("#telefono_coordinador").val(response['mensaje'][0]['telefono_coordinador']);
              $("#email_coordinador").val(response['mensaje'][0]['email_coordinador']);

              $("#fecha_diligenciamiento").val(response['mensaje'][0]['fecha_diligenciamiento']);
              $("#firma_aprendiz").val(response['mensaje'][0]['firma_aprendiz']);

              $("#funcionario").val(response['mensaje'][0]['funcionario']);
              $("#telefono_funcionario").val(response['mensaje'][0]['telefono_funcionario']);
              $("#email_funcionario").val(response['mensaje'][0]['email_funcionario']);

              $("#nit").val(response['mensaje'][0]['nit']);
              $("#centro_formacion1").val(response['mensaje'][0]['centro_formacion1']);
              $("#representante_legal").val(response['mensaje'][0]['representante_legal']);
              $("#email_representante").val(response['mensaje'][0]['email_representante']);
              $("#telefono_representante").val(response['mensaje'][0]['telefono_representante']);

              $("#empresa").val(response['mensaje'][0]['empresa']);
              $("#telefono_empresa").val(response['mensaje'][0]['telefono_empresa']);
              $("#funcionario_empresa").val(response['mensaje'][0]['funcionario_empresa']);
              $("#observaciones").val(response['mensaje'][0]['observaciones']);

              $("#fecha_diligenciamiento1").val(response['mensaje'][0]['fecha_diligenciamiento1']);
              $("#firma").val(response['mensaje'][0]['firma']);

              $("#estrato_idestrato").val(response['mensaje'][0]['estrato_idestrato']);
              $("#nivel_idnivel").val(response['mensaje'][0]['nivel_idnivel']);
              $("#etapa_idetapa").val(response['mensaje'][0]['etapa_idetapa']);
              $("#usuario_idusuario").val(response['mensaje'][0]['usuario_idusuario']);
            }
          });
      }


      function cargarFormatoSena() {
        // Corregir el uso de $("#contenedorCard")
        let objData = new FormData();
        objData.append("cargarDatosFormSena", window.location.search.split('?')[1]);
        fetch("control/formatoSenaControl.php", {
          method: "POST",
          body: objData,
        })
          .then((response) => response.json())
          .then((response) => {
            if (response["codigo"] == "200") {
              $("#contenedorCard").html("");
    
              response["mensaje"].forEach(listarCardsUsuario);
              function listarCardsUsuario(item, index) {
                var interfaces = '<a href="formatoSena2?' + item.idhoja_de_vida_sena + '">';
                interfaces += '<div class="card2">FORMATO SENA</div>';
                interfaces += "</a>";
    
                $("#contenedorCard").append(interfaces);
              }
              console.log(response['mensaje']);
              $("#nombres_apellidos").val(response['mensaje'][0]['nombres_apellidos']);
              $("#documento").val(response['mensaje'][0]['documento']);
              $("#fecha_nacimiento").val(response['mensaje'][0]['fecha_nacimiento']);
              $("#edad").val(response['mensaje'][0]['edad']);
              $("#telefono_aprendiz").val(response['mensaje'][0]['telefono_aprendiz']);
              $("#email_misena").val(response['mensaje'][0]['email_misena']);
              $("#libreta_militar").val(response['mensaje'][0]['libreta_militar']);
              $("#direccion").val(response['mensaje'][0]['direccion']);
              $("#estrato").val(response['mensaje'][0]['estrato']);
              $("#ciudad").val(response['mensaje'][0]['ciudad']); 
              
              $("#titulo_obtenido").val(response['mensaje'][0]['titulo_obtenido']);
              $("#institucion_educativa").val(response['mensaje'][0]['institucion_educativa']);
              $("#fecha_grado").val(response['mensaje'][0]['fecha_grado']);
              $("#nivel").val(response['mensaje'][0]['nivel']);
              $("#nombre_estudios").val(response['mensaje'][0]['nombre_estudios']);
              $("#institucion_educativa2").val(response['mensaje'][0]['institucion_educativa2']);
              $("#semestres_aprobados").val(response['mensaje'][0]['semestres_aprobados']);

              $("#nombre_programa").val(response['mensaje'][0]['nombre_programa']);
              $("#ficha").val(response['mensaje'][0]['ficha']);
              $("#perfil").val(response['mensaje'][0]['perfil']);
              $("#ocupaciones").val(response['mensaje'][0]['ocupaciones']);
              $("#centro_formacion").val(response['mensaje'][0]['centro_formacion']);
              $("#ciudad_formacion").val(response['mensaje'][0]['ciudad_formacion']);
              $("#fecha_inicio").val(response['mensaje'][0]['fecha_inicio']);
              $("#fecha_final").val(response['mensaje'][0]['fecha_final']);
              $("#etapa").val(response['mensaje'][0]['etapa']);
              $("#coordinador_academico").val(response['mensaje'][0]['coordinador_academico']);
              $("#telefono_coordinador").val(response['mensaje'][0]['telefono_coordinador']);
              $("#email_coordinador").val(response['mensaje'][0]['email_coordinador']);

              $("#fecha_diligenciamiento").val(response['mensaje'][0]['fecha_diligenciamiento']);
              $("#firma_aprendiz").val(response['mensaje'][0]['firma_aprendiz']);

              $("#funcionario").val(response['mensaje'][0]['funcionario']);
              $("#telefono_funcionario").val(response['mensaje'][0]['telefono_funcionario']);
              $("#email_funcionario").val(response['mensaje'][0]['email_funcionario']);

              $("#nit").val(response['mensaje'][0]['nit']);
              $("#centro_formacion1").val(response['mensaje'][0]['centro_formacion1']);
              $("#representante_legal").val(response['mensaje'][0]['representante_legal']);
              $("#email_representante").val(response['mensaje'][0]['email_representante']);
              $("#telefono_representante").val(response['mensaje'][0]['telefono_representante']);

              $("#empresa").val(response['mensaje'][0]['empresa']);
              $("#telefono_empresa").val(response['mensaje'][0]['telefono_empresa']);
              $("#funcionario_empresa").val(response['mensaje'][0]['funcionario_empresa']);
              $("#observaciones").val(response['mensaje'][0]['observaciones']);

              $("#fecha_diligenciamiento1").val(response['mensaje'][0]['fecha_diligenciamiento1']);
              $("#firma").val(response['mensaje'][0]['firma']);

              $("#estrato_idestrato").val(response['mensaje'][0]['estrato_idestrato']);
              $("#nivel_idnivel").val(response['mensaje'][0]['nivel_idnivel']);
              $("#etapa_idetapa").val(response['mensaje'][0]['etapa_idetapa']);
              $("#usuario_idusuario").val(response['mensaje'][0]['usuario_idusuario']);
            }
          });
      }

      if(window.location.search.split('?')[1]) {
        cargarFormatoSena();
      }  
})