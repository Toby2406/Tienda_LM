<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/estilos.css?v=<?php echo time();?>">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--ICON-->
    <script src="https://kit.fontawesome.com/43d58409e2.js" crossorigin="anonymous"></script>
    <!--ALERT-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>MC</title>
    <!--SCRIPT-->
    <script src="JS/js.js?v=<?php echo time();?>"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
      EjecutarCargar();
    </script>
  </head>
  <!--Iconos SVG-->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

  <body class="login hidden">
    <div class="loader" id="loader">
      <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <?php
      session_start();
      error_reporting(0);//DESACTIVAR ERRORES
      
      require_once("PHP/CRUD/CrearSesion.php");
      $crear = new CrearSesion;
      $crear->Crear_usuario();
     ?>
    <header class="container">
    <form  method="post">

              <div class="register_box">

                <h2>INGRESAR</h2>

                <!--INCIO INPUT-->
                <div class="row">

                <!--Nombre y apellido-->
                <div class="row">
                  <!--Nombre-->
                  <div class="col-md-5">
                    <label>Nombre</label>
                    <div class="input_login">
                      <i class="fas fa-users"></i>
                      <input type="text" name="nombre" value="<?php echo $_SESSION['nombre'] ?>" placeholder="Nombre">
                    </div>
                  </div>
                  <!--Apellido-->
                <div class="col-md-5">
                  <label>Apellido</label>
                  <div class="input_login">
                    <i class="fas fa-users"></i>
                    <input type="text" name="apellido" value="<?php echo $_SESSION['apellido'] ?>" placeholder="Apellido">
                  </div>
                </div>

                <!--codigo postal-->
                <div class="col-md-5">
                  <label>Codigo postal</label>
                  <div class="input_login">
                    <select id="localidad" name="codigo_P" class="form-control" value="">
                        <option value="<?php echo $_SESSION['codigo'] ?>" selected><?php echo $_SESSION['codigo'] ?></option>
                        <?php
                          require_once("PHP/Admin.php");
                          $select = new Select;
                          $select->Localidades();
                         ?>
                    </select>
                  </div>
                </div>

                <!--telefono-->
                <div class="col-md-5">
                  <label>Telefono</label>
                  <div class="input_login">
                    <i class="fas fa-mobile-alt"></i>
                    <input type="text" name="telefono" value="<?php echo $_SESSION['telefono'] ?>" placeholder="2911111111">
                  </div>
                </div>

                </div>

                <!--correo-->
                <div class="row">
                  <!--correo-->
                  <div class="col-md-5">
                    <label>correo</label>
                    <div class="input_login">
                      <i class="fas fa-at"></i>
                      <input type="text" name="correo" value="<?php echo $_SESSION['correo'] ?>" placeholder="nombre@hotmail.com">
                    </div>
                  </div>
                  <!--confirmar correo-->
                  <div class="col-md-5">
                    <label>confirmar correo</label>
                    <div class="input_login">
                      <i class="fas fa-at"></i>
                      <input type="text" name="correo_confirm" value="<?php echo $_SESSION['confiarmar_correo'] ?>" placeholder="nombre@hotmail.com">
                    </div>
                  </div>

                </div>

                <div class="row">
                  <!--Contraseña--->


                  <div class="col">
                    <label>contraseña</label>
                    <div class="input_login"><!--Contraseña-->
                      <i class="fas fa-users"></i>
                      <input type="password" name="contra" value="<?php echo $_SESSION['contra'] ?>" placeholder="*******">
                    </div>
                  </div>

                  <div class="col">
                    <label>confirmar contraseña</label>
                    <div class="input_login"><!--Confirmar contraseña-->
                    <i class="fas fa-users"></i>
                    <input type="password" name="contra_confirm" value="<?php echo $_SESSION['confirmar_contra'] ?>" placeholder="*******">
                    </div>
                    <span>minimo de 8 caracteres y 20 maximo</span>
                  </div>

                </div>

                </div>
                <!--FIN INPUT-->

                <!--BOTON DE INGRESO-->
                  <button class="btn_login" type="submit" name="btn_login">REGISTRAR</button>
                  <a href="Login.php">Volver al login</a>

              </div>
    </form>


    </header>

  </body>

  <!--BOOSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>
