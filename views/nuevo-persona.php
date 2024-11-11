<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5"> 
<h1 class="text-center mb-4">Registrar Usuario</h1>
<form action="" class="from-control" id="frmRegistrar"></form>

<div class="mb-3">
        <label for="">Numero de Identidad: </label>
        <input type="text" id="nroIdentidad" name="nroIdentidad" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Razon social: </label>
        <input type="text" id="razonSocial" name="razonSocial" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Telefono: </label>
        <input type="text" id="telefono" name="telefono" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Correo electronico: </label>
        <input type="text" id="correo" name="correo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Departamento: </label>
        <input type="text" id="departamento" name="departamento" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Provincia: </label>
        <input type="text" id="provincia" name="provincia" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Distrito: </label>
        <input type="text" id="distrito" name="distrito" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Codigo postal: </label>
        <input type="number" id="codigoPostal" name="codigoPostal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Direccion: </label>
        <input type="text" id="direccion" name="direccion" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Rol: </label>
        <input type="text" id="rol" name="rol" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Password: </label>
        <input type="text" id="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Estado: </label>
        <input type="number" id="estado" name="estado" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Fecha de Registro: </label>
        <input type="date" id="fechaRegistro" name="fechaRegistro" class="form-control" required>
    </div>
    <button type="button" class="mb-3 btn btn-outline-info" onclick="registrarPersona();">Registrar</button>
</form>
</div>

<script src="<?php echo BASE_URL?>views/js/functions_persona.js"></script>