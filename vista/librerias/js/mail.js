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
                // Manejar la respuesta del servidor (data)
                console.log(data);

                // Agregar SweetAlert después de que el correo se envíe correctamente
                if (data === 'Message has been sent') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Correo enviado',
                        text: 'El correo se ha enviado correctamente.',
                    });
                }
                })
                .catch(error => {
                // Manejar errores
                console.error('Error en la solicitud fetch:', error);

                // Agregar SweetAlert para errores
                Swal.fire({
                    icon: 'error',
                    title: 'Error al enviar el correo',
                    text: 'Hubo un problema al enviar el correo. Por favor, inténtalo de nuevo.',
                });
                });

        
    });
});
