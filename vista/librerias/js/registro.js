$(function () {

    'use strict'
    var forms = document.querySelectorAll('#registro');
    Array.prototype.slice.call(forms)
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!form.checkValidity()){
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
            }).then(response => response.json()).catch(error => {
                console.log('error: ', error);
            }).then(response => {
                console.log(response["mensaje"])
                if (response["codigo"] == "200") {
                    window.location = response["mensaje"];
                } else {
                    alert(response["mensaje"]);
                }
            });

        }
        })

})