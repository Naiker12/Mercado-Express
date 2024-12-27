<?php include_once 'Views/template/Header_admin.php'; ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Buzón</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="assets-admin/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Correo Electrónico</li>
                        <li class="breadcrumb-item active">Buzón</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="email-wrap email-main-wrapper">
            <div class="row">
                <div class="col-xxl-3 col-xl-4 box-col-12">
                    <div class="md-sidebar"> <a class="btn btn-primary md-sidebar-toggle"
                            href="javascript:void(0)">filtro de correos</a>
                        <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                            <div class="email-left-aside">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="email-app-sidebar">
                                            <button class="btn btn-primary emailbox" type="button"
                                                data-bs-toggle="modal" data-bs-target="#compose_mail"><i
                                                    class="fa fa-plus"></i>Redactar Correo</button>
                                            <ul class="nav nav-pills main-menu email-category" id="email-pills-tab"
                                                role="tablist">
                                                <li class="nav-item"><a class="nav-link active" id="inbox-pill-tab"
                                                        data-bs-toggle="pill" href="#inbox-pill" role="tab"
                                                        aria-controls="inbox-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="assets-admin/svg/icon-sprite.svg#inbox"></use>
                                                        </svg>
                                                        <div>Bandeja de entrada<span class="badge">12</span></div>
                                                    </a></li>
                                                <li class="nav-item"><a class="nav-link" id="sent-pill-tab"
                                                        data-bs-toggle="pill" href="#sent-pill" role="tab"
                                                        aria-controls="sent-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="assets-admin/svg/icon-sprite.svg#sent"></use>
                                                        </svg>Enviados</a></li>
                                                <li class="nav-item"><a class="nav-link" id="starred-pill-tab"
                                                        data-bs-toggle="pill" href="#starred-pill" role="tab"
                                                        aria-controls="starred-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="assets-admin/svg/icon-sprite.svg#star"></use>
                                                        </svg>Destacados</a></li>
                                                <li class="nav-item"><a class="nav-link" id="draft-pill-tab"
                                                        data-bs-toggle="pill" href="#draft-pill" role="tab"
                                                        aria-controls="draft-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="assets-admin/svg/icon-sprite.svg#draft"></use>
                                                        </svg>Borradores</a></li>
                                                <li class="nav-item"><a class="nav-link" id="trash-pill-tab"
                                                        data-bs-toggle="pill" href="#trash-pill" role="tab"
                                                        aria-controls="trash-pill" aria-selected="false">
                                                        <svg class="stroke-icon">
                                                            <use href="assets-admin/svg/icon-sprite.svg#trash"></use>
                                                        </svg>Papelera</a></li>
                                                <li class="nav-item"><a class="nav-link" id="work-pill-tab"
                                                        data-bs-toggle="pill" href="#work-pill" role="tab"
                                                        aria-controls="work-pill" aria-selected="false">
                                                        <svg class="stroke-icon stroke-primary">
                                                            <use href="assets-admin/svg/icon-sprite.svg#pintag"></use>
                                                        </svg>Trabajo</a></li>
                                                <li class="nav-item"><a class="nav-link" id="private-pill-tab"
                                                        data-bs-toggle="pill" href="#private-pill" role="tab"
                                                        aria-controls="private-pill" aria-selected="false">
                                                        <svg class="stroke-icon stroke-warning">
                                                            <use href="assets-admin/svg/icon-sprite.svg#pintag"></use>
                                                        </svg>Privado</a></li>
                                                <li class="nav-item"><a class="nav-link" id="support-pill-tab"
                                                        data-bs-toggle="pill" href="#support-pill" role="tab"
                                                        aria-controls="support-pill" aria-selected="false">
                                                        <svg class="stroke-icon stroke-success">
                                                            <use href="assets-admin/svg/icon-sprite.svg#pintag"></use>
                                                        </svg>Soporte</a></li>
                                                <li class="nav-item"><a class="nav-link btn" data-bs-toggle="modal"
                                                        data-bs-target="#label-pill" href="#!"><i
                                                            class="fa fa-plus"></i>Agregar Etiqueta</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-9 col-xl-8 box-col-12">
                    <div class="email-right-aside">
                        <div class="card email-body email-list">
                            <div class="mail-header-wrapper">
                                <div class="mail-header">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input checkbox-primary" id="emailCheckboxA"
                                            type="checkbox" value="option1">
                                        <label class="form-check-label" for="emailCheckboxA"></label>
                                        <ul class="email-tabs nav" role="tablist">
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#!"
                                                    role="tab" aria-selected="true">
                                                    <svg class="stroke-icon">
                                                        <use href="assets-admin/svg/icon-sprite.svg#mail"></use>
                                                    </svg><span class="f-w-600">Importante</span></a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#!"
                                                    role="tab" aria-selected="false">
                                                    <svg class="stroke-icon">
                                                        <use href="assets-admin/svg/icon-sprite.svg#goal"></use>
                                                    </svg><span class="f-w-600">Social</span></a></li>
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill"
                                                    href="#!" role="tab" aria-selected="false">
                                                    <svg class="stroke-icon">
                                                        <use href="assets-admin/svg/icon-sprite.svg#tread"></use>
                                                    </svg><span class="f-w-600">Promociones</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mail-body">
                                    <div class="mail-search d-flex-align-items-center">
                                        <input class="form-control" type="text" placeholder="Buscar..."><i
                                            class="fa fa-search"></i>
                                    </div>
                                    <div class="light-square"><i class="fa fa-refresh"></i></div>
                                    <div class="light-square"><i class="fa fa-trash"></i></div>
                                    <div class="light-square dropdown-toggle" role="main" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                    <ul class="dropdown-menu dropdown-block dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#!">Todo</a></li>
                                        <li><a class="dropdown-item" href="#!">Ninguno</a></li>
                                        <li><a class="dropdown-item" href="#!">Leídos</a></li>
                                        <li><a class="dropdown-item" href="#!">No leídos</a></li>
                                        <li><a class="dropdown-item" href="#!">Destacados</a></li>
                                        <li><a class="dropdown-item" href="#!">No destacados</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="modal fade" id="compose_mail" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title" id="modalTitle">Redactar Mensaje</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>                               
                                        <div class="modal-body compose-modal">
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label" for="composeFrom">De:</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="composeFrom" type="email"
                                                            placeholder="tuemail@ejemplo.com">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label" for="composeTo">Para:</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="composeTo" type="email"
                                                            placeholder="emaildestino@ejemplo.com">
                                                        <div class="add-bcc mt-2">
                                                            <div class="d-flex gap-2">
                                                                <a class="btn btn-outline-secondary btn-sm"
                                                                    data-bs-toggle="collapse" href="#collapseCc"
                                                                    role="button" aria-expanded="false"
                                                                    aria-controls="collapseCc">Cc</a>
                                                                <a class="btn btn-outline-secondary btn-sm"
                                                                    data-bs-toggle="collapse" href="#collapseBcc"
                                                                    role="button" aria-expanded="false"
                                                                    aria-controls="collapseBcc">Bcc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="collapse row mb-3" id="collapseCc">
                                                    <label class="col-sm-2 col-form-label" for="composeCc">Cc:</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="composeCc" type="email"
                                                            placeholder="emailcopiado@ejemplo.com">
                                                    </div>
                                                </div>
                                                <div class="collapse row mb-3" id="collapseBcc">
                                                    <label class="col-sm-2 col-form-label" for="composeBcc">Bcc:</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="composeBcc" type="email"
                                                            placeholder="emailoculto@ejemplo.com">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="composeSubject">Asunto:</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="composeSubject" type="text"
                                                            placeholder="Escribe el asunto aquí">
                                                    </div>
                                                </div>
                                                <div class="toolbar-box mb-3">
                                                    <div id="toolbar1" class="mb-2">
                                                        <button class="ql-bold" type="button">Negrita</button>
                                                        <button class="ql-italic" type="button">Cursiva</button>
                                                        <button class="ql-underline" type="button">Subrayado</button>
                                                        <button class="ql-strike" type="button">Tachado</button>
                                                        <button class="ql-list" value="ordered"
                                                            type="button">Lista</button>
                                                        <button class="ql-list" value="bullet"
                                                            type="button">Viñetas</button>
                                                        <button class="ql-indent" value="-1" type="button">Reducir
                                                            Sangría</button>
                                                        <button class="ql-indent" value="+1" type="button">Aumentar
                                                            Sangría</button>
                                                        <button class="ql-link" type="button">Enlace</button>
                                                        <button class="ql-image" type="button">Imagen</button>
                                                    </div>
                                                    <div id="editor1" class="form-control" style="height: 150px;"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-light" type="button">Guardar como borrador</button>
                                            <button class="btn btn-primary" type="button"
                                                data-bs-dismiss="modal">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="email-pills-tabContent">
                                <div class="tab-pane fade show active" id="inbox-pill" role="tabpanel"
                                    aria-labelledby="inbox-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul id="paginated-list" data-current-page="1" aria-live="polite">
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxB" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxB"></label>
                                                    </div>
                                                    <svg class="important-mail active">
                                                        <use href="assets-admin/svg/icon-sprite.svg#fill-star"></use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="assets-admin/images/dashboard/user/6.jpg"
                                                            alt="usuario">
                                                    </div>
                                                    <p>Marvin McKinney</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Comentarios nuevos sobre la
                                                            presentación del borrador de MSR2024 - <span>Nuevo Aquí está
                                                                la lista de todos los desafíos del tema...</span></span>
                                                        <div class="badge badge-light-primary">nuevo</div>
                                                    </div>
                                                    <div class="email-timing"><span>2:30 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i
                                                            class="fa fa-print"></i></div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mail-pagination">
                                        <button class="pagination-button" id="prev-button" aria-label="Previous page"
                                            title="Previous page">&lt;</button>
                                        <div class="pagination-index" id="pagination-numbers"></div>
                                        <button class="pagination-button" id="next-button" aria-label="Next page"
                                            title="Next page">&gt;</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sent-pill" role="tabpanel"
                                    aria-labelledby="sent-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxN" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxN"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="assets-admin/svg/icon-sprite.svg#fill-star"></use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="assets-admin/images/user/14.png" alt="usuario"></div>
                                                    <p>Brooklyn Simmons</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirma tu ID de reserva - <span>Una
                                                                colección de muestras de textiles estaba extendida sobre
                                                                la mesa - Samsa era un vendedor viajero...</span></span>
                                                        <div class="badge badge-light-primary">nuevo</div>
                                                    </div>
                                                    <div class="email-timing"><span>7:50 AM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i
                                                            class="fa fa-print"></i></div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="starred-pill" role="tabpanel"
                                    aria-labelledby="starred-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxR" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxR"></label>
                                                    </div>
                                                    <svg class="important-mail active">
                                                        <use href="assets-admin/svg/icon-sprite.svg#fill-star"></use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="assets-admin/images/dashboard/user/6.jpg"
                                                            alt="usuario">
                                                    </div>
                                                    <p>Marvin McKinney</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Comentarios nuevos sobre la
                                                            presentación del borrador de MSR2024 - <span>Nuevo Aquí está
                                                                la lista de todos los desafíos del tema...</span></span>
                                                        <div class="badge badge-light-primary">nuevo</div>
                                                    </div>
                                                    <div class="email-timing"><span>2:30 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i
                                                            class="fa fa-print"></i></div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="draft-pill" role="tabpanel"
                                    aria-labelledby="draft-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxU" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxU"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="assets-admin/svg/icon-sprite.svg#fill-star"></use>
                                                    </svg>
                                                    <div class="rounded-border"><img class="img-fluid"
                                                            src="assets-admin/images/user/3.png" alt="usuario"></div>
                                                    <p>Ralph Edwards</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Tu Pedido #224820098 ha sido
                                                            Confirmado - <span>Una colección de muestras de textiles
                                                                estaba extendida sobre la mesa...</span></span></div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i
                                                            class="fa fa-print"></i></div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="trash-pill" role="tabpanel"
                                    aria-labelledby="trash-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckboxX" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckboxX"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="assets-admin/svg/icon-sprite.svg#fill-star"></use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirma tu ID de reserva -
                                                            <span>cerveza artesanal labore wes anderson cred nesciunt
                                                                sapiente ea proident...</span></span>
                                                        <div class="badge badge-light-secondary">oferta</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i
                                                            class="fa fa-print"></i></div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="work-pill" role="tabpanel"
                                    aria-labelledby="work-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox77" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox77"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="assets-admin/svg/icon-sprite.svg#fill-star"></use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirma tu ID de reserva -
                                                            <span>cerveza artesanal labore wes anderson cred nesciunt
                                                                sapiente ea proident...</span></span>
                                                        <div class="badge badge-light-primary">nuevo</div>
                                                        <div class="badge badge-light-success">Tarea</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i
                                                            class="fa fa-print"></i></div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="private-pill" role="tabpanel"
                                    aria-labelledby="private-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox44" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox44"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="assets-admin/svg/icon-sprite.svg#fill-star"></use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">AD</p>
                                                        </div>
                                                    </div>
                                                    <p>Asther Dolly</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirma tu ID de reserva -
                                                            <span>cerveza artesanal labore wes anderson cred nesciunt
                                                                sapiente ea proident...</span></span>
                                                        <div class="badge badge-light-primary">nuevo</div>
                                                        <div class="badge badge-light-success">Tarea</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i
                                                            class="fa fa-print"></i></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="support-pill" role="tabpanel"
                                    aria-labelledby="support-pill-tab">
                                    <div class="mail-body-wrapper">
                                        <ul>
                                            <li class="inbox-data">
                                                <div class="inbox-user">
                                                    <div class="form-check form-check-inline m-0">
                                                        <input class="form-check-input checkbox-primary"
                                                            id="emailCheckbox55" type="checkbox" value="option1">
                                                        <label class="form-check-label" for="emailCheckbox55"></label>
                                                    </div>
                                                    <svg class="important-mail">
                                                        <use href="assets-admin/svg/icon-sprite.svg#fill-star"></use>
                                                    </svg>
                                                    <div class="rounded-border">
                                                        <div>
                                                            <p class="txt-primary">EH</p>
                                                        </div>
                                                    </div>
                                                    <p>Esther Howard</p>
                                                </div>
                                                <div class="inbox-message">
                                                    <div class="email-data"><span>Confirma tu ID de reserva -
                                                            <span>cerveza artesanal labore wes anderson cred nesciunt
                                                                sapiente ea proident...</span></span>
                                                        <div class="badge badge-light-primary">nuevo</div>
                                                        <div class="badge badge-light-success">Tarea</div>
                                                    </div>
                                                    <div class="email-timing"><span>1:00 PM</span></div>
                                                    <div class="email-options"><i
                                                            class="fa fa-envelope-o envelope-1 show"></i><i
                                                            class="fa fa-envelope-open-o envelope-2 hide"></i><i
                                                            class="fa fa-trash-o trash-3"></i><i
                                                            class="fa fa-print"></i></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="modal fade" id="label-pill" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title" id="modalTitle">Añadir Etiqueta</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>        
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row g-sm-3 g-2 custom-input">
                                                        <label class="col-sm-2 col-form-label" for="Label_Modal">Nombre
                                                            de la Etiqueta:</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" id="Label_Modal" type="email">
                                                        </div>
                                                        <label class="col-sm-2 col-form-label" for="Email_Modal">Correo
                                                            Electrónico:</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" id="Email_Modal" type="email">
                                                        </div>
                                                        <label class="form-label col-sm-2" for="exampleColorInput">Color
                                                            de la Etiqueta:</label>
                                                        <div class="col-sm-2 col-2">
                                                            <input class="form-control form-control-color"
                                                                id="exampleColorInput" type="color" value="#006666"
                                                                title="Elige tu color">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-light" type="button"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button class="btn btn-primary" type="button">Añadir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card email-body email-read">
                            <div class="mail-header-wrapper header-wrapper1">
                                <div class="mail-header1">
                                    <div class="light-square">
                                        <svg class="btn-email">
                                            <use href="assets-admin/svg/icon-sprite.svg#back-arrow"></use>
                                        </svg>
                                    </div><span class="f-w-600">Correo de Entrevista</span>
                                </div>
                                <div class="mail-body1">
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Lograr">
                                        <svg>
                                            <use href="assets-admin/svg/icon-sprite.svg#sms"></use>
                                        </svg>
                                    </div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Marcador">
                                        <svg class="bookmark-box">
                                            <use href="assets-admin/svg/icon-sprite.svg#stroke-bookmark"></use>
                                        </svg>
                                    </div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Spam">
                                        <svg>
                                            <use href="assets-admin/svg/icon-sprite.svg#spam"></use>
                                        </svg>
                                    </div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Papelera">
                                        <svg class="stroke-danger">
                                            <use href="assets-admin/svg/icon-sprite.svg#mail-trash"></use>
                                        </svg>
                                    </div>
                                    <div class="light-square" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Configuraciones">
                                        <svg>
                                            <use href="assets-admin/svg/icon-sprite.svg#setting"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-body-wrapper">
                                <div class="user-mail-wrapper">
                                    <div class="user-title">
                                        <div>
                                            <div class="rounded-border"> <img class="img-fluid"
                                                    src="assets-admin/images/user/12.png" alt="usuario"></div>
                                            <div class="dropdown-subtitle">
                                                <p>Jacob Jones</p>
                                                <div class="onhover-dropdown">
                                                    <button class="btn p-0 dropdown-button">Para mí <i
                                                            data-feather="chevron-down"> </i></button>
                                                    <div class="inbox-security onhover-show-div">
                                                        <p>De: <span>jones &lt;jacobjones3@gmail.com&gt;</span></p>
                                                        <p>Para: <span>donut.horry@gmail.com</span></p>
                                                        <p>Responder a: <span>&lt;jacobjones3@gmail.com&gt;</span></p>
                                                        <p>Fecha: <span>13 Jul, 2024, 7:10 AM</span></p>
                                                        <p>Asunto: <span>Actualización importante de seguridad de
                                                                cuenta</span></p>
                                                        <p>Seguridad: <span>cifrado estándar (TLS)</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inbox-options"> <span>Viernes 07 Abr (hace 4 horas)</span>
                                            <div class="light-square">
                                                <svg class="important-mail">
                                                    <use href="assets-admin/svg/icon-sprite.svg#mail-star"></use>
                                                </svg>
                                            </div>
                                            <div class="light-square" onclick="myFunction()">
                                                <svg>
                                                    <use href="assets-admin/svg/icon-sprite.svg#print"></use>
                                                </svg>
                                            </div>
                                            <div class="light-square btn-group">
                                                <div class="dropdown-toggle" role="main" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg>
                                                        <use href="assets-admin/svg/icon-sprite.svg#menubar"></use>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-block"><a class="dropdown-item"
                                                        href="#!"><i class="fa fa-mail-reply"></i>Responder</a><a
                                                        class="dropdown-item" href="#!"> <i
                                                            class="fa fa-mail-forward"></i>Reenviar</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-body">
                                        <p>Estimado Cliente,</p>
                                        <p>Lamentamos informarle que se realizó un intento no autorizado de acceder a su
                                            cuenta. Nuestro sistema detectó actividad sospechosa, y actuamos de
                                            inmediato para proteger sus datos personales.</p>
                                        <p>Por favor, cambie su información de acceso haciendo clic en el siguiente
                                            enlace para proteger su cuenta:</p>
                                        <p>Tenga en cuenta que su cuenta puede ser suspendida temporalmente si no se
                                            toma acción dentro de las 24 horas. Le instamos a tomar medidas inmediatas
                                            para evitar cualquier inconveniente.</p>
                                        <p>Nos disculpamos sinceramente por cualquier inconveniente que esto pueda
                                            causar y le agradecemos su pronta atención a este asunto.</p>
                                        <div class="mail-subcontent">
                                            <p>Atentamente,</p>
                                            <p>Equipo de Seguridad de Cuenta</p>
                                        </div>
                                    </div>
                                    <div class="user-footer">
                                        <div>
                                            <svg>
                                                <use href="assets-admin/svg/icon-sprite.svg#attchment"></use>
                                            </svg><span class="f-light">Adjuntos</span>
                                        </div>
                                        <div class="d-inline-block">
                                            <div class="attchment-file common-flex">
                                                <div class="common-flex align-items-center"><img
                                                        src="assets-admin/images/email-template/pdfs.png" alt="pdf">
                                                    <div class="d-block">
                                                        <p>Oferta_Letra.pdf</p>
                                                        <p>200KB</p>
                                                    </div>
                                                </div><a href="assets-admin/pug/pages/template/text_file.txt" download>
                                                    <i class="fa fa-download f-light"></i></a>
                                            </div>
                                        </div>
                                        <div class="toolbar-box">
                                            <div id="toolbar">
                                                <button class="ql-bold">Negrita </button>
                                                <button class="ql-italic">Cursiva </button>
                                                <button class="ql-underline">Subrayado</button>
                                                <button class="ql-strike">Tachado </button>
                                                <button class="ql-list" value="ordered">Lista </button>
                                                <button class="ql-list" value="bullet"> </button>
                                                <button class="ql-indent" value="-1"> </button>
                                                <button class="ql-indent" value="+1"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </div>
                                            <div id="editor"> </div>
                                        </div>
                                    </div>
                                    <div class="send-btn">
                                        <button class="btn btn-primary">Enviar<i class="fa fa-paper-plane">
                                            </i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once 'Views/template/footer_Admin.php'; ?>