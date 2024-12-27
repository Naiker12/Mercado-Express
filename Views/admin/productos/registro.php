<?php include_once 'Views/template/header_Admin.php'; ?>




<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Añadir Producto</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="assets-admin/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Comercio Electrónico</li>
                        <li class="breadcrumb-item active">Añadir Producto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Formulario de productos</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-xl-5 g-3">
                            <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                                <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill"
                                            href="#detail-product" role="tab" aria-controls="detail-product"
                                            aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="assets-admin/svg/icon-sprite.svg#product-detail">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Añadir Detalles del Producto</h6>
                                                <p>Agregar nombre y detalles del producto</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="gallery-product-tab" data-bs-toggle="pill"
                                            href="#gallery-product" role="tab" aria-controls="gallery-product"
                                            aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="assets-admin/svg/icon-sprite.svg#product-gallery">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Galería del Producto</h6>
                                                <p>Miniatura y añadir galería de productos</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="category-product-tab" data-bs-toggle="pill"
                                            href="#category-product" role="tab" aria-controls="category-product"
                                            aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="assets-admin/svg/icon-sprite.svg#product-category">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Categorías del Producto</h6>
                                                <p>Añadir categoría, estado y etiquetas del producto</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pricings-tab" data-bs-toggle="pill" href="#pricings"
                                            role="tab" aria-controls="pricings" aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="assets-admin/svg/icon-sprite.svg#pricing"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Precios de Venta</h6>
                                                <p>Añadir precio básico y descuento del producto</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="advance-product-tab" data-bs-toggle="pill"
                                            href="#advance-product" role="tab" aria-controls="advance-product"
                                            aria-selected="false">
                                            <div class="nav-rounded">
                                                <div class="product-icons">
                                                    <svg class="stroke-icon">
                                                        <use href="assets-admin/svg/icon-sprite.svg#advance"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-tab-content">
                                                <h6>Avanzado</h6>
                                                <p>Añadir detalles meta y de inventario</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                                <div class="tab-content" id="add-product-pills-tabContent">
                                    <div class="tab-pane fade show active" id="detail-product" role="tabpanel"
                                        aria-labelledby="detail-product-tab">
                                        <div class="sidebar-body">
                                            <form class="row g-2">
                                                <label class="form-label col-12 m-0" for="productTitle1">Título del
                                                    Producto
                                                    <span class="txt-danger"> *</span></label>
                                                <div class="col-12 custom-input">
                                                    <input class="form-control is-invalid" id="productTitle1"
                                                        type="text" required="">
                                                    <div class="valid-feedback">¡Se ve bien!</div>
                                                    <div class="invalid-feedback">Es necesario un nombre de producto y
                                                        se recomienda que sea único.</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="toolbar-box">
                                                        <div id="toolbar2">
                                                            <span class="ql-formats">
                                                                <select class="ql-size"></select>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-bold">Negrita</button>
                                                                <button class="ql-italic">Cursiva</button>
                                                                <button class="ql-underline">Subrayado</button>
                                                                <button class="ql-strike">Tachado</button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-list" value="ordered">Lista
                                                                    ordenada</button>
                                                                <button class="ql-list" value="bullet">Lista</button>
                                                                <button class="ql-indent" value="-1">Disminuir
                                                                    sangría</button>
                                                                <button class="ql-indent" value="+1">Aumentar
                                                                    sangría</button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-link">Enlace</button>
                                                                <button class="ql-image">Imagen</button>
                                                                <button class="ql-video">Video</button>
                                                            </span>
                                                        </div>
                                                        <div id="editor2"></div>
                                                    </div>
                                                    <p class="f-light">Mejora la visibilidad del producto añadiendo una
                                                        descripción atractiva.</p>
                                                </div>
                                            </form>
                                            <div class="product-buttons">
                                                <div class="btn">
                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Siguiente
                                                        <svg>
                                                            <use href="assets-admin/svg/icon-sprite.svg#front-arrow">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="gallery-product" role="tabpanel"
                                        aria-labelledby="gallery-product-tab">
                                        <div class="sidebar-body">
                                            <div class="product-upload">
                                                <p>Imagen del Producto</p>
                                                <form class="dropzone dropzone-light" id="multiFileUploadA"
                                                    action="/upload.php">
                                                    <div class="dz-message needsclick">
                                                        <svg>
                                                            <use href="assets-admin/svg/icon-sprite.svg#file-upload">
                                                            </use>
                                                        </svg>
                                                        <h6>Arrastra tu imagen aquí, o <a class="txt-primary"
                                                                href="#!">explora</a></h6>
                                                        <span class="note needsclick">SVG, PNG, JPG o GIF</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="product-upload">
                                                <p>Galería de Productos</p>
                                                <form class="dropzone dropzone-light" id="multiFileUploadB"
                                                    action="/upload.php">
                                                    <div class="dz-message needsclick">
                                                        <svg>
                                                            <use href="assets-admin/svg/icon-sprite.svg#file-upload1">
                                                            </use>
                                                        </svg>
                                                        <h6>Arrastra los archivos aquí</h6>
                                                        <span class="note needsclick">Añadir Imágenes de la Galería de
                                                            Productos</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="product-buttons">
                                                <div class="btn">
                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                        <svg>
                                                            <use href="assets-admin/svg/icon-sprite.svg#back-arrow">
                                                            </use>
                                                        </svg>Anterior
                                                    </div>
                                                </div>
                                                <div class="btn">
                                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Siguiente
                                                        <svg>
                                                            <use href="assets-admin/svg/icon-sprite.svg#front-arrow">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="category-product" role="tabpanel"
                                        aria-labelledby="category-product-tab">
                                        <div class="sidebar-body">
                                            <form>
                                                <div class="row g-lg-4 g-3">
                                                    <div class="col-12">
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="row g-2">
                                                                    <div class="col-12">
                                                                        <label class="form-label m-0"
                                                                            for="validationDefault04">Añadir
                                                                            Categoría</label>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <select class="form-select"
                                                                            id="validationDefault04" required="">
                                                                            <option selected="" value="">Juguetes y
                                                                                juegos</option>
                                                                            <option>Ropa deportiva</option>
                                                                            <option>Joyería</option>
                                                                            <option>Mobiliario y Decoración</option>
                                                                            <option>Salud, Cuidado personal y Belleza
                                                                            </option>
                                                                            <option>Auto y Piezas</option>
                                                                            <option>Productos para el cuidado del bebé
                                                                            </option>
                                                                        </select>
                                                                        <p class="f-light">Un producto puede ser añadido
                                                                            a una categoría</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row g-2 product-tag">
                                                                    <div class="col-12">
                                                                        <label class="form-label d-block m-0">Añadir
                                                                            Etiqueta</label>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <input name="basic-tags"
                                                                            value="relojes, deportes, ropa, botellas">
                                                                        <p class="f-light">Los productos pueden ser
                                                                            etiquetados</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="category-buton">
                                                                    <a class="btn button-primary" href="#!"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#category-pill-modal">
                                                                        <i class="me-2 fa fa-plus"> </i>Crear Nueva
                                                                        Categoría
                                                                    </a>
                                                                </div>
                                                                <div class="modal fade" id="category-pill-modal"
                                                                    tabindex="-1" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h3 class="modal-title fs-5">Crear nueva
                                                                                    categoría</h3>
                                                                                <button class="btn-close" type="button"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body custom-input">
                                                                                <div class="create-category">
                                                                                    <div>
                                                                                        <label class="form-label"
                                                                                            for="categoryName">Nombre de
                                                                                            la Categoría <span
                                                                                                class="txt-danger">*</span></label>
                                                                                        <input class="form-control m-0"
                                                                                            id="categoryName"
                                                                                            type="text" required="">
                                                                                        <div class="toolbar-box">
                                                                                            <div id="toolbar3">
                                                                                                <span
                                                                                                    class="ql-formats">
                                                                                                    <select
                                                                                                        class="ql-size"></select>
                                                                                                </span>
                                                                                                <span
                                                                                                    class="ql-formats">
                                                                                                    <button
                                                                                                        class="ql-bold">Negrita</button>
                                                                                                    <button
                                                                                                        class="ql-italic">Cursiva</button>
                                                                                                    <button
                                                                                                        class="ql-underline">Subrayado</button>
                                                                                                    <button
                                                                                                        class="ql-strike">Tachado</button>
                                                                                                </span>
                                                                                                <span
                                                                                                    class="ql-formats">
                                                                                                    <button
                                                                                                        class="ql-list"
                                                                                                        value="ordered">Lista</button>
                                                                                                    <button
                                                                                                        class="ql-list"
                                                                                                        value="bullet"></button>
                                                                                                    <button
                                                                                                        class="ql-indent"
                                                                                                        value="-1"></button>
                                                                                                    <button
                                                                                                        class="ql-indent"
                                                                                                        value="+1"></button>
                                                                                                </span>
                                                                                                <span
                                                                                                    class="ql-formats">
                                                                                                    <button
                                                                                                        class="ql-link"></button>
                                                                                                    <button
                                                                                                        class="ql-image"></button>
                                                                                                    <button
                                                                                                        class="ql-video"></button>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div id="editor3"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="f-light">Mejora la
                                                                                        visibilidad del producto
                                                                                        añadiendo una descripción
                                                                                        atractiva.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-light"
                                                                                    type="button"
                                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                                <button class="btn btn-primary"
                                                                                    type="button">Añadir</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label"
                                                                            for="publishStatus">Publication
                                                                            Status</label>
                                                                        <select class="form-select" id="publishStatus"
                                                                            required="">
                                                                            <option selected="" value="">Publish
                                                                            </option>
                                                                            <option>Drafts</option>
                                                                            <option>Unpublish</option>
                                                                        </select>
                                                                        <p class="f-light">Choose the status</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label"
                                                                            for="datetime-local1">Publication Date &
                                                                            Time</label>
                                                                        <div
                                                                            class="input-group flatpicker-calender product-date">
                                                                            <input class="form-control"
                                                                                id="datetime-local1" type="date">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="product-buttons">
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="assets-admin/svg/icon-sprite.svg#back-arrow">
                                                                </use>
                                                            </svg>Anterior
                                                        </div>
                                                    </div>
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Siguiente
                                                            <svg>
                                                                <use
                                                                    href="assets-admin/svg/icon-sprite.svg#front-arrow">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pricings" role="tabpanel"
                                        aria-labelledby="pricings-tab">
                                        <div class="sidebar-body">
                                            <form class="price-wrapper">
                                                <div class="row g-3 custom-input">
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="initialCost">Costo inicial <span
                                                                class="txt-danger">*</span></label>
                                                        <input class="form-control" id="initialCost" type="number">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="sellingPrice">Precio de venta
                                                            <span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="sellingPrice" type="number">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label">Elige tu moneda</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected="">Dólar $</option>
                                                            <option value="1">Euro €</option>
                                                            <option value="2">Rupias ₹</option>
                                                            <option value="3">Libras esterlinas £</option>
                                                            <option value="4">Ruble ruso ₽</option>
                                                            <option value="5">Yen japonés ¥</option>
                                                            <option value="6">Dólar de Singapur S$</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="productStock1">Existencias del
                                                            producto <span class="txt-danger">*</span></label>
                                                        <input class="form-control" id="productStock1" type="number">
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="form-label">Tipos de descuento del producto<i
                                                                class="icon-help-alt ms-1" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                data-bs-title="Elige el tipo de descuento que se aplicará a ese artículo en particular."></i></label>
                                                        <ul class="radio-wrapper">
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon"
                                                                    type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label"
                                                                    for="radio-icon"><span>Precio fijo</span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon4"
                                                                    type="radio" name="radio5" value="option5"
                                                                    checked="">
                                                                <label class="form-check-label"
                                                                    for="radio-icon4"><span>BOGO (Compra uno, lleva
                                                                        uno)</span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon5"
                                                                    type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label"
                                                                    for="radio-icon5"><span>Descuento estacional o por
                                                                        festividad</span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon6"
                                                                    type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label"
                                                                    for="radio-icon6"><span>Descuento basado en
                                                                        porcentaje (%)</span></label>
                                                            </li>
                                                            <li>
                                                                <input class="form-check-input" id="radio-icon7"
                                                                    type="radio" name="radio5" value="option5">
                                                                <label class="form-check-label"
                                                                    for="radio-icon7"><span>Descuento por volumen o por
                                                                        cantidad</span></label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-buttons">
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                            <svg>
                                                                <use href="assets-admin/svg/icon-sprite.svg#back-arrow">
                                                                </use>
                                                            </svg>Anterior
                                                        </div>
                                                    </div>
                                                    <div class="btn">
                                                        <div class="d-flex align-items-center gap-sm-2 gap-1">Siguiente
                                                            <svg>
                                                                <use
                                                                    href="assets-admin/svg/icon-sprite.svg#front-arrow">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="advance-product" role="tabpanel"
                                        aria-labelledby="advance-product-tab">
                                        <div class="sidebar-body advance-options">
                                            <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab"
                                                role="tablist">
                                                <li class="nav-item"><a class="nav-link active" id="manifest-option-tab"
                                                        data-bs-toggle="tab" href="#manifest-option" role="tab"
                                                        aria-controls="manifest-option"
                                                        aria-selected="true">Inventario</a></li>
                                                <li class="nav-item"><a class="nav-link" id="additional-option-tab"
                                                        data-bs-toggle="tab" href="#additional-option" role="tab"
                                                        aria-controls="additional-option" aria-selected="false">Opciones
                                                        adicionales</a></li>
                                                <li class="nav-item"><a class="nav-link" id="dropping-option-tab"
                                                        data-bs-toggle="tab" href="#dropping-option" role="tab"
                                                        aria-controls="dropping-option" aria-selected="false">Envío</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="advance-option-tabContent">
                                                <div class="tab-pane fade show active" id="manifest-option"
                                                    role="tabpanel" aria-labelledby="manifest-option-tab">
                                                    <div class="meta-body">
                                                        <form id="advance-tab">
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-sm-6">
                                                                    <label class="form-label">Disponibilidad en
                                                                        stock</label>
                                                                    <select class="form-select"
                                                                        aria-label="Ejemplo de selección predeterminada">
                                                                        <option selected="">En stock</option>
                                                                        <option value="1">Agotado</option>
                                                                        <option value="2">Pre-pedido</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="form-label">Stock bajo</label>
                                                                    <select class="form-select"
                                                                        aria-label="Ejemplo de selección predeterminada">
                                                                        <option selected="">Stock bajo (5 o menos)
                                                                        </option>
                                                                        <option value="1">Stock bajo (10 o menos)
                                                                        </option>
                                                                        <option value="2">Stock bajo (20 o menos)
                                                                        </option>
                                                                        <option value="2">Stock bajo (25 o menos)
                                                                        </option>
                                                                        <option value="2">Stock bajo (30 o menos)
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlInput1">SKU <span
                                                                            class="txt-danger">*</span></label>
                                                                    <input class="form-control"
                                                                        id="exampleFormControlInput1" type="text">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlInputa">Cantidad en stock
                                                                        <span class="txt-danger">*</span></label>
                                                                    <input class="form-control"
                                                                        id="exampleFormControlInputa" type="number"
                                                                        value="7" min="0">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlInputb">Fecha de
                                                                        reposición <span
                                                                            class="txt-danger">*</span></label>
                                                                    <input class="form-control"
                                                                        id="exampleFormControlInputb" type="number">
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlInputc">Pre-pedido <span
                                                                            class="txt-danger">*</span></label>
                                                                    <input class="form-control"
                                                                        id="exampleFormControlInputc" type="number">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Permitir pedidos
                                                                        pendientes</label>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="gridCheck"
                                                                            type="checkbox">
                                                                        <label class="form-check-label m-0"
                                                                            for="gridCheck">Este es un producto
                                                                            digital</label>
                                                                        <p class="f-light">Decide si el producto es un
                                                                            artículo digital o físico. El envío puede
                                                                            ser necesario para productos físicos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                    <div
                                                                        class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        <svg>
                                                                            <use
                                                                                href="assets-admin/svg/icon-sprite.svg#back-arrow">
                                                                            </use>
                                                                        </svg>Anterior
                                                                    </div>
                                                                </div>
                                                                <div class="btn">
                                                                    <div
                                                                        class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        Siguiente
                                                                        <svg>
                                                                            <use
                                                                                href="assets-admin/svg/icon-sprite.svg#front-arrow">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="additional-option" role="tabpanel"
                                                    aria-labelledby="additional-option-tab">
                                                    <div class="meta-body">
                                                        <form>
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <div class="row custom-input">
                                                                                <div class="col-12">
                                                                                    <label class="form-label"
                                                                                        for="tagTitle">Título de la
                                                                                        etiqueta adicional</label>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <input class="form-control"
                                                                                        id="tagTitle" type="text">
                                                                                    <p class="f-light">Añadir un nuevo
                                                                                        título de etiqueta. Las palabras
                                                                                        clave deben ser simples y
                                                                                        precisas.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="row product-tag">
                                                                                <label
                                                                                    class="form-label col-12">Etiquetas
                                                                                    específicas</label>
                                                                                <div class="col-12">
                                                                                    <input id="specificTag"
                                                                                        name="basic-tags1"
                                                                                        value="relojes, deportes, ropa, botellas">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <label
                                                                                        class="form-label col-12">Descripción
                                                                                        adicional</label>
                                                                                    <div class="toolbar-box">
                                                                                        <div id="toolbar4"><span
                                                                                                class="ql-formats">
                                                                                                <select
                                                                                                    class="ql-size"></select></span><span
                                                                                                class="ql-formats">
                                                                                                <button
                                                                                                    class="ql-bold">Negrita</button>
                                                                                                <button
                                                                                                    class="ql-italic">Cursiva</button>
                                                                                                <button
                                                                                                    class="ql-underline">Subrayado</button>
                                                                                                <button
                                                                                                    class="ql-strike">Tachado</button></span><span
                                                                                                class="ql-formats">
                                                                                                <button class="ql-list"
                                                                                                    value="ordered">Lista
                                                                                                    ordenada</button>
                                                                                                <button class="ql-list"
                                                                                                    value="bullet"></button>
                                                                                                <button
                                                                                                    class="ql-indent"
                                                                                                    value="-1"></button>
                                                                                                <button
                                                                                                    class="ql-indent"
                                                                                                    value="+1"></button></span><span
                                                                                                class="ql-formats">
                                                                                                <button
                                                                                                    class="ql-link"></button>
                                                                                                <button
                                                                                                    class="ql-image"></button>
                                                                                                <button
                                                                                                    class="ql-video"></button></span>
                                                                                        </div>
                                                                                        <div id="editor4"></div>
                                                                                    </div>
                                                                                    <p class="f-light">Mejora tu
                                                                                        clasificación SEO con una
                                                                                        descripción de etiqueta
                                                                                        adicional para el producto.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                    <div
                                                                        class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        <svg>
                                                                            <use
                                                                                href="assets-admin/svg/icon-sprite.svg#back-arrow">
                                                                            </use>
                                                                        </svg>Anterior
                                                                    </div>
                                                                </div>
                                                                <div class="btn">
                                                                    <div
                                                                        class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        Siguiente
                                                                        <svg>
                                                                            <use
                                                                                href="assets-admin/svg/icon-sprite.svg#front-arrow">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="dropping-option" role="tabpanel"
                                                    aria-labelledby="dropping-option-tab">
                                                    <div class="meta-body">
                                                        <form>
                                                            <div class="row g-3 custom-input">
                                                                <div class="col-12">
                                                                    <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                        <div class="col-12">
                                                                            <label class="form-label"
                                                                                for="exampleFormControlInput1">¿Dónde
                                                                                puedo recoger mi pedido?</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputZip"
                                                                                type="number"
                                                                                placeholder="Código postal (10001)">
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputCity"
                                                                                type="text" placeholder="Ciudad">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <select class="form-select" id="inputState">
                                                                                <option selected="">Estado</option>
                                                                                <option>Gujarat</option>
                                                                                <option>Punjab</option>
                                                                                <option>Himachal Pradesh</option>
                                                                                <option>Goa</option>
                                                                                <option>Sikkim</option>
                                                                                <option>Telangana</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <label class="form-label"
                                                                                for="exampleFormControlInput1">Peso
                                                                                (kg)</label>
                                                                            <i class="icon-help-alt ms-1"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                data-bs-title="Establezca el peso adecuado para los artículos del producto."></i>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <input class="form-control" id="inputCitya"
                                                                                type="number">
                                                                            <p class="f-light">Decida si el producto es
                                                                                un artículo digital o físico. El envío
                                                                                puede ser necesario para productos
                                                                                físicos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                                        <div class="col-12">
                                                                            <label class="form-label"
                                                                                for="exampleFormControlInput1">Dimensiones</label>
                                                                            <i class="icon-help-alt ms-1"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                data-bs-title="Establezca la longitud, el ancho y la altura adecuados para los artículos del producto."></i>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputCityb"
                                                                                type="number" placeholder="Longitud[l]">
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <input class="form-control" id="inputCityc"
                                                                                type="number" placeholder="Ancho[w]">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input class="form-control" id="inputCityd"
                                                                                type="number" placeholder="Altura[h]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <label class="form-label"
                                                                                for="exampleFormControlInput1">Clase de
                                                                                envío</label>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <select class="form-select"
                                                                                id="inputState1">
                                                                                <option selected="">Envío básico
                                                                                </option>
                                                                                <option>Envío acelerado</option>
                                                                                <option>Envío internacional</option>
                                                                                <option>Envío gratuito</option>
                                                                                <option>Envío el mismo día o al día
                                                                                    siguiente</option>
                                                                                <option>Envío con tarifa plana</option>
                                                                                <option>Recogida local</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-buttons">
                                                                <div class="btn">
                                                                    <div
                                                                        class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        <svg>
                                                                            <use
                                                                                href="assets-admin/svg/icon-sprite.svg#back-arrow">
                                                                            </use>
                                                                        </svg>Anterior
                                                                    </div>
                                                                </div>
                                                                <div class="btn">
                                                                    <div
                                                                        class="d-flex align-items-center gap-sm-2 gap-1">
                                                                        Enviar
                                                                        <svg>
                                                                            <use
                                                                                href="assets-admin/svg/icon-sprite.svg#front-arrow">
                                                                            </use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>


<?php include_once 'Views/template/footer_Admin.php'; ?>

    