<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilos.css?v=<?php echo time();?>">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--ICON-->
    <script src="https://kit.fontawesome.com/43d58409e2.js" crossorigin="anonymous"></script>
    <!--ALERT-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Querry-->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <title>MC</title>
  </head>

  <?php
  //Iniciamos sesion
  session_start();
  //VERIFICAMOS SI HAY UNA SESION
  if (!isset($_SESSION['usuario']))
  {
    echo
    '<script>
      swal("ERROR!!", "Disculpe, debe inciar sesion", "error");
    </script>';
    header('Location: ../Login.php');
    session_destroy();
    die();
  }
   ?>
  <body class="cuerpo">
    <!--NavBar-->
    <div class="nav_bar">
      <div class="menu_bar">
        <a href="#" class="btn_menuB"><span class="fas fa-bars"></span></a>
      </div>
      <nav>
        <ul class="nav_text">
          <img class="logo" src="../img/logo.png" alt="">
          <li id="user_hidden">
            <span><i class="fas fa-user"></i></span>
            <span id="nombre">Hola!,<?php echo $_SESSION['Nombre']; ?></span>
            <ul>
              <li><a href="configuracion.php">Configurar</a></li>
              <li><a href="Cerrar_sesion.php">Cerrar sesion</a></li>
            </ul>
          </li>
          <li><a href="inicio.php">INICIO</a></li>
          <li><a href="productos.php">PRODUCTOS</a></li>
          <li><a href="Nosotros.php">NOSOTROS</a></li>
          <li id="User_btn"><a><span><i class="fas fa-user"></i></span></a>
              <ul>
                <li><a href="#">Configurar</a></li>
                <li><a href="Cerrar_sesion.php">Cerrar sesion</a></li>
              </ul>
          </li>

        </ul>
      </nav>
    </div>
    <?php
      //Almacenamos nombre de usuario
      require_once("../PHP/conexion.php");
      $conec = new conectar;
      $conexion = $conec->RealaizarConexion();
      $usuario =  $_SESSION['usuario'];
      $datos_usuario = mysqli_query($conexion, "SELECT Nombre, Apellido, Telefono, Localidad FROM cliente WHERE Correo = '$usuario'");
      while ($m = mysqli_fetch_array($datos_usuario))
      {
        $_SESSION['Nombre_usuario'] = $m[0];
        $_SESSION['Apellido_usuario'] = $m[1];
        $_SESSION['local_usuario'] = $m[3];
        $_SESSION['tel_usuario'] = $m[2];
      }

      require_once("../PHP/CRUD/Modificar.php");
      $m = new Modificar;
      $m->Modificar_Datos();
     ?>
    <header class="container">

        <form  method="post">
          <div class="row">
            <!--IMAGEN-->
              <div class="col">
                <i class="fas fa-user-tie icon_config"></i>
              </div>

              <!--DATOS-->
              <div class="col">
                  <h5 id="title_conf"><b>Datos del ususario</b></h5>
                  <!--INPUT-->
                  <div class="input_config">
                    <label for="nombre">Nombre</label>
                    <input  type="text" id="nombre_conf" name="nombre" value="<?php echo $_SESSION['Nombre_usuario'] ?>" disabled>
                    <button class="btn_conf" type="button" id="btn_nombre" name="btn_nombre" onclick="EjecutarEditar('nombre_conf')"><i class="fas fa-edit"></i>Editar</button>

                    <label for="Apellidio">Apelldio</label>
                    <input  type="text" id="Apellidio" name="Apellidio" value="<?php echo $_SESSION['Apellido_usuario'] ?>" disabled>
                    <button class="btn_conf" type="button" id="btn_apellido" name="btn_apellido" onclick="EjecutarEditar('Apellidio')"><i class="fas fa-edit"></i>Editar</button>

                    <label for="correo">Correo</label>
                    <input id="correo"  type="text" name="correo" value="<?php echo $_SESSION['usuario'] ?>" disabled>

                    <label for="telefono">Teléfono</label>
                    <input id="telefono"  type="text" name="telefono" value="<?php echo  $_SESSION['tel_usuario'] ?>" disabled>
                    <button class="btn_conf" type="button" id="btn_telefono" name="btn_telefono" onclick="EjecutarEditar('telefono')"><i class="fas fa-edit"></i>Editar</button>

                    <label for="localidad">Localidad</label>
                    <select id="localidad" name="localidad" class="form-control" value="" disabled>
                        <option value="<?php echo $_SESSION['local_usuario'] ?>" selected><?php echo $_SESSION['local_usuario'] ?></option>
                        <?php
                          require_once("../PHP/Admin.php");
                          $select = new Select;
                          $select->Localidades();
                         ?>
                    </select>
                    <button class="btn_conf" type="button" id="btn_local" name="btn_local" onclick="EjecutarEditar('localidad')"><i class="fas fa-edit"></i>Editar</button>

                  </div>

                  <!--BOTONES-->
                  <div  id="btn_editar">
                    <button id="btn_1" class="btn_conf_bottom" type="submit" name="btn_modificar">Guardar cambios</button>
                    <button  id="btn_2" class="btn_conf_bottom" type="button" name="button" onclick="EjecutarNormal()">Descartar</button>
                  </div>

                </div>
              </div>

        </form>
    </header>

    <footer>
        <div class="container">
          <!--BOTONES-->
          <div class="row">
            <div class="col">
              <h4>REDES SOCIALES</h4>
              <!--Boton facebook-->
              <a href="#"><img src="../img/face.png" id="face" class="iconos"/></a>
              <label for="face">Nombre</label>
              <br>
              <!--Boton instagram-->
              <a href="#"><img src="../img/i.png"  id="insta" class="iconos"></a>
              <label for="insta">Nombre</label>

            </div>

            <!--NOSOTROS-->
            <div class="col">
              <h4>NOSOTROS</h4>
              <p id="text_footer">
                orem ipsum dolor sit amet consectetur adipiscing elit eget gravida eros tincidunt,
                pharetra lacus iaculis nec leo tristique fusce ultrices morbi inceptos.
                Augue mattis pharetra ultrices semper sapien laoreet convallis placerat lacus aliquam,
                porta nam id platea senectus euismod magna leo hendrerit curae.
              </p>
            </div>
          </div>
        </div>
    </footer>
  </body>

  <!--BOOSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <!--JS-->
  <script src="../JS/js.js?v=<?php echo time();?>"></script>
  <script type="text/javascript">
    EjecutarNav();
  </script>
</html>
