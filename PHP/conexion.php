<?php
 class conectar{
   //Declaramos variables
  private  $servidor = "ec2-52-202-152-4.compute-1.amazonaws.com";
  private  $usuario = "ocnnyoxnneovhs";
  private  $clave = "de6e47d7fde3f613c12e0897b9f411ffba239781299d7a11aa38cb203a54f8e9";
  private  $bd = "dc7j7k6ldeem3s";
  //Realizamos la coneion
public function RealaizarConexion(){
    $conexion = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->bd);
    if (!$conexion) {
      echo "<h4>Error en la conexion</h4>";
    }
    return $conexion;
}
}
?>
