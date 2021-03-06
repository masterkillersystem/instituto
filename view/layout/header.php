<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISTEMA DE GESTION Y CONTROL ACADEMICO</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
  <!-- Custom styles for this template-->
  <link href="../../assets/css/sb-admin-2.css" rel="stylesheet">

  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>inicio">
        <div class="sidebar-brand-icon rotate-n-10">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SGA<sup>pro</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php base_url();?>inicio">
          <i class="fas fa-fw fa-home"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestion y Control
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span>Gestion Estudiante</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="<?php echo base_url();?>gestion_estudiantes/estudiante">Estudiantes</a>
            <a class="collapse-item" href="<?php echo base_url();?>gestion_estudiantes/ast_estudiantes">Asistencias Estudiantes</a>
            <a class="collapse-item" href="#">Materias Asignadas</a>
            <a class="collapse-item" href="#">Estado de Pagos</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-university"></i>
          <span>Gestion Academica</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Alumnos Matriculados</a>
            <a class="collapse-item" href="cards.html">Carga Docente</a>
            <a class="collapse-item" href="buttons.html">Evaluaciones</a>
            <a class="collapse-item" href="cards.html">Gestion Docente</a>
            <a class="collapse-item" href="buttons.html">Asignar Silabos</a>
            <a class="collapse-item" href="cards.html">Evaluaciones</a>
          </div>
        </div>
      </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Gestion Global</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Academia</a>
            <a class="collapse-item" href="cards.html">Historial</a>
            <a class="collapse-item" href="buttons.html">Secretaria</a>
            <a class="collapse-item" href="cards.html">Sueldos</a>
            <a class="collapse-item" href="buttons.html">Documentos</a>
          </div>
        </div>
      </li>

         <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSex" aria-expanded="true" aria-controls="collapseSex">
          <i class="fas fa-fw fa-outdent"></i>
          <span>Gestion Matricula</span>
        </a>
        <div id="collapseSex" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Nuevos</a>
            <a class="collapse-item" href="cards.html">Antiguos</a>
            <a class="collapse-item" href="buttons.html">Concluidos</a>
            <a class="collapse-item" href="cards.html">Titulados</a>
            <a class="collapse-item" href="buttons.html">Resagados</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-sitemap"></i>
          <span>Logistica</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Reporte Horarios</a>
            <a class="collapse-item" href="cards.html">Reporte Academico</a>
            <a class="collapse-item" href="buttons.html">Reporte Asistencia</a>
            <a class="collapse-item" href="cards.html">Reporte Mensualidades</a>
          </div>
        </div>
      </li>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Roles de Gestion</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Rol Estudiante</a>
            <a class="collapse-item" href="cards.html">Configuraciones</a>
            <a class="collapse-item" href="buttons.html">Agregar Roles</a>
            <a class="collapse-item" href="cards.html">Rol Docente</a>
            <a class="collapse-item" href="buttons.html">Rol Secretaria</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

   

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          <i class="fas fa-fw fa-paste"></i>
          <span>Informes de Gestion</span>
        </a>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Info Estudiante</a>
            <a class="collapse-item" href="cards.html">Inf Docente</a>
            <a class="collapse-item" href="buttons.html">Inf Secretariado</a>
            <a class="collapse-item" href="cards.html">Gestion Humanitaria</a>
          </div>
        </div>
      </li>

           <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHeight" aria-expanded="true" aria-controls="collapseHeight">
          <i class="fas fa-fw fa-th-list"></i>
          <span>Servicios Academicos</span>
        </a>
        <div id="collapseHeight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Cursos</a>
            <a class="collapse-item" href="cards.html">Talleres</a>
            <a class="collapse-item" href="buttons.html">Congreso</a>
            <a class="collapse-item" href="cards.html">Reuniones</a>
            <a class="collapse-item" href="buttons.html">Carreras</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNone" aria-expanded="true" aria-controls="collapseNone">
          <i class="fas fa-check-square"></i>
          <span>Gestion Notas</span>
        </a>
        <div id="collapseNone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-gradient-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Notas Alumnos</a>
            <a class="collapse-item" href="cards.html">Evaluaciones</a>
            <a class="collapse-item" href="buttons.html">Parciales</a>
            <a class="collapse-item" href="cards.html">Semestral</a>
            <a class="collapse-item" href="buttons.html">Notas Cursos</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
          <i class="fas fa-fw fa-sms"></i>
          <span>Servicio Mensajeria</span>
        </a>
        <div id="collapseTen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Comportamiento:</h6>
            <a class="collapse-item" href="buttons.html">Notificacion a Padres</a>
            <a class="collapse-item" href="cards.html">Cronograma de Actividades</a>
            <a class="collapse-item" href="buttons.html">Actividad de Institucion</a>
            <a class="collapse-item" href="cards.html">Notificacion a Docentes</a>
          </div>
        </div>
      </li>
<br><br>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Busqueda..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" aria-describedby="basic-addon2" type="button">
                        <i class="fas fa-search "></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger lg-2x badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header bg-gradient-dark">
                  Centro de Alertas
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header bg-gradient-dark">
                  Centro de Mensajes
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-500 small">Administrador <?php echo ucfirst($_SESSION['nombre']); ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url();?>assets/img/firefox.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuracion
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Registro de actividades
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../controller/cerrarSesion.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->



  