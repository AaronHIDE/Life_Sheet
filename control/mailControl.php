<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '..\PHPMailer\vendor\autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mensaje="";    
$destinatario = $_POST["destinatario"];
$asunto = $_POST["asunto"];
$contenido = $_POST["contenido"];
$file = $_FILES["file"];

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'life.sheet.3@gmail.com';                     //SMTP username
    $mail->Password   = 'tqxwvatxrsiibqay';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('life.sheet.3@gmail.com' , 'Life Sheet');
    $mail->addAddress($destinatario);     //Add a recipient


    //Attachments
    $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = '
    <!DOCTYPE html>
    <html>
    <head>    
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f0f0f0; /* Fondo gris claro */
            }
    
            #contenedor {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra ligera */
                padding: 20px;
                width: 300px; /* Ancho del contenedor */
                text-align: center;
            }
    
            #titulo {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 15px;
            }
        </style>
        <title>Life Sheet</title>
    </head>
    <body>
        <div id="contenedor">
            <div id="titulo">Life Sheet</div>
            <!-- Aquí puedes agregar más contenido si es necesario -->
            <hr>
            <h3>Hoja de Vida</h3>
            <h4>Asunto:</h4>
            <!-- Aqui va el CONTENIDO del correo -->
            <p>' . $contenido . '</p>
            <hr>
            <p>PDF &#9660;</p>
            
            
    
        </div>
    </body>
    </html>
    ';
    

    if($mail->send()){
        $mensaje='Message has been sent';
    }else{
        $mensaje="error";
    }
    
} catch (Exception $e) {
    $mensaje= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

echo $mensaje;