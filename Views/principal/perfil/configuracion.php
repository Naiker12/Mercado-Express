<?php include_once 'Views/template/header_principal.php'; ?>

<!-- section -->
<section>
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="p-6 d-flex justify-content-between align-items-center d-md-none">
                    <!-- heading -->
                    <h3 class="fs-5 mb-0">Configuracion</h3>
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
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/localizacion' ?>">
                                <i class="feather-icon icon-map-pin me-2"></i>Localización
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo BASE_URL . 'principal/configuracion' ?>">
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
                        <h2 class="mb-0">Configuración de la Cuenta</h2>
                    </div>
                    <div>
                        <!-- Encabezado -->
                        <h5 class="mb-4">Detalles de la Cuenta</h5>
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Formulario -->
                                <form>
                                    <!-- Campo de entrada -->
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Jitu Chauhan">
                                    </div>
                                    <!-- Campo de entrada -->
                                    <div class="mb-3">
                                        <label class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" placeholder="example@gmail.com">
                                    </div>
                                    <!-- Campo de entrada -->
                                    <div class="mb-5">
                                        <label class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" placeholder="Número de teléfono">
                                    </div>
                                    <!-- Botón -->
                                    <div class="mb-3">
                                        <button class="btn btn-primary">Guardar Detalles</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr class="my-10">
                    <div class="pe-lg-14">
                        <!-- Encabezado -->
                        <h5 class="mb-4">Contraseña</h5>
                        <form class="row row-cols-1 row-cols-lg-2">
                            <!-- Campo de entrada -->
                            <div class="mb-3 col">
                                <label class="form-label">Nueva Contraseña</label>
                                <input type="password" class="form-control" placeholder="**********">
                            </div>
                            <!-- Campo de entrada -->
                            <div class="mb-3 col">
                                <label class="form-label">Contraseña Actual</label>
                                <input type="password" class="form-control" placeholder="**********">
                            </div>
                            <!-- Campo de entrada -->
                            <div class="col-12">
                                <p class="mb-4">¿No recuerdas tu contraseña actual? <a href="#">Restablece tu
                                        contraseña.</a></p>
                                <a href="#" class="btn btn-primary">Guardar Contraseña</a>
                            </div>
                        </form>
                    </div>
                    <hr class="my-10">
                    <div>
                        <!-- Encabezado -->
                        <h5 class="mb-4">Eliminar Cuenta</h5>
                        <p class="mb-2">¿Te gustaría eliminar tu cuenta?</p>
                        <p class="mb-5">Esta cuenta contiene 12 pedidos. Eliminar tu cuenta eliminará todos los detalles
                            de los pedidos asociados con ella.</p>
                        <!-- Botón -->
                        <a href="#" class="btn btn-outline-danger">Quiero eliminar mi cuenta</a>
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
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/localizacion' ?>">
                    <i class="feather-icon icon-map-pin me-2"></i>Localizacion</a>
                       
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . 'principal/notificaciones' ?>">
                    <i class="feather-icon icon-bell me-2"></i>Notificaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo BASE_URL . 'principal/configuracion' ?>">
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