<?php include_once 'Views/template/header_principal.php'; ?>


<!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body p-6">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="mb-1" id="locationModalLabel">Elige tu ubicación de entrega</h5>
                        <p class="mb-0 small">Ingresa tu dirección y especificaremos las ofertas para tu área.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="my-5">
                    <input type="search" class="form-control" placeholder="Busca tu área">
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">Selecciona ubicación</h6>
                    <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Limpiar todo</a>
                </div>
                <div>
                    <div data-simplebar style="height:300px;">
                        <div class="list-group list-group-flush">
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                                <span>Alabama</span><span>Mín:$20</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Alaska</span><span>Mín:$30</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Arizona</span><span>Mín:$50</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>California</span><span>Mín:$29</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Colorado</span><span>Mín:$80</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Florida</span><span>Mín:$90</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Arizona</span><span>Mín:$50</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>California</span><span>Mín:$29</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Colorado</span><span>Mín:$80</span></a>
                            <a href="#"
                                class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                                <span>Florida</span><span>Mín:$90</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="mt-8">
    <div class="container">
        <div class="hero-slider">
            <div
                style="background: url(<?php echo BASE_URL; ?>assets/img/slider/slide-1.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                    <span class="badge text-bg-warning">Descuento de Apertura 50%</span>

                    <h2 class="text-dark display-5 fw-bold mt-4">Supermercado Diario <br> Productos Frescos</h2>
                    <p class="lead">Hemos introducido un nuevo modelo para compras de comestibles en línea
                        con entrega a domicilio conveniente.</p>
                    <a href="#!" class="btn btn-dark mt-3">Comprar Ahora <i
                            class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div
                style="background: url(<?php echo BASE_URL; ?>assets/img/slider/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                    <span class="badge text-bg-warning">Envío Gratis - pedidos superiores a $100</span>
                    <h2 class="text-dark display-5 fw-bold mt-4">Envío Gratis en <br> pedidos superiores a <span
                            class="text-primary">$100</span></h2>
                    <p class="lead">Envío gratuito solo para clientes nuevos, después de que se apliquen promociones y
                        descuentos.</p>
                    <a href="#!" class="btn btn-dark mt-3">Comprar Ahora <i
                            class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Inicio de la Sección de Categorías -->
