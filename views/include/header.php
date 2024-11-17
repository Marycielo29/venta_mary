

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<script>
  const base_url = '<?php echo BASE_URL; ?>';
</script>
<body>
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BASE_URL ?>inicio"> <img src="IMG/logo.png" alt="Logo" width="40" height="40"
            class="d-inline-block align-text-top">PAGINA PRINCIPAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>carrito"> <img src="IMG/carrito.png"
                  alt="Logo" width="30" height="30" class="d-inline-block align-text-top">Carrito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL ?>perfil"> <img src="IMG/perfil.png" alt="Logo" width="30" height="30"
                  class="d-inline-block align-text-top"> Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL ?>login"> <img src="IMG/registra.png" alt="Logo" width="30" height="30"
                  class="d-inline-block align-text-top">Registrate</a>
            </li>
          </ul>

          <form class="d-flex col-8" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
          
        </div>
        
        <button type="button" class="me-2 btn "> <i class="bi bi-person-fill"></i> <?php echo $_SESSION['sesion_ventas_nombres'];?></button>
        <button type="button" class="me-2 btn" onclick="cerrar_sesion();"><i class="bi bi-box-arrow-right"></i> Cerra sesion</button> 
      </div>
    </nav>

    
       
