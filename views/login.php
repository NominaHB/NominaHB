<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Iniciar Sesión</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="../img/usuario4.png" rel="icon">
  <link href="../css/loginstyle.css" rel="stylesheet">
</head>

<body background="../img/intro-carousel/grupo.jpg">
  <header>
    <div>
      <img class="logo" src="../img/L-nomina-large-blanco.png" alt="" title="" /></a>
    </div>
  </header>
  <?php
      if (isset($error['errorMessage'])) {
      ?>
      <div class="modal-content">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p class="text-dark"><?php echo $error['errorMessage'] ?></p>  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
      <?php
      }
      ?>
  <div class="login-box">
    <h1>Iniciar Sesión</h1>
    <img class="avatar" src="../img/usuario4.png">
    <form action="?controller=login&method=login" method="POST">
      <div class="form">
        <label for="USUARIO">Usuario</label><br>
        <input name="USUARIO" type="text" placeholder="Introduce Usuario" required><br>

        <label for="CONTRASEÑA">Contraseña</label><br>
        <input name="CONTRASENA" type="password" placeholder="Introduce Contraseña" required><br>
        <button id="boton"><b>Ingresar</b></button>

      </div>
    </form>
  </div>
  <footer>
    <div class="footer">
      <p>&copy; Derechos Reservados</p>
    </div>
  </footer>
  <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>