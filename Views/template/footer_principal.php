<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
        <div class="text-start">
            <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Carrito de Compras</h5>
            <small>Ubicación en 382480</small>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>

    <div class="offcanvas-body">

        <div class="alert alert-danger" role="alert">
            ¡Tienes envío GRATIS! ¡Comienza el proceso de compra ahora!
        </div>

        <div>
            <div class="py-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-3 px-0 border-top">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="<?php echo BASE_URL; ?>assets/img/products/product-img-1.jpg" alt="Ecommerce"
                                    class="img-fluid">
                            </div>
                            <div class="col-5">
                                <h6 class="mb-0">Plátano Orgánico</h6>
                                <span><small class="text-muted">.98 / lb</small></span>
                                <div class="mt-2 small"> <a href="#!" class="text-decoration-none"> <span class="me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg></span>Eliminar</a></div>
                            </div>
                            <div class="col-3">
                                <div class="input-group  flex-nowrap justify-content-center  ">
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
                            <div class="col-2 text-end">
                                <span class="fw-bold">$35.00</span>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
            <div class="d-grid">

                <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="submit">
                    Ir a Pagar <span class="fw-bold">$120.00</span></button>
            </div>
        </div>
    </div>

</div>


















<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Iniciar sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de inicio de sesión -->
                <div id="loginForm">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Introduce tu correo electrónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Introduce tu contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                        <hr>
                        <!-- Botón Google -->
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-danger">
                                <i class="bi bi-google me-2"></i> Iniciar sesión con Google
                            </button>
                        </div>
                        <br>
                        <!-- Botón LinkedIn -->
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-primary">
                                <i class="bi bi-linkedin me-2"></i> Iniciar sesión con LinkedIn
                            </button>
                        </div>


                    </form>
                </div>

                <!-- Formulario de registro -->
                <div id="signupForm" class="d-none">
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Introduce tu nombre"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Introduce tu correo electrónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Introduce tu contraseña" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="confirmPassword"
                                placeholder="Confirma tu contraseña" required>
                        </div>
                        <div class="form-text mb-3">
                            Al registrarte, aceptas nuestros <a href="#">Términos de servicio</a> y <a href="#">Política
                                de privacidad</a>.
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                        <hr>
                        <!-- Botón Google -->
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-danger">
                                <i class="bi bi-google me-2"></i> Registrate con Google
                            </button>
                        </div>
                        <br>
                        <!-- Botón LinkedIn -->
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-primary">
                                <i class="bi bi-linkedin me-2"></i> Registrate con LinkedIn
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Formulario de verificación -->
                <div id="verificationForm" class="d-none">
                    <form>
                        <div class="mb-3">
                            <label for="verificationCode" class="form-label">Código de verificación</label>
                            <input type="text" class="form-control" id="verificationCode"
                                placeholder="Introduce el código" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Verificar</button>
                    </form>
                </div>
            </div>

            <div class="modal-footer border-0 justify-content-center">
                <div id="toggleLink">
                    ¿No tienes cuenta? <a href="#" onclick="toggleForm()">Crea una</a>
                </div>
                <div id="backLink" class="d-none">
                    ¿Ya tienes cuenta? <a href="#" onclick="toggleForm()">Inicia sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Lógica para alternar entre los formularios
function toggleForm() {
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    const verificationForm = document.getElementById('verificationForm');
    const toggleLink = document.getElementById('toggleLink');
    const backLink = document.getElementById('backLink');

    // Alternar entre el formulario de login y el de registro
    if (loginForm.classList.contains('d-none')) {
        loginForm.classList.remove('d-none');
        signupForm.classList.add('d-none');
        toggleLink.classList.remove('d-none');
        backLink.classList.add('d-none');
    } else {
        loginForm.classList.add('d-none');
        signupForm.classList.remove('d-none');
        toggleLink.classList.add('d-none');
        backLink.classList.remove('d-none');
    }

    // Alternar entre el formulario de registro y el de verificación
    if (signupForm.classList.contains('d-none') && verificationForm.classList.contains('d-none')) {
        verificationForm.classList.remove('d-none');
        signupForm.classList.add('d-none');
    }
}
</script>










