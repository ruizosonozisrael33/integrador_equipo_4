<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.PHP">
      
        <div class="sidebar-brand-text mx-3">Panel Administrativo RavenGames</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.PHP">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

  


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Operaciones
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsua"
            aria-expanded="true" aria-controls="collapseUsua">
            <i class="fas fa-fw fa-folder"></i>
            <span>Usuarios</span>
        </a>
        <div id="collapseUsua" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pantallas</h6>
                <a class="collapse-item" href="registrarusua.php">Rgistrar usuario</a>
                <a class="collapse-item" href="tables.php">Tabla de usuarios</a>
            
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEve"
            aria-expanded="true" aria-controls="collapseEve">
            <i class="fas fa-fw fa-folder"></i>
            <span>Eventos</span>
        </a>
        <div id="collapseEve" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pantallas</h6>
                <a class="collapse-item" href="creaevento.php">Crear evento</a>
                <a class="collapse-item" href="tablaeventos.php">Tabla de evento</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJuegos"
            aria-expanded="true" aria-controls="collapseJuegos">
            <i class="fas fa-fw fa-folder"></i>
            <span>Juegos</span>
        </a>
        <div id="collapseJuegos" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pantallas</h6>
                <a class="collapse-item" href="agregarjuego.php">Agregar Juegos</a>
                <a class="collapse-item" href="tablajuegos.php">Tabla de Juegos</a>
            </div>
        </div>
    </li>
  

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCate"
            aria-expanded="true" aria-controls="collapseCate">
            <i class="fas fa-fw fa-folder"></i>
            <span>Categorias de juegos</span>
        </a>
        <div id="collapseCate" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pantallas</h6>
                <a class="collapse-item" href="crearcatjuegos.php">Agregar Categoria de juego</a>
                <a class="collapse-item" href="tablacatjuego.php">Tabla de Categorias</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseResul"
            aria-expanded="true" aria-controls="collapseResul">
            <i class="fas fa-fw fa-folder"></i>
            <span>Resultados</span>
        </a>
        <div id="collapseResul" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pantallas</h6>
                <a class="collapse-item" href="agregarresul.php">Agregar Resultados</a>
                <a class="collapse-item" href="tablaresul.php">Tabla de Resultados</a>
            </div>
        </div>
    </li>
    

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePartisi"
            aria-expanded="true" aria-controls="collapsePartisi">
            <i class="fas fa-fw fa-folder"></i>
            <span>Participantes</span>
        </a>
        <div id="collapsePartisi" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pantallas</h6>
                <a class="collapse-item" href="agregarparticip.php">Agregar Participante</a>
                <a class="collapse-item" href="tablaparticip.php">Tabla de Participantes</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseResp"
            aria-expanded="true" aria-controls="collapseResp">
            <i class="fas fa-fw fa-folder"></i>
            <span>Respaldo de la BD</span>
        </a>
        <div id="collapseResp" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pantallas</h6>
                <a class="collapse-item" href="respaldobd.php">respaldo</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
   

</ul>
<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../Index2.html" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->