

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<script>
  const base_url = '<?php echo BASE_URL; ?>';
</script>
<body>
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BASE_URL ?>inicio"> <img src="<?php echo BASE_URL ?>IMG/logo.png" alt="Logo" width="40" height="40"
            class="d-inline-block align-text-top">PAGINA PRINCIPAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>carrito"> <img src="<?php echo BASE_URL ?>IMG/carrito.png"
                  alt="Logo" width="30" height="30" class="d-inline-block align-text-top">Carrito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL ?>perfil"> <img src="<?php echo BASE_URL ?>IMG/perfil.png" alt="Logo" width="30" height="30"
                  class="d-inline-block align-text-top"> Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL ?>login"> <img src="<?php echo BASE_URL ?>IMG/registra.png" alt="Logo" width="30" height="30"
                  class="d-inline-block align-text-top">Registrate</a>
            </li>
          </ul>

          <form class="d-flex col-8" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
          
          <div class="card-body p-2">
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-info dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Panel
                </button>
                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                <li>
                  <button type="button" class="dropdown-item d-flex justify-content-center align-items-center text-center">
                      <i class="bi bi-person-fill me-2"></i> <?php echo $_SESSION['sesion_ventas_nombres']; ?>
                  </button>
</li>
                    <hr>
                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?php echo BASE_URL ?>panel"><i class="bi bi-columns-gap me-2"></i> Ver Panel</a>
                      </li>  
                      <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" onclick="cerrar_sesion();">
                            <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
                        </button>
                    </li>             
                </ul>
            </div>
        </div>
        </div>
        
      </div>
    </nav>

    
       
