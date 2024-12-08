
<a href="<?php echo BASE_URL ?>categoria" class="btn btn-outline-info col-2 m-3">Volver al inicio</a>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card- mb-4" style="border-radius: 10px;">
                        <div class="card-body text-center">
                            <img src="https://pub-static.fotor.com/assets/projects/pages/d5bdd0513a0740a8a38752dbc32586d0/fotor-03d1a91a0cec4542927f53c87e0599f6.jpg"
                                alt="Foto de Perfil" class="img-fluid rounded-circle mb-3" style="max-width: 150px;">
                            <h4>Chelis Berrocal</h4>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-primary btn-sm mr-2 m-2">+ Perfil</a>
                                <a href="#" class="btn btn-outline-primary btn-sm m-2">Eliminar perfil</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5>Preferencias</h5>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                                    <label class="form-check-label" for="firstCheckbox">Tacones altos.</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                                    <label class="form-check-label" for="secondCheckbox">Tacones con cordones.</label>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                    <label class="form-check-label" for="thirdCheckbox">Tacones cerrados.</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ol class="list-group list-group-numbered mt-3">
                        <li class="list-group-item d-flex justify-content-between align-items-start"
                            style="background: #e3f2fd;">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">NUEVO</div>
                                Productos nuevos disponibles.
                            </div>
                            <span class="badge text-bg-primary rounded-pill">10</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start"
                            style="background: #e3f2fd;">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">STOCK</div>
                                Productos en estock.
                            </div>
                            <span class="badge text-bg-primary rounded-pill">15</span>
                        </li>
                    </ol>
                </div>
                <div class="col-md-8">
                    <div class="card mb-4 p-3">
                        <div class="container mt-2">
                            <form>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-3 col-form-label">Correo electrónico</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="marycielomb29@gmail.com">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="telefono" class="col-sm-3 col-form-label">Teléfono</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-text">+51</span>
                                            <input type="tel" class="form-control" id="telefono"
                                                placeholder="948356672">
                                            <button class="btn btn-outline-secondary" type="button">SMS</button>
                                            <button class="btn btn-outline-secondary" type="button">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="documento" class="col-sm-3 col-form-label">Documento</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="documento" placeholder="73885028">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nombre" placeholder="MARYCIELO">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="apellido" class="col-sm-3 col-form-label">Apellido</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="apellido"
                                            placeholder="MEZA BERROCAL">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="fechaNacimiento" class="col-sm-3 col-form-label">Fecha de
                                        nacimiento</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="fechaNacimiento">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="genero" class="col-sm-3 col-form-label">Talla de calzado</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" id="genero">
                                            <option selected>Seleccione</option>
                                            <option value="1">36</option>
                                            <option value="2">37</option>
                                            <option value="3">38</option>
                                            <option value="3">39</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="genero" class="col-sm-3 col-form-label">Numero de Tacones</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" id="genero">
                                            <option selected>Seleccione</option>
                                            <option value="1">Taco 5</option>
                                            <option value="2">Taco 7</option>
                                            <option value="3">Taco 9</option>
                                            <option value="3">Taco 12</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 form-check ">
                                    <input type="checkbox" class="form-check-input" id="notificacionesEmail">
                                    <label class="form-check-label" for="notificacionesEmail">Recibir
                                        notificaciones por emaillll</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="notificacionesSms">
                                    <label class="form-check-label" for="notificacionesSms">Recibir
                                        notificaciones por SMS</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="notificacionesWhatsapp">
                                    <label class="form-check-label" for="notificacionesWhatsapp">Recibir
                                        notificaciones por Whatsapp</label>
                                </div>
                                <div class="text-center">
                                    <a href="perfil.html" class="btn btn-info">GUARDAR</a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div id="footer" class="col-12" style="background: #e3f2fd; height: 100px;">
        <h1 class="text-center p-4 m-0">Hecho con amor para todas ustedes <img src="../IMG/logo.png" alt=""
                height="50px"></h1>
    </div>
    </div>