<!-- footer -->
<div class="footer">
    <div class="container">
        <footer class="row g-4 py-4">
            <div class="col-12 col-md-12 col-lg-4">
                <h6 class="mb-4">Categorías</h6>
                <div class="row">
                    <div class="col-6">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Verduras y
                                    Frutas</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link"> Desayuno y
                                    comida instantánea</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link"> Panadería y
                                    Galletas</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Harina, arroz y
                                    legumbres</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Salsas y
                                    untables</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link"> Orgánicos y
                                    gourmet</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link"> Cuidado del
                                    bebé</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Esenciales de
                                    limpieza</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Cuidado
                                    personal</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Lácteos, pan y
                                    huevos</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link"> Bebidas frías y
                                    jugos</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link"> Té, café y
                                    bebidas</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Especias,
                                    aceites y más</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Pollo, carne y
                                    pescado</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link"> Esquina de
                                    paan</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Farmacia y
                                    bienestar</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Hogar y
                                    oficina</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-grid.html" class="nav-link">Cuidado de
                                    mascotas</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-12 col-lg-8">
                <div class="row g-4">
                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">Conócenos</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="pages/about.html" class="nav-link">Empresa</a></li>
                            <li class="nav-item mb-2"><a href="pages/about.html" class="nav-link">Acerca de</a></li>
                            <li class="nav-item mb-2"><a href="pages/blog.html" class="nav-link">Blog</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Centro de ayuda</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Nuestros valores</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">Para consumidores</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Pagos</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Envíos</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Devoluciones de productos</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Preguntas frecuentes</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-shop-checkout.html" class="nav-link">Pago en
                                    tienda</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">Hazte comprador</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Oportunidades para compradores</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Hazte comprador</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Ganancias</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas y guías</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Nuevos minoristas</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">Programas de Freshcart</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Programas de Freshcart</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Tarjetas de regalo</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Promociones y cupones</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Publicidad de Freshcart</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Carreras</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>



        <div class="border-top py-4">
            <div class="row align-items-center">
                <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item text-dark">Socios de pago</li>
                        <li class="list-inline-item">
                            <a href="#!"><img src="<?php echo BASE_URL; ?>assets/img/payment/amazonpay.svg" alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><img src="<?php echo BASE_URL; ?>assets/img/payment/american-express.svg"
                                    alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><img src="<?php echo BASE_URL; ?>assets/img/payment/mastercard.svg" alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><img src="<?php echo BASE_URL; ?>assets/img/payment/paypal.svg" alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><img src="<?php echo BASE_URL; ?>assets/img/payment/visa.svg" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 mt-4 mt-md-0">
                    <ul class="list-inline mb-0 text-lg-end text-center">
                        <li class="list-inline-item mb-2 mb-md-0 text-dark">Reciba entregas con Mercado Express</li>
                        <li class="list-inline-item ms-4">
                            <a href="#!"> <img src="<?php echo BASE_URL; ?>assets/img/appbutton/appstore-btn.svg" alt=""
                                    style="width: 140px;"></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"> <img src="<?php echo BASE_URL; ?>assets/img/appbutton/googleplay-btn.svg"
                                    alt="" style="width: 140px;"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-top py-4">
            <div class="row align-items-center">
                <div class="col-md-6"><span class="small text-muted">Copyright 2025 © Mercado Express. Sistema Naiker.
                        Todos los derechos reservados. Powered by Brayan.
                    </span></div>
                <div class="col-md-6">
                    <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
                        <li class="list-inline-item text-muted">Siguenos en</li>
                        <li class="list-inline-item me-1">
                            <a href="#!" class="icon-shape icon-sm social-links"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a>
                        </li>
                        <li class="list-inline-item me-1">
                            <a href="#!" class="icon-shape icon-sm social-links"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!" class="icon-shape icon-sm social-links"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-instagram"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Javascript-->
<!-- Libs JS -->
<script src="<?php echo BASE_URL; ?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/slick-carousel/slick/slick.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/wnumb/wNumb.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/rater-js/index.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/prismjs/prism.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js">
</script>
<script src="<?php echo BASE_URL; ?>assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>

<!-- Theme JS -->
<script src="<?php echo BASE_URL; ?>assets/js/theme.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
const base_url = '<?php echo BASE_URL; ?>';

function alertaPerzanalizada(mensaje, type, titulo = '') {
    toastr[type](mensaje, titulo);

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
}
</script>

<script src="<?php echo BASE_URL ;?>assets/js/carrito.js"></script>

</body>

</html>