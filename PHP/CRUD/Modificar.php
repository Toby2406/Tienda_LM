<?php

class Modificar
{
  public function Validar_Datos()
  {
    $contador = 0;
    if (isset($_POST['btn_modificar']))
    {
      //Si se presiona nombre
      if (isset($_POST['nombre']))
      {
        if($_POST['nombre'] != null)
       {
           $contador ++;
         }
         else
         {
           echo
           '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
              UPPS!</strong> CONTROLE EL NOMBRE
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
       }
      }

      //Si se presiona Apellido
      if (isset($_POST['Apellidio']))
      {
        if($_POST['Apellidio'] != null)
        {
            $contador ++;
          }
          else
          {
            echo
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>
               <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
               UPPS!</strong> CONTROLE EL APELLIDO
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
        }

      }
//Si se presiona localidad
      if (isset($_POST['localidad']))
      {
          $contador ++;
      }
    //Si se presiona telefono
    if (isset($_POST['telefono']))
    {
      if (strlen($_POST['telefono']) === 10 && is_numeric($_POST['telefono']))
      {
        $contador ++;
      }
      else
      {
        $contador = 0;
        echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>
           <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
           UPPS!</strong> CONTROLE EL TELEFONO
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
      }
    }
    //Si son correctos
    if ($contador >= 1)
    {
      return true;
    }
    }//btn_modifucar
  }//VALIDAR

public function Modificar_Datos()
{
  $v = $this->Validar_Datos();
  if ($v)
  {
    if (isset($_POST['nombre'])) {
      $nombre_mod = $_POST['nombre'];
    }else {
      $nombre_mod = $_SESSION['Nombre_usuario'];
    }
    if (isset($_POST['Apellidio'])) {
      $apellido_mod = $_POST['Apellidio'];
    }else {
      $apellido_mod = $_SESSION['Apellido_usuario'];
    }
    if (isset($_POST['localidad'])) {
      $local_mod = $_POST['localidad'];
    }else {
      $local_mod = $_SESSION['local_usuario'];
    }
    if (isset($_POST['telefono'])) {
      $telefono_mod = $_POST['telefono'];
    }else {
      $telefono_mod = $_SESSION['tel_usuario'];
    }

    //conexion con server
    require_once('../PHP/conexion.php');
    $conec = new conectar;
    $conexion = $conec->RealaizarConexion();
    $corre_usuario = $_SESSION['usuario'];
    $Modificar_Datos = "UPDATE cliente SET Nombre='$nombre_mod',Apellido= '$apellido_mod',Localidad = '$local_mod',Telefono = '$telefono_mod' WHERE Correo = '$corre_usuario'";
    $Ejecutar_Mod =  mysqli_query($conexion,$Modificar_Datos);
    if(!$Ejecutar_Mod)
    {
      echo
      '<script>
        swal("ERROR!!", "Disculpe, no se a podido modificar los datos :C", "error")
      </script>';
    }
    else{
      echo
      '<script>
        swal("MUY BIEN!", "Sus datos se modificaron", "success")
      </script>';
      $_SESSION['Nombre_usuario'] = $nombre_mod;
      $_SESSION['Apellido_usuario'] = $apellido_mod;
      $_SESSION['local_usuario'] = $local_mod;
      $_SESSION['tel_usuario'] = $telefono_mod;
    }


  }
}

}//MODIFICAR

 ?>
