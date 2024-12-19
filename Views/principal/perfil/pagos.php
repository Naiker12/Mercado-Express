<?php include_once 'Views/template/header_principal.php'; ?>

<section>
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <div class="p-6 d-flex justify-content-between align-items-center d-md-none">
                    <!-- heading -->
                    <h3 class="fs-5 mb-0">Metodos de pago</h3>
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
                            <a class="nav-link active" href="<?php echo BASE_URL . 'principal/pagos' ?>">
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
                    <!-- encabezado -->
                    <div class="d-flex justify-content-between mb-6 align-items-center">
                        <h2 class="mb-0">Métodos de Pago</h2>
                        <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#paymentModal">Agregar
                            Método de Pago</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <!-- Elemento de lista -->
                        <li class="list-group-item py-5 px-0">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <!-- imagen -->
                                    <img src="../assets/images/svg-graphics/visa.svg" alt="">
                                    <!-- texto -->
                                    <div class="ms-4">
                                        <h5 class="mb-0 h6 h6">**** 1234</h5>
                                        <p class="mb-0 small">Expira en 10/2023</p>
                                    </div>
                                </div>
                                <div>
                                    <!-- botón -->
                                    <a href="#" class="btn btn-outline-gray-400 disabled btn-sm">Eliminar</a>
                                </div>
                            </div>
                        </li>
                        <!-- Elemento de lista -->
                        <li class="list-group-item px-0 py-5">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <!-- imagen -->
                                    <img src="../assets/images/svg-graphics/mastercard.svg" alt="" class="me-3">
                                    <div>
                                        <h5 class="mb-0 h6">Mastercard terminada en 1234</h5>
                                        <p class="mb-0 small">Expira en 03/2026</p>
                                    </div>
                                </div>
                                <div>
                                    <!-- botón -->
                                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Eliminar</a>
                                </div>
                            </div>
                        </li>
                        <!-- Elemento de lista -->
                        <li class="list-group-item px-0 py-5">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <!-- imagen -->
                                    <img src="../assets/images/svg-graphics/discover.svg" alt="" class="me-3">
                                    <div>
                                        <!-- texto -->
                                        <h5 class="mb-0 h6">Discover terminada en 1234</h5>
                                        <p class="mb-0 small">Expira en 07/2020 <span
                                                class="badge bg-warning text-dark">Esta tarjeta está
                                                expirada.</span></p>
                                    </div>
                                </div>
                                <div>
                                    <!-- botón -->
                                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Eliminar</a>
                                </div>
                            </div>
                        </li>
                        <!-- Elemento de lista -->
                        <li class="list-group-item px-0 py-5">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <!-- imagen -->
                                    <img src="../assets/images/svg-graphics/americanexpress.svg" alt="" class="me-3">
                                    <!-- texto -->
                                    <div>
                                        <h5 class="mb-0 h6">American Express terminada en 1234</h5>
                                        <p class="mb-0 small">Expira en 12/2021</p>
                                    </div>
                                </div>
                                <div>
                                    <!-- botón -->
                                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Eliminar</a>
                                </div>
                            </div>
                        </li>
                        <!-- Elemento de lista -->
                        <li class="list-group-item px-0 py-5 border-bottom">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <!-- imagen -->
                                    <img src="../assets/images/svg-graphics/paypal.svg" alt="" class="me-3">
                                    <div>
                                        <!-- texto -->
                                        <h5 class="mb-0 h6">Paypal Express terminada en 1234</h5>
                                        <p class="mb-0 small">Expira en 10/2021</p>
                                    </div>
                                </div>
                                <div>
                                    <!-- botón -->
                                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Eliminar</a>
                                </div>
                            </div>
                        </li>
                    </ul>
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
                <a class="nav-link active" href="<?php echo BASE_URL . 'principal/pagos' ?>">
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


