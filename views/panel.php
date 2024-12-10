<body>
    <div class="container my-4">
        <h2 class="text-center mb-4 text-uppercase fw-bold">Panel Administrativo</h2>
        <div class="row g-4">
            <!-- Productos -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale">
                    <div class="card-body text-center">
                        <div class="text-primary mb-3">
                            <i class="bi bi-box-seam display-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Productos</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-producto" class="btn btn-primary btn-sm" aria-label="Registrar Producto">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>productos" class="btn btn-secondary btn-sm" aria-label="Ver Productos">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Usuarios -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale">
                    <div class="card-body text-center">
                        <div class="text-success mb-3">
                            <i class="bi bi-people display-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Usuarios</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-persona" class="btn btn-primary btn-sm" aria-label="Registrar Usuario">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>usuarios" class="btn btn-secondary btn-sm" aria-label="Ver Usuarios">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categorías -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale">
                    <div class="card-body text-center">
                        <div class="text-warning mb-3">
                            <i class="bi bi-tags display-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Categorías</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-categoria" class="btn btn-primary btn-sm" aria-label="Registrar Categoría">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>categorias" class="btn btn-secondary btn-sm" aria-label="Ver Categorías">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compras -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale">
                    <div class="card-body text-center">
                        <div class="text-danger mb-3">
                            <i class="bi bi-cart4 display-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Compras</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-compra" class="btn btn-primary btn-sm" aria-label="Registrar Compra">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>compras" class="btn btn-secondary btn-sm" aria-label="Ver Compras">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS de Hover para las Tarjetas -->
    <style>
        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
    </style>
</body>
