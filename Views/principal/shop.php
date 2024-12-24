<?php include_once 'Views/template/header_principal.php'; ?>

<!-- sección -->
<div class="mt-4 bg-light py-3 shadow-sm rounded">
    <div class="container">
        <!-- fila -->
        <div class="row">
            <!-- columna -->
            <div class="col-12">
                <!-- migas de pan -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 bg-white p-3 rounded">
                        <li class="breadcrumb-item"><a href="#!" class="text-primary">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="#!" class="text-primary">Tienda</a></li>
                        <li class="breadcrumb-item active text-secondary" aria-current="page">Snacks y Bocadillos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<!-- section -->
<section class="mt-8 mb-lg-14 mb-8">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row gx-10">
            <!-- col -->
            <div class="col-lg-3 col-md-4 mb-6 mb-md-0">
                <div class="py-4">
                    <!-- Encabezado -->
                    <h5 class="mb-3">Categorías</h5>
                    <!-- Navegación -->
                    <ul class="nav nav-category" id="categoryCollapseMenu">
                        <!-- Elemento de navegación -->
                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                            data-bs-target="#categoryFlushOne" aria-expanded="false" aria-controls="categoryFlushOne">
                            <a href="#" class="nav-link">Lácteos, Pan y Huevos
                                <i class="feather-icon icon-chevron-right"></i>
                            </a>
                            <div id="categoryFlushOne" class="accordion-collapse collapse"
                                data-bs-parent="#categoryCollapseMenu">
                                <div>
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a href="#!" class="nav-link">Leche</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Bebidas de Leche</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Cuajada y Yogur</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Huevos</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Pan</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Panecillos y Pastelería</a>
                                        </li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Mantequilla y Más</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Queso</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Paneer y Tofu</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Crema y Blanqueadores</a>
                                        </li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Leche Condensada</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Bebidas Veganas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Más elementos de navegación -->
                        <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <a href="#" class="nav-link">
                                Snacks y Bocadillos
                                <i class="feather-icon icon-chevron-right"></i>
                            </a>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#categoryCollapseMenu">
                                <div>
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a href="#!" class="nav-link">Papas y Crujientes</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Nachos</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Palomitas</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Bhujia y Mezclas</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Snacks Salados</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Snacks Saludables</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Pasteles y Rollos</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Barras Energéticas</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Papad y Fryums</a></li>
                                        <li class="nav-item"><a href="#!" class="nav-link">Bizcochos y Galletas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Puedes repetir el patrón anterior para las demás categorías -->
                    </ul>
                </div>


                <div class="py-4">
                    <!-- encabezado -->
                    <h5 class="mb-3">Tiendas</h5>
                    <div class="my-4">
                        <!-- entrada -->
                        <input type="search" class="form-control" placeholder="Buscar por tienda">
                    </div>
                    <!-- casilla de verificación -->
                    <div class="form-check mb-2">
                        <!-- entrada -->
                        <input class="form-check-input" type="checkbox" value="" id="eGrocery" checked>
                        <label class="form-check-label" for="eGrocery">
                            E-Grocery
                        </label>
                    </div>
                    <!-- casilla de verificación -->
                    <div class="form-check mb-2">
                        <!-- entrada -->
                        <input class="form-check-input" type="checkbox" value="" id="DealShare">
                        <label class="form-check-label" for="DealShare">
                            DealShare
                        </label>
                    </div>
                    <!-- casilla de verificación -->
                    <div class="form-check mb-2">
                        <!-- entrada -->
                        <input class="form-check-input" type="checkbox" value="" id="Dmart">
                        <label class="form-check-label" for="Dmart">
                            DMart
                        </label>
                    </div>
                    <!-- casilla de verificación -->
                    <div class="form-check mb-2">
                        <!-- entrada -->
                        <input class="form-check-input" type="checkbox" value="" id="Blinkit">
                        <label class="form-check-label" for="Blinkit">
                            Blinkit
                        </label>
                    </div>
                    <!-- casilla de verificación -->
                    <div class="form-check mb-2">
                        <!-- entrada -->
                        <input class="form-check-input" type="checkbox" value="" id="BigBasket">
                        <label class="form-check-label" for="BigBasket">
                            BigBasket
                        </label>
                    </div>
                    <!-- casilla de verificación -->
                    <div class="form-check mb-2">
                        <!-- entrada -->
                        <input class="form-check-input" type="checkbox" value="" id="StoreFront">
                        <label class="form-check-label" for="StoreFront">
                            StoreFront
                        </label>
                    </div>
                    <!-- casilla de verificación -->
                    <div class="form-check mb-2">
                        <!-- entrada -->
                        <input class="form-check-input" type="checkbox" value="" id="Spencers">
                        <label class="form-check-label" for="Spencers">
                            Spencers
                        </label>
                    </div>
                    <!-- casilla de verificación -->
                    <div class="form-check mb-2">
                        <!-- entrada -->
                        <input class="form-check-input" type="checkbox" value="" id="onlineGrocery">
                        <label class="form-check-label" for="onlineGrocery">
                            Supermercado Online
                        </label>
                    </div>
                </div>

                <div class="py-4">

                    <h5 class="mb-3">Precio</h5>
                    <div>
                        <div id="priceRange" class="mb-3"></div>
                        <small class="text-muted">Precio:</small> <span id="priceRange-value" class="small"></span>
                    </div>

                </div>

                <div class="py-4">

                    <h5 class="mb-3">Calificación</h5>
                    <div>
                        <!-- verificación de formulario -->
                        <div class="form-check mb-2">
                            <!-- entrada -->
                            <input class="form-check-input" type="checkbox" value="" id="ratingFive">
                            <label class="form-check-label" for="ratingFive">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </label>
                        </div>
                        <!-- verificación de formulario -->
                        <div class="form-check mb-2">
                            <!-- entrada -->
                            <input class="form-check-input" type="checkbox" value="" id="ratingFour" checked>
                            <label class="form-check-label" for="ratingFour">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </label>
                        </div>
                        <!-- verificación de formulario -->
                        <div class="form-check mb-2">
                            <!-- entrada -->
                            <input class="form-check-input" type="checkbox" value="" id="ratingThree">
                            <label class="form-check-label" for="ratingThree">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </label>
                        </div>
                        <!-- verificación de formulario -->
                        <div class="form-check mb-2">
                            <!-- entrada -->
                            <input class="form-check-input" type="checkbox" value="" id="ratingTwo">
                            <label class="form-check-label" for="ratingTwo">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </label>
                        </div>
                        <!-- verificación de formulario -->
                        <div class="form-check mb-2">
                            <!-- entrada -->
                            <input class="form-check-input" type="checkbox" value="" id="ratingOne">
                            <label class="form-check-label" for="ratingOne">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </label>
                        </div>
                    </div>

                </div>

                <div class="py-4">
                    <!-- Diseño del Banner -->
                    <!-- Contenido del Banner -->
                    <div class="position-absolute p-5 py-8">
                        <h3 class="mb-1">Frutas Frescas</h3>
                        <p>Obtén hasta un 25% de descuento</p>
                        <a href="#" class="btn btn-dark">Compra Ahora<i class="feather-icon icon-arrow-right"></i></a>
                    </div>
                    <!-- Contenido del Banner -->
                    <!-- Imagen del Banner -->
                    <!-- img --><img src="../assets/img/banner/assortment-citrus-fruits.png" alt=""
                        class="img-fluid rounded-3">
                    <!-- Imagen del Banner -->
                </div>
                <!-- Diseño del Banner -->
            </div>
            <div class="col-lg-9 col-md-8">
                <!-- tarjeta -->
                <div class="card mb-4 bg-light border-0">
                    <!-- cuerpo de la tarjeta -->
                    <div class="card-body p-9">
                        <h1 class="mb-0">Snacks & Munchies</h1>
                    </div>
                </div>

                <!-- list icon -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-3 mb-md-0"> <span class="text-dark">24 </span> Productos encontrados </p>
                    </div>
                    <!-- icono -->
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="shop-list.html" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
                        <a href="shop-grid.html" class="text-muted me-3"><i class="bi bi-grid"></i></a>
                        <a href="shop-grid-3-column.html" class="me-3 active"><i class="bi bi-grid-3x3-gap"></i></a>
                        <!-- opción de selección -->
                        <div class="me-2">
                            <select class="form-select" aria-label="Ejemplo de selección predeterminada">
                                <option selected>Mostrar: 50</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <!-- opción de selección -->
                        <div>
                            <select class="form-select" aria-label="Ejemplo de selección predeterminada">
                                <option selected>Ordenar por: Destacados</option>
                                <option value="Low to High">Precio: De menor a mayor</option>
                                <option value="High to Low">Precio: De mayor a menor</option>
                                <option value="Release Date">Fecha de lanzamiento</option>
                                <option value="Avg. Rating">Calificación promedio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row g-4 row-cols-xl-3 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                    <!-- col -->
                    <?php foreach ($data['productos'] as $producto) { ?>
                    <div class="col">
                        <!-- tarjeta -->
                        <div class="card card-product">
                            <div class="card-body">
                                <!-- insignia -->
                                <div class="text-center position-relative">
                                    <div class="position-absolute top-0 start-0">
                                        <span class="badge bg-danger">Oferta</span>
                                    </div>
                                    <a href="<?php echo BASE_URL; ?>principal/detail/<?php echo $producto['id']; ?>">
                                        <!-- img -->
                                        <img src="<?php echo BASE_URL . $producto['imagen']; ?>"
                                            alt="Imagen del producto" class="mb-3 img-fluid"
                                            style="max-height: 180px; object-fit: cover;">
                                    </a>
                                    <!-- botones de acción -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal">
                                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Vista Rápida"></i>
                                        </a>
                                        <a href="#" class="btn-action btnAddDeseo" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Lista de deseos" prod="<?php echo $producto['id']; ?>"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>

                                <!-- encabezado -->
                                <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted">
                                        <small>Snacks y Aperitivos</small>
                                    </a>
                                </div>
                                <h2 class="fs-6"><a
                                        href="<?php echo BASE_URL; ?>principal/detail/<?php echo $producto['id']; ?>"
                                        class="text-inherit text-decoration-none"><?php echo $producto['nombre']; ?></a>
                                </h2>

                                <div>
                                    <!-- calificación -->
                                    <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5(149)</span>
                                </div>

                                <!-- precio -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <span class="text-dark"><?php echo MONEDA . ' ' . $producto['precio']; ?></span>
                                        <span class="text-decoration-line-through text-muted">$24</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                        <a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Agregar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- row -->
                <div class="row mt-8">
                    <div class="col">
                        <!-- nav -->
                        <nav aria-label="Navegación de página">
                            <ul class="pagination">
                                <?php
                $anterior = $data['pagina'] - 1;
                $siguiente = $data['pagina'] + 1;
                $url = BASE_URL .'principal/shop/';

                if ($data['pagina'] > 1) {
                    echo '<li class="page-item">
                        <a class="page-link page-link-prev btn btn-primary btn-round" href="' . $url . $anterior . '" aria-label="Anterior" tabindex="-1" aria-disabled="true">
                            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Anterior
                        </a>
                    </li>';
                }
                
                if ($data['total'] >= $siguiente) {
                    echo '<li class="page-item">
                        <a class="page-link page-link-next btn btn-primary btn-round" href="' . $url . $siguiente . '" aria-label="Siguiente">
                            Siguiente<span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                        </a>
                    </li>';
                }
            ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body p-8">
                <div class="d-flex justify-content-end">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">

                            <div class="zoom" onmousemove="zoom(event)"
                                style="background-image: url(../assets/img/products/product-single-img-1.jpg)">
                                <!-- img -->
                                <img src="../assets/img/products/product-single-img-1.jpg" alt="">
                            </div>


                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="background-image: url(../assets/img/products/product-single-img-2.jpg)">
                                    <!-- img -->
                                    <img src="../assets/img/products/product-single-img-2.jpg" alt="">
                                </div>

                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="background-image: url(../assets/img/products/product-single-img-3.jpg)">
                                    <!-- img -->
                                    <img src="../assets/img/products/product-single-img-3.jpg" alt="">
                                </div>

                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="background-image: url(../assets/img/products/product-single-img-4.jpg)">
                                    <!-- img -->
                                    <img src="../assets/img/products/product-single-img-4.jpg" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                            <div class="thumbnails row g-3" id="productModalThumbnails">
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="../assets/img/products/product-single-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="../assets/img/products/product-single-img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="../assets/img/products/product-single-img-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="../assets/img/products/product-single-img-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ps-md-8">
                            <a href="#!" class="mb-4 d-block">Galletas de Panadería</a>
                            <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
                            <div class="mb-4"> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small><a href="#" class="ms-2">(30 reseñas)</a>
                            </div>
                            <div class="fs-4"><span class="fw-bold text-dark">$32</span> <span
                                    class="text-decoration-line-through text-muted">$35</span><span><small
                                        class="fs-6 ms-2 text-danger">26% de descuento</small></span>
                            </div>
                            <hr class="my-6">
                            <div><button type="button" class="btn btn-outline-secondary">250g</button>
                                <button type="button" class="btn btn-outline-secondary">500g</button>
                                <button type="button" class="btn btn-outline-secondary">1kg</button>
                            </div>
                            <div class="mt-5 d-flex justify-content-start">
                                <div class="col-2">
                                    <div class="input-group  flex-nowrap justify-content-center ">
                                        <input type="button" value="-"
                                            class="button-minus form-control  text-center flex-xl-none w-xl-30 w-xxl-10 px-0  "
                                            data-field="quantity">
                                        <input type="number" step="1" max="10" value="1" name="quantity"
                                            class="quantity-field form-control text-center flex-xl-none w-xl-30 w-xxl-10 px-0 ">
                                        <input type="button" value="+"
                                            class="button-plus form-control  text-center flex-xl-none w-xl-30  w-xxl-10 px-0  "
                                            data-field="quantity">
                                    </div>
                                </div>
                                <div class="ms-2 col-4 d-grid">
                                    <button type="button" class="btn btn-primary"><i
                                            class="feather-icon icon-shopping-bag me-2"></i>Agregar al carrito</button>
                                </div>
                                <div class="ms-2 col-4">
                                    <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                                    <a class="btn btn-light" href="shop-wishlist.html" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Lista de deseos"><i
                                            class="feather-icon icon-heart"></i></a>
                                </div>
                            </div>
                            <hr class="my-6">
                            <div>
                                <table class="table table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>Código del producto:</td>
                                            <td>FBB00255</td>

                                        </tr>
                                        <tr>
                                            <td>Disponibilidad:</td>
                                            <td>En stock</td>

                                        </tr>
                                        <tr>
                                            <td>Tipo:</td>
                                            <td>Frutas</td>

                                        </tr>
                                        <tr>
                                            <td>Envío:</td>
                                            <td><small>Envío en 01 día.<span class="text-muted">( Recogida gratuita
                                                        hoy)</span></small></td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>





<?php include_once 'Views/template/footer_principal.php'; ?>