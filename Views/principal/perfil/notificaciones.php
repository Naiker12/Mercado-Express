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
                    <h3 class="fs-5 mb-0">Notificaciones</h3>
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
                                <i class="feather-icon icon-clock me-2"></i>Pendientess
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
                            <a class="nav-link active" href="<?php echo BASE_URL . 'principal/notificaciones' ?>">
                                <i class="feather-icon icon-bell me-2"></i>Notificaciones                             
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/localizacion' ?>">
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
                    <div class="mb-6">
                        <!-- Encabezado -->
                        <h2 class="mb-0">Configuración de notificaciones</h2>
                    </div>

                    <div class="mb-10">
                        <!-- Texto -->
                        <div class="border-bottom pb-3 mb-5">
                            <h5 class="mb-0">Notificaciones por correo electrónico</h5>
                        </div>
                        <!-- Texto -->
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h6 class="mb-1">Notificaciones semanales</h6>
                                <p class="mb-0">Varias versiones han evolucionado a lo largo de los años, a veces por
                                    accidente,
                                    a veces a propósito.</p>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Texto -->
                            <div>
                                <h6 class="mb-1">Resumen de cuenta</h6>
                                <p class="mb-0 pe-12">Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac
                                    turpis egestas. Nulla ipsum odio, aliquam en odio et, fermentum blandit nulla.</p>
                            </div>
                            <!-- Checkbox del formulario -->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-10">
                        <!-- Encabezado -->
                        <div class="border-bottom pb-3 mb-5">
                            <h5 class="mb-0">Actualizaciones de pedidos</h5>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <!-- Encabezado -->
                                <h6 class="mb-0">Mensajes de texto</h6>
                            </div>
                            <!-- Checkbox del formulario -->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault2">
                                <label class="form-check-label" for="flexSwitchCheckDefault2"></label>
                            </div>
                        </div>
                        <!-- Texto -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Llamar antes de finalizar el pedido</h6>
                                <p class="mb-0">Solo llamaremos si hay cambios pendientes.</p>
                            </div>
                            <!-- Checkbox del formulario -->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked2" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked2"></label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <!-- Texto -->
                        <div class="border-bottom pb-3 mb-5">
                            <h5 class="mb-0">Notificaciones en el sitio web</h5>
                        </div>
                        <div>
                            <!-- Checkbox del formulario -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckFollower" checked>
                                <label class="form-check-label" for="flexCheckFollower">
                                    Nuevo seguidor
                                </label>
                            </div>
                            <!-- Checkbox del formulario -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckPost">
                                <label class="form-check-label" for="flexCheckPost">
                                    Me gusta en una publicación
                                </label>
                            </div>
                            <!-- Checkbox del formulario -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckPosted">
                                <label class="form-check-label" for="flexCheckPosted">
                                    Alguien que sigues publicó
                                </label>
                            </div>
                            <!-- Checkbox del formulario -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckCollection">
                                <label class="form-check-label" for="flexCheckCollection">
                                    Publicación añadida a una colección
                                </label>
                            </div>
                            <!-- Checkbox del formulario -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckOrder">
                                <label class="form-check-label" for="flexCheckOrder">
                                    Entrega de pedido
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>







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
                <a class="nav-link " aria-current="page" href="<?php echo BASE_URL . 'principal/ordenes' ?>"><i
                        class="feather-icon icon-shopping-bag me-2"></i>Ordenes</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link " href="<?php echo BASE_URL . 'principal/pendiente' ?>"><i
                        class="feather-icon icon-settings me-2"></i>pedientes</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/completado' ?>"><i
                        class="feather-icon icon-map-pin me-2"></i>completado</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/pagos' ?>"><i
                        class="feather-icon icon-credit-card me-2"></i>Metodos de pago</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/localizacion' ?>"><i
                        class="feather-icon icon-bell me-2"></i>Localizacion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo BASE_URL . 'principal/notificaciones' ?>"><i
                        class="feather-icon icon-bell me-2"></i>Notificaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/configuracion' ?>"><i
                        class="feather-icon icon-bell me-2"></i>Configuracion</a>
            </li>
        </ul>
        <hr class="my-6">
        <div>
            <!-- nav  -->
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="../index.html"><i class="feather-icon icon-log-out me-2"></i>Log out</a>
                </li>

            </ul>
        </div>
    </div>
</div>

<?php include_once 'Views/template/footer_principal.php'; ?>