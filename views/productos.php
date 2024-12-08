
<div class="col-12 container mt-4">
<table class="table table-bordered table-striped table-hover table-sm shadow-lg rounded">
        <thead class="table-dark text-center">
            <tr>
                <th>Nro</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>categoria</th>
                <th>Proveedor</th>
                <th >Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_producto" class="text-center">
            <!-- <tr>
                <td>1</td>
                <td>111</td>
                <td>Tacon</td>
                <td>1</td>
                <td>tacon</td>
                <td>Pamela</td>
                <td></td>
            </tr> -->
        </tbody>
    </table>
</div>
<div class="container my-4">
    <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="bi bi-arrow-left-circle me-1"></i> Volver Atrás
    </button>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>