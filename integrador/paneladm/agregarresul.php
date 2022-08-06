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

</head>

<body id="page-top">

<?php
include './layauts/menunavbar.php'
    ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Agregar Resultados</h1>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Contenidoo xd  -->
                        <div class="col-lg-6 mb-4">
                        </div>

                        

                        <form class="row g-3">

                        
                          <div class="col-4 ">
                            <label for="idresul" class="form-label">ID resultado</label>
                            <input type="text" class="form-control" id="idresul" placeholder="agrege el id del resultado">
                          </div>
                          <div class="col-8  ">
                            <label for="nombreeve" class="form-label">Nombre Evento</label>
                            <input type="text" class="form-control" id="nombreeve" placeholder="nombre del evento">
                          </div>
                          <div class="col-4 ">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" placeholder="escriba el nombre del usuario">
                            </div>
                            <div class="col-4 ">
                              <label for="fecha" class="form-label">Fecha</label>
                              <input type="text" class="form-control" id="fecha" placeholder="agrege la fecha">

                            </div>
                            <div class="col-4 ">
                              <label for="idevento" class="form-label">Id Evento</label>
                              <input type="text" class="form-control" id="idevento" placeholder="coloque el id del evneto">

                            </div>
                            <br><br><br><br>
                          <div class="col-12 text-center ">
                              <a type="submint" class="btn btn-success" tabindex="-1" role="button" >Agregar Resultado</a>
                              
                            </div>                    
</form>


                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
include './layauts/allfooter.php'
?>

</body>

</html>