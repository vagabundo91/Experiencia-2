<?php

$directorio = 'C:/wamp/www/FormularioPHP/assets/';
$enviado = isset($_POST['enviado']) ? (int) $_POST['enviado'] : 0;
$nombre = isset($_POST['r-form-1-first-name']) ? Filtro($_POST['r-form-1-first-name']) : '';
$apellido = isset($_POST['r-form-1-last-name']) ? Filtro($_POST['r-form-1-last-name']) : '';
$fechanac = isset($_POST['"r-form-1-fecha-nac']) ? Filtro($_POST['"r-form-1-fecha-nac']) : '';
$sexo = isset($_POST['r-form-1-sexo']) ? Filtro($_POST['r-form-1-sexo']) : '';
$region = isset($_POST['r-form-1-region']) ? Filtro($_POST['r-form-1-region']) : '';
$area = isset($_POST['area']) ? Filtro($_POST['area']) : '';
$correo = isset($_POST['r-form-1-email']) ? Filtro($_POST['r-form-1-email']) : '';
$error = '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario Experiencia 2 Desarrollo Web</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
    </head>
<body>
<div class="container">
  <span style="padding-top: 10px;"></span>
<?php
// Mostrar contenido
if($enviado == 1) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  exit;
} else if(empty($nombre)) {
  $error = 'Por favor, ingrese su nombre.';
} else if(empty($apellido)) {
  $error = 'Por favor, ingrese su apellido.';
} else if(empty($correo)) {
  $error = 'Por favor, ingrese su correo electrónico.';
} else if(empty($sexo)) {
  $error = 'Por favor, ingrese su sexo.';
} else if(empty($region)) {
  $error = 'Por favor, Ingrese la región a la cuál usted pertenece.';
}

// Vista de error
if(!empty($error)) {
?>
<div class="alert alert-info">
  <i class="glyphicon glyphicon-info-sign"></i>
  <?php echo $error; ?>
</div>
<a href="./" class="btn btn-warning">
  <i class="glyphicon glyphicon-chevron-left"></i>
  Volver
</a>

  <h3>¡Formulario enviado satisfactoriamente!</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Datos enviados</h3>
    </div>
    <div class="panel-body">
      <p>Muchas Gracias, <b><?php echo $nombre; ?><?php echo $apellido; ?></b>,</p>
      <p>La siguiente información ha sido entregada:<br></p>
      <p>Fecha de Nacimiento: <b><?php echo $fechanac;?></b>
      <p>Sexo: <b><?php echo $sexo;?></b>
      <p>Región: <b><?php echo $region;?></b>
      <p>Areas de Interés: <b><?php echo $fechanac;?></b>
      <p>Tu correo electrónico es <b><?php echo $correo; ?></b></p>
    </div>
    <div class="panel-footer">
      <div class="text-right">
        <a href="./" class="btn btn-primary">
          <i class="glyphicon glyphicon-chevron-left"></i>
          Volver
        </a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/retina-1.1.0.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>
</html>