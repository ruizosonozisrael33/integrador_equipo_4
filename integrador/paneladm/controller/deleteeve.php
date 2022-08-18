<?php
include ('../../BD/conexion.php');

if(isset($_POST['delete_btneve']))
{
    $idevento = $_POST['delete_ideve'];

    $query = "DELETE FROM eventos WHERE idevento='$idevento' ";
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