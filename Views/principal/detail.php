<?php include_once 'Views/template/header_principal.php'; ?>

<div class="mt-4">
    <div class="container">
        <!-- Fila principal -->
        <div class="row">
            <!-- Columna única -->
            <div class="col-12">
                <!-- Migas de pan (Breadcrumb) -->
                <nav aria-label="Navegación">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Panadería y Galletas</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Napolitanke Avellanas
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="mt-8">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- imagen de producto -->
                <div class="producto" id="producto">
                    <div class="zoom" onmousemove="zoom(event)"
                        style="background-image: url(<?php echo BASE_URL . 'assets/img/productos/' . $data['producto']['id'] . '/' . $data['imagenes'][0]; ?>)">
                        <img id="mainImage"
                            src="<?php echo BASE_URL . 'assets/img/productos/' . $data['producto']['id'] . '/' . $data['imagenes'][0]; ?>"
                            alt="">
                    </div>
                </div>

                <!-- herramientas del producto -->
                <div class="product-tools">
                    <div class="thumbnails row g-3" id="productModalThumbnails">
                        <?php for ($i = 0; $i < count($data['imagenes']); $i++) { ?>
                        <div class="col-3">
                            <div class="thumbnails-img">
                                <img src="<?php echo BASE_URL . 'assets/img/productos/' . $data['producto']['id'] . '/' . $data['imagenes'][$i]; ?>"
                                    alt="producto imagen <?php echo $i + 1; ?>"
                                    onclick="changeImage('<?php echo BASE_URL . 'assets/img/productos/' . $data['producto']['id'] . '/' . $data['imagenes'][$i]; ?>')">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <script>
            // Función para cambiar la imagen principal
            function changeImage(imageUrl) {
                document.getElementById("mainImage").src = imageUrl;
                document.querySelector(".zoom").style.backgroundImage = "url(" + imageUrl + ")";
            }
            </script>

            <style>
            #mainImage {
                max-width: 80%;
                height: auto;
            }
            </style>


            <div class="col-md-6">
                <div class="ps-lg-10">
                    <!-- contenido -->
                    <a href="#!" class="mb-4 d-block">Galletas de Panadería</a>
                    <!-- título -->
                    <h1 class="mb-1"><?php echo $data['producto']['nombre']; ?></h1>
                    <div class="mb-4">
                        <!-- calificación -->
                        <small class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </small>
                        <a href="#" class="ms-2">(30 reseñas)</a>
                    </div>
                    <div class="fs-4">
                        <!-- precio -->
                        <span class="fw-bold text-dark">
                            <?php echo MONEDA . ' ' . $data['producto']['precio']; ?></span>
                        <span class="text-decoration-line-through text-muted">$35</span>
                        <span><small class="fs-6 ms-2 text-danger">26% Off</small></span>
                    </div>
                    <!-- línea horizontal -->
                    <hr class="my-6">
                    <div>
                        <button type="button" class="btn btn-outline-secondary">250g</button>
                        <!-- btn -->
                        <button type="button" class="btn btn-outline-secondary">500g</button>
                        <!-- btn -->
                        <button type="button" class="btn btn-outline-secondary">1kg</button>
                    </div>
                    <div class="mt-5 d-flex justify-content-start">
                        <div class="col-lg-2 col-3">
                            <!-- input -->
                            <div class="input-group flex-nowrap justify-content-center">
                                <input type="button" value="-"
                                    class="button-minus form-control text-center flex-xl-none w-xl-30 w-xxl-10 px-0"
                                    data-field="cantidad">
                                <input type="number" step="1" max="10" value="1" name="cantidad"
                                    class="campo-cantidad form-control text-center flex-xl-none w-xl-30 w-xxl-10 px-0">
                                <input type="button" value="+"
                                    class="button-plus form-control text-center flex-xl-none w-xl-30 w-xxl-10 px-0"
                                    data-field="cantidad">
                            </div>
                        </div>
                        <div class="ms-2 col-lg-4 col-5 d-grid">
                            <!-- btn -->
                            <button type="button" class="btn btn-primary"><i
                                    class="feather-icon icon-shopping-bag me-2"></i>Agregar al carrito</button>
                        </div>
                        <div class="ms-2 col-4">
                            <!-- btn -->
                            <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true"
                                title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            <a class="btn btn-light" href="shop-wishlist.html" data-bs-toggle="tooltip"
                                data-bs-html="true" title="Lista de deseos"><i class="feather-icon icon-heart"></i></a>
                        </div>
                    </div>
                    <!-- línea horizontal -->
                    <hr class="my-6">
                    <div>
                        <!-- tabla -->
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Código de producto:</td>
                                    <td>FBB00255</td>
                                </tr>
                                <tr>
                                    <td>Disponibilidad:</td>
                                    <td>En Stock</td>
                                </tr>
                                <tr>
                                    <td>Tipo:</td>
                                    <td>Frutas</td>
                                </tr>
                                <tr>
                                    <td>Envío:</td>
                                    <td><small>Envío en 01 día. <span class="text-muted">(Recogida gratis
                                                hoy)</span></small></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-8">
                        <!-- dropdown -->
                        <div class="dropdown">
                            <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Compartir
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-facebook me-2"></i>Facebook</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-twitter me-2"></i>Twitter</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-instagram me-2"></i>Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-lg-14 mt-8 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                    <!-- elemento de navegación -->
                    <li class="nav-item" role="presentation">
                        <!-- botón --> <button class="nav-link active" id="product-tab" data-bs-toggle="tab"
                            data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane"
                            aria-selected="true">Detalles del Producto</button>
                    </li>
                    <!-- elemento de navegación -->
                    <li class="nav-item" role="presentation">
                        <!-- botón --> <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                            data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane"
                            aria-selected="false">Información</button>
                    </li>
                    <!-- elemento de navegación -->
                    <li class="nav-item" role="presentation">
                        <!-- botón --> <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                            data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane"
                            aria-selected="false">Comentarios</button>
                    </li>
                    <!-- elemento de navegación -->
                    <li class="nav-item" role="presentation">
                        <!-- botón --> <button class="nav-link" id="sellerInfo-tab" data-bs-toggle="tab"
                            data-bs-target="#sellerInfo-tab-pane" type="button" role="tab"
                            aria-controls="sellerInfo-tab-pane" aria-selected="false" disabled>Información del
                            Vendedor</button>
                    </li>
                </ul>

                <!-- tab content -->
                <div class="tab-content" id="myTabContent">
                    <!-- tab pane -->
                    <div class="tab-pane fade show active" id="product-tab-pane" role="tabpanel"
                        aria-labelledby="product-tab" tabindex="0">
                        <div class="my-8">
                            <div class="mb-5">
                                <!-- texto -->
                                <h4 class="mb-1">Valor Nutricional y Beneficios</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi, tellus
                                    iaculis urna bibendum
                                    in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,
                                    varius habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus
                                    adipiscing sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                            <div class="mb-5">
                                <h5 class="mb-1">Consejos de Almacenamiento</h5>
                                <p class="mb-0">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet vitae
                                    varius sed magnis eu
                                    nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis
                                    ante ipsum netus risus adipiscing sagittis sed. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipiscing elit.
                                </p>
                            </div>

                            <!-- contenido -->
                            <div class="mb-5">
                                <h5 class="mb-1">Unidad</h5>
                                <p class="mb-0">3 unidades</p>
                            </div>
                            <div class="mb-5">
                                <h5 class="mb-1">Vendedor</h5>
                                <p class="mb-0">DMart Pvt. LTD</p>
                            </div>
                            <div>
                                <h5 class="mb-1">Descargo de Responsabilidad</h5>
                                <p class="mb-0">La imagen mostrada es una representación y puede variar ligeramente del
                                    producto real. Se hace todo
                                    lo posible
                                    para mantener la precisión de toda la información mostrada.</p>
                            </div>

                        </div>
                    </div>
                    <!-- tab pane -->
                    <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab"
                        tabindex="0">
                        <div class="my-8">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-4">Detalles</h4>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <table class="table table-striped">
                                        <!-- tabla -->
                                        <tbody>
                                            <tr>
                                                <th>Peso</th>
                                                <td>1000 Gramos</td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de Ingrediente</th>
                                                <td>Vegetariano</td>
                                            </tr>
                                            <tr>
                                                <th>Marca</th>
                                                <td>Dmart</td>
                                            </tr>
                                            <tr>
                                                <th>Cantidad del Paquete</th>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>Forma</th>
                                                <td>Larry el Pájaro</td>
                                            </tr>
                                            <tr>
                                                <th>Fabricante</th>
                                                <td>Dmart</td>
                                            </tr>
                                            <tr>
                                                <th>Cantidad Neta</th>
                                                <td>340.0 Gramos</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensiones del Producto</th>
                                                <td>9.6 x 7.49 x 18.49 cm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <table class="table table-striped">
                                        <!-- tabla -->
                                        <tbody>
                                            <tr>
                                                <th>ASIN</th>
                                                <td>SB0025UJ75W</td>
                                            </tr>
                                            <tr>
                                                <th>Clasificación de los más vendidos</th>
                                                <td>#2 en Frutas</td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de Disponibilidad</th>
                                                <td>30 de Abril de 2022</td>
                                            </tr>
                                            <tr>
                                                <th>Peso del Artículo</th>
                                                <td>500g</td>
                                            </tr>
                                            <tr>
                                                <th>Nombre Genérico</th>
                                                <td>Banano Robusta</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab pane -->
                    <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab"
                        tabindex="0">
                        <div class="my-8">
                            <!-- row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="me-lg-12 mb-6 mb-md-0">
                                        <div class="mb-5">
                                            <!-- título -->
                                            <h4 class="mb-3">Reseñas de clientes</h4>
                                            <span>
                                                <!-- calificación --> <small class="text-warning"> <i
                                                        class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i></small><span class="ms-3">4.1 de
                                                    5</span><small class="ms-3">11,130 calificaciones globales</small>
                                            </span>
                                        </div>
                                        <div class="mb-8">
                                            <!-- progreso -->
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="text-nowrap me-3 text-muted"><span
                                                        class="d-inline-block align-middle text-muted">5</span><i
                                                        class="bi bi-star-fill ms-1 small text-warning"></i></div>
                                                <div class="w-100">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div><span class="text-muted ms-3">53%</span>
                                            </div>
                                            <!-- progreso -->
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="text-nowrap me-3 text-muted"><span
                                                        class="d-inline-block align-middle text-muted">4</span><i
                                                        class="bi bi-star-fill ms-1 small text-warning"></i></div>
                                                <div class="w-100">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="50"></div>
                                                    </div>
                                                </div><span class="text-muted ms-3">22%</span>
                                            </div>
                                            <!-- progreso -->
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="text-nowrap me-3 text-muted"><span
                                                        class="d-inline-block align-middle text-muted">3</span><i
                                                        class="bi bi-star-fill ms-1 small text-warning"></i></div>
                                                <div class="w-100">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 35%;" aria-valuenow="35" aria-valuemin="0"
                                                            aria-valuemax="35"></div>
                                                    </div>
                                                </div><span class="text-muted ms-3">14%</span>
                                            </div>
                                            <!-- progreso -->
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="text-nowrap me-3 text-muted"><span
                                                        class="d-inline-block align-middle text-muted">2</span><i
                                                        class="bi bi-star-fill ms-1 small text-warning"></i></div>
                                                <div class="w-100">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 22%;" aria-valuenow="22" aria-valuemin="0"
                                                            aria-valuemax="22"></div>
                                                    </div>
                                                </div><span class="text-muted ms-3">5%</span>
                                            </div>
                                            <!-- progreso -->
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="text-nowrap me-3 text-muted"><span
                                                        class="d-inline-block align-middle text-muted">1</span><i
                                                        class="bi bi-star-fill ms-1 small text-warning"></i></div>
                                                <div class="w-100">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 14%;" aria-valuenow="14" aria-valuemin="0"
                                                            aria-valuemax="14"></div>
                                                    </div>
                                                </div><span class="text-muted ms-3">7%</span>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <h4>Reseña este producto</h4>
                                            <p class="mb-0">Comparte tus pensamientos con otros clientes.</p>
                                            <a href="#" class="btn btn-outline-gray-400 mt-4 text-muted">Escribir
                                                reseña</a>
                                        </div>

                                    </div>

                                </div>
                                <!-- col -->
                                <div class="col-md-8">
                                    <div class="mb-10">
                                        <div class="d-flex justify-content-between align-items-center mb-8">
                                            <div>
                                                <!-- encabezado -->
                                                <h4>Reseñas</h4>
                                            </div>
                                            <div>
                                                <select class="form-select"
                                                    aria-label="Ejemplo de selección predeterminada">
                                                    <option selected>Reseña destacada</option>
                                                    <option value="1">Uno</option>
                                                    <option value="2">Dos</option>
                                                    <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom pb-6 mb-6">
                                            <!-- imagen -->
                                            <img src="../assets/img/avatar/avatar-10.jpg" alt=""
                                                class="rounded-circle avatar-lg">
                                            <div class="ms-5">
                                                <h6 class="mb-1">
                                                    Shankar Subbaraman
                                                </h6>
                                                <!-- opciones de selección -->
                                                <!-- contenido -->
                                                <p class="small"> <span class="text-muted">30 diciembre 2022</span>
                                                    <span class="text-primary ms-3 fw-bold">Compra verificada</span>
                                                </p>
                                                <!-- calificación -->
                                                <div class="mb-2">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <span class="ms-3 text-dark fw-bold">Necesita verificar el peso en
                                                        el
                                                        punto de entrega</span>
                                                </div>
                                                <!-- texto -->
                                                <p>La calidad del producto es buena. Pero, el peso parecía ser menos de
                                                    1 kg. Como se
                                                    envía en un paquete abierto, existe la posibilidad de que se pierda
                                                    algo. FreshCart
                                                    envía las verduras y frutas en bolsas plásticas selladas y con
                                                    código de barras en el
                                                    peso, etc.</p>
                                                <div>
                                                    <div class="border rounded-3 icon-shape icon-lg border-2 ">
                                                        <!-- imagen --><img
                                                            src="../assets/img/products/product-img-1.jpg" alt=""
                                                            class="img-fluid rounded-3">
                                                    </div>
                                                    <div class="border rounded-3 icon-shape icon-lg border-2 ms-1 ">
                                                        <!-- imagen --><img
                                                            src="../assets/img/products/product-img-2.jpg" alt=""
                                                            class="img-fluid rounded-3">
                                                    </div>
                                                    <div class="border rounded-3 icon-shape icon-lg border-2 ms-1 ">
                                                        <!-- imagen --><img
                                                            src="../assets/img/products/product-img-3.jpg" alt=""
                                                            class="img-fluid rounded-3">
                                                    </div>
                                                </div>
                                                <!-- íconos -->
                                                <div class="d-flex justify-content-end mt-4">
                                                    <a href="#" class="text-muted"><i
                                                            class="feather-icon icon-thumbs-up me-1"></i>Útil</a>
                                                    <a href="#" class="text-muted ms-4"><i
                                                            class="feather-icon icon-flag me-2"></i>Reportar abuso</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                            <!-- imagen --><img src="../assets/img/avatar/avatar-12.jpg" alt=""
                                                class="rounded-circle avatar-lg">
                                            <div class="ms-5">
                                                <h6 class="mb-1">
                                                    Robert Thomas
                                                </h6>
                                                <!-- contenido -->
                                                <p class="small"> <span class="text-muted">29 diciembre 2022</span>
                                                    <span class="text-primary ms-3 fw-bold">Compra verificada</span>
                                                </p>
                                                <!-- calificación -->
                                                <div class="mb-2">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-muted"></i>
                                                    <span class="ms-3 text-dark fw-bold">Necesita verificar el peso en
                                                        el
                                                        punto de entrega</span>
                                                </div>
                                                <p>La calidad del producto es buena. Pero, el peso parecía ser menos de
                                                    1 kg. Como se
                                                    envía en un paquete abierto, existe la posibilidad de que se pierda
                                                    algo. FreshCart
                                                    envía las verduras y frutas en bolsas plásticas selladas y con
                                                    código de barras en el
                                                    peso, etc.</p>
                                                <!-- íconos -->
                                                <div class="d-flex justify-content-end mt-4">
                                                    <a href="#" class="text-muted"><i
                                                            class="feather-icon icon-thumbs-up me-1"></i>Útil</a>
                                                    <a href="#" class="text-muted ms-4"><i
                                                            class="feather-icon icon-flag me-2"></i>Reportar abuso</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                            <!-- imagen --><img src="../assets/img/avatar/avatar-9.jpg" alt=""
                                                class="rounded-circle avatar-lg">
                                            <div class="ms-5">
                                                <h6 class="mb-1">
                                                    Barbara Tay
                                                </h6>
                                                <!-- contenido -->
                                                <p class="small"> <span class="text-muted">28 diciembre 2022</span>
                                                    <span class="text-danger ms-3 fw-bold">Compra no verificada</span>
                                                </p>
                                                <!-- calificación -->
                                                <div class="mb-2">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-muted"></i>
                                                    <span class="ms-3 text-dark fw-bold">Necesita verificar el peso en
                                                        el
                                                        punto de entrega</span>
                                                </div>
                                                <p>Cada vez que pedí a Fresh obtuve plátanos de color amarillo verdoso
                                                    como quería,
                                                    así que adelante, muy rara vez recibo los demasiado maduros.</p>
                                                <!-- íconos -->
                                                <div class="d-flex justify-content-end mt-4">
                                                    <a href="#" class="text-muted"><i
                                                            class="feather-icon icon-thumbs-up me-1"></i>Útil</a>
                                                    <a href="#" class="text-muted ms-4"><i
                                                            class="feather-icon icon-flag me-2"></i>Reportar abuso</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                            <!-- imagen --><img src="../assets/img/avatar/avatar-8.jpg" alt=""
                                                class="rounded-circle avatar-lg">
                                            <div class="ms-5 flex-grow-1">
                                                <h6 class="mb-1">
                                                    Sandra Langevin
                                                </h6>
                                                <!-- contenido -->
                                                <p class="small"> <span class="text-muted">8 diciembre 2022</span>
                                                    <span class="text-danger ms-3 fw-bold">Compra no verificada</span>
                                                </p>
                                                <!-- calificación -->
                                                <div class="mb-2">
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <i class="bi bi-star-fill text-muted"></i>
                                                    <span class="ms-3 text-dark fw-bold">Gran producto</span>
                                                </div>
                                                <p>Gran producto y paquete. La entrega puede ser más rápida.</p>
                                                <!-- íconos -->
                                                <div class="d-flex justify-content-end mt-4">
                                                    <a href="#" class="text-muted"><i
                                                            class="feather-icon icon-thumbs-up me-1"></i>Útil</a>
                                                    <a href="#" class="text-muted ms-4"><i
                                                            class="feather-icon icon-flag me-2"></i>Reportar abuso</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-outline-gray-400 text-muted">Leer más reseñas</a>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- calificación -->
                                        <h3 class="mb-5">Crear reseña</h3>
                                        <div class="border-bottom py-4 mb-4">
                                            <h4 class="mb-3">Calificación general</h4>
                                            <div id="rater"></div>
                                        </div>
                                        <div class="border-bottom py-4 mb-4">
                                            <h4 class="mb-0">Calificar características</h4>
                                            <div class="my-5">
                                                <h5>Sabor</h5>
                                                <div id="rate-2"></div>
                                            </div>
                                            <div class="my-5">

                                                <h5>Relación calidad-precio</h5>
                                                <div id="rate-3"></div>
                                            </div>
                                            <div class="my-5">
                                                <h5>Olor</h5>
                                                <div id="rate-4"></div>
                                            </div>
                                        </div>
                                        <!-- control de formulario -->
                                        <div class="border-bottom py-4 mb-4">
                                            <h5>Agregar un título</h5>
                                            <input type="text" class="form-control"
                                                placeholder="Lo más importante a saber">
                                        </div>
                                        <div class="border-bottom py-4 mb-4">
                                            <h5>Agregar una foto o video</h5>
                                            <p>Los compradores encuentran más útiles las imágenes y los videos que solo
                                                el texto.</p>
                                            <!-- formulario -->
                                            <form action="#" class="dropzone profile-dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                                            </form>
                                        </div>
                                        <div class="py-4 mb-4">
                                            <!-- encabezado -->
                                            <h5>Agregar una reseña escrita</h5>
                                            <textarea class="form-control" rows="3"
                                                placeholder="¿Qué te gustó o no te gustó? ¿Para qué utilizaste este producto?"></textarea>
                                        </div>
                                        <!-- botón -->
                                        <div class="d-flex justify-content-end">
                                            <a href="#" class="btn btn-primary">Enviar reseña</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- tab pane -->
                    <div class="tab-pane fade" id="sellerInfo-tab-pane" role="tabpanel" aria-labelledby="sellerInfo-tab"
                        tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- sección -->
