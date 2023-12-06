$(function () {
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
})