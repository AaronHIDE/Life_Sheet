$(function() {
    'use strict';

    var forms = document.querySelectorAll('#loginForm');

    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            if (!form.checkValidity()) {
                event.stopPropagation();
                form.classList.add('was-validated');
            } else {
                // Obtener datos del formulario
                let email = $("#email").val();
                let password = $("#password").val();
                let objData = new FormData();

                objData.append("login_email", email);
                objData.append("login_password", password);

                // Enviar datos al servidor
                fetch('control/loginControl.php', {
                    method: 'POST',
                    body: objData
                }).then(response => response.json()).catch(error => {
                    console.log(error);
                }).then(response => {
                    // Manejar la respuesta del servidor
                    if (response["codigo"] == "200") {
                        // Redirigir a la ubicación proporcionada en el mensaje
                        window.location = response["mensaje"];
                    } else {
                        // Mostrar alerta con el mensaje de la respuesta
                        alert(response["mensaje"]);
                    }
                });
            }
        }, false);
    });
});
