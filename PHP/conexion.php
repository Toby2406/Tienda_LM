<?php
 class conectar{
   //Declaramos variables
  private  $servidor = "ec2-52-202-152-4.compute-1.amazonaws.com";
  private  $usuario = "ocnnyoxnneovhs";
  private  $clave = "de6e47d7fde3f613c12e0897b9f411ffba239781299d7a11aa38cb203a54f8e9";
  private  $bd = "dc7j7k6ldeem3s";
  private $port = "5432";
  //Realizamos la coneion
public function RealaizarConexion(){
  try {
    $conexion = new PDO('pgsql:host=$servidor;port=$port;dbname=$bd', $usuario, $clave);
    foreach($conexion->query('SELECT * from FOO') as $fila) {
        print_r($fila);
    }
    $conexion = null;
} catch (PDOException $e) {
    echo "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
}
}
?>
