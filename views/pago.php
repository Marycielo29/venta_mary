
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