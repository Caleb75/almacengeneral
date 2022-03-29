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
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                <span>Formularios</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
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
    <?php
    $cn = infoUS($_REQUEST['identificador']);

function infoUS($identificador){
	include 'conexion.php';
	$sentencia = "SELECT * FROM usuarios WHERE identificador='".$identificador."'";
	$resultado = mysqli_query($cn, $sentencia);
	$res = mysqli_fetch_assoc($resultado);

?>
    

    <form action="mod_US.php?identificador=<?php echo $res['identificador']; ?>" method="POST" enctype="multipart/form-data">
    <center><h1>Actualizar usuarios</h1></center>  

    
  	<div class="divimagen"> 
     <?php echo "<img src='Fotos/"; echo $res['Foto']; echo "' style='height: 200px; width: 20s%; padding-top: 1%;'>"; ?>
     </div>

 
            <label for="recipient-name" class="col-form-label">*Todos los campos deben ser rellenados*</label>
            <div class="row gy-5">
            <div class="col-6">
            <label for="recipient-name" class="col-form-label">Identificador:</label>
            <input type="text" class="form-control" id="recipient-name" name="identificador" value="<?php echo $res['identificador']; ?>">
            </div>
            <div class="col-6">
            <label for="recipient-name" class="col-form-label">Nombres:</label>
            <input type="text" class="form-control" id="recipient-name" name="nombre" value="<?php echo $res['nombre']; ?>">
            </div>
            <div class="col-6">
            <label for="recipient-name" class="col-form-label">Apellidos:</label>
            <input type="text" class="form-control" id="recipient-name" name="apellidos" value="<?php echo $res['apellidos']; ?>">
            </div>
            <div class="col-6">
            <label for="recipient-name" class="col-form-label">Telefono:</label>
            <input type="number" class="form-control" id="recipient-name" name="telefono" value="<?php echo $res['telefono']; ?>">
          </div>
          <div class="col-6">
            <label for="recipient-name" class="col-form-label">Correo electronico:</label>
            <input type="email" class="form-control" id="recipient-name" name="email_user" value="<?php echo $res['email_user']; ?>">
          </div>
          <div class="col-6">
            <label for="recipient-name" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" id="recipient-name" name="contraseña" value="<?php echo $res['contraseña']; ?>">
            <div class="col-auto">
             <span id="passwordHelpInline" class="form-text">
                 Al menos conteneder de 8 a 10 caracteres.
                </span>
            </div>
          </div>
          <div class="col-6">
            <label for="recipient-name" class="col-form-label">Tipo de usuario:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="rol_id" value="<?php echo $res['rol_id']; ?>">
            <option selected value="2">Alumno</option>
            <option value="3">Docente</option>
            <option value="4">Cliente</option>
            </select>
          </div>
          <div class="col-6">
            <label for="recipient-name" class="col-form-label">Estatus:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status" value="<?php echo $res['status']; ?>">
            <option selected value="1">Activo</option>
            <option value="2">Inactivo</option>
            </select>
          </div>
        
      </div>
      <?php
		}
	?>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Actualizar</button>
      </div>
      </form>
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
