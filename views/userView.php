<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    
    <title>USER PANEL</title>
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
           <i class="fas fa-cash-register fa-5x sky"></i>
           <div class="card-body">
           <h5 class="card-title">PAGOS</h5>
              <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#NUEVO-PAGO" data-title="NUEVO PAGO"><i class="fas fa-parking fa-2x"></i></button>
              <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#LISTAR-PAGOS" data-title="LISTAR PAGOS"><i class="fas fa-th-list fa-2x"></i></button>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card py-5 pt-5 mb-4 shadow-sm">
           <i class="fas fa-id-card-alt fa-5x sky"></i>
           <div class="card-body">
           <h5 class="card-title">TARJETAS</h5>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#ALTA-TARJETAS" data-title="ALTA DE TARJETAS"><i class="fas fa-caret-square-up fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#BAJA-TARJETAS" data-title="BAJA DE TARJETAS"><i class="fas fa-caret-square-down fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#LISTAR-TARJETAS" data-title="LISTADO DE TARJETAS"><i class="fas fa-th-list fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#ASIGNAR-TARJETA" data-title="ASIGNAR TARJETA"><i class="fas fa-check-square fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#BLOQUEAR-TARJETA" data-title="BLOQUEAR TARJETA"><i class="fas fa-window-close fa-2x"></i></button>
           </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card py-5 pt-5 mb-4 shadow-sm">
           <i class="fas fa-user-cog fa-5x sky"></i>
           <div class="card-body">
           <h5 class="card-title">CUENTA</h5>
              <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#CONFIG-CUENTA" data-title="CONFIGURAR CUENTA"><i class="fas fa-cog fa-2x"></i></button>
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
 
<!--MODALS-->
<!--PAGOS-->
<div class="modal fade" id="NUEVO-PAGO" tabindex="-1" role="dialog" aria-labelledby="CONFIG-CUENTA" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">REGISTRAR PAGO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Importe</span>
          </div>
          <input type="number" class="form-control">
        </div>        
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Persona</span>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>202020</option>
            <option value="1">A202021</option>
            <option value="2">B202022</option>
            <option value="3">C202023</option>
          </select>
        </div> 
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Servicio</span>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>Servicio1</option>
            <option value="1">Servicio2</option>
            <option value="2">Servicio3</option>
            <option value="3">Servicio4</option>
          </select>
        </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">REGISTRAR</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="LISTAR-PAGOS" tabindex="-1" role="dialog" aria-labelledby="LISTAR-PAGOS" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">LISTADO DE PAGOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">RECIBO</th>
            <th scope="col">NOMBRE Y APELLIDO</th>
            <th scope="col">FECHA</th>
            <th scope="col">OPCIONES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">202020</th>
            <td>Veinte Veinte</td>
            <td>20-20-20</td>
            <td><a href="<?php echo $helper->url('panel', 'ticket'); ?>" target="ticket" onclick="window.open('', 'ticket', 'top=10px,left=10px,width=304px,height=434px,scrollbars=NO,resizable=NO,toolbar=NO')">VER TICKET</a></td>
          </tr>
          <tr>
            <th scope="row">202021</th>
            <td>Veinte Veinte</td>
            <td>20-20-20</td>
            <td><a href="<?php echo $helper->url('panel', 'ticket'); ?>" target="ticket" onclick="window.open('', 'ticket', 'top=10px,left=10px,width=304px,height=434px,scrollbars=NO,resizable=NO,toolbar=NO')">VER TICKET</a></td>
          </tr>          
        </tbody>
      </table>
      </div>      
    </div>
  </div>
</div>

 <!--TARJETAS-->
