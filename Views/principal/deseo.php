<?php include_once 'Views/template/header_principal.php'; ?>

<!-- sección -->
<div class="mt-4">
    <div class="container">
        <!-- fila -->
        <div class="row">
            <!-- columna -->
            <div class="col-12">
                <!-- migas de pan -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#!">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="#!">Tienda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mi Lista de Deseos</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- fila para diseño adicional -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title text-center">Explora tu Lista de Deseos</h4>
                        <p class="card-text text-muted text-center">
                            Organiza tus productos favoritos para una compra fácil y rápida.
                        </p>
                        <div class="text-center mt-3">
                            <a href="#!" class="btn btn-primary">Añadir más productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- sección -->
<section class="my-14 bg-light py-5">
    <div class="container">
        <!-- fila -->
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="mb-8 text-center">
                    <!-- encabezado -->
                    <h1 class="mb-1 text-primary">Mi Lista de Deseos</h1>
                    <p class="text-muted">Hay 5 productos en esta lista de deseos.</p>
                    <hr class="w-50 mx-auto">
                </div>
                <div class="shadow-sm p-4 bg-white rounded">
                    <!-- tabla -->
                    <div class="table-responsive">
                        <table class="table text-nowrap align-middle" id="tableListaDeseo">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
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
</section>

<?php include_once 'Views/template/footer_principal.php'; ?>

<script src="<?php echo BASE_URL . 'assets/js/modulos/listaDeseo.js';?>"></script>