<?php
//Iniciar sesion
class Iniciar_S
{
  public function Validar_Datos()
  {
    $contador = 0;
    if (isset($_POST['login']))
    {
      //CORREO
      if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL))
      {
        $contador ++;
      }
      else
      {
        echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>
           <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
           UPPS!</strong> CONTROLE EL CORREO
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
      }
      //CONTRASEÑA
      if ($_POST['contra'] != null && strlen($_POST['contra'] >= 8))
      {
        $contador ++;
      }
      else
      {
        echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>
           <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
           UPPS!</strong> CONTROLE LA CONTRASEÑA
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
      }
    if ($contador === 2)
    {
      return true;
    }

  }//Fin de verificacion
}
  //ALMACENAMOS LAS SESIONES
  public function Sesiones_Datos($correo_S, $contra_S)
  {
    $_SESSION['correo'] = $correo_S;
    $_SESSION['contra'] = $contra_S;
  }

  //INICIAMOS SESION
  public function Iniciar_Sesion()
  {
    //delcaracion de variables
    $correo_S = $_POST['correo'];
    $contra_S = $_POST['contra'];
    $contra_cifrada = hash('sha512', $contra_S);
    //Alamcenamos en las sesiones
    $this->Sesiones_Datos($correo_S,$contra_S);
    //Verificamos datos
    $validos = $this->Validar_Datos();
    if ($validos) //Si los datos son validos
    {
      //Conectamos con el servidor
      require_once("PHP/conexion.php");
      //llamamos a la clase conectar de conexion php
       $conec = new conectar;
      //llamada a el metodo de realizar $conexion
      $R_conexion = $conec->RealaizarConexion();
      //Validar datos
      $consulta_datos = mysqli_query($R_conexion, "SELECT * FROM cliente WHERE Correo = '$correo_S' and Contaseña = '$contra_cifrada' ");
      if (mysqli_num_rows($consulta_datos) > 0)
      {//Si encuentra un dato valido
        $_SESSION['usuario'] = $correo_S;
        header("Location: Sesion/inicio.php");
        $consulta_nombre = mysqli_query($R_conexion,"SELECT Nombre FROM cliente WHERE Correo = '$correo_S'");
        while ($m = mysqli_fetch_array($consulta_nombre))
        {
          $_SESSION['Nombre'] = $m[0];
        }
      }
      else
      {
        echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>
           <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
           UPPS!</strong> EL USUARIO INGRESADO NO EXISTE
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
      }
    }

  }

}

 ?>
