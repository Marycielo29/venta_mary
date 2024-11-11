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
<h1 class="text-center mb-4">Formulario de Registro de Productos</h1>

<form action="" class="from-control" id="frmRegistrar">
    <div class="mb-3">
        <label for="">Codigo: </label>
        <input type="text" id="codigo" name="codigo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Nombre: </label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Detalle:</label>
        <input type="text" id="detalle" name="detalle" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Precio: </label>
        <input type="number" id="precio" name="precio" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="stock">Stock: </label>
        <input type="number" id="stock" name="stock" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria" class="form-control" required>
        <option>Seleccione</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Imagen: </label>
        <input type="file" id="imagen" name="imagen" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Proveedor: </label>
        <select id="proveedor" name="proveedor" class="form-control" required>
        <option>Seleccione</option>
        </select>
    </div>
    <button type="button" class="mb-3 btn btn-outline-info" onclick="registrar_producto();">Registrar</button>
</form>
</div>

<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>

<script>listar_categorias();</script>
<script>listar_proveedor();</script>
