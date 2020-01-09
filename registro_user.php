<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/sweetalert.css">

</head>


<body class="bg-gradient-primary">



  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="card card-login mx-auto mt-5">

          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4"><i class="fas fa-lg fa-graduation-cap"></i> Sistema de Gestion Academica</h1>
                  </div>

                    <div class="form-group">
                        <i class="fas fa-user"></i> <label id="exampleInputEmail">Usuario:</label>
                      <input type="email" id="user"  class="form-control form-control-user" required="required" autofocus="autofocus" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>

                    <div class="form-group">
                      <i class="fas fa-lock"></i> <label id="exampleInputPassword">Password:</label>
                      <input type="password" id="clave" class="form-control form-control-user" required="required" placeholder="Password...">
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                      </div>
                    </div>

                    <button type="submit" name="button" id="login" class="btn btn-primary btn-lg btn-user btn-block">
                     <i class="fas fa-lg fa-sign-in-alt fa-fw"></i> Iniciar Sesion
                    </button>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="recuperar_pass">Olvidaste tu Contraseña?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <script src="assets/js/operaciones.js"></script>
  
  <script src="assets/js/sweetalert.min.js"></script>

</body>

</html>
