<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

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
      </div>
    </nav>
<div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h1 class="text-center mb-4">Proceso de Pago</h1>
          <div class="card">
            <div class="card-body">
              <form id="payment-form" novalidate>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required>
                    <div class="invalid-feedback">
                      Por favor ingrese su nombre.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">
                      Por favor ingrese un correo electrónico válido.
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" required>
                    <div class="invalid-feedback">
                      Por favor ingrese su dirección.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="Provincia" class="form-label">Provincia</label>
                    <input type="text" class="form-control" id="Provincia" required>
                    <div class="invalid-feedback">
                      Por favor ingrese su ciudad.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="Distrito" class="form-label">Distrito</label>
                    <input type="text" class="form-control" id="Distrito" required>
                    <div class="invalid-feedback">
                      Por favor ingrese su estado.
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="codigoPostal" class="form-label">Código Postal</label>
                    <input type="text" class="form-control" id="codigoPostal" required>
                    <div class="invalid-feedback">
                      Por favor ingrese su código postal.
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="pais" class="form-label">País</label>
                    <input type="text" class="form-control" id="pais" required>
                    <div class="invalid-feedback">
                      Por favor ingrese su país.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="codigoNumero" class="form-label">Codigo de Tarjeta</label>
                    <input type="text" class="form-control" id="codigoNumero" required>
                    <div class="invalid-feedback">
                      Por favor ingrese su número de tarjeta.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="pago" class="form-label">Fecha de pago</label>
                    <input type="text" class="form-control" id="pago" placeholder="MM/AA" required>
                    <div class="invalid-feedback">
                      Por favor ingrese la fecha de expiración.
                    </div>
                  </div>
                </div>
                <div class="mt-4 text-center">
                  <button type="submit" class="btn btn-primary">Realizar Pago</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer" class="col-12 mt-5" style="background: #e3f2fd; height: 100px;">
      <h1 class="text-center p-4 m-0">Hecho con amor para todas ustedes <img src="../IMG/logo.png" alt="" height="50px">
      </h1>
    </div>
  </div>