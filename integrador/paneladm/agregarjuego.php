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
                        <h1 class="h3 mb-0 text-gray-800">Agregar Juegos</h1>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Contenidoo xd  -->
                        <div class="col-lg-6 mb-4">
                        </div>

                        

                        <form class="col-12 text-center">

                        
                          <div class="col-4 offset-4">
                            <label for="nomjuego" class="form-label">Nombre del Juego</label>
                            <input type="text" class="form-control" id="nomjuego" placeholder="Asigne nombre del juego">
                          </div>
                          <div class="col-4 offset-4 ">
                            <label for="versionjuego" class="form-label">Version de juego</label>
                            <input type="text" class="form-control" id="versionjuego" placeholder="Poner la version del juego">
                          </div>
                          <div class="col-4 offset-4">
                            <label for="consola" class="form-label">Consola</label>
                            <input type="text" class="form-control" id="consola" placeholder="Agrega la consola para el juego">
                          <div class="col-8 offset-2">
                              <label for="añodejuego" class="form-label">Año del juego</label>
                              <input type="text" class="form-control" id="añodejuego" placeholder="Agrega el año del juego">

                            </div>
                            <div class="col-8 offset-2">
                              <label for="idcategoria" class="form-label">Id categoria</label>
                              <input type="text" class="form-control" id="idcategoria" placeholder="Agrega el id de la cateforia correspondiente">

                            </div>
                            <br><br>
                          <div class="col-4 text-center offset-4">
                              <a type="submint" class="btn btn-success" tabindex="-1" role="button" >Crear Evento(s)</a>
                              
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