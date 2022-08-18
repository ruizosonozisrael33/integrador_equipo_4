
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
include './layauts/menunavbar.php';
    ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Registrar Usuario</h1>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Contenidoo xd  -->
                        <div class="col-lg-6 mb-4">
                        </div>

                                           
                        <form class="row g-3" action='./class/addusclas.php' method="POST" >
                         


    <div class="col-4">
      <label for="nombreus" class="form-label">Nombre(s)</label>
      <input type="text" name='nombreus' class="form-control" id="nombreus" placeholder="Escribe el nombre">
    </div>
    <div class="col-4">
      <label for="apellidopatus" class="form-label">Primer Apellido</label>
      <input type="text" name='apellidopatus' class="form-control" id="apellidopatus" placeholder="Escribir primer Apellido">
    </div>
    <div class="col-4">
      <label for="apellidomatus" class="form-label">Segundo Apellido</label>
      <input type="text" name='apellidomatus' class="form-control" id="apellidomatus" placeholder="Escribir segundo Apellido">
    </div>
    <div class="col-md-4">
      <label for="cuatri" class="form-label">Cuatrimestre</label>
      <input type="text" name ='cuatri' class="form-control" id="cuatri" placeholder="Coloca el cuatrimestre actual en letras">
    </div>
    <div class="col-md-8">
      <label for="correo" class="form-label">Correo</label>
      <input type="email" name='correo' class="form-control" id="correo" placeholder="almatricula@gmail.com">
    </div>
    <div class="col-md-5">
      <label for="contraseña" class="form-label">Contraseña</label>
      <input type="password" name='contraseña' class="form-control" id="contraseña" placeholder="Escribe una contraseña de 8 caracteres">
    </div>
    <div class="col-md-7">
      <label for="carrera" class="form-label">Carrera</label>
      <select id="carrera" name='carrera' class="form-select">
        <option selected>Selecciona la carrera </option>
        <option>TICs area de Desarrollo de Software Multiplataforma</option>
        <option>TIC's area Infraestructura de Redes Digitales </option>
       <option>Mantenimiento Industrial </option>
        <option>Negocios area Ventas </option>
        <option>Negocios area Mercadotecnia </option>
        <option>Licenciatura en enfermeria </option> 


      </select>
    </div>
    <div class="col-md-5">
      <label for="usuario" class="form-label">Usuario</label>
      <input type="text" name='usuario' class="form-control" id="usuario" placeholder="Coloca un nombre de ususario de 6 caracteres">
    </div>

    <div class="col-12 text-center">
      <div class="form-check-center" >
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-success">Registrar</button>
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