<section class="mb-lg-10 mt-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">

                <h3 class="mb-0">Categorías Destacadas</h3>

            </div>
        </div>
        <div class="category-slider">

            <?php foreach ($data['categorias']  as $categoria) { ?>
            <div class="item">
                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"
                    class="text-decoration-none text-inherit">
                    <div class="card card-product mb-4">
                        <div class="card-body text-center py-8">
                            <img src="<?php echo $categoria['imagen']; ?>" alt="<?php echo $categoria['categoria']; ?>"
                                alt="Plantilla de Ecommerce de Comestibles" class="mb-3 img-fluid">
                            <div><?php echo $categoria['categoria']; ?></div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Fin de la Sección de Categorías -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <div>
                    <div class="py-10 px-8 rounded-3"
                        style="background:url(<?php echo BASE_URL; ?>assets/img/banner/grocery-banner.png)no-repeat; background-size: cover; background-position: center;">
                        <div>
                            <h3 class="fw-bold mb-1">Frutas y Verduras
                            </h3>
                            <p class="mb-4">Obtén Hasta un <span class="fw-bold">30%</span> de Descuento</p>
                            <a href="#!" class="btn btn-dark">Comprar Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 ">
                <div>
                    <div class="py-10 px-8 rounded-3"
                        style="background:url(<?php echo BASE_URL; ?>assets/img/banner/grocery-banner-2.jpg)no-repeat; background-size: cover; background-position: center;">
                        <div>
                            <h3 class="fw-bold mb-1">Panecillos Recién Horneados
                            </h3>
                            <p class="mb-4">Obtén Hasta un <span class="fw-bold">25%</span> de Descuento</p>
                            <a href="#!" class="btn btn-dark">Comprar Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Products Start-->
<section class="my-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">

                <h3 class="mb-0">Productos</h3>

            </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
            <?php foreach ($data['nuevoProductos'] as $producto) { ?>
            <div class="col">
                <div class="card card-product h-100">
                    <div class="card-body">

                        <div class="text-center position-relative">
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-danger">Sale</span>
                            </div>

                            <!-- Imagen con tamaño uniforme -->
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                                <div class="image-container mb-3">
                                    <img src="<?php echo $producto['imagen']; ?>" alt="Producto" class="img-fluid">
                                </div>
                            </a>

                            <div class="card-product-action">
                                <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Quick View"></i>
                                </a>
                                <a href="#!" class="btn-action btnAddDeseo"
                                    prod="<?php echo $producto['id']; ?> data-bs-toggle=" tooltip" data-bs-html="true"
                                    title="Wishlist" <i class="bi bi-heart"></i>
                                </a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Compare">
                                    <i class="bi bi-arrow-left-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="text-small mb-1">
                            <a href="#!" class="text-decoration-none text-muted">
                                <small>Snack & Munchies</small>
                            </a>
                        </div>
                        <h2 class="fs-6">
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"
                                class="text-inherit text-decoration-none">
                                <?php echo $producto['nombre']; ?>
                            </a>
                        </h2>
                        <div>
                            <small class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </small>
                            <span class="text-muted small">4.5(149)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-dark">
                                    <?php echo MONEDA . ' ' . $producto['precio']; ?>
                                </span>
                                <span class="text-decoration-line-through text-muted">$24</span>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-primary btn-sm btnAddcarrito" prod="product-id-here">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Carrito
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Estilos CSS -->
        <style>
        .image-container {
            height: 200px;
            /* Altura fija para las imágenes */
            overflow: hidden;
        }

        .image-container img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            /* Asegura que la imagen llene el contenedor */
        }

        .card-product {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        </style>

    </div>
</section>


<!-- Fin de Productos Populares-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-6">
                <h3 class="mb-0">Los Más Vendidos del Día</h3>
            </div>
        </div>

        <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class=" pt-8 px-8 rounded-3"
                    style="background:url(<?php echo BASE_URL; ?>assets/img/banner/banner-deal.jpg)no-repeat; background-size: cover; height: 470px;">

                    <div>
                        <h3 class="fw-bold text-white">100% Granos de Café
                            Orgánicos.
                        </h3>
                        <p class="text-white">Obtén la mejor oferta antes de que cierre.</p>
                        <a href="#!" class="btn btn-primary">Compra ahora <i
                                class="feather-icon icon-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <div class="text-center  position-relative "> <a href="#!"><img
                                    src="<?php echo BASE_URL; ?>assets/img/products/product-img-11.jpg"
                                    alt="Plantilla Ecommerce de Comestibles" class="mb-3 img-fluid"></a>

                            <div class="card-product-action">
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Vista rápida"><i class="bi bi-eye"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Té,
                                    Café y
                                    Bebidas</small></a></div>
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Café Molido</a>
                        </h2>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark">$13</span> <span
                                    class="text-decoration-line-through text-muted">$18</span>
                            </div>
                            <div>
                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>

                                </small>
                                <span><small>4.5</small></span>
                            </div>
                        </div>
                        <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Añadir al carrito </a></div>
                        <div class="d-flex justify-content-start text-center mt-3">
                            <div class="deals-countdown w-100" data-countdown="2022/10/10 00:00:00"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <div class="text-center  position-relative "> <a href="#!"><img
                                    src="<?php echo BASE_URL; ?>assets/img/products/product-img-12.jpg"
                                    alt="Plantilla Ecommerce de Comestibles" class="mb-3 img-fluid"></a>

                            <div class="card-product-action">
                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista rápida"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>

                        <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Frutas
                                    y
                                    Verduras</small></a></div>
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Tomates Triturados</a>
                        </h2>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark">$13</span> <span
                                    class="text-decoration-line-through text-muted">$18</span>
                            </div>
                            <div>

                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>

                                </small>
                                <span><small>4.5</small></span>
                            </div>

                        </div>

                        <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Añadir al carrito </a></div>

                        <div class="d-flex justify-content-start text-center mt-3 w-100">
                            <div class="deals-countdown w-100" data-countdown="2022/12/9 00:00:00"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <div class="text-center  position-relative "> <a href="#!"><img
                                    src="<?php echo BASE_URL; ?>assets/img/products/product-img-13.jpg"
                                    alt="Plantilla Ecommerce de Comestibles" class="mb-3 img-fluid"></a>

                            <div class="card-product-action">
                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista rápida"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Frutas
                                    y
                                    Verduras</small></a></div>
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Piña Dorada</a>
                        </h2>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark">$13</span> <span
                                    class="text-decoration-line-through text-muted">$18</span>
                            </div>
                            <div>

                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i></small>
                                <span><small>4.5</small></span>
                            </div>

                        </div>
                        <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Añadir al carrito </a></div>
                        <div class="d-flex justify-content-start text-center mt-3">
                            <div class="deals-countdown w-100" data-countdown="2022/11/11 00:00:00"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="my-lg-14 my-8">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="d-md-flex justify-content-between align-items-center mb-8">
                    <div>
                        <h3 class=" mb-1">¡Ofertas Especiales de la Semana para Ver Todas!</h3>
                        <p>Obtén ofertas exclusivas en curso, promociones y códigos de descuento para tus compras</p>
                    </div>
                    <div>
                        <a href="#">Ver todas <i class="feather-icon icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-0 border rounded-3 border-2 border-danger">
            <div class="col mb-lg-0">
                <div class="card card-product-v2 h-100">
                    <div class="card-body position-relative text-center">
                        <div class="text-center position-relative">
                            <div class="position-absolute top-0">
                                <span class="badge bg-info">25%</span>
                            </div>

                            <!-- img -->
                            <a href="#!"> <img src="<?php echo BASE_URL; ?>assets/img/products/product-img-2.jpg"
                                    alt="Plantilla de Ecommerce de Alimentos" class="mb-3 img-fluid"></a>
                            <!-- action btn -->
                            <div class="product-action-btn">
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista Rápida"></i></a>
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>

                        </div>
                        <div class="mb-3"><span class="text-dark">$15</span></div>
                        <!-- title -->
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Galletas Digestivas
                                Britannia NutriChoice</a></h2>
                        <div>
                            <!-- rating -->
                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.4(3,149)</span>
                        </div>
                        <div class="mt-3"><span class="text-uppercase small text-primary">En Stock</span></div>
                        <div class="mt-4">
                            <div class="progress mt-6" style="height: 8px;">
                                <div class="progress-bar bg-gray-400" role="progressbar" style="width: 88%;"
                                    aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="my-3">
                                <small>Productos disponibles: <span class="text-dark fw-bold">12</span></small>
                            </div>
                        </div>
                        <!-- btn -->
                        <div class="product-fade-block">
                            <div class="d-grid mt-4">
                                <a href="#" class="btn btn-primary rounded-pill">Añadir al carrito</a>
                            </div>
                        </div>

                    </div>
                    <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                </div>
            </div>
            <div class="col mb-lg-0">
                <div class="card card-product-v2 h-100">
                    <div class="card-body position-relative text-center">

                        <div class="text-center position-relative">
                            <div class="position-absolute top-0 text-danger">
                                <small>Compra 1 y Obtén $4.00 de Descuento</small>
                            </div>

                            <!-- img -->
                            <a href="#!"> <img src="<?php echo BASE_URL; ?>assets/img/products/product-img-3.jpg"
                                    alt="Plantilla de Ecommerce de Alimentos" class="mb-3 img-fluid"></a>
                            <!-- action btn -->
                            <div class="product-action-btn">
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista Rápida"></i></a>
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>

                        </div>
                        <div class="mb-3"><span class="text-dark">$32</span></div>
                        <!-- title -->
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Chocolate Cadbury 5
                                estrellas</a></h2>
                        <div>
                            <!-- rating -->
                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.7(1,130)</span>
                        </div>
                        <div class="mt-3"><span class="text-uppercase small text-primary">En Stock</span></div>
                        <div class="mt-4">
                            <div class="progress mt-6" style="height: 8px;">
                                <div class="progress-bar bg-gray-400" role="progressbar" style="width: 65%;"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="my-3">
                                <small>Productos disponibles: <span class="text-dark fw-bold">34</span></small>
                            </div>
                        </div>
                        <!-- btn -->
                        <div class="product-fade-block">
                            <div class="d-grid mt-4">
                                <a href="#" class="btn btn-primary rounded-pill">Añadir al carrito</a>
                            </div>
                        </div>

                    </div>
                    <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                </div>
            </div>
            <div class="col mb-lg-0">
                <div class="card card-product-v2 h-100">
                    <div class="card-body position-relative text-center">

                        <div class="text-center position-relative">
                            <div class="position-absolute top-0">
                                <span class="badge bg-info">22%</span>
                            </div>

                            <!-- img -->
                            <a href="#!"> <img src="<?php echo BASE_URL; ?>assets/img/products/product-img-8.jpg"
                                    alt="Plantilla de Ecommerce de Alimentos" class="mb-3 img-fluid"></a>
                            <!-- action btn -->
                            <div class="product-action-btn">
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista Rápida"></i></a>
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>

                        </div>
                        <div class="mb-3"><span class="text-danger">$25</span><span
                                class="text-muted text-decoration-line-through ms-1">$28</span></div>
                        <!-- title -->
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Cereal Kellogg's Special
                                K Original</a></h2>
                        <div>
                            <!-- rating -->
                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.7(1,130)</span>
                        </div>
                        <div class="mt-3"><span class="text-uppercase small text-primary">En Stock</span></div>
                        <div class="mt-4">
                            <div class="progress mt-6" style="height: 8px;">
                                <div class="progress-bar bg-gray-400" role="progressbar" style="width: 95%;"
                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="my-3">
                                <small>Productos disponibles: <span class="text-dark fw-bold">8</span></small>
                            </div>
                        </div>
                        <!-- btn -->
                        <div class="product-fade-block">
                            <div class="d-grid mt-4">
                                <a href="#" class="btn btn-primary rounded-pill">Añadir al carrito</a>
                            </div>
                        </div>

                    </div>
                    <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                </div>
            </div>
            <div class="col mb-lg-0">
                <div class="card card-product-v2 h-100">
                    <div class="card-body position-relative text-center">

                        <div class="text-center position-relative">
                            <div class="position-absolute top-0">
                                <span class="badge bg-info">16%</span>
                            </div>

                            <!-- img -->
                            <a href="#!"> <img src="<?php echo BASE_URL; ?>assets/img/products/product-img-9.jpg"
                                    alt="Plantilla de Ecommerce de Alimentos" class="mb-3 img-fluid"></a>
                            <!-- action btn -->
                            <div class="product-action-btn">
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista Rápida"></i></a>
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>

                        </div>
                        <div class="mb-3"><span class="text-danger">$34</span><span
                                class="text-muted text-decoration-line-through ms-1">$38</span></div>
                        <!-- title -->
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Mezcla para Pancakes
                                Slurrp Farm No Maida Millet</a></h2>
                        <div>
                            <!-- rating -->
                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(212)</span>
                        </div>

                        <div class="mt-3"><span class="text-uppercase small text-primary">En Stock</span></div>
                        <div class="mt-4">
                            <div class="progress mt-6" style="height: 8px;">
                                <div class="progress-bar bg-gray-400" role="progressbar" style="width: 78%;"
                                    aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="my-3">
                                <small>Productos disponibles: <span class="text-dark fw-bold">67</span></small>
                            </div>
                        </div>
                        <!-- btn -->
                        <div class="product-fade-block">
                            <div class="d-grid mt-4">
                                <a href="#" class="btn btn-primary rounded-pill">Añadir al carrito</a>
                            </div>
                        </div>

                    </div>
                    <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                </div>
            </div>
            <div class="col   mb-lg-0">
                <div class="card card-product-v2 h-100">
                    <div class="card-body position-relative text-center">

                        <div class="text-center position-relative ">
                            <div class=" position-absolute top-0">
                                <span class="badge bg-info">25%</span>
                            </div>

                            <!-- img -->
                            <a href="#!"> <img src="<?php echo BASE_URL; ?>assets/img/products/product-img-2.jpg"
                                    alt="Plantilla de Ecommerce de Productos de Alimentos" class="mb-3 img-fluid"></a>
                            <!-- action btn -->
                            <div class="product-action-btn">
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista Rápida"></i></a>
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>

                        </div>
                        <div class="mb-3"><span class="text-dark">$15</span>
                        </div>
                        <!-- title -->
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Galletas Digestivas
                                NutriChoice de Britannia</a></h2>
                        <div>
                            <!-- rating -->
                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.4(3,149)</span>
                        </div>
                        <div class="mt-3"><span class="text-uppercase small text-primary">
                                En Stock</span></div>
                        <div class="mt-4">
                            <div class="progress mt-6" style="height: 8px;">
                                <div class="progress-bar bg-gray-400" role="progressbar" style="width: 88%;"
                                    aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="my-3">
                                <small>Productos disponibles: <span class="text-dark fw-bold">12</span></small>
                            </div>
                        </div>
                        <!-- btn -->
                        <div class="product-fade-block">
                            <div class="d-grid mt-4">
                                <a href="#" class="btn btn-primary rounded-pill">Añadir al carrito</a>
                            </div>
                        </div>

                    </div>
                    <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                </div>
            </div>
            <div class="col   mb-lg-0">
                <div class="card card-product-v2 h-100">
                    <div class="card-body position-relative text-center">

                        <div class="text-center position-relative ">
                            <div class=" position-absolute top-0 text-danger">
                                <small>Compra 1 y obtén $4.00 de descuento</small>
                            </div>

                            <!-- img -->
                            <a href="#!"> <img src="<?php echo BASE_URL; ?>assets/img/products/product-img-3.jpg"
                                    alt="Plantilla de Ecommerce de Productos de Alimentos" class="mb-3 img-fluid"></a>
                            <!-- action btn -->
                            <div class="product-action-btn">
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip"
                                        data-bs-html="true" title="Vista Rápida"></i></a>
                                <a href="#!" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Lista de deseos"><i class="bi bi-heart"></i></a>
                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                    title="Comparar"><i class="bi bi-arrow-left-right"></i></a>
                            </div>

                        </div>
                        <div class="mb-3"><span class="text-dark">$32</span>
                        </div>
                        <!-- title -->
                        <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Chocolate Cadbury 5
                                Star</a>
                        </h2>
                        <div>
                            <!-- rating -->
                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.7(1,130)</span>
                        </div>
                        <div class="mt-3"><span class="text-uppercase small text-primary">
                                En Stock</span></div>
                        <div class="mt-4">
                            <div class="progress mt-6" style="height: 8px;">
                                <div class="progress-bar bg-gray-400" role="progressbar" style="width: 65%;"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="my-3">
                                <small>Productos disponibles: <span class="text-dark fw-bold">34</span></small>
                            </div>
                        </div>
                        <!-- btn -->
                        <div class="product-fade-block">
                            <div class="d-grid mt-4">
                                <a href="#" class="btn btn-primary rounded-pill">Añadir al carrito</a>
                            </div>
                        </div>

                    </div>
                    <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                </div>
            </div>


        </div>
</section>


<section class="my-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-6"><img src="<?php echo BASE_URL; ?>assets/img/icons/clock.svg" alt=""></div>
                    <h3 class="h5 mb-3">
                        Comida en 10 minutos
                    </h3>
                    <p>Recibe tu pedido lo antes posible en la puerta de tu casa desde las tiendas de recogida de
                        FreshCart cerca de ti.</p>
                </div>
            </div>
            <div class="col-md-6  col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-6"><img src="<?php echo BASE_URL; ?>assets/img/icons/gift.svg" alt=""></div>
                    <h3 class="h5 mb-3">Mejores Precios y Ofertas</h3>
                    <p>Precios más bajos que en tu supermercado local, con grandes ofertas de reembolso. Obtén los
                        mejores precios y ofertas.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-6"><img src="<?php echo BASE_URL; ?>assets/img/icons/package.svg" alt=""></div>
                    <h3 class="h5 mb-3">Amplia Variedad</h3>
                    <p>Elige entre más de 5000 productos en categorías como alimentos, cuidado personal, hogar,
                        panadería, vegetales y no vegetales, entre otros.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-6"><img src="<?php echo BASE_URL; ?>assets/img/icons/refresh-cw.svg" alt=""></div>
                    <h3 class="h5 mb-3">Devoluciones Fáciles</h3>
                    <p>¿No estás satisfecho con un producto? Devuélvelo en tu puerta y obtén un reembolso en pocas
                        horas. Sin preguntas, nuestra <a href="#!">política</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body p-8">
                <div class="d-flex justify-content-end">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">

                            <div class="zoom" onmousemove="zoom(event)"
                                style="background-image: url(<?php echo BASE_URL; ?>assets/img/products/product-single-img-1.jpg)">
                                <!-- img -->
                                <img src="<?php echo BASE_URL; ?>assets/img/products/product-single-img-1.jpg"
                                    alt="">
                            </div>


                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="background-image: url(<?php echo BASE_URL; ?>assets/img/products/product-single-img-2.jpg)">
                                    <!-- img -->
                                    <img src="<?php echo BASE_URL; ?>assets/img/products/product-single-img-2.jpg"
                                        alt="">
                                </div>

                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="background-image: url(<?php echo BASE_URL; ?>assets/img/products/product-single-img-3.jpg)">
                                    <!-- img -->
                                    <img src="<?php echo BASE_URL; ?>assets/img/products/product-single-img-3.jpg"
                                        alt="">
                                </div>

                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="background-image: url(<?php echo BASE_URL; ?>assets/img/products/product-single-img-4.jpg)">
                                    <!-- img -->
                                    <img src="<?php echo BASE_URL; ?>assets/img/products/product-single-img-4.jpg"
                                        alt="">
                                </div>
                            </div>

                        </div>
                        <!-- herramientas del producto -->
                        <div class="product-tools">
                            <div class="thumbnails row g-3" id="productModalThumbnails">
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/product-single-img-1.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/product-single-img-2.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/product-single-img-3.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/product-single-img-4.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ps-md-8">
                            <a href="#!" class="mb-4 d-block">Galletas de Panadería</a>
                            <h2 class="mb-1 h1">Napolitanke de Avellanas</h2>
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
                                    <a class="btn btn-light" href="pages/shop-wishlist.html" data-bs-toggle="tooltip"
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
                                            <td><small>Envío en 1 día. <span class="text-muted">(Recogida gratuita
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