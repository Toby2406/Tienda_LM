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
      swal("ERROR!!", "Disculpe, debe inciar sesion", "error")
    </script>';;
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
          <li><a href="#">NOSOTROS</a></li>
          <li id="User_btn"><a><span><i class="fas fa-user"></i></span></a>
              <ul>
                <li><a href="#">Configurar</a></li>
                <li><a href="Cerrar_sesion.php">Cerrar sesion</a></li>
              </ul>
          </li>

        </ul>
      </nav>
    </div>

    <header class="container nosotros" >
        <div class="row">
          <div class="col-md-8 nosotros_Col" id="descripcion_nosotros" >
            <h5><b>NOSOTROS</b></h5>
            <p>
              MC es un negocio familiar dedicada a la fabricación de camas
              con diseños infantiles, sillones, repisas,
              sillones caninos y otro tipo de artículos con madera.
              <br>Nuestras camas estan hechas de madera MDF 12 mm y pino,
              con mucha dedicación.
              <br>Hacemos tapizado y rellendado de sillones.<br>
              <b id="b_text_N">Cada dia nos renovamos para ofrecer un mejor servicio.</b>
            </p>
          </div>

          <div class="col-md-2 nosotros_Col">
              <h5>¿Queres contactarnos?</h5>
              <!--Boton facebook-->
              <a href="#"><img src="../img/face.png" id="face" class="iconos"/></a>
              <label for="face">Nombre</label>
              <br>
              <!--Boton instagram-->
              <a href="#"><img src="../img/i.png"  id="insta" class="iconos"></a>
              <label for="insta">Nombre</label>
        </div>


    </header>

  </body>
  <!--BOOSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script src="../JS/js.js?v=<?php echo time();?>"></script>
  <script type="text/javascript">
    EjecutarNav();
  </script>
</html>
