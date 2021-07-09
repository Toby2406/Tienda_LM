<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/estilos.css?v=<?php echo time();?>">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--icon-->
    <script src="https://kit.fontawesome.com/43d58409e2.js" crossorigin="anonymous"></script>
    <!--Querry-->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <title>MC</title>
  </head>
  <body class="cuerpo">
    <!--NavBar-->
    <div class="nav_bar">
      <div class="menu_bar">
        <a href="#" class="btn_menuB"><span class="fas fa-bars"></span></a>
      </div>
      <nav>
        <ul class="nav_text">
          <img class="logo" src="img/logo.png" alt="">
          <li><a href="#">INICIO</a></li>
          <li><a href="producto.php">PRODUCTOS</a></li>
          <li><a href="Nosotros.php">NOSOTROS</a></li>
          <li id="btn_nav"><a  href="Login.php"><span><i class="fas fa-user"></i></span>INICIAR</a></li>
        </ul>
      </nav>
    </div>

    <header class="container" >
        <!-- inicio Carrusel de ofertas -->
        <div id="carouselExampleControls" class="carousel slide img_carrusel" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="Productos\producto_1.php"><img  src="Productos\img\cama_H\cama_H_1.png" class="d-block w-100" ></a>
            </div>
            <div class="carousel-item">
              <a href="Productos\producto_1.php"><img  src="Productos\img\cama_S\cama_S_1.png" class="d-block w-100" ></a>
            </div>
            <div class="carousel-item">
              <a href="Productos\producto_1.php"><img  src="Productos\img\cama_B\cama_B.png" class="d-block w-100" ></a>
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
        <!-- fin Carrusel -->

    </header>

    <footer>
        <div class="container">
          <!--BOTONES-->
          <div class="row">
            <div class="col">
              <h4>REDES SOCIALES</h4>
              <!--Boton facebook-->
              <a href="#"><img src="img/face.png" id="face" class="iconos"/></a>
              <label for="face">Nombre</label>
              <br>
              <!--Boton instagram-->
              <a href="#"><img src="img/i.png"  id="insta" class="iconos"></a>
              <label for="insta">Nombre</label>

            </div>

            <!--NOSOTROS-->
            <div class="col">
              <h4>NOSOTROS</h4>
              <p id="text_footer">
                MC es un negocio familiar dedicada a la fabricación de camas
                con diseños infantiles, sillones, repisas,
               sillones caninos y otro tipo de artículos con madera. <a href="Nosotros.php">+info</a>
              </p>
            </div>
          </div>
        </div>
    </footer>
  </body>
  <!--BOOSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <!--SCRIPT-->
  <script src="JS/js.js?v=<?php echo time();?>"></script>
  <script type="text/javascript">
    EjecutarNav();
  </script>
</html>
