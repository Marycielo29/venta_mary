<div class="col-12 container mt-4">
<table class="table table-bordered table-striped table-hover table-sm shadow-lg rounded">
        <thead class="table-dark text-center">
            <tr>
                <th>Nro</th>
                <th>DNI</th>
                <th>Razon social</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Departamento</th>
                <th>Codigo postal</th>
                <th>Direccion</th>
                <th>Rol</th>
                <th >Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_persona" class="text-center">
            <!--<tr>
               <th>Nro</th>
                <th>76543211</th>
                <th>Jose Ramirez</th>
                <th>999999999</th>
                <th>ra@gmail.com</th>
                <th>Putis</th>
                <th>5555</th>
                <th>Arriba en el cerro</th>
                <th>Futbolista dc</th>
            </tr> -->
        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL?>views/js/functions_persona.js"></script>
<script>
    listar_personas();
</script>