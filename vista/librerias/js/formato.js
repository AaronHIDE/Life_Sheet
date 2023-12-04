$(function () {

    const forms = document.querySelectorAll('#formato');

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            event.preventDefault()

            if (!form.checkValidity()) {
                event.stopPropagation()
                form.classList.add('was-validated')

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
            objData.append("cargo",cargo);
            objData.append("telefono",telefono);
            objData.append("email",email);
            objData.append("direccion",direccion);
            objData.append("estudios1",estudios1);
            objData.append("estudios2",estudios2);
            objData.append("estudios3",estudios3);
            objData.append("estudios4",estudios4);
            objData.append("experiencia1",experiencia1);
            objData.append("experiencia2",experiencia2);
            objData.append("experiencia3",experiencia3);
            objData.append("experiencia4",experiencia4);
            objData.append("habilidades1",habilidades1);
            objData.append("habilidades2",habilidades2);
            objData.append("habilidades3",habilidades3);
            objData.append("habilidades4",habilidades4);
            objData.append("referencias1",referencias1);
            objData.append("referencias2",referencias2);
            objData.append("referencias3",referencias3);
            objData.append("referencias4",referencias4);
            objData.append("telefonoReferencia1",telefonoReferencia1);
            objData.append("telefonoReferencia2",telefonoReferencia2);
            objData.append("telefonoReferencia3",telefonoReferencia3);
            objData.append("telefonoReferencia4",telefonoReferencia4);


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
                      });
                } else {
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Ocurrio un error al Almacenar el Formato",
                        showConfirmButton: false,
                        timer: 1500
                      });
                }
            })
        }

    }, false)
})
})