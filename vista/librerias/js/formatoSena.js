$(function () {

    var tabla = null;
    listarFormatoSena();

    'use strict'
    var tables = document.querySelectorAll('#aggFormatoSena')
    Array.prototype.slice.call(tables)
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!form.checkValidity()) {
            event.stopPropagation()
            form.classList.add('was-validated')

        } else {
            let nombres_apellidos = $("#nombres_apellidos").val();
            let documento = $("#documento").val();
            let fecha_nacimiento = $("#fecha_nacimiento").val();
            let edad = $("#edad").val();
            let telefono_aprendiz = $("#telefono_aprendiz").val();
            let libreta_militar = $("#libreta_militar").val();
            let email_misena = $("#email_misena").val();
            let direccion = $("#direccion").val();
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
            let ocupaciones = $("#ocupaciones").$val();
            let centro_formacion = $("#centro_formacion").val();
            let ciudad_formacion = $("#ciudad_formacion").val();
            let fecha_inicio = $("#fecha_inicio").val();
            let fecha_final = $("fecha_final").val();
            let etapa = $("etapa").val();
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
            objData.append("centro_formacion1"), centro_formacion1;
            objData.append("representante_legal", representante_legal);
            objData.append("email_representante", email_representante);
            objData.append("telefono_representante", telefono_representante);

            objData.append("empresa", empresa);
            objData.append("telefono_empresa", telefono_empresa);
            objData.append("funcionario_empresa", funcionario_empresa);
            objData.append("fecha_diligenciamiento1", fecha_diligenciamiento1);
            objData.append("firma", firma);


            fetch('control/formatoControl.php', {
                method: 'POST',
                body: objData
            }).then(response => response.json()).then(response => {
                if (response["codigo"] == "200") {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Formato Almacenado Correctamente",
                        showConfirmButton: false,
                        timer: 1500
                      })
                    window.location = response["location"];
                } else {
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Ocurrio un error al Almacenar el Formato",
                        showConfirmButton: false,
                        timer: 1500
                      })
                }
            })
        }

    }, false)


    function listarFormatoSena() {
        var objData = new FormData();
        objData.append("listarFormatoSena", "ok");
        fetch('control/formatoSenaControl.php', {
            method: 'POST',
            body: objData
        }).then(response => response.json()).catch(error => {
            console.log(error);
        }).then(response => {
            cargarTipoServ(response);
        });
    }

    function cargarTipoServ(response) {
        console.log(response);
        var dataSet = [];
        var objBotones = "";

        response.forEach(listarFormatoSena);

        function listarFormatoSena(item, index) {

            dataSet.push([item.nombres_apellidos, item.documento, item.fecha_nacimiento, item.edad, item.telefono_aprendiz, 
                item.email_misena, item.libreta_militar, item.direccion, item.ciudad,

                item.titulo_obtenido, item.institucion_educativa, item.fecha_grado, item.nivel, item.nombre_estudios, 
                item.institucion_educativa2, item.semestres_aprobados, 
                
                item.nombre_programa, item.ficha, item.perfil, item.ocupaciones, item.centro_formacion, item.ciudad_formacion, 
                item.fecha_inicio, item.fecha_final, item.etapa, item.coordinador_academico, item.telefono_coordinador, 
                item.email_coordinador,

                item.fecha_diligenciamiento, item.firma_aprendiz,

                item.funcionario, item.telefono_funcionario, item.email_funcionario, 
                
                item.nit, item.centro_formacion1, item.representante_legal, item.email_representante, item.telefono_representante,

                item.empresa, item.telefono_empresa, item.funcionario_empresa, item.fecha_diligenciamiento1, item.firma, 
                
                objBotones]);
        }


        // if (tabla != null) {
        //     $("").dataTable().fnDestroy();
        // }

        // tabla = $("").DataTable({
        //     data: dataSet
        // });
    }
})