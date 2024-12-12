<div class="container my-4">
    <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button></div>
<div class="container mt-5">
<h1 class="text-center mb-4 ">Editar compras</h1>

    <form action="" class="from-control" id="formACtualizarCompras" >
    <input type="hidden" name="id_compra" id="id_compra">
        <div class="mb-3">
            <label for="id_producto">Producto: </label>
            <select type="text" name="id_producto" id="id_producto"  class="form-control" required>
            <option  class="id_proveedor" >Seleccione</option></select>
        </div>
        <div class="mb-3">
            <label for="cantidad">Cantidad: </label>
            <input type="number" name="cantidad" id="cantidad"  class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio"  class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="trabajador">Trabajador: </label>
            <select type="text" name="trabajador" id="trabajador"  class="form-control" required>
            <option  class="trabajador" >Seleccione</option></select>
        </div>
        <button type="button" class="mb-3 btn btn-outline-info" onclick="actualizarCompra();"><i class="fas fa-check"></i> Actualizar</button>
    </form>
</div>

<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>
<script>listar_productos();</script>
<script>listar_trabajadores();</script>
<script>
    //http://localhost/venta_mary/editar-producto/1
    //captura lo que viene en el link     se captura la posicion de ese valor
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;
    ver_compra(id_p);
</script>