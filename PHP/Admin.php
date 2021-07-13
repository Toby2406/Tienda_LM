<?php

class Select
{
  public function Localidades()
    {
      //Conectamos con el servidor
      require_once("conexion.php");
      //llamamos a la clase conectar de conexion php
       $conec = new conectar;
      //llamada a el metodo de realizar $conexion
      $R_conexion = $conec->RealaizarConexion();
      $consulta = 'SELECT * FROM localidad order by codigopostal asc';
      $ejecucion = pg_query($R_conexion, $consulta) or die (pg_result_error($R_conexion));
      foreach ($ejecucion as $valores) {
        echo "<option value = '$valores[codigopostal]'>",$valores[codigopostal],"</option>";
      }
    }

    public function Producto()
    {
      if (isset($_POST['btn_proc']))
      {//Si se presiona el boton
        if (!isset($_SESSION['usuario']))
        {//Si no hay uns sesion
          echo
          '<script>
          swal("Disculpe!!", "Se debe registrar para poder acceder", "error");
          </script>';
        }
        else
        {//Si es un usuario
          echo
          '<script>
              document.getElementById("Enviar").style.visibility = "visible";
          </script>';
        }
      }
      }
}

 ?>
