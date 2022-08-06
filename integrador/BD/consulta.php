<?php
/*  Mandamos a llamar  nuestra conexion de php  con require */
require ('./conexion.php');
/* Declaramos una variable y dentro de ella asignamos una consulta */
  $sql = "SELECT * FROM `usuarios`;";

  $result = mysqli_query($conexion, $sql);
  
  $usuarios = array();
  while ($fila = mysqli_fetch_array($result)) {
    array_push($usuarios, $fila);
  }
  
  echo json_encode($usuarios);

  mysqli_free_result($result);
  mysqli_close($conexion);
?>