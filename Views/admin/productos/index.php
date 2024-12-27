<?php include_once 'views/template/header_Admin.php'; ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>
                        Lista de productos</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Comercio Electrónico</li>
                        <li class="breadcrumb-item active">Lista de productos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicia Container-fluid -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="list-product-header">
                            <div>
                                <div class="light-box"><a data-bs-toggle="collapse" href="#collapseProduct"
                                        role="button" aria-expanded="false" aria-controls="collapseProduct"><i
                                            class="filter-icon show" data-feather="filter"></i><i
                                            class="icon-close filter-close hide"></i></a></div><a
                                    class="btn btn-primary" href="<?php echo BASE_URL . 'productos/registro'; ?>"><i class="fa fa-plus"></i>Añadir
                                    Producto</a>
                            </div>
                            <div class="collapse" id="collapseProduct">
                                <div class="card card-body list-product-body">
                                    <div
                                        class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">
                                        <div class="col">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Seleccionar producto</option>
                                                <option value="1">Apple iPhone 13 Pro</option>
                                                <option value="2">Silla de madera</option>
                                                <option value="3">Ratón inalámbrico compacto M185</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Seleccionar categoría</option>
                                                <option value="1">Muebles</option>
                                                <option value="2">Gadgets inteligentes</option>
                                                <option value="3">Electrónica</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Seleccionar subcategoría</option>
                                                <option value="1">Teléfonos inteligentes</option>
                                                <option value="2">Relojes inteligentes</option>
                                                <option value="3">Auriculares inalámbricos</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Estado</option>
                                                <option value="1">Agotado</option>
                                                <option value="2">En stock</option>
                                                <option value="3">Preventa</option>
                                                <option value="4">Stock limitado</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Precio</option>
                                                <option value="1">56000.00</option>
                                                <option value="2">19000.00</option>
                                                <option value="3">10000.00</option>
                                                <option value="3">15000.00</option>
                                                <option value="3">99000.00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover align-middle"
                            style="width: 100%;" id="tblProductos">
                                <thead>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Imagen</th>
                                    <th></th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>


<?php include_once 'Views/template/footer_Admin.php'; ?>

<script src="<?php echo BASE_URL . 'assets/js/modulos/productos.js'; ?>"></script>



