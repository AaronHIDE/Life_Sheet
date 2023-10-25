$ (function(){

    var tabla = null;
    listarUusario();

    
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                if (!form.checkValidity()) {
                    event.stopPropagation()
                    form.classList.add('was-validated')
                } else {
                    let email = $("#txt_email").val();
                    let password = $("#txt_password").val();
                    let objData = new FormData();
                    objData.append("login_email", email);
                    objData.append("login_password", password);


                    fetch('control/loginControl.php', {
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


            }, false)
        })
        

})