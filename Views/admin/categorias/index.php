<?php include_once 'Views/template/header_Admin.php'; ?>


<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>
                        Mostrar Categoría</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="assets-admin//svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Comercio Electrónico</li>
                        <li class="breadcrumb-item active">Categoría</li>
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
                                <div class="light-box">
                                    <a data-bs-toggle="collapse" href="#collapseProduct" role="button"
                                        aria-expanded="false" aria-controls="collapseProduct">
                                        <i class="filter-icon show" data-feather="filter"></i>
                                        <i class="icon-close filter-close hide"></i>
                                    </a>
                                </div>
                                <button class="btn btn-primary mb-2" type="button" id="nuevo_registro"
                                    data-bs-toggle="modal" data-bs-target="#nuevoModal">
                                    <i class="fa fa-plus"></i> Añadir Categoría
                                </button>

                            </div>
                            <div class="collapse" id="collapseProduct">
                                <div class="card card-body list-product-body">
                                    <div
                                        class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">
                                        <div class="col">
                                            <select class="form-select" aria-label="Ejemplo de selección por defecto">
                                                <option selected="">Elegir Producto</option>
                                                <option value="1">Apple iPhone 13 Pro</option>
                                                <option value="2">Silla de Madera</option>
                                                <option value="3">Mouse Inalámbrico Compacto M185</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Ejemplo de selección por defecto">
                                                <option selected="">Elegir Categoría</option>
                                                <option value="1">Muebles</option>
                                                <option value="2">Gadgets Inteligentes</option>
                                                <option value="3">Electrónica</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Ejemplo de selección por defecto">
                                                <option selected="">Elegir Subcategoría</option>
                                                <option value="1">Teléfonos Inteligentes</option>
                                                <option value="2">Relojes Inteligentes</option>
                                                <option value="3">Auriculares Inalámbricos</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Ejemplo de selección por defecto">
                                                <option selected="">Estado</option>
                                                <option value="1">Agotado</option>
                                                <option value="2">En Stock</option>
                                                <option value="3">Preventa</option>
                                                <option value="4">Stock Limitado</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Ejemplo de selección por defecto">
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
                                style="width: 100%;" id="tblCategorias">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th></th>
                                    </tr>
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


<div id="nuevoModal" class="modal fade" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalTitle">Registrar Nueva Categoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="frmRegistro" novalidate>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="imagen_actual" name="imagen_actual">

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Nombre de la Categoría</label>
                        <input id="categoria" class="form-control" type="text" name="categoria"
                            placeholder="Escribe el nombre de la categoría" required>
                        <div class="invalid-feedback">El nombre de la categoría es obligatorio.</div>
                    </div>

                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen (Opcional)</label>
                        <input id="imagen" class="form-control" type="file" name="imagen" accept="image/*">
                        <small class="text-muted">Formatos permitidos: JPG, PNG, GIF.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" id="btnAccion">Registrar</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include_once 'Views/template/footer_Admin.php'; ?>

<script src="<?php echo BASE_URL . 'assets/js/modulos/categorias.js'; ?>"></script>

</body>

</html>