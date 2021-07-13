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
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@500&display=swap" rel="stylesheet">
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
  <body class="cuerpo">
    <!--NavBar-->
    <?php


      session_start();
      if (!isset($_SESSION['usuario']))
      {
        echo
        '    <div class="nav_bar">
              <div class="menu_bar">
                <a href="#" class="btn_menuB"><span class="fas fa-bars"></span></a>
              </div>
              <nav>
                <ul class="nav_text">
                  <img class="logo" src="../img/logo.png" alt="">
                  <li><a href="../index.php">INICIO</a></li>
                  <li><a href="../producto.php">PRODUCTOS</a></li>
                  <li><a href="../Nosotros.php">NOSOTROS</a></li>
                  <li id="btn_nav"><a  href="Login.php"><span><i class="fas fa-user"></i></span>INICIAR</a></li>
                </ul>
              </nav>
            </div>';
      }else
      {
        echo
        " <div class='nav_bar'>
              <div class='menu_bar'>
                <a href='#' class='btn_menuB'><span class='fas fa-bars'></span></a>
              </div>
              <nav>
                <ul class='nav_text'>
                  <img class='logo' src='../img/logo.png' alt=''>
                  <li id='user_hidden'>
                    <span><i class='fas fa-user'></i></span>
                    <span id='nombre'>Hola!,".$_SESSION['Nombre']."</span>
                    <ul>
                      <li><a href='../Sesion/configuracion.php'>Configurar</a></li>
                      <li><a href='../Sesion/Cerrar_sesion.php'>Cerrar sesion</a></li>
                    </ul>
                  </li>
                  <li><a href='../Sesion/inicio.php'>INICIO</a></li>
                  <li><a href='../Sesion/productos.php'>PRODUCTOS</a></li>
                  <li><a href='../Sesion/Nosotros.php'>NOSOTROS</a></li>
                  <li id='User_btn'><a><span><i class='fas fa-user'></i></span></a>
                      <ul>
                        <li><a href='#'>Configurar</a></li>
                        <li><a href='Cerrar_sesion.php'>Cerrar sesion</a></li>
                      </ul>
                  </li>

                </ul>
              </nav>
            </div>";
      }
     ?>


    <header class="container">
      <form method="post">
        <div class="row">
          <div class="col-md-9">
            <!--Col_1-->
            <!--IMAGENES-->
            <div class="imgenes_producto">

              <div id="carouselExampleControls" class="carousel slide img_carrusel" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img  src="img\cama_H\cama_H_1.png" class="d-block w-100" >
                  </div>
                  <div class="carousel-item">
                    <img  src="img\cama_H\cama_H_2.png" class="d-block w-100" >
                  </div>
                  <div class="carousel-item">
                    <img  src="img\cama_H\cama_H_3.png" class="d-block w-100" >
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
            </div>
            </div> <!--Fin IMAGENES-->
          </div><!--Fin col_1-->

          <!--Col_2-->
          <div class="col">
            <?php
              //DATOS PRODUCTO

              //Almacenamos nombre de usuario
              require_once("../PHP/conexion.php");
              $conec = new conectar;
              $conexion = $conec->RealaizarConexion();
              $datos_producto = pg_query($conexion, "SELECT Nombre_producto,Precio,Alto,Largo,Ancho,Color FROM producto WHERE ID_producto = 0000");
              while ($m = pg_fetch_array($datos_producto))
              {
                $_SESSION['Nombre_producto'] = $m[0];
                $_SESSION['Precio'] = $m[1];
                $_SESSION['Alto'] = $m[2];
                $_SESSION['Largo'] = $m[3];
                $_SESSION['Ancho'] = $m[4];
                $_SESSION['Color'] = $m[5];
              }
             ?>
            <h3 id="text_proc">Descripción</h3>
            <p id="desc_proc">
              Nombre: <?php echo $_SESSION['Nombre_producto']; ?><br>
              Ancho: <?php echo $_SESSION['Ancho']; ?> <br>
              Alto: <?php echo $_SESSION['Alto']; ?> <br>
              largo: <?php echo $_SESSION['Largo']; ?> <br>
              Colores: <?php echo $_SESSION['Color']; ?> <br>
            </p>

            <h5 id="desc_proc">PRECIO: $<?php echo $_SESSION['Precio']; ?></h5>
            <button class="btn_prod" type="submit" name="btn_proc"> <i class="fas fa-comments" id="icon_prod"></i> Pedir</button>

            <div id="Enviar">
              <div class="form-floating">
                <textarea name="mensaje" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                <label for="floatingTextarea">Consulta</label>
              </div>
              <button class="btn_enviar" type="submit" name="btn_enviar">Enviar</button>
            </div>
            <?php
              require_once('../PHP/Admin.php');
              $f = new Select;
              $f->Producto();
              require_once('../PHP/Correo.php');
              $f = new Correo;
              $f->EnviarCorreo();
            ?>
          </div>
        </div><!--Fin row-->
      </form>

    </header>
</body>
<!--BOOSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="../JS/js.js?v=<?php echo time();?>"></script>
<script type="text/javascript">
  EjecutarNav();
</script>
<html>
