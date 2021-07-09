<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Correo
{
  public function EnviarCorreo()
  {
    if (isset($_POST['btn_enviar']))
    {

      //Datos del usuario
      $nombre = "";
      $telefono = "";
      $email = $_SESSION['usuario'];
      require_once("../PHP/conexion.php");
      $conec = new conectar;
      $conexion = $conec->RealaizarConexion();
      $datos_usuario = mysqli_query($conexion, "SELECT Nombre, Apellido, Telefono FROM cliente WHERE Correo = '$email'");
      while ($m = mysqli_fetch_array($datos_usuario))
      {
        //ALMACENAMOS LOS DATOS
        $nombre = $m[0].' '.$m[1];
        $telefono = $m[2];
      }
      //DATOS DEL PRODUCTO
      $asunto = $_SESSION['Nombre_producto'];
      $mensaje = $_POST['mensaje'];

      //Parte superior del correo
      $header = "From: Enviado desde MC por producto: ";
      //Mensaje
      $mensajeCompleto = $mensaje."\n Nombre: ".$nombre."\n Telefono: ".$telefono."\n Correo: ".$email;


      //Instantiation and passing `true` enables exceptions

      $mail = new PHPMailer(true);
      try {
          //Server settings
          $mail->SMTPDebug = 0;                      //ver errores
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //servicio de correo
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'bandejamc2021@gmail.com';                     //SMTP username
          $mail->Password   = 'Capitan09';                               //SMTP password
          $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
          $mail->SMTPOptions = array(
            'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
            )
          );
          //Recipients
          $mail->setFrom('bandejaMC2021@gmail.com', 'MC'); //Desde donde se envia
          $mail->addAddress('bandejaMC2021@hotmail.com', 'pepe');     //Quien resive

          //Content
          $mail->isHTML(true);                                  //Acepta HTML
          $mail->Subject = $asunto; //Asunto
          $mail->Body    = $mensajeCompleto; //Mensaje

          $mail->send();
          echo
          '<script>
            swal("Correo enviado!!", "Nos contactaremos con usted dentro de unos dias.", "success");
            </script>';
      } catch (Exception $e) {
          echo
          '<script>
            swal("UPPS!!", "Hubo un error en el envio.", "error");
            </script>;', $mail->ErrorInfo;
      }
    }
  }
}
 ?>
