$(function () {

    const forms = document.querySelectorAll('#registro');

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            event.preventDefault()

            if (!form.checkValidity()) {
                event.stopPropagation()
                form.classList.add('was-validated')

            } else {

                let nombres = $("#nombres").val();
                let apellidos = $("#apellidos").val();
                let telefono = $("#telefono").val();
                let email = $("#email").val();
                let passwordR = $("#passwordR").val();

                let objData = new FormData();
                objData.append("nombres", nombres);
                objData.append("apellidos",apellidos);
                objData.append("telefono",telefono);
                objData.append("email",email);
                objData.append("passwordR",passwordR);
                fetch('control/registroControl.php', {
                    method: 'POST',
                    body: objData
                }).then(response => response.json()).then(response => {
                    if (response["codigo"] == "200") {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Usuario Registrado Correctamente",
                            showConfirmButton: false,
                            timer: 1500
                          });
                        window.location = response["location"];
                    } else {
                        Swal.fire({
                            position: "top-end",
                            icon: "error",
                            title: "Ocurrio un error al Registrar el Usuario",
                            showConfirmButton: false,
                            timer: 1500
                          });
                    }
                })
            }

        }, false)
    })
})