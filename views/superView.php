<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    
    <title>SUPER PANEL</title>
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
    <!-- FontAwesome styles for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
  <header>
  <div class="collapse fixed-top" id="navbarHeader">
    <div class="container">
        
        <div class="row text-center pt-5">
        <div class="col-md-4">
          <div class="card py-5 pt-5 mb-4 shadow-sm">
           <i class="fas fa-suitcase-rolling fa-5x sky"></i>
           <div class="card-body">
           <h5 class="card-title">VISITAS</h5>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#AGREGAR-TARIFA" data-title="AGREGAR VISITA"><i class="fas fa-plus-square fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#LISTAR-VISITAS" data-title="LISTAR VISITAS"><i class="fas fa-th-list fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#EDITAR-VISITAS" data-title="EDITAR VISITAS"><i class="fas fa-pen-square fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#BORRAR-VISITAS" data-title="BORRAR VISITAS"><i class="fas fa-minus-square fa-2x"></i></button>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card py-5 pt-5 mb-4 shadow-sm">
           <i class="fas fa-file-invoice fa-5x sky"></i>
           <div class="card-body">
           <h5 class="card-title">ESTADISTICAS</h5>
              <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#REPORTE-HISTORICO" data-title="REPORTE HISTORICO"><i class="far fa-calendar fa-2x"></i></button>
              <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#REPORTE-ESTUDIANTES" data-title="REPORTE DE ESTUDIANTES"><i class="fas fa-user-graduate fa-2x"></i></button>
              <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#REPORTE-PERSONAL" data-title="REPORTE DE PERSONAL"><i class="fas fa-user-tie fa-2x"></i></button>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card py-5 pt-5 mb-4 shadow-sm">
           <i class="fas fa-user-cog fa-5x sky"></i>
           <div class="card-body">
           <h5 class="card-title">CUENTA</h5>
              <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#CONFIGURAR-CUENTA" data-title="CONFIGURAR CUENTA"><i class="fas fa-cog fa-2x"></i></button>
              <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-title="CERRAR CUENTA"><i class="fas fa-sign-out-alt fa-2x"></i></button>
            </div>
          </div>
        </div>

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
          <img src="<?php echo $helper->content('images/buttons/options.svg') ?>" alt="bajar">
        </span>
      </button>
    </div>
  </div>
</header>
  <div class="container tab-row text-center">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="eventos-tab" data-toggle="tab" href="#eventos" role="tab" aria-controls="eventos" aria-selected="true">EVENTOS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="ingresos-tab" data-toggle="tab" href="#ingresos" role="tab" aria-controls="ingresos" aria-selected="false">INGRESOS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="egresos-tab" data-toggle="tab" href="#egresos" role="tab" aria-controls="egresos" aria-selected="false">EGRESOS</a>
    </li>
  </ul>
  <div class="tab-content event-table" id="myTabContent">
  <div class="tab-pane fade show active" id="eventos" role="tabpanel" aria-labelledby="eventos-tab">
    <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">TARJETA</th>
        <th scope="col">DNI</th>
        <th scope="col">NOMBRE Y APELLIDO</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">SUBCATEGORIA</th>
        <th scope="col">FECHA</th>
        <th scope="col">HORA</th>
        <th scope="col">EVENTO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="tab-pane fade" id="ingresos" role="tabpanel" aria-labelledby="ingresos-tab">
    <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">TARJETA</th>
        <th scope="col">DNI</th>
        <th scope="col">NOMBRE Y APELLIDO</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">SUBCATEGORIA</th>
        <th scope="col">FECHA</th>
        <th scope="col">HORA</th>
        <th scope="col">EVENTO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>INGRESO</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="tab-pane fade" id="egresos" role="tabpanel" aria-labelledby="egresos-tab">
    <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">TARJETA</th>
        <th scope="col">DNI</th>
        <th scope="col">NOMBRE Y APELLIDO</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">SUBCATEGORIA</th>
        <th scope="col">FECHA</th>
        <th scope="col">HORA</th>
        <th scope="col">EVENTO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      <tr>
        <th scope="row">1209384</th>
        <td>23323133</td>
        <td>Otto Franz</td>
        <td>Estudiante</td>
        <td>Ingeniería</td>
        <td>20-20-2020</td>
        <td>20:20</td>
        <td>EGRESO</td>
      </tr>
      
    </tbody>
  </table>
  </div>

</div>
</div>

<!--ASIDE SLIDES-->
<div id="slideout-search">
  <div id="search">
    <img src="<?php echo $helper->content('images/buttons/search.svg'); ?>" alt="buscar">
  </div>  
  <div id="slideout-search-inner">
    <form>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="ingresar busqueda">
      <div class="input-group-append">
        <button class="btn btn-secondary" type="button">BUSCAR</button>
      </div>
    </div>
    </form>
		</div>
  </div>
  
<div id="slideout-time-search">
  <div id="search">
    <img src="<?php echo $helper->content('images/buttons/time.svg'); ?>" alt="buscar">
  </div>  
  <div id="slideout-time-search-inner">
    <form>
    <div class="input-group mb-3 w-100">
      <input type="number" class="form-control text-center font-weight-bold" placeholder="00" aria-label="" min="0" max="23" onclick="zerofill(this);" onkeypress="zerofill(this);">
      <input type="number" class="form-control text-center font-weight-bold" placeholder="24" aria-label="" min="1" max="24" onclick="zerofill(this);" onkeypress="zerofill(this);">
    <button class="btn btn-secondary" type="button">BUSCAR</button>
    </div>
  </form>
		</div>
	</div>

<!--FOOTER-->
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
      <script src="<?php echo $helper->content('js/panel.js'); ?>"></script>
</body>
</html>