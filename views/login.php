<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow" style="width: 400px; border: none;">
      <div class="card-body" style="background: #e3f2fd;">
        <div style="text-align: center;">
          <img src="IMG/logo.png" alt="" width="100px" height="100px">
        </div>
        <h2 class="card-title text-center mb-4" style="font-family: 'Times New Roman', Times, serif;">BIENVENIDO</h2>
        <p style="font-family: 'Times New Roman', Times, serif; color: blue; text-align: center;">REGISTRATE YA!!</p>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label" style="font-family: 'Times New Roman', Times, serif;">CORREO
              ELECTRONICO:</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
              placeholder="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label"
              style="font-family: 'Times New Roman', Times, serif;">CONTRASEÑA:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="contraseña" required>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember-me">
            <label class="form-check-label" for="remember-me">Recordarme contraseña</label>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo"
                style="color: blue; font-family: 'Times New Roman', Times, serif; font-size: 20px;">
                ¿Necesitas ayuda?
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
              <div class="accordion-body">
                <a href="">¿Olvidaste tu contraseña?</a> <br>
                <a href="">Otros problemas con el inicio de sesion.</a>
              </div>
            </div>
          </div>
          <div class="d-grid gap-2 mt-3 p-0">
            <a href="<?php echo BASE_URL ?>principal" class="btn btn-outline-info"
              style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">Iniciar sesion</a>
          </div>
        </form>
      </div>
    </div>

  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>