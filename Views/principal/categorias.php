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
                            <a>Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Tienda</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- section -->
<section class="mt-8 mb-lg-14 mb-8">
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-lg-12">
                <!-- page header -->
                <div class="card mb-4 bg-light border-0">
                    <!-- card body -->
                    <div class="card-body p-9">
                        <!-- title -->
                        <h1 class="mb-0">Snacks & Munchies</h1>
                    </div>
                </div>
                <!-- list icon -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- title -->
                    <div>
                        <p class="mb-3 mb-md-0"> <span class="text-dark">24 </span> Products found </p>
                    </div>
                    <!-- icon -->
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="shop-list.html" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
                        <a href="#" class="text-muted me-3"><i class="bi bi-grid"></i></a>
                        <a href="shop-grid.html" class="me-3 active"><i class="bi bi-grid-3x3-gap"></i></a>
                        <!-- select option -->
                        <div class="me-2"><select class="form-select" aria-label="Default select example">
                                <option selected>Show: 50</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select></div> <!-- select option -->
                        <div><select class="form-select" aria-label="Default select example">
                                <option selected>Sort by: Featured</option>
                                <option value="Low to High">Price: Low to High</option>
                                <option value="High to Low"> Price: High to Low</option>
                                <option value="Release Date"> Release Date</option>
                                <option value="Avg. Rating"> Avg. Rating</option>

                            </select></div>
                    </div>
                </div>
                <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2">
                    <?php foreach ($data['productos'] as $producto) { ?>
                    <div class="col">
                        <!-- card product -->
                        <div class="card card-product">
                            <div class="card-body">

                                <!-- badge -->
                                <div class="text-center position-relative ">
                                    <div class=" position-absolute top-0 start-0">
                                        <span class="badge bg-danger">Sale</span>
                                    </div>
                                    <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                                        <!-- img --><img src="<?php echo $producto['imagen']; ?>"
                                            alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                    </a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <!-- heading -->
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Snack &
                                            Munchies</small></a></div>
                                <h2 class="fs-6"><a
                                        href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"
                                        class="text-inherit text-decoration-none"><?php echo $producto['nombre']; ?></a>
                                </h2>
                                <div>

                                    <!-- rating --><small class="text-warning"> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span
                                        class="text-muted small">4.5(149)</span>
                                </div>
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span
                                            class="text-dark"><?php echo MONEDA . ' ' . $producto['precio']; ?></span>
                                        <span class="text-decoration-line-through text-muted">$24</span>
                                    </div>
                                    <!-- btn -->
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Carrito</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- row -->
                <div class="row mt-8">
                    <div class="col">
                        <!-- Nav -->
                        <nav>
                            <ul class="pagination">
                                <!-- Validación para botón "Anterior" -->
                                <?php
                $anterior = $data['pagina'] - 1;
                $siguiente = $data['pagina'] + 1;
                $url = BASE_URL . 'principal/categorias/' . $data['id_categoria'];

                // Botón Anterior
                if ($data['pagina'] > 1) {
                    echo '<li class="page-item">
                            <a class="page-link mx-1 rounded-3 text-body" href="' . $url . '/' . $anterior . '" aria-label="Previous">
                                <i class="feather-icon icon-chevron-left"></i>
                            </a>
                          </li>';
                } else {
                    echo '<li class="page-item disabled">
                            <a class="page-link mx-1 rounded-3" href="#" aria-label="Previous">
                                <i class="feather-icon icon-chevron-left"></i>
                            </a>
                          </li>';
                }

                // Páginas intermedias
                for ($i = 1; $i <= $data['total']; $i++) {
                    $active = $i == $data['pagina'] ? 'active' : 'text-body';
                    echo '<li class="page-item">
                            <a class="page-link mx-1 rounded-3 ' . $active . '" href="' . $url . '/' . $i . '">' . $i . '</a>
                          </li>';
                }

                // Botón Siguiente
                if ($data['total'] >= $siguiente) {
                    echo '<li class="page-item">
                            <a class="page-link mx-1 rounded-3 text-body" href="' . $url . '/' . $siguiente . '" aria-label="Next">
                                <i class="feather-icon icon-chevron-right"></i>
                            </a>
                          </li>';
                } else {
                    echo '<li class="page-item disabled">
                            <a class="page-link mx-1 rounded-3" href="#" aria-label="Next">
                                <i class="feather-icon icon-chevron-right"></i>
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




<?php include_once 'Views/template/footer_principal.php'; ?>