<?php
include ('../../BD/conexion.php');

if(isset($_POST['delete_btn']))
{
    $idcategoria = $_POST['delete_id'];

    $query = "DELETE FROM catjuegos WHERE idcategoria='$idcategoria' ";
    $query_run = mysqli_query($conexion, $query);

    if($query_run)
     {
        echo "Se elimino correctamente";
     }
     else
     {
        echo"ocurrio un error al realizar la eliminacion";
     }    
}
?>