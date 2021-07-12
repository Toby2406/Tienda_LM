<?php
 class conectar{
   //Declaramos variables
  private  $servidor = 'ec2-52-202-152-4.compute-1.amazonaws.com';
  private  $usuario = 'ocnnyoxnneovhs';
  private  $clave = 'de6e47d7fde3f613c12e0897b9f411ffba239781299d7a11aa38cb203a54f8e9';
  private  $bd = 'dc7j7k6ldeem3s';
  private $port = '5432';
  private $cadena = "host='$servidor' port='$port' dbname='$bd'  user='$usuario' password='$clave'";
  //Realizamos la coneion
public function RealaizarConexion()
{
    $conexion = pg_connect("host='ec2-52-202-152-4.compute-1.amazonaws.com' port='5432' dbname='dc7j7k6ldeem3s'  user='ocnnyoxnneovhs' password='de6e47d7fde3f613c12e0897b9f411ffba239781299d7a11aa38cb203a54f8e9'"); 
   echo "adasda";
   if (!$conexion) 
    {
      echo "Error en la conexion";
      die();
    }
    return $conexion;
 }
}
?>