<section class="my-lg-14 my-14">
    <div class="container">
        <!-- fila -->
        <div class="row">
            <div class="col-12">
                <!-- encabezado -->
                <h3>Artículos Relacionados</h3>
            </div>
        </div>
        <!-- fila -->
        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
            <!-- columna -->
            <?php foreach ($data['relacionados'] as $producto) { ?>
            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <!-- insignia -->
                        <div class="text-center position-relative">
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-danger">Venta</span>
                            </div>
                            <a href="<?php echo BASE_URL; ?>principal/detail/<?php echo $producto['id']; ?>">
                                <!-- imagen --><img
                                    src="<?php echo BASE_URL; ?>assets/img/productos/<?php echo $producto['imagen']; ?>"
                                    alt="Plantilla de Comercio Electrónico de Alimentos" class="mb-3 img-fluid">
                            </a>
                            <!-- botones de acción -->
                            <div class="card-product-action">
                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista Rápida"></i></a>
                                <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                    data-bs-html="true" title="Lista de Deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <!-- encabezado -->
                        <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Snacks
                                    y Aperitivos</small></a></div>
                        <h2 class="fs-6"><a href="<?php echo BASE_URL; ?>principal/detail/<?php echo $producto['id']; ?>"
                                class="text-inherit text-decoration-none"><?php echo $producto['nombre']; ?></a></h2>
                        <div>
                            <!-- calificación --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(149)</span>
                        </div>
                        <!-- precio -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark"><?php echo MONEDA . ' ' . $producto['precio']; ?></span> <span
                                    class="text-decoration-line-through text-muted"><?php echo MONEDA . ' ' . $producto['precio']; ?></span>
                            </div>
                            <!-- botón -->
                            <div><a href="#!" class="btn btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg> Agregar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include_once 'Views/template/footer_principal.php'; ?>

<script src="<?php echo BASE_URL; ?>assets/js/modulos/detail.js"></script>