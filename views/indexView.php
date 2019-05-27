<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    
    <title>SAC</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $helper->content('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- FontAwesome styles for this template -->
    <link href="<?php echo $helper->content('css/all.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo $helper->content('css/styles.css'); ?>" rel="stylesheet">
    <!-- GoogleFonts styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
  <header>
  <div class="collapse fixed-top" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col py-5 pt-5">
	  	</div>
        <div class="col-5 py-4 pt-5">
			<form id='form-login'>
			<div class="input-group mb-2 pt-5">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
			</div>
			<input type="text" name="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
			<div class="input-group mb-2">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Clave</span>
			</div>
			<input type="text" class="form-control" name="clave" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>			
			<p class="text-muted">*Completar todos los datos 
			<button id="ingresar" class="btn btn-outline-secondary float-right">Ingresar</button>
			</p>
      <span id="msg"></span>
			</form>
		</div>
        <div class="col py-5 pt-5">
	  	</div>
      </div>
    </div>
  </div>
  <div class="navbar fixed-top navbar-dark">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
      <img src="<?php echo $helper->content('images/logo.svg'); ?>" alt="UTN" id="brand">
        <h3 class="p-1">SAC</h3>
      </a>
      <button class="navbar" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span>
          <img src="<?php echo $helper->content('images/buttons/key.svg') ?>" alt="bajar">
        </span>
      </button>
    </div>
  </div>
</header>

<div class="jumbotron">
  <div class="container text-center">
    <h1 class="display-3 text-blue">Bienvenid@ al SAC</h1>
    <p class="lead">Sistema administrativo de control de ingresos y egresos.</p>
    <a href="#">
        <button type="button" class="btn btn-sm btn-outline-secondary">SOLICITAR ACCESO</button>
      </a>
  </div>
</div>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">
        <button type="button" class="btn btn-sm btn-outline-secondary">VER AYUDA</button>
      </a>
    </p>
    <p class="text-muted">©2019 UTN - TODOS LOS DERECHOS RESERVADOS</p>
  </div>
</footer>
      <script src="<?php echo $helper->content('js/jquery-3.3.1.min.js'); ?>"></script>
      <script src="<?php echo $helper->content('ajax/popper.min.js'); ?>"></script>
      <script src="<?php echo $helper->content('js/bootstrap.bundle.min.js'); ?>"></script>
      <script type="module" src="<?php echo $helper->content('js/app/login.js'); ?>"></script>
</body>
</html>