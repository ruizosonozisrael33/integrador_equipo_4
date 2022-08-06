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
                        <h1 class="h3 mb-0 text-gray-800">Crear evento</h1>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Contenidoo xd  -->
                        <div class="col-lg-6 mb-4">
                        </div>

                        

                        <form class="row g-3">

                          <div class="col-4 ">
                            <label for="nombre" class="form-label">Nombre del Evento</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Asigne nombre a su Evento">
                          </div>
                          <div class="col-4">
                            <label for="apellidop" class="form-label">Codigo Acceso</label>
                            <input type="text" class="form-control" id="apellidop" placeholder="Access code">
                          </div>
                          <div class="col-4 ">
                            <label for="apellidomat" class="form-label">Numero de Participantes</label>
                            <input type="text" class="form-control" id="apellidomat" placeholder="Participantes del equipo">
                          </div>
                          <div class="col-4">
                            <label for="cuatri" class="form-label">Nombre del Juego</label>
                            <input type="text" class="form-control" id="cuatri" placeholder="Juego a participar">
                          </div>
                          <select id="categoria" class="form-select">
                              <option selected>Selecciona la categoria </option>
                              <option>First Person Shoter</option>
                              <option>Carreras </option>
                              <option>Deportes </option>
                              <option>Acción </option>
                      
                            </select>
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                          <div class="col-md-3 text-center">
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