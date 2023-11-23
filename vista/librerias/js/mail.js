$(document).ready(function () {
    $('#submitButton').on('click', function () {
        
        let destinatario = $('#destinatario').val()
        let asunto = $('#asunto').val()
        let contenido = $('#contenido').val()
        let fileInput = $('#formFile')[0]; // Obten el elemento del input file
        let file = fileInput.files[0]; // Obtén el archivo seleccionado


        var formData = new FormData();
        formData.append('destinatario', destinatario)
        formData.append('asunto', asunto)
        formData.append('contenido', contenido)
        formData.append('file', file)

        fetch('control/mailControl.php',{
            method: 'POST',
            body: formData})
            .then(response => response.text())
            .then(data => {
                console.log(data)

                // Manejar la respuesta del servidor (data)
                console.log("Correo enviado exitosamente"); // Puedes realizar acciones según la respuesta del servidor
            })
            .catch(error => {
                // Manejar errores
                console.error('Error en la solicitud fetch:', error);
            });


        
    });
});