<div class="modal fade" id="ALTA-TARJETAS" tabindex="-1" role="dialog" aria-labelledby="ALTA-TARJETAS" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ALTA DE TARJETA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">N°</span>
          </div>
          <input type="text" class="form-control">
            <button class="btn btn-outline-secondary" type="button">Dar de alta</button>
        </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="LISTAR-TARJETAS" tabindex="-1" role="dialog" aria-labelledby="LISTAR-TARJETAS" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">LISTADO DE TARJETAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">TARJETA</th>
            <th scope="col">ESTADO</th>
            <th scope="col">ALTA</th>
            <th scope="col">BAJA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">202020</th>
            <td>HABILITADA</td>
            <td>20-20-20</td>
            <td>20-20-20</td>
          </tr>
          <tr>
            <th scope="row">202020</th>
            <td>HABILITADA</td>
            <td>20-20-20</td>
            <td>20-20-20</td>
          </tr>
          <tr>
            <th scope="row">202020</th>
            <td>HABILITADA</td>
            <td>20-20-20</td>
            <td>20-20-20</td>
          </tr>
          <tr>
            <th scope="row">202020</th>
            <td>HABILITADA</td>
            <td>20-20-20</td>
            <td>20-20-20</td>
          </tr>
          <tr>
            <th scope="row">202020</th>
            <td>HABILITADA</td>
            <td>20-20-20</td>
            <td>20-20-20</td>
          </tr>
          <tr>
            <th scope="row">202020</th>
            <td>HABILITADA</td>
            <td>20-20-20</td>
            <td>20-20-20</td>
          </tr>
          <tr>
            <th scope="row">202020</th>
            <td>HABILITADA</td>
            <td>20-20-20</td>
            <td>20-20-20</td>
          </tr>
        </tbody>
      </table>
      </div>      
      <div class="modal-footer">
        <span type="button" class="btn btn-secondary">
          TOTAL DE TARJETAS <span class="badge badge-light">24</span>
        </span>
          <span type="button" class="btn btn-secondary">
            DE ALTA <span class="badge badge-light">20</span>
          </span>
          <span type="button" class="btn btn-primary">
            DE BAJA <span class="badge badge-light">4</span>
          </span>
       </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ASIGNAR-TARJETA" tabindex="-1" role="dialog" aria-labelledby="BAJA-TARJETAS" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ASIGNAR TARJETA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">N°tarjeta</span>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>202020</option>
            <option value="1">202021</option>
            <option value="2">202022</option>
            <option value="3">202023</option>
          </select>
        </div>    
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nombre</span>
          </div>
          <input type="text" class="form-control">
        </div>    
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Apellido</span>
          </div>
          <input type="text" class="form-control">
        </div>    
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">N°DNI</span>
          </div>
          <input type="number" class="form-control">
        </div>   
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Area</span>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>Area1</option>
            <option value="1">Area2</option>
            <option value="2">Area3</option>
          </select>
         </div>    
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary">Limpiar</button>
        <button type="submit" class="btn btn-secondary">Asignar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="BAJA-TARJETAS" tabindex="-1" role="dialog" aria-labelledby="BAJA-TARJETAS" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">BAJA DE TARJETA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">N°</span>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>202020</option>
            <option value="1">202021</option>
            <option value="2">202022</option>
            <option value="3">202023</option>
          </select>
            <button class="btn btn-outline-secondary" type="button">Dar de baja</button>
        </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BLOQUEAR-TARJETA" tabindex="-1" role="dialog" aria-labelledby="BLOQUEAR-TARJETA" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">BLOQUEAR TARJETA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">N°</span>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>202020</option>
            <option value="1">202021</option>
            <option value="2">202022</option>
            <option value="3">202023</option>
          </select>
            <button class="btn btn-outline-secondary" type="button">Bloquear</button>
        </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
 
<!--CUENTA-->
<div class="modal fade" id="CONFIG-CUENTA" tabindex="-1" role="dialog" aria-labelledby="CONFIG-CUENTA" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">CONFIGURAR CUENTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Clave actual</span>
          </div>
          <input type="text" class="form-control">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Clave nueva</span>
          </div>
          <input type="password" class="form-control">
        </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="submit" class="btn btn-secondary">GUARDAR</button>
      </div>
    </form>
    </div>
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