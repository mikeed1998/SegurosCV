<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// michael@wozial.com
// zCmfxQEz&wTM

//Load Composer's autoloader
// require 'vendor/autoload.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

require '../../includes/conexion.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$tipoForm = $_POST['tipo'];


if($tipoForm == 'contacto') {
    $datosForm = array(
        "nombre" => $_POST["nombre"],
        "apellidos" => $_POST["apellidos"],
        "correo" => $_POST["correo"],
        "duda" => $_POST['duda'],
    );
}else if($tipoForm == 'capacitacion') {
    $datosForm = array(
        "nombre" => $_POST["nombre"],
        "apellidos" => $_POST["apellidos"],
        "edad" => $_POST["edad"],
        "fecha" => $_POST["fecha"],
        "correo" => $_POST["correo"],
        "ciudad" => $_POST["ciudad"],
        "estado" => $_POST["estado"],
        "pais" => $_POST["pais"],
        "colonia" => $_POST["colonia"],
        "codigo_postal" => $_POST["codigo_postal"],
        "numero" => $_POST["numero"],
        "domicilio" => $_POST["domicilio"],
        "detalles" => $_POST["detalles"],
    );
}else if($tipoForm == 'register') {
    $datosForm = array(
        "nombre" => $_POST["nombre"],
        "apellidos" => $_POST["apellidos"],
        "correo" => $_POST["correo"],
        "password" => $_POST['password'],
        "password_confirmation" => $_POST['password_confirmation'],
    );
}

try {
    //Server settings
    $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.wozial.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'michael@wozial.com';                     //SMTP username
    $mail->Password   = 'zCmfxQEz&wTM';                               //SMTP password
    $mail->SMTPSecure = 'ssl'; //tls; // PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('michael@wozial.com', 'Seguros (Formulario de Contacto)');
    $mail->addAddress($datosForm['correo'], $datosForm['nombre']);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contacto/Capacitación/Cuenta';

    if($tipoForm == 'contacto') {
        $mail->Body    = '
        <html>
            <head>
                <style>
                    body { 
                        background-color: blue; 
                    }

                    #customers {
                        font-family: Arial, Helvetica, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                      }
                      
                      #customers td, #customers th {
                        border: 1px solid black;
                        padding: 8px;
                      }
                      
                      #customers tr:nth-child(even){background-color: #f2f2f2;}
                      
                      #customers tr:hover {background-color: #ddd;}
                      
                      #customers th {
                        padding-top: 12px;
                        padding-bottom: 12px;
                        text-align: left;
                        background-color: black;
                        color: white;
                      }
                </style>
            </head>
            <body>
                <h1>Duda por: '. $datosForm['nombre'] . ' ' . $datosForm['apellidos'] .'</h1>
                <table id="customers">
                    <tr>
                        <th>Datos</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Correo Electrónico</td>
                        <td>'. $datosForm['correo'] .'</td>
                    </tr>
                    <tr>
                        <th colspan="2">Mensaje/Duda</th>
                    </tr>
                    <tr>
                        <td colspan="2">'. $datosForm['duda'] .'</td>
                    </tr>
                </div>
            </body>
        </html>';
    } else if($tipoForm == 'capacitacion') {
        $mail->Body    = '
            <html>
            <head>
                <style>
                #customers {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }
                  
                  #customers td, #customers th {
                    border: 1px solid black;
                    padding: 8px;
                  }
                  
                  #customers tr:nth-child(even){background-color: #f2f2f2;}
                  
                  #customers tr:hover {background-color: #ddd;}
                  
                  #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: black;
                    color: white;
                  }
                    body { 
                        background-color: blue; 
                    }
                </style>
            </head>
            <body>
                <h1>Solicitante: '. $datosForm['nombre'] . ' ' . $datosForm['apellidos'] .'</h1>
                <table id="customers">
                    <tr>
                        <th>Datos</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Edad</td>
                        <td>'. $datosForm['edad'] .' años</td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento</td>
                        <td>'. $datosForm['fecha'] .'</td>
                    </tr>
                    <tr>
                        <td>Correo Electrónico</td>
                        <td>'. $datosForm['correo'] .'</td>
                    </tr>
                    <tr>
                        <td>Lugar donde vive</td>
                        <td>'. $datosForm['ciudad'] .', '. $datosForm['estado'] .', '. $datosForm['pais'] .'</td>
                    </tr>
                    <tr>
                        <td>Colonia</td>
                        <td>'. $datosForm['colonia'] .'</td>
                    </tr>
                    <tr>
                        <td>Código postal</td>
                        <td>'. $datosForm['codigo_postal'] .'</td>
                    </tr>
                    <tr>
                        <td>T&eacute;lefono de contacto</td>
                        <td>'. $datosForm['numero'] .'</td>
                    </tr>
                    <tr>
                        <td>Domicilio</td>
                        <td>'. $datosForm['domicilio'] .'</td>
                    </tr>
                    <tr>
                        <th colspan="2">Mensaje</th>
                    </tr>
                    <tr>
                        <td colspan="2">'. $datosForm['detalles'] .'</td>
                    </tr>
                </table>
            </body>
        </html>';
    } else if($tipoForm == 'register') {
        $x = bin2hex(openssl_random_pseudo_bytes(16));

        $nombre_ = $datosForm["nombre"];
        $apellidos_ = $datosForm["apellidos"];
        $correo_ = $datosForm["correo"];
        $password_ = base64_encode($datosForm['password']);

        $sql2 = "INSERT INTO users(nombres, apellidos, correo, pasword, token, token_verificado) VALUES ('$nombre_', '$apellidos_', '$correo_', '$password_', '$x', '0')";
        mysqli_query($conn, $sql2);

        $mail->Body    = '
        <html>
            <head>
                <style>
                    body { 
                        background-color: blue; 
                    }

                    #customers {
                        font-family: Arial, Helvetica, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                      }
                      
                      #customers td, #customers th {
                        border: 1px solid black;
                        padding: 8px;
                      }
                      
                      #customers tr:nth-child(even){background-color: #f2f2f2;}
                      
                      #customers tr:hover {background-color: #ddd;}
                      
                      #customers th {
                        padding-top: 12px;
                        padding-bottom: 12px;
                        text-align: left;
                        background-color: black;
                        color: white;
                      }
                </style>
            </head>
            <body>
                <h1>Cuenta creada con éxito (falta verificar)</h1>
                <table id="customers">
                    <tr>
                        <th>Datos</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Usuario</td>
                        <td>'. $datosForm['nombre'] . ' ' . $datosForm['apellidos'] .'</td>
                    </tr>
                    <tr>
                        <td>Correo Electrónico</td>
                        <td>'. $datosForm['correo'] .'</td>
                    </tr>
                    <tr>
                        <th colspan="2">Token de validación</th>
                    </tr>
                    <tr>
                        <td colspan="2">'. $x .'</td>
                    </tr>
                </div>
            </body>
        </html>';
    }


    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
    header('Location: ../../index.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}