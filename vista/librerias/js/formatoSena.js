$(function () {

    'use strict'
    var forms = document.querySelectorAll('#formatoSena');
    Array.prototype.slice.call(forms)
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!form.checkValidity()){
            event.stopPropagation()
            form.classList.add('was-validated')
        } else {
            let nombres_apellidos = $("#nombres_apellidos").val();
            let documento = $("#documento").val();
            let fecha_nacimiento = $("#fecha_nacimiento").val();
            let edad = $("#edad").val();
            let telefono = $("#telefono").val();
            let email_misena = $("#email_misena").val();
            let direccion = $("#direccion").val();
            let ciudad = $("#ciudad").val();
            let titulo_obtenido = $("#titulo_obtenido").val();
            let institucion_educativa = $("#institucion_educativa").val();
            let fecha_grado = $("#fecha_grado").val();
            let nombre_estudios = $("#nombre_estudios").val();
            let institucion_educativa2 = $("#institucion_educativa2").val();


            let objData = new FormData();
            objData.append("nombres_apellidos", nombres_apellidos);
            objData.append("documento", documento);
            objData.append("fecha_nacimiento",fecha_nacimiento);
            objData.append("edad",edad);
            objData.append("telefono",telefono);
            objData.append("email_misena",email_misena);
            objData.append("direccion",direccion);
            objData.append("ciudad",ciudad);
            objData.append("titulo_obtenido",titulo_obtenido);
            objData.append("institucion_educativa",institucion_educativa);
            objData.append("fecha_grado",fecha_grado);
            objData.append("nombre_estudios",nombre_estudios);
            objData.append("institucion_educativa2",institucion_educativa2);


        }
        })

})