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
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Almacen Logistico</a>
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
          </form>
-->
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill"> Bienvenido <?php echo $nombre; ?></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="perfil_us.php?identificador=<?php echo $res['identificador']; ?>">Perfil</a></li>
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
              <div class="text-muted small fw-bold text-uppercase px-3">Inicio</div>
            </li>
            <li><li>
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
    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
  </ol>
</nav>
        <div class="row">
          <div class="col-md-12">
          <div class="card" style="width: 30rem;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/usuarios.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Usuarios</h5>
        <p class="card-text">Vista de usuarios</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Agregar usuarios</button>

      </div>
    </div>
  </div>
</div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="guardarDU.php" method="POST" enctype="multipart/form-data"> 
            <label for="recipient-name" class="col-form-label">*Todos los campos deben ser rellenados*</label>
            <div class="row gy-5">
            <div class="col-6">
            <label for="recipient-name" class="col-form-label">Identificador:</label>
            <input type="text" class="form-control" id="recipient-name" name="identificador">
            </div>
            <div class="col-6">
            <label for="recipient-name" class="col-form-label">Nombres:</label>
            <input type="text" class="form-control" id="recipient-name" name="nombre">
            </div>
            <div class="col-6">
            <label for="recipient-name" class="col-form-label">Apellidos:</label>
            <input type="text" class="form-control" id="recipient-name" name="apellidos">
            </div>
            <div class="col-6">
            <label for="recipient-name" class="col-form-label">Telefono:</label>
            <input type="number" class="form-control" id="recipient-name" name="telefono">
          </div>
          <div class="col-6">
            <label for="recipient-name" class="col-form-label">Correo electronico:</label>
            <input type="email" class="form-control" id="recipient-name" name="email_user">
          </div>
          <div class="col-6">
            <label for="recipient-name" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" id="recipient-name" name="contraseña">
            <div class="col-auto">
             <span id="passwordHelpInline" class="form-text">
                 Al menos conteneder de 8 a 10 caracteres.
                </span>
            </div>
          </div>
          <div class="col-6">
            <label for="imagen">Cargar Foto</label>
		        <input type="file" name="Foto" id="Foto" accept="image/*">
        </div>
          </div>
          <div class="col-6">
            <label for="recipient-name" class="col-form-label">Tipo de usuario:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="rol_id">
            <option selected value="2">Alumno</option>
            <option value="3">Docente</option>
            <option value="4">Cliente</option>
            </select>
          </div>
          </div>
          <div class="col-6">
            <label for="recipient-name" class="col-form-label">Estatus:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status">
            <option selected value="1">Activo</option>
            <option value="2">Inactivo</option>
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
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Tabla usuarios
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Estatus</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <?php 
        include("conexion.php");
      	$query="SELECT * FROM usuarios";
      	$resultado = $cn->query($query);
	      foreach($resultado as $res){
  	     ?>
        <tr> 
        <td><?php echo $res['identificador']; ?></td>
        <td><?php echo $res['nombre']; ?></td>
        <td><?php echo $res['apellidos']; ?></td>
        <td><?php echo $res['status']; ?></td>
        <td><a href="ver_US.php?identificador=<?php echo $res['identificador']; ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
        <td><a href="editar_US.php?identificador=<?php echo $res['identificador']; ?>" class="btn btn-success"><i class="fa-solid fa-user-pen"></i></a></td>
        <td><a href="eliminar_DU.php?identificador=<?php echo $res['identificador']; ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></a></td>

        <?php
		}
	?>
                     </tr> 
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Estatus</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
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
