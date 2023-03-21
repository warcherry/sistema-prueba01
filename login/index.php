<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de ventas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <!-- libreria de sweetallert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<!-- cherry es para colocar un fondo  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
      .login {
        background: url(dist/img/login.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    </style>
-->

</head>
<body class="hold-transition login-page" style="background-image: url('https://img.freepik.com/free-photo/close-up-electronic-components_23-2148419098.jpg?w=1380&t=st=1679366025~exp=1679366625~hmac=f924af39066324368281c05b71e50ec30675bc9c43032bcb5c13f1fde4856dec'); background-size: cover; background-position: center;">
<div class="login-box">
  <!-- mensaje de alerta de sesion modificar si se puede -->

      <?php
          session_start();
           if (isset($_SESSION['mensaje'])){
            $respuesta = $_SESSION['mensaje'];?> 

            <script>
              Swal.fire({
              icon: 'error',
              title: '<?php echo $respuesta;?>',                             
            })
            </script>

      <?php
       }    
      ?> 
  
  <!-- fin de mensaje -->
  <!-- 
  <center>
      <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-redes-sociales_53876-37691.jpg?w=1380&t=st=1679169163~exp=1679169763~hmac=7432d4b8f2ba482c349c9487306a67afac10150c0ac62b2218eee754d2618987" 
      alt="" width="350px" >
  </center> -->
  <br>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo $URL;?>" class="h1"><b>ELT-ARIES</b></a>
      <p class="h5"><b>Sistema multiusuario para el control de Componentes Electronicos </b></p>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingrese sus datos</p>
      <form action="../app/controllers/login/ingreso.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
