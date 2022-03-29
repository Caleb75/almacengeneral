<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: login.php");
	}
	
	$nombre = $_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/d06729d0fc.js" crossorigin="anonymous"></script>

    <title>Almacen Logistico</title>
  </head>
  <body class="sb-nav-fixed">
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >Almacen Logistico</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!--<div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Buscar"
                aria-label="Buscar"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form> -->
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"> Bienvenido <?php echo $nombre; ?></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="perfil_us.php">Perfil</a></li>
                <li><a class="dropdown-item" href="salir.php">Cerrar sesion</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                Inicio
              </div>
            </li>
            <li>
              <a href="index.php" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Principales
              </div>
            </li>
            <li>
              <a class="nav-link px-3 sidebar-link" href="agregar_us.php">
                <span class="me-2"><i class="bi bi-people"></i></i></span>
                <span>Usuarios</span>
              </a>
            
            </li>
            <li>
              <a href="vista_clientes.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-file-person"></i></span>
                <span>Clientes</span>
              </a>
            </li>
            <li>
              <a href="formularios.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                <span>Formularios</span>
              </a>
            </li>
            <li>
              <a href="inventario.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-card-checklist"></i></span>
                <span>Inventario</span>
              </a>
            </li>
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
    <div class="container-fluid">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Formularios</li>
  </ol>
</nav>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card border-primary h-100">
      <img src="images/entradaalmacen.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">Entrada Almacen</h5>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#entradaAl" data-bs-whatever="@fat">Registrar</a>
        <a class="btn btn-success" href="entradaR.php" role="button">Registros</a>
      </div>
    </div>
  </div>


  <div class="col">
  <div class="card border-primary h-100">
    <div class="card h-100">
      <img src="images/inspeccion.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Solicitud de Inspección</h5>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#solicitud" data-bs-whatever="@fat">Registro</a>
        <a class="btn btn-success" href="solicitudR.php" role="button">Registros</a>
      </div>
    </div>
  </div>
  </div>
  
  <div class="col">
   <div class="card border-primary h-100">
    <div class="card h-100">
      <img src="images/tarja.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tarja de expedición</h5>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#expedicionT" data-bs-whatever="@fat">Registro</a>
        <a class="btn btn-success" href="tarjaR.php" role="button">Registros</a>

      </div>
    </div>
   </div>
  </div>

  <div class="col">
  <div class="card border-primary h-100">
    <div class="card h-100">
      <img src="images/mercanciacarga.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Control de Inventario </h5>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#controlIn" data-bs-whatever="@fat">Registro</a>
        <a class="btn btn-success" href="control_inveR.php" role="button">Registros</a>
        <a class="btn btn-dark" href="" data-bs-toggle="modal" data-bs-target="#inventarioN" data-bs-whatever="@fat">Num. de inventarios</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card border-primary h-100">
    <div class="card h-100">
      <img src="images/Recibo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Recibo de intercambio de Equipo (IRE)</h5>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reciboIn" data-bs-whatever="@fat">Registro</a>
      </div>
    </div>
  </div>
  </div>

  <div class="col">
  <div class="card border-primary h-100">
    <div class="card h-100">
      <img src="images/mercancia.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mercancia de Carga General</h5>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mercaciaGe" data-bs-whatever="@fat">Registro</a>
      </div>
    </div>
  </div>
  </div>

  <div class="col">
  <div class="card border-primary h-100">
    <div class="card h-100">
      <img src="images/terrestre.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lista de verificacion Del Trasporte Terrestre</h5>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#listaVe" data-bs-whatever="@fat">Registro</a>
      </div>
    </div>
  </div>
  </div>
</div>
</div>


