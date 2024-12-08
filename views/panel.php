<body>
    <div class="container my-4">
        <h2 class="text-center mb-4">Panel Administrativo</h2>
        <div class="row g-4">
            <!-- Productos -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg">
                    <img src="https://mialuxury.me/wp-content/uploads/2018/02/DESTACADA-ZAPATOS.png" class="card-img-top w-100 h-100" alt="Productos">
                    <div class="card-body">
                        <h5 class="card-title text-center">Productos</h5>
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo BASE_URL ?>nuevo-producto" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>productos" class="btn btn-secondary btn-sm">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Usuarios -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg">
                    <img src="https://w7.pngwing.com/pngs/1022/170/png-transparent-users-group-computer-icons-user-s-computer-website-internet-forum-thumbnail.png" class="card-img-top w-100 h-100" alt="Usuarios">
                    <div class="card-body">
                        <h5 class="card-title text-center">Usuarios</h5>
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo BASE_URL ?>nuevo-persona" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>usuarios" class="btn btn-secondary btn-sm">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categorías -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg">
                    <img src="https://normastore.com.mx/cdn/shop/articles/32-ideas-closets-zapatos-31.jpg?v=1647553226&width=553" class="card-img-top w-100 h-80" alt="Categorías">
                    <div class="card-body">
                        <h5 class="card-title text-center">Categorías</h5>
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo BASE_URL ?>nuevo-categoria" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>categorias" class="btn btn-secondary btn-sm">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compras -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg">
                    <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-carrito-compras-bolsas-o-regalos_114360-18775.jpg?semt=ais_hybrid" class="card-img-top w-100 h-100" alt="Compras">
                    <div class="card-body">
                        <h5 class="card-title text-center">Compras</h5>
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo BASE_URL ?>nuevo-compra" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>compras" class="btn btn-secondary btn-sm">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>