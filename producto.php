<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="CSS/estilos.css?v=<?php echo time();?>">
  <!--Google font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

  <!--BOOSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!--ICON-->
  <script src="https://kit.fontawesome.com/43d58409e2.js" crossorigin="anonymous"></script>
  <!---SCRIPT-->
  <script src="JS/js.js?v=<?php echo time();?>"></script>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
    EjecutarNav();
    EjecutarCargar();
    EjecutarArriba();
  </script>
  <title>MC</title>
</head>

<body class="cuerpo hidden">
<div class="loader" id="loader">
  <div class="lds-ring">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
  <!--NavBar-->
  <div class="nav_bar">
    <div class="menu_bar">
      <a href="#" class="btn_menuB"><span class="fas fa-bars"></span></a>
    </div>
    <nav>
      <ul class="nav_text">
        <img class="logo" src="img/logo.png" alt="">
        <li><a href="index.php">INICIO</a></li>
        <li><a href="#">PRODUCTOS</a></li>
        <li><a href="Nosotros.php">NOSOTROS</a></li>
        <li id="btn_nav"><a  href="Login.php"><span><i class="fas fa-user"></i></span>INICIAR</a></li>
      </ul>
    </nav>
  </div>


  <header class="container">
<span class="arriba"><i class="fas fa-chevron-up"></i></span>
    <!--Inicio de cartas de productos-->
    <div id="btn_productos">
      <!---Boton de camas-->
      <a href="#Camas"><button type="button" name="button"><i class="fas fa-bed"></i></button></a>
      <!---Boton de sillones-->
      <a href="#Sillones"><button type="button" name="button"><i class="fas fa-couch"></i></button></a>
      <!---Boton de mesas-->
      <a href="#Repisas"><button type="button" name="button"><i class="fas fa-align-center"></i></button></a>
    </div>

    <a name="Camas"><h5 class="text_productos">Camas</h5></a>
    <div class="row">
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem; margin:45px;">
        <div class="card-header">
          <img src="Productos\img\cama_H\cama_H_1.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Cama niños HotWheels</h5>
          <p class="card-text">Cama de una plaza con diseño estilo HotWheels.</p>
          <a href="Productos/producto_1.php" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem;  margin:45px;">
        <div class="card-header">
          <img src="Productos\img\cama_C\cama_C_1.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Cama niños card</h5>
          <p class="card-text">Cama de una plaza con diseño estilo Cards.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem;  margin:45px;">
        <div class="card-header">
          <img src="Productos\img\cama_S\cama_S_1.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Cama niños Spider-Man</h5>
          <p class="card-text">Cama de una plaza con diseño estilo Spider-Man.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem;  margin:45px;">
        <div class="card-header">
          <img src="Productos\img\cama_B\cama_B.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">cama niños Batman</h5>
          <p class="card-text">Cama de una plaza con diseño estilo Batman.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem;  margin:45px;">
        <div class="card-header">
          <img src="Productos\img\cama_T\cama_T.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Cama nilos Toys Story</h5>
          <p class="card-text">Cama de una plaza con diseño estilo Toys Story.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
    </div>
    <!--Fin de camas-->
  <a  name="Sillones"><h5 class="text_productos">Sillones</h5></a>
    <div class="row">
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem; margin:45px;">
        <div class="card-header">
          <img src="Productos/img/Desconocido.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">No disponible</h5>
          <p class="card-text">El artículo estara en el cátalogo próximamente.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem;  margin:45px;">
        <div class="card-header">
          <img src="Productos/img/Desconocido.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">No disponible</h5>
          <p class="card-text">El artículo estara en el cátalogo próximamente.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem;  margin:45px;">
        <div class="card-header">
          <img src="Productos/img/Desconocido.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">No disponible</h5>
          <p class="card-text">El artículo estara en el cátalogo próximamente.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
    </div>
    <!--Fin de repisas-->
  <a name="Repisas"><h5 class="text_productos">Repisas</h5></a>
    <div class="row">
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem; margin:45px;">
        <div class="card-header">
          <img src="Productos/img/Desconocido.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">No disponible</h5>
          <p class="card-text">El artículo estara en el cátalogo próximamente.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem;  margin:45px;">
        <div class="card-header">
          <img src="Productos/img/Desconocido.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">No disponible</h5>
          <p class="card-text">El artículo estara en el cátalogo próximamente.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-4" style="max-width: 18rem;  margin:45px;">
        <div class="card-header">
          <img src="Productos/img/Desconocido.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">No disponible</h5>
          <p class="card-text">El artículo estara en el cátalogo próximamente.</p>
          <a href="Cama.html" class="btn  btn-outline-light">Información</a>
        </div>
      </div>
    </div>
    <!--Fin de sillones-->
  </header>

  <footer>
    <div class="container">
      <!--BOTONES-->
      <div class="row">
        <div class="col">
          <h4>REDES SOCIALES</h4>
          <!--Boton facebook-->
          <a href="#"><img src="img/face.png" id="face" class="iconos" /></a>
          <label for="face">Nombre</label>
          <br>
          <!--Boton instagram-->
          <a href="#"><img src="img/i.png" id="insta" class="iconos"></a>
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

</html>