<div class="modal fade" id="entradaAl" tabindex="-1" aria-labelledby="entradaAl" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="entradaAl">Nueva entrada</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="entrada_guardar.php" method="POST"> 
          <label for="recipient-name" class="col-form-label">*Todos los campos deben ser rellenados*</label>
          <div class="row gy-5">
          <div class="col-4">
              <label for="recipient-name" class="col-form-label">Encargado:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="encargado_us">
                <option selected value="2">1</option>
                <option value="3">2</option>
                <option value="4">3</option>
              </select>
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de folio:</label>
              <input type="text" class="form-control" id="recipient-name" name="folioalm">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Clientes:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="clientes">
                <option selected value="2">1</option>
                <option value="3">2</option>
                <option value="4">3</option>
              </select>
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Medida de Contenedor:</label>
              <input type="text" class="form-control" id="recipient-name" name="medida">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de contenedor:</label>
              <input type="text" class="form-control" id="recipient-name" name="n_contenedor">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Referencia/Lote:</label>
              <input type="text" class="form-control" id="recipient-name" name="refe_lote">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de Factura:</label>
              <input type="text" class="form-control" id="recipient-name" name="n_factura">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de Booking:</label>
              <input type="text" class="form-control" id="recipient-name" name="n_booking">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de bultos:</label>
              <input type="text" class="form-control" id="recipient-name" name="n_bultos">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Fecha y Hora de Ingreso:</label>
              <input type="date" class="form-control" id="recipient-name" name="fh_llegada">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Descripcion de la Mercancia:</label>
              <input type="text" class="form-control" id="recipient-name" name="desc_merca">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Sello Fiscal:</label>
              <input type="text" class="form-control" id="recipient-name" name="s_fiscal">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Sello Adicional:</label>
              <input type="text" class="form-control" id="recipient-name" name="s_adicional">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Peso Neto:</label>
              <input type="text" class="form-control" id="recipient-name" name="p_neto">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Peso Bruto:</label>
              <input type="text" class="form-control" id="recipient-name" name="p_bruto">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-success" value="Guardar">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>


 <div class="modal fade" id="solicitud" tabindex="-1" aria-labelledby="labelsoli" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labelsoli">Solicitud de Inspeccion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="soli_guardar.php" method="POST"> 
          <label for="recipient-name" class="col-form-label">*Todos los campos deben ser rellenados*</label>
          <div class="row gy-5">
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de contenedor:</label>
              <input type="text" class="form-control" id="recipient-name" name="numero_Cont">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Fecha y Hora de Inspeccion:</label>
              <input type="date" class="form-control" id="recipient-name" name="Fecha_Hora">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Lugar de Inspeccion:</label>
              <input type="text" class="form-control" id="recipient-name" name="lugar_Ins">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Via:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="via">
                <option selected value="2">Telefonica</option>
                <option value="3">Correo Electronico</option>
                <option value="4">Personal</option>
              </select>
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Nombre del Solicitante de la Inspeccion:</label>
              <input type="text" class="form-control" id="recipient-name" name="nombre_Solicicitante">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Tipo de Operacion:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Tipo_de_Op">
                <option selected value="2">Importacion</option>
                <option value="3">Nacional</option>
                <option value="4">Exportacion</option>
              </select>
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Nombre del Servicio Requerido:</label>
              <input type="text" class="form-control" id="recipient-name" name="Nombre_Ser">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Metodo de Transito:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="metodo_Trans">
                <option selected value="2">Ferrocarril</option>
                <option value="3">Carretera</option>
              </select>
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Linea Trasportista o Gondola de Ferrocarril:</label>
              <input type="text" class="form-control" id="recipient-name" name="Traspor_Gondo">
            </div>
            <label for="recipient-name" class="col-form-label">Datos de la Carga</label>
            <div class="row gy-5">
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Empaque/Presentacion:</label>
                <input type="text" class="form-control" id="recipient-name" name="empaque">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Marca:</label>
                <input type="text" class="form-control" id="recipient-name" name="marca">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Tonelaje:</label>
                <input type="text" class="form-control" id="recipient-name" name="Tone">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Bultos:</label>
                <input type="text" class="form-control" id="recipient-name" name="bulto">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Lote:</label>
                <input type="text" class="form-control" id="recipient-name" name="lote">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success" value="Guardar">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      

      <div class="modal fade" id="expedicionT" tabindex="-1" aria-labelledby="labelexp" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labelexp">Tarja de Expedicion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="conexionTarja.php" method="POST"> 
          <label for="recipient-name" class="col-form-label">*Todos los campos deben ser rellenados*</label>
          <div class="row gy-5">
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Agente Aduanal:</label>
              <input type="text" class="form-control" id="recipient-name" name="agente_A">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Cliente:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="cliente">
                <option selected value="2">1</option>
                <option value="3">2</option>
                <option value="4">3</option>
              </select>
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Buque o Viaje:</label>
              <input type="text" class="form-control" id="recipient-name" name="buque">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de Contenedor:</label>
              <input type="text" class="form-control" id="recipient-name" name="num_Cont">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Medida de Contenedor:</label>
              <input type="text" class="form-control" id="recipient-name" name="medida_Cont">
            </div>
            <label for="recipient-name" class="col-form-label">Datos del Trasporte</label>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Linea Trasportista:</label>
              <input type="text" class="form-control" id="recipient-name" name="lineaTras">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Nombre del Conductor</label>
              <input type="text" class="form-control" id="recipient-name" name="nombreCon">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Placas del Camion</label>
              <input type="text" class="form-control" id="recipient-name" name="placasCa">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Placas de la plataforma</label>
              <input type="text" class="form-control" id="recipient-name" name="pla_plataformas">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero economico</label>
              <input type="text" class="form-control" id="recipient-name" name="n_economico">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Destino</label>
              <input type="text" class="form-control" id="recipient-name" name="destino">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Sello fiscal</label>
              <input type="text" class="form-control" id="recipient-name" name="s_fiscal">
            </div>
            <label for="recipient-name" class="col-form-label">Datos de la mercancia</label>
            <div class="row gy-5">
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Tipo de mercancia:</label>
                <input type="text" class="form-control" id="recipient-name" name="t_mercancia">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Peso neto:</label>
                <input type="text" class="form-control" id="recipient-name" name="p_neto">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Peso bruto:</label>
                <input type="text" class="form-control" id="recipient-name" name="p_bruto">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Numero de bultos:</label>
                <input type="text" class="form-control" id="recipient-name" name="bultos">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Lote o referencia:</label>
                <input type="text" class="form-control" id="recipient-name" name="lote">
              </div>
              <div class="col-4">
                <label for="recipient-name" class="col-form-label">Observaciones:</label>
                <input type="text" class="form-control" id="recipient-name" name="obser">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success" value="Guardar">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      
      <div class="modal fade" id="controlIn" tabindex="-1" aria-labelledby="Control" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Control">Control de inventario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="conexionCon.php" method="POST"> 
          <label for="recipient-name" class="col-form-label">*Todos los campos deben ser rellenados*</label>
          <div class="row gy-5">

          <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de Inventario:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="autorizo">
                <option selected value="2">1</option>
                <option value="3">2</option>
                <option value="4">3</option>
              </select>
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Numero de Revision:</label>
              <input type="text" class="form-control" id="recipient-name" name="numeroR">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Fecha de ultima Actualizacion:</label>
              <input type="date" class="form-control" id="recipient-name" name="fechaAct">
            </div>
            <label for="recipient-name" class="alert alert-secondary">Datos del Control</label>
            <div class="row gy-5">
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Codigo:</label>
              <input type="text" class="form-control" id="recipient-name" name="codigo">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Descripcion:</label>
              <input type="text" class="form-control" id="recipient-name" name="descripcion">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Existencias iniciales:</label>
              <input type="text" class="form-control" id="recipient-name" name="existencias">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Entradas:</label>
              <input type="text" class="form-control" id="recipient-name" name="entrada">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Salidas:</label>
              <input type="text" class="form-control" id="recipient-name" name="salida">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Stock:</label>
              <input type="text" class="form-control" id="recipient-name" name="stock">
            </div>
            <div class="col-4">
              <label for="recipient-name" class="col-form-label">Autorizo:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="autorizo">
                <option selected value="2">1</option>
                <option value="3">2</option>
                <option value="4">3</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-success" value="Guardar">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  <div class="modal fade" id="inventarioN" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar # de inventario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="Ninventario.php" method="POST">
      <div class="row">
      <div class="col">
              <label for="recipient-name" class="col-form-label">Numero de Revision:</label>
              <input type="text" class="form-control" id="recipient-name" name="numeroR">
            </div>
            <br>
      <div class="col">
              <label for="recipient-name" class="col-form-label">Fecha de Emision:</label>
              <input type="date" class="form-control" id="recipient-name" name="fecha">
            </div>
            <br>
         
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
      

    </div>
    </main>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
