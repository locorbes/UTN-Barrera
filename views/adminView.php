<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    
    <title>ADMIN PANEL</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $helper->content('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!--DataTables -->
    <link href="<?php echo $helper->content('css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .loading img
      {
        color: #ccc;
        width: 50px;
        height: 50px;
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
        <div class="col-md-3">
          <div class="card py-5 pt-5 mb-4 shadow-sm">
           <i class="fas fa-users fa-5x sky"></i>
           <div class="card-body">
           <h5 class="card-title">USUARIOS</h5>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#AGREGAR-USUARIO" data-title="AGREGAR USUARIO"><i class="fas fa-plus-square fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#LISTAR-USUARIOS" data-title="LISTAR USUARIOS"><i class="fas fa-th-list fa-2x"></i></button>
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

        <div class="col-md-3">
          <div class="card py-5 pt-5 mb-4 shadow-sm">
           <i class="fas fa-money-check-alt fa-5x sky"></i>
           <div class="card-body">
           <h5 class="card-title">TARIFAS</h5>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#AGREGAR-TARIFA" data-title="AGREGAR TARIFA"><i class="fas fa-plus-square fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#LISTAR-TARIFAS" data-title="LISTAR TARIFAS"><i class="fas fa-th-list fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#EDITAR-TARIFAS" data-title="EDITAR TARIFAS"><i class="fas fa-pen-square fa-2x"></i></button>
                  <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#BORRAR-TARIFAS" data-title="BORRAR TARIFAS"><i class="fas fa-minus-square fa-2x"></i></button>
            </div>
          </div>
        </div>
        
        <div class="col-md-2">
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
    <input id="tab-seleccionado" hidden="true">
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
    <table id="eventos-table" class="table table-hover table-striped">
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
    <!--<form>-->
    <div class="input-group mb-3" id="busqueda">
      <input type="text" class="form-control" placeholder="ingresar busqueda">
      <div class="input-group-append">
        <button class="btn btn-secondary" id="btn-buscar" type="button">BUSCAR</button>
        <button class="btn btn-secondary btn-sm" id="btn-reestablecer-busqueda" type="button">X</button>
      </div>
    </div>
    <!--</form>-->
		</div>
  </div>
  
<div id="slideout-time-search">
  <div id="search">
    <img src="<?php echo $helper->content('images/buttons/time.svg'); ?>" alt="buscar">
  </div>  
  <div id="slideout-time-search-inner">
    <!--<form>-->
    <div class="input-group mb-3 w-100" id="filtro-hora">
      <input type="number" class="form-control text-center font-weight-bold" placeholder=" " aria-label="" min="0" max="24" value=""> <!-- onclick="zerofill(this);" onkeypress="zerofill(this);"-->
      <input type="number" class="form-control text-center font-weight-bold" placeholder=" " aria-label="" min="1" max="59" value=""> <!-- onclick="zerofill(this);" onkeypress="zerofill(this);"-->
    <button class="btn btn-secondary" id="btn-hora-buscar" type="button">BUSCAR</button>
    <button class="btn btn-secondary btn-sm" id="btn-reestablecer-hora" type="button">X</button> <!--Para reestablecer la hora-->
    </div>
 <!-- </form>-->
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

<!--MODALS-->

<!--USUARIOS-->
<div class="modal fade bd-example-modal-lg" id="AGREGAR-USUARIO" tabindex="-1" role="dialog" aria-labelledby="AGREGAR-USUARIO" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">AGREGAR NUEVOS USUARIOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">AGREGAR USUARIO</h5>
                  <h6 class="card-subtitle mb-2 mb-3 text-muted">Completar todos los campos</h6>
                  <form id="form-agregar-usuario">
                    <div class="input-group mb-3">
                      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" name="clave" class="form-control" placeholder="Clave provisoria">
                    </div>
                    <div class="input-group mb-3">
                      <input type="mail" name="correo" class="form-control" placeholder="Correo electrónico">
                    </div>
                    <div class="input-group mb-3">
                      <select class="custom-select" id="inputGroupSelect01">
                        <option value="defecto" selected>Seleccionar tipo</option>
                        <option value="1">Superior</option>
                        <option value="2">Administrador</option>
                        <option value="3">Recepcionista</option>
                      </select>
                    </div>
                    <div class="modal-footer">
                      <!-- Span donde se muestra el mensaje-->
                      <div id="msg-user" style="text-align:left;width:100%;"></div>
                      <button type="submit" class="btn btn-secondary">Agregar</button>
                    </div> 
                  </form>
                </div>
              </div>
            </div>
            <div class="col class scroll-column">
              <h5 class="title mb-2">LISTADO DE SOLICITUDES</h5>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                  <p class="mb-2">Nombre Apellido</p>
                    <small>3 dias atras</small>
                  </div>
                  <h5 class="mb-3">email@email.com</h5>
                  <button class="btn btn-sm btn-outline-secondary float-right">Eliminar solicitud</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                  <p class="mb-2">Nombre Apellido</p>
                    <small>3 dias atras</small>
                  </div>
                  <h5 class="mb-3">email@email.com</h5>
                  <button class="btn btn-sm btn-outline-secondary float-right">Eliminar solicitud</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                  <p class="mb-2">Nombre Apellido</p>
                    <small>3 dias atras</small>
                  </div>
                  <h5 class="mb-3">email@email.com</h5>
                  <button class="btn btn-sm btn-outline-secondary float-right">Eliminar solicitud</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                  <p class="mb-2">Nombre Apellido</p>
                    <small>3 dias atras</small>
                  </div>
                  <h5 class="mb-3">email@email.com</h5>
                  <button class="btn btn-sm btn-outline-secondary float-right">Eliminar solicitud</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                  <p class="mb-2">Nombre Apellido</p>
                    <small>3 dias atras</small>
                  </div>
                  <h5 class="mb-3">email@email.com</h5>
                  <button class="btn btn-sm btn-outline-secondary float-right">Eliminar solicitud</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                  <p class="mb-2">Nombre Apellido</p>
                    <small>3 dias atras</small>
                  </div>
                  <h5 class="mb-3">email@email.com</h5>
                  <button class="btn btn-sm btn-outline-secondary float-right">Eliminar solicitud</button>
                </a>
              
              </div>
            </div>
          </div>
        </div>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="LISTAR-USUARIOS" tabindex="-1" role="dialog" aria-labelledby="LISTAR-USUARIOS" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">LISTADO DE USUARIOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-hover table-striped dataTable no-footer">
        <thead>
          <tr>
            <th scope="col">APELLIDO</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TIPO</th>
            <th scope="col">OPCIONES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <form>
            <td>
              <div class="input-group mb-3">
                <input type="text" class="form-control" value="Otto">
              </div>
            </td>
            <td>
              <div class="input-group mb-3">
                <input type="text" class="form-control" value="Frank">
              </div>
            </td>
            <td>
              <div class="input-group mb-3">
                <input type="text" class="form-control" value="mail@mail.com">
              </div>
            </td>
            <td> 
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </td>
            <td>            
            <a href="#" class="alert-link sky"><i class="fas fa-check-square fa-2x"></i></a>
            <a href="#" class="alert-link sky"><i class="fas fa-window-close fa-2x"></i></a>
            </td>
             </form>
          </tr>
          
        </tbody>
      </table>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
        </div>
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
      <form id="form-asignar-tarjeta">
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">N°tarjeta</span>
          </div>
          <input type="text" name="numero-tarjeta" max="12" class="form-control">
        </div>    
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">N°DNI</span>
          </div>
          <input name="dni" class="form-control"  type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  maxlength="8">
          <div class="loading"></div>
        </div> 
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nombre</span>
          </div>
          <input type="text" name="nombre" class="form-control display_required">
        </div>    
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Apellido</span>
          </div>
          <input type="text" name="apellido" class="form-control display_required">
        </div>     
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Sector</span>
          </div>
          <select class="custom-select" id="select-area">
            <option selected value="default">Area1</option>
            <option value="1">Area2</option>
            <option value="2">Area3</option>
          </select>
         </div>    
      </div>
      <div class="modal-footer">
        <div id="msg-tarjeta" style="text-align:left;width:100%;"></div>
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

<!-- TARIFAS -->
<div class="modal fade" id="AGREGAR-TARIFA" tabindex="-1" role="dialog" aria-labelledby="AGREGAR-TARIFA" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">AGREGAR NUEVA TARIFA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Descripción</span>
          </div>
          <input type="text" class="form-control">
        </div>
        <div class="input-group mb-3">  
          <div class="input-group-prepend">
            <span class="input-group-text">Importe en $</span>
          </div>
          <input type="number" class="form-control text-right">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary">AGREGAR</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="LISTAR-TARIFAS" tabindex="-1" role="dialog" aria-labelledby="LISTAR-TARIFAS" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">LISTADO DE TARIFAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Estacionamiento 5 días
              <span class="badge badge-secondary">$210</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Estacionamiento 10 días
              <span class="badge badge-secondary">$400</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Estacionamiento 15 días
              <span class="badge badge-secondary">$570</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Estacionamiento 20 días
              <span class="badge badge-secondary">$710</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Estacionamiento 25 días
              <span class="badge badge-secondary">$840</span>
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="EDITAR-TARIFAS" tabindex="-1" role="dialog" aria-labelledby="EDITAR-TARIFAS" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">EDITAR TARIFAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Descripción</span>
          </div>
          <select class="form-control">
            <option>Estacionamiento 5 días</option>
            <option>Estacionamiento 19 días</option>
            <option>Estacionamiento 15 días</option>
            <option>Estacionamiento 20 días</option>
            <option>Estacionamiento 25 días</option>
          </select>
        </div>
        <div class="input-group mb-3">  
          <div class="input-group-prepend">
            <span class="input-group-text">Importe en $</span>
          </div>
          <input type="number" class="form-control text-right">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary">EDITAR</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="BORRAR-TARIFAS" tabindex="-1" role="dialog" aria-labelledby="BORRAR-TARIFAS" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">BORRAR TARIFAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Estacionamiento 5 días
              <a class="badge btn-secondary">BORRAR</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Estacionamiento 10 días
              <a class="badge btn-secondary">BORRAR</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Estacionamiento 15 días
              <a class="badge btn-secondary">BORRAR</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Estacionamiento 20 días
              <a class="badge btn-secondary">BORRAR</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Estacionamiento 25 días
              <a class="badge btn-secondary">BORRAR</a>
            </li>
          </ul>
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

<!--Boostrap-->
<script src="<?php echo $helper->content('js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo $helper->content('ajax/popper.min.js'); ?>"></script>
<script src="<?php echo $helper->content('js/bootstrap.bundle.min.js'); ?>"></script>
<!--DataTables -->
<script src="<?php echo $helper->content('js/DataTables/jquery.dataTables.min.js'); ?>">
</script> 
<script src="<?php echo $helper->content('js/DataTables/dataTables.bootstrap4.min.js'); ?>">
</script>
<script type="module" src="<?php echo $helper->content('js/app/admin.js'); ?>"></script>


</body>
</html>