<?php
//Crear cliente
 class CrearSesion
 {
   public function ValidarDatos()//Validar los datos
   {
     $contador = 0;
      if (isset($_POST['btn_login']))
      {
        //SI TODOS LOS CAMPOS ESTAN VIACIOS
        if ($_POST['nombre'] === "" || $_POST['apellido'] === "")
        {
          if($_POST['codigo_P'] === "" || $_POST['correo'] === "")
          {
          if($_POST['contra'] === "" || $_POST['telefono'] === "")
          {
              echo
              '<script>
                swal("ERROR!!", "Por favor complete los campos", "error")
              </script>';
              $contador = 0;
            }
          }
        }
        //Si no son vacios
        else
        {
          //NOMBRE
          if (strlen($_POST['nombre'])<100)
          {
            $contador ++;
          }else {
            $this->GetMensaje("NOMBRE");
          }
          //APELLIDO
          if (strlen($_POST['apellido'])<100) {
            $contador ++;
          }
          else {
            $this->GetMensaje("APELLIDO");
          }
          //CODIGO POSTAL
          if (isset($_POST['codigo_P']) && $_POST['codigo_P'] != null)
          {
            $contador ++;
          }
          else {
            $this->GetMensaje("CODIGO POSTAL");
          }
          //CORREO
          //Conexion BD
          require_once('PHP/conexion.php');
          $conec = new conectar;
          $conexion = $conec->RealaizarConexion();
          //Obtenemos datos de tabla
          $consular_DatosTabla = "SELECT * FROM cliente";
          $ejecutar = pg_query($conexion,$consular_DatosTabla);
          //arrays
          $arrya_correo_existentes = array();
          $i=0;
          //Realizar la obtencion de datos
          while ($datos = pg_fetch_array($ejecutar))
          {
            $i++;
            $arrya_correo_existentes[$i] = $datos['Correo'];
          }
          //Si existe el correo
          if (in_array($_POST['correo'],$arrya_correo_existentes))
          {
            $this->GetMensaje("CORREO EXISTENTE");
          }
          if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL))
          {
            $contador ++;
          }
          else {
            $this->GetMensaje("CORREO");
          }
          //VERIFICAR CORREO
          if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL) && strcmp($_POST['correo'], $_POST['correo_confirm']) == 0)
          {
            $contador ++;
          }
          else {
            $this->GetMensaje("LOS CORREOS NO SON IGUALES");
          }
          //CONTRASEÑA
          if (strlen($_POST['contra'] >= 8))
          {
            $contador ++;
          }
          else {
            $this->GetMensaje("CONREASEÑA");
          }
          //VALIDAR CONTRASEÑA
          if (strcmp($_POST['contra'], $_POST['contra_confirm']) == 0)
          {
            $contador ++;
          }
          else {
           $this->GetMensaje("LAS CONTRASEÑAS NO SON IGUALES");
          }
          //VALIDAR TELEFONO
          if (strlen($_POST['telefono']) === 10 && is_numeric($_POST['telefono']))
          {
            $contador ++;
          }else {
            $this->GetMensaje("TELEFONO");
          }
          if ($contador === 8)
          {
            return true;
          }//contador
        }
      }//PRESIONO EL BOTON
   }//VALIDAR DATOS

   public function GetMensaje($m)
   {
     echo
     '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        UPPS!</strong> VERIFIQUE: ',$m,'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

   }

   private function ObtenerDatos($nombre, $apellido, $localidad, $telefono, $correo, $confirmar_correo, $contra, $confirmar_contra)
   {
     $_SESSION['nombre'] = $nombre;
     $_SESSION['apellido'] = $apellido;
     $_SESSION['codigo'] = $localidad;
     $_SESSION['telefono'] = $telefono;
     $_SESSION['correo'] = $correo;
     $_SESSION['confiarmar_correo'] = $confirmar_correo;
     $_SESSION['contra'] = $contra;
     $_SESSION['confirmar_contra'] = $confirmar_contra;

   }

   public function Crear_usuario()
   {
     $nombre = $_POST["nombre"];
     $apellido = $_POST["apellido"];
     $localidad = $_POST["codigo_P"];
     $telefono = $_POST["telefono"];
     $correo = $_POST["correo"];
     $confirmar_correo = $_POST["correo_confirm"];
     $contra = $_POST["contra"]; //CIFRADO DE CONTRSEÑA MD5
     $confirmar_contra = $_POST["contra_confirm"];
     $this->ObtenerDatos($nombre, $apellido, $localidad, $telefono, $correo, $confirmar_correo, $contra, $confirmar_contra);

     if (isset($_POST['btn_login']))
     {
      if ($this->ValidarDatos())
      {
        //Conectamos con el servidor
        require_once("PHP/conexion.php");
        //llamamos a la clase conectar de conexion php
         $conec = new conectar;
        //llamada a el metodo de realizar $conexion
        $R_conexion = $conec->RealaizarConexion();

        //Obtener provincia
          $id_provincia= "";
          $consulta = "SELECT id_provincia FROM localidad WHERE codigopostal = $localidad";
          //Realizamos una consulta
          $ejecutar = pg_query( $R_conexion, $consulta);
          while ($m= mysqli_fetch_array($ejecutar))
          {
            $id_provincia = $m[0];
          }

          $provincia = "";
          $consulta_prov = "SELECT nombre FROM provincia WHERE codigo = '$id_provincia'";
          //Realizamos una consulta
          $ejecutar_prov = pg_query( $R_conexion, $consulta_prov);
          while ($m= pg_fetch_array($ejecutar_prov))
          {
            $provincia = $m[0];
          }
        //Cifrado de contraseña
        $contra_cifrada = hash('sha512',$contra);
        //Insertar paciente
        $consultaRegistrar = "INSERT INTO cliente VALUES ('$nombre', '$apellido', '$correo', '$contra_cifrada', '$localidad', '$provincia', '$telefono')";
        $ejecutarRegistro= pg_query( $R_conexion, $consultaRegistrar);
        //Verificar
        //Si se enviaron correctamente las consultas
        if($ejecutarRegistro)
        {
          echo
          '<script>
            swal("MUY BIEN!", "Su usuario fue creado", "success")
          </script>';
          sleep(3);
          header('Location: Login.php');

        }else {
          echo
          '<script>
            swal("ERROR!!", "Disculpe, hubo un error al ingresar datos :C", "error")
          </script>';

        }
      }//DATOS CORRECTOS
    }//PRESIONO EL BOTON
   }//CREAR USUARIO
 }//CREARSESION

 ?>
