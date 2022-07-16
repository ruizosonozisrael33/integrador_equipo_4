<!-- inlcude config.php que tiene la base url -->
<?php
include_once ('../../Config.php');
include_once('../../test.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wapizima Online</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/7a66a4eab9.js" crossorigin="anonymous"></script>
    <link href="<?=$h->get['base_url'].'vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=$h->get['base_url'].'/paneladmin/assets/styles/sb-admin-2.min.css'?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- start incluimos menu desde nuestro layout -->
  <?php
  include '../layouts/menu.php';
  include '../layouts/ContainerUser.php';
  ?>
    <!-- End incluimos menu desde nuestro layout -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  
    <!-- Page level custom scripts -->
    <script src=""></script>

    <script src="<?=$h->get['base_url'].'/paneladmin/assets/js/demo/chart-pie-demo.js'?>"></script>
   
    <!-- Core plugin JavaScript-->
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

 
       <!-- Custom scripts for all pages-->
       <script src=    "<?=$h->get['base_url'].'/paneladmin/assets/js/sb-admin-2.min.js'?>"></script>

    <!-- Page level plugins -->
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/vendor/chart.js/Chart.min.js'?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?=$h->get['base_url'].'/paneladmin/assets/js/demo/chart-area-demo.js'?>"></script>
    <script src=<?=$h->get['base_url'].'/paneladmin/assets/js/demo/chart-pie-demo.js'?>"></script>

</body>

</html>