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
            <table class="table text-nowrap align-middle">
              <thead class="table-light">
                <tr>
                  <th>
                    <!-- verificación de formulario -->
                    <div class="form-check">
                      <!-- entrada -->
                      <input class="form-check-input" type="checkbox" value="" id="chechboxOne">
                      <!-- etiqueta -->
                      <label class="form-check-label" for="chechboxOne"></label>
                    </div>
                  </th>
                  <th></th>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle">
                    <!-- verificación de formulario -->
                    <div class="form-check">
                      <!-- entrada -->
                      <input class="form-check-input" type="checkbox" value="" id="chechboxTwo">
                      <!-- etiqueta -->
                      <label class="form-check-label" for="chechboxTwo"></label>
                    </div>
                  </td>
                  <td class="align-middle">
                    <a href="#"><img src="../assets/images/products/product-img-18.jpg"
                        class="img-fluid icon-shape icon-lg rounded-circle" alt=""></a>
                  </td>
                  <td class="align-middle">
                    <div>
                      <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">Banana Orgánica</a></h5>
                      <small class="text-muted">$0.98 / lb</small>
                    </div>
                  </td>
                  <td class="align-middle">$35.00</td>
                  <td class="align-middle"><span class="badge bg-success">En Stock</span></td>
                  <td class="align-middle">
                    <button class="btn btn-primary btn-sm">Añadir al Carrito</button>
                  </td>
                  <td class="align-middle text-center">
                    <a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                      <i class="feather-icon icon-trash-2"></i>
                    </a>
                  </td>
                </tr>
                <!-- Traducción similar para las demás filas -->
                ...
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php include_once 'Views/template/footer_principal.php'; ?>