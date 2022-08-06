<?php
include_once ('../BD/conexion.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin RavenGames</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Custom styles for this page -->
      <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">




</head>

<body id="page-top">

<?php
include './layauts/menunavbar.php'
    ?>



                
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tablas</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>
        

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Datos de las Tablas de Eventos </h6>
    </div>
    <div class="col-md-3">
        <a type="text" class="btn btn-success" tabindex="-1" role="button" href="creaevento.php">Crear Evento(s)</a>  
        </div> 
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre Evento</th>
                        <th>id evento</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                      
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>id evento</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
        
                        
                       </tr>
</tfoot>
                


</div>
            <!-- End of Main Content -->
            <?php
include './layauts/allfooter.php'
?>

</body>

</html>