<!-- Modal de Pago -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <!-- contenido del modal -->
        <div class="modal-content">
            <!-- encabezado del modal -->
            <div class="modal-header align-items-center d-flex">
                <h5 class="modal-title" id="paymentModalLabel">
                    Agregar Nuevo Método de Pago
                </h5>
                <!-- botón -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar">

                </button>
            </div>
            <!-- Cuerpo del Modal -->
            <div class="modal-body">
                <div>
                    <!-- Formulario -->
                    <form class="row mb-4">
                        <div class="mb-3 col-12 col-md-12 mb-4">
                            <h5 class="mb-3">Tarjeta de Crédito / Débito</h5>
                            <!-- Botón de Radio -->
                            <div class="d-inline-flex">
                                <div class="form-check me-2">
                                    <input type="radio" id="paymentRadioOne" name="paymentRadioOne"
                                        class="form-check-input" />
                                    <label class="form-check-label" for="paymentRadioOne"><img
                                            src="../assets/images/payment/american-express.svg" alt="" /></label>
                                </div>
                                <!-- Botón de Radio -->
                                <div class="form-check me-2">
                                    <input type="radio" id="paymentRadioTwo" name="paymentRadioOne"
                                        class="form-check-input" />
                                    <label class="form-check-label" for="paymentRadioTwo"><img
                                            src="../assets/images/payment/mastercard.svg" alt="" /></label>
                                </div>

                                <!-- Botón de Radio -->
                                <div class="form-check">
                                    <input type="radio" id="paymentRadioFour" name="paymentRadioOne"
                                        class="form-check-input" />
                                    <label class="form-check-label" for="paymentRadioFour"><img
                                            src="../assets/images/payment/visa.svg" alt="" /></label>
                                </div>
                            </div>
                        </div>
                        <!-- Nombre en la tarjeta -->
                        <div class="mb-3 col-12 col-md-4">
                            <label for="nameoncard" class="form-label">Nombre en la tarjeta</label>
                            <input id="nameoncard" type="text" class="form-control" name="nameoncard"
                                placeholder="Nombre" required />
                        </div>
                        <!-- Mes -->
                        <div class="mb-3 col-12 col-md-4">
                            <label class="form-label">Mes</label>
                            <select class="form-select">
                                <option value="">Mes</option>
                                <option value="Jan">Enero</option>
                                <option value="Feb">Febrero</option>
                                <option value="Mar">Marzo</option>
                                <option value="Apr">Abril</option>
                                <option value="May">Mayo</option>
                                <option value="June">Junio</option>
                                <option value="July">Julio</option>
                                <option value="Aug">Agosto</option>
                                <option value="Sep">Septiembre</option>
                                <option value="Oct">Octubre</option>
                                <option value="Nov">Noviembre</option>
                                <option value="Dec">Diciembre</option>
                            </select>
                        </div>
                        <!-- Año -->
                        <div class="mb-3 col-12 col-md-4">
                            <label class="form-label">Año</label>
                            <select class="form-select">
                                <option value="">Año</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </div>
                        <!-- Número de tarjeta -->
                        <div class="mb-3 col-md-8 col-12">
                            <label for="cc-mask" class="form-label">Número de Tarjeta</label>
                            <input type="text" class="form-control" id="cc-mask" placeholder="xxxx-xxxx-xxxx-xxxx"
                                required />
                        </div>
                        <!-- CVV -->
                        <div class="mb-3 col-md-4 col-12">
                            <div class="mb-3">
                                <label for="cvv" class="form-label">Código CVV
                                    <i class="feather-icon icon-help-circle ms-1" data-bs-toggle="tooltip"
                                        data-placement="top"
                                        title="Un número de 3 dígitos, típicamente impreso en el reverso de la tarjeta."></i></label>
                                <input type="password" class="form-control" id="cvv" placeholder="xxx" required />
                            </div>
                        </div>
                        <!-- Botones -->
                        <div class="col-md-6 col-12">
                            <button class="btn btn-primary" type="submit">
                                Agregar Nueva Tarjeta
                            </button>
                            <button class="btn btn-outline-gray-400 text-muted" type="button" data-bs-dismiss="modal">
                                Cerrar
                            </button>
                        </div>
                    </form>
                    <span><strong>Nota:</strong> Puedes eliminar tu tarjeta más tarde en la página de configuración de
                        tu cuenta.</span>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once 'Views/template/footer_principal.php'; ?>