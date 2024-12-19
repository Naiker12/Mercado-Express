<?php include_once 'Views/template/header_principal.php'; ?>

<!-- section -->
<section>
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <div class="p-6 d-flex justify-content-between align-items-center d-md-none">
                    <!-- heading -->
                    <h3 class="fs-5 mb-0">Ordenes</h3>
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
                            <a class="nav-link active" aria-current="page"
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
                    <!-- Encabezado -->
                    <h2 class="mb-6">Ordenes</h2>

                    <div class="table-responsive border-0">
                        <!-- Tabla -->
                        <table class="table mb-0 text-nowrap">
                            <!-- Encabezado de la tabla -->
                            <thead class="table-light">
                                <tr>
                                    <th class="border-0">&nbsp;</th>
                                    <th class="border-0">Producto</th>
                                    <th class="border-0">Pedido</th>
                                    <th class="border-0">Fecha</th>
                                    <th class="border-0">Cantidad</th>
                                    <th class="border-0">Estado</th>
                                    <th class="border-0">Monto</th>
                                    <th class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Cuerpo de la tabla -->
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"> <img src="../assets/images/products/product-img-1.jpg"
                                                alt="Ecommerce" class="icon-shape icon-xl"></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="fw-semi-bold text-inherit">
                                            <h6 class="mb-0">Haldiram's Nagpur Aloo Bhujia</h6>
                                        </a>
                                        <span><small class="text-muted">400g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#14899</a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        5 de marzo de 2023
                                    </td>
                                    <td class="align-middle border-top-0">
                                        1
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-warning">Procesando</span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        $15.00
                                    </td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"> <img src="../assets/images/products/product-img-2.jpg"
                                                alt="Ecommerce" class="icon-shape icon-xl"></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="fw-semi-bold text-inherit">
                                            <h6 class="mb-0">Galletas Nutri Choise</h6>
                                        </a>
                                        <span><small class="text-muted">2 paquetes</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#14658</a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        9 de julio de 2023
                                    </td>
                                    <td class="align-middle border-top-0">
                                        2
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-success">Completado</span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        $45.00
                                    </td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-top-0 w-0">
                                        <a href="#"> <img src="../assets/images/products/product-img-3.jpg"
                                                alt="Ecommerce" class="icon-shape icon-xl"></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">
                                            <h6 class="mb-0">Bocaditos Cadbury Dairy Milk 5 Star</h6>
                                            <span><small class="text-muted">202 g</small></span>
                                        </a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#" class="text-inherit">#13778</a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        3 de octubre de 2023
                                    </td>
                                    <td class="align-middle border-top-0">
                                        4
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge bg-success">Completado</span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        $99.00
                                    </td>
                                    <td class="text-muted align-middle border-top-0">
                                        <a href="#" class="text-inherit"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                </tr>
                                <!-- Continuar con las filas restantes -->
                            </tbody>
                        </table>
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
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL . 'principal/ordenes' ?>">
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
                <a class="nav-link " href="<?php echo BASE_URL . 'principal/pagos' ?>">
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