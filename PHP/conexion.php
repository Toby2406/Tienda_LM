<?php
 class conectar{
   //Declaramos variables
  private  $servidor = "localhost";
  private  $usuario = "root";
  private  $clave = "";
  private  $bd = "tinda";
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
