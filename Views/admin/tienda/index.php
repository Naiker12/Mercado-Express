<?php include_once 'views/template/header_Admin.php'; ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Lista de Tiendas</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Tienda</li>
                        <li class="breadcrumb-item active">Lista de Tiendas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicio de Container-fluid -->
    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                        href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i
                                            data-feather="target"></i>Todos</a></li>
                                <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                        href="#top-profile" role="tab" aria-controls="top-profile"
                                        aria-selected="false"><i data-feather="info"></i>En Progreso</a></li>
                                <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                        href="#top-contact" role="tab" aria-controls="top-contact"
                                        aria-selected="false"><i data-feather="check-circle"></i>Completado</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectCreateModal">
                                <i data-feather="plus-square"></i> Crear Nuevo Proyecto
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="top-tabContent">
                            <!-- Tab contenido Todos -->
                            <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                aria-labelledby="top-home-tab">
                                <div class="row">
                                    <div class="col-xxl-4 col-lg-6 box-col-6">
                                        <div class="project-box b-light1-primary">
                                            <span class="badge badge-primary">En Progreso</span>
                                            <h5 class="f-w-500">Diseño Endless Admin</h5>
                                            <div class="d-flex">
                                                <img class="img-20 me-1 rounded-circle"
                                                    src="../assets/images/user/3.jpg" alt="" title="">
                                                <div class="flex-grow-1">
                                                    <p>Themeforest, Australia</p>
                                                </div>
                                            </div>
                                            <p>Endless Admin es una plantilla de administración premium, multipropósito
                                                y con todas las funciones.</p>
                                            <div class="row details">
                                                <div class="col-6"><span>Problemas</span></div>
                                                <div class="col-6 font-primary">12</div>
                                                <div class="col-6"><span>Resueltos</span></div>
                                                <div class="col-6 font-primary">5</div>
                                                <div class="col-6"><span>Comentarios</span></div>
                                                <div class="col-6 font-primary">7</div>
                                            </div>
                                            <div class="customers">
                                                <ul>
                                                    <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                            src="../assets/images/user/3.jpg" alt="" title=""></li>
                                                    <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                            src="../assets/images/user/5.jpg" alt="" title=""></li>
                                                    <li class="d-inline-block"><img class="img-30 rounded-circle"
                                                            src="../assets/images/user/1.jpg" alt="" title=""></li>
                                                    <li class="d-inline-block ms-2">
                                                        <p class="f-12">+10 Más</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="project-status mt-4">
                                                <div class="d-flex mb-0">
                                                    <p>70%</p>
                                                    <div class="flex-grow-1 text-end"><span>Completado</span></div>
                                                </div>
                                                <div class="progress" style="height: 5px">
                                                    <div class="progress-bar-animated bg-primary progress-bar-striped"
                                                        role="progressbar" style="width: 70%" aria-valuenow="10"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab contenido En Progreso -->
                            <div class="tab-pane fade" id="top-profile" role="tabpanel"
                                aria-labelledby="profile-top-tab">
                                <!-- Aquí se repetirá un diseño similar con traducción correspondiente -->
                            </div>
                            <!-- Tab contenido Completado -->
                            <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                aria-labelledby="contact-top-tab">
                                <!-- Aquí se repetirá un diseño similar con traducción correspondiente -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal de Crear Tienda -->
<div class="modal fade" id="projectCreateModal" tabindex="-1" aria-labelledby="projectCreateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalTitle">Crear una Tienda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form theme-form">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label>Título de la Tienda</label>
                                <input class="form-control" type="text" placeholder="Nombre de la tienda *">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label>Nombre del Cliente</label>
                                <input class="form-control" type="text" placeholder="Nombre del cliente o empresa">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Tarifa del la Tienda</label>
                                <input class="form-control" type="text" placeholder="Ingrese la tarifa del proyecto">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Tipo de Tienda</label>
                                <select class="form-select">
                                    <option>Ropa</option>
                                    <option>Mercado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Prioridad</label>
                                <select class="form-select">
                                    <option>Baja</option>
                                    <option>Media</option>
                                    <option>Alta</option>
                                    <option>Urgente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Tamaño de la Tienda</label>
                                <select class="form-select">
                                    <option>Pequeño</option>
                                    <option>Mediano</option>
                                    <option>Grande</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Fecha de Inicio</label>
                                <input class="form-control" type="text" placeholder="Seleccione la fecha de inicio">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Fecha de Finalización</label>
                                <input class="form-control" type="text"
                                    placeholder="Seleccione la fecha de finalización">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label>Detalles Adicionales</label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Ingrese algunos detalles"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen (Opcional)</label>
                                <input id="imagen" class="form-control" type="file" name="imagen" accept="image/*">
                                <small class="text-muted">Formatos permitidos: JPG, PNG, GIF.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Registrar</button>
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>




<?php include_once 'Views/template/footer_Admin.php'; ?>