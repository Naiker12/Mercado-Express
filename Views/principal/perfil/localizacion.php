<?php include_once 'Views/template/header_principal.php'; ?>

<!-- section -->
<section>
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <div class="p-6 d-flex justify-content-between align-items-center d-md-none">
                    <!-- heading -->
                    <h3 class="fs-5 mb-0">Localizacion</h3>
                    <!-- button -->
                    <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon " type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
                        <i class="feather-icon icon-menu fs-4"></i>
                    </button>
                </div>
            </div>
            <!-- col -->
            <div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
                <div class="pt-10 pe-lg-10">
                    <!-- nav -->
                    <ul class="nav flex-column nav-pills nav-pills-dark">
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page"
                                href="<?php echo BASE_URL . 'principal/ordenes' ?>">
                                <i class="feather-icon icon-shopping-bag me-2"></i>Ordenes
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/pendiente' ?>">
                                <i class="feather-icon icon-clock me-2"></i>Pendientes
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/completado' ?>">
                                <i class="feather-icon icon-check-circle me-2"></i>Completado
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/pagos' ?>">
                                <i class="feather-icon icon-credit-card me-2"></i>Métodos de pago
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/notificaciones' ?>">
                                <i class="feather-icon icon-bell me-2"></i>Notificaciones
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo BASE_URL . 'principal/localizacion' ?>">
                                <i class="feather-icon icon-map-pin me-2"></i>Localización
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/configuracion' ?>">
                                <i class="feather-icon icon-settings me-2"></i>Configuración
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <hr>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html">
                                <i class="feather-icon icon-log-out me-2"></i>Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="p-6 p-lg-10">
                    <div class="d-flex justify-content-between mb-6">
                        <!-- Encabezado -->
                        <h2 class="mb-0">Dirección</h2>
                        <!-- Botón -->
                        <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#addAddressModal">Agregar una nueva dirección</a>
                    </div>
                    <div class="row">
                        <!-- Columna -->
                        <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                            <!-- Formulario -->
                            <div class="border p-6 rounded-3">
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="homeRadio"
                                        checked>
                                    <label class="form-check-label text-dark fw-semi-bold" for="homeRadio">
                                        Casa
                                    </label>
                                </div>
                                <!-- Dirección -->
                                <p class="mb-6">Jitu Chauhan<br>
                                    4450 North Avenue Oakland, <br>
                                    Nebraska, Estados Unidos,<br>
                                    402-776-1106</p>
                                <!-- Botón -->
                                <a href="#" class="btn btn-info btn-sm">Dirección predeterminada</a>
                                <div class="mt-4">
                                    <a href="#" class="text-inherit">Editar</a>
                                    <a href="#" class="text-danger ms-3" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal">Eliminar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                            <!-- Formulario -->
                            <div class="border p-6 rounded-3">
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="officeRadio">
                                    <label class="form-check-label text-dark fw-semi-bold" for="officeRadio">
                                        Oficina
                                    </label>
                                </div>
                                <!-- Dirección -->
                                <p class="mb-6">Nitu Chauhan<br>
                                    3853 Coal Road <br>
                                    Tannersville, Pennsylvania, 18372, Estados Unidos <br>
                                    402-776-1106</p>
                                <!-- Enlace -->
                                <a href="#" class="link-primary">Establecer como predeterminada</a>
                                <div class="mt-4">
                                    <a href="#" class="text-inherit">Editar</a>
                                    <!-- Botón -->
                                    <a href="#" class="text-danger ms-3" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <!-- Encabezado del modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar dirección</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <!-- Cuerpo del modal -->
            <div class="modal-body">
                <h6>¿Estás seguro de que deseas eliminar esta dirección?</h6>
                <p class="mb-6">Jitu Chauhan<br>
                    4450 North Avenue Oakland, <br>
                    Nebraska, Estados Unidos,<br>
                    402-776-1106</p>
            </div>
            <!-- Pie del modal -->
            <div class="modal-footer">
                <!-- Botones -->
                <button type="button" class="btn btn-outline-gray-400" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Contenido del modal -->
        <div class="modal-content">
            <!-- Cuerpo del modal -->
            <div class="modal-body p-6">
                <div class="d-flex justify-content-between mb-5">
                    <div>
                        <!-- Encabezado -->
                        <h5 class="h6 mb-1" id="addAddressModalLabel">Nueva Dirección de Envío</h5>
                        <p class="small mb-0">Agrega una nueva dirección de envío para la entrega de tu pedido.</p>
                    </div>
                    <div>
                        <!-- Botón -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                </div>
                <!-- Fila -->
                <div class="row g-3">
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Campo de entrada -->
                        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" required="">
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Campo de entrada -->
                        <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" required="">
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Campo de entrada -->
                        <input type="text" class="form-control" placeholder="Dirección Línea 1">
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Campo de entrada -->
                        <input type="text" class="form-control" placeholder="Dirección Línea 2">
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Campo de entrada -->
                        <input type="text" class="form-control" placeholder="Ciudad">
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Selección -->
                        <select class="form-select">
                            <option selected="">India</option>
                            <option value="1">Reino Unido</option>
                            <option value="2">Estados Unidos</option>
                            <option value="3">Emiratos Árabes Unidos</option>
                        </select>
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Selección -->
                        <select class="form-select" aria-label="Seleccionar por defecto">
                            <option selected="">Gujarat</option>
                            <option value="1">Irlanda del Norte</option>
                            <option value="2">Alaska</option>
                            <option value="3">Abu Dabi</option>
                        </select>
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Campo de entrada -->
                        <input type="text" class="form-control" placeholder="Código Postal">
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Campo de entrada -->
                        <input type="text" class="form-control" placeholder="Nombre del Negocio">
                    </div>
                    <!-- Columna -->
                    <div class="col-12">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Establecer como predeterminado
                            </label>
                        </div>
                    </div>
                    <!-- Columna -->
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="button">Guardar Dirección</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- modal -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
    <!-- offcanvas header -->
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasAccountLabel">Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- offcanvas body -->
    <div class="offcanvas-body">
        <ul class="nav flex-column nav-pills nav-pills-dark">
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="<?php echo BASE_URL . 'principal/ordenes' ?>">
                    <i class="feather-icon icon-shopping-bag me-2"></i>Ordenes</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link " href="<?php echo BASE_URL . 'principal/pendiente' ?>">
                    <i class="feather-icon icon-clock me-2"></i>pedientes</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/completado' ?>">
                    <i class="feather-icon icon-check-circle me-2"></i>completado</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/pagos' ?>">
                    <i class="feather-icon icon-credit-card me-2"></i>Metodos de pago</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo BASE_URL . 'principal/localizacion' ?>">
                    <i class="feather-icon icon-map-pin me-2"></i>Localizacion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/notificaciones' ?>">
                    <i class="feather-icon icon-bell me-2"></i>Notificaciones</a>             
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/configuracion' ?>">
                    <i class="feather-icon icon-settings me-2"></i>Configuracion</a>
            </li>
        </ul>
        <hr class="my-6">
        <div>
            <!-- nav  -->
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="../index.html"><i class="feather-icon icon-log-out me-2"></i>Cerrar
                        sesión</a>
                </li>

            </ul>
        </div>
    </div>
</div>

<?php include_once 'Views/template/footer_principal.php'; ?>