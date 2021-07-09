<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
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
    <title>MC</title>
  </head>
  <body class="cuerpo"></body>
</html>
<?php
  session_start();
  session_destroy();
  echo
  '<script>
    swal("Sesion cerrada con exito", "Hasta luego", "success");
    window.location = "../index.php";
  </script>';

 ?>
