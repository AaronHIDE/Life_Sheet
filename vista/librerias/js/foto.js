// $(function() {

//     cargarFoto();

//     // subir imagenes desde javascript
//     $("#btn-subir").on("click", function() {
//         let foto = document.getElementById('txt-file').files[0];
//         var objData = new FormData();
//             fetch('control/fotoControl.php', {
//             method: 'POST',
//             body: objData
//         }).then(response => response.json()).catch(error => {
//             console.log(error);
//         }).then(response => {
//             if (response["codigo"] == "202") {
//                 Swal.fire({
//                     position: 'top-end',
//                     icon: 'success',
//                     title: response["mensaje"],
//                     showConfirmButton: false,
//                     timer: 1500
//                 })
//                 cargarFoto();

//             } else {
//                 Swal.fire({
//                     position: 'top-end',
//                     icon: 'error',
//                     title: response["mensaje"],
//                     showConfirmButton: false,
//                     timer: 1500
//                 })
//             }

//             $("#txt-file").val("");
//         });
//     })

//     // listar foto 
//     function cargarFoto() {
//         var objData = new FormData();
//         objData.append("cargarFoto", "ok");
//         fetch('control/fotoControl.php', {
//             method: 'POST',
//             body: objData
//         }).then(response => response.json()).catch(error => {
//             console.log(error);
//         }).then(response => {
//             let interface_foto = '';
//             $("#contenedorFoto").html("");

//             response.forEach(listarFoto);s

//             function listarFoto(item, index) {
//                 interface_foto += '<div class="col-md-3 mc-alinear">';
//                 interface_foto += '<div class="card" style="width: 18rem;">';
//                 interface_foto += '<img src="' + item.url + '" class="card-img-top" alt="..." style="width: 16rem;height: 21rem;">';
//                 interface_foto += '<div class="card-body">';
//                 interface_foto += '<h5 class="card-title">Título de la tarjeta</h5>';
//                 interface_foto += '<p class="card-text">Un texto de ejemplo rápido para colocal cerca del título.</p>';
//                 interface_foto += '<a href="#" class="btn btn-primary">Ir a algún lugar</a>';
//                 interface_foto += '</div>';
//                 interface_foto += '</div>';
//                 interface_foto += '</div>';
//             }

//             $("#contenedorFoto").html(interfacinterface_fotoe_imagenes);

//         });
//     }



// })