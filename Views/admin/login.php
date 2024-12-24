<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Riho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Riho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo BASE_URL ;?>assets-admin/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo BASE_URL ;?>assets-admin/images/favicon.png" type="image/x-icon">
    <title>Login</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo BASE_URL ;?>assets-admin/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/responsive.css">
</head>

<body>
    <!-- página de inicio de sesión comienza-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href="index.html"><img class="img-fluid for-dark"
                                    src="<?php echo BASE_URL ;?>assets-admin/images/logo/logo.png"
                                    alt="página de inicio de sesión"><img class="img-fluid for-light"
                                    src="<?php echo BASE_URL ;?>assets-admin/images/logo/logo_dark.png"
                                    alt="página de inicio de sesión"></a></div>
                        <div class="login-main">
                            <form class="theme-form" id="formulario">
                                <h4>Iniciar sesión en la cuenta</h4>
                                <p>Ingresa tu correo electrónico y contraseña para iniciar sesión</p>
                                <div class="form-group">
                                    <label class="col-form-label">Dirección de correo electrónico</label>
                                    <input class="form-control" id="email" name="email" required=""
                                        value="naikergomez0123@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Contraseña</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" id="clave" name="clave" required="" value="12345">
                                        <div class="show-hide"> <span class="show"></span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Checkbox con espacio inferior -->
                                    <div class="form-check mb-3">
                                        <input id="checkbox1" type="checkbox" class="form-check-input">
                                        <label class="form-check-label text-muted" for="checkbox1">Recordar
                                            contraseña</label>
                                    </div>

                                    <!-- Link con margen inferior -->
                                    <a class="link mb-3 d-block" href="forget-password.html">¿Olvidaste tu
                                        contraseña?</a>

                                    <!-- Botón con margen superior -->
                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-primary btn-block w-100">Iniciar
                                            sesión</button>
                                    </div>
                                </div>

                                <!-- Texto separado con margen superior -->
                                <h6 class="text-muted mt-4 text-center">O inicia sesión con</h6>

                                <!-- Botones sociales con separación -->
                                <div class="social mt-4 text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-light me-2" href="https://www.linkedin.com/login"
                                            target="_blank">
                                            <i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn
                                        </a>
                                        <a class="btn btn-light" href="https://www.facebook.com/" target="_blank">
                                            <i class="txt-fb" data-feather="facebook"></i> Facebook
                                        </a>
                                    </div>
                                </div>


                                <p class="mt-4 mb-0 text-center">¿No tienes cuenta?<a class="ms-2"
                                        href="sign-up.html">Crear cuenta</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- último jquery-->
        <script src="<?php echo BASE_URL ;?>assets-admin/js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="<?php echo BASE_URL ;?>assets-admin/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- icono de pluma js-->
        <script src="<?php echo BASE_URL ;?>assets-admin/js/icons/feather-icon/feather.min.js"></script>
        <script src="<?php echo BASE_URL ;?>assets-admin/js/icons/feather-icon/feather-icon.js"></script>
        <!-- js de barra de desplazamiento-->
        <!-- Sidebar jquery-->
        <script src="<?php echo BASE_URL ;?>assets-admin/js/config.js"></script>

        <script src="<?php echo BASE_URL ;?>assets-admin/js/script.js"></script>

        <script>
        const base_url = '<?php echo BASE_URL ;?>';
        </script>

        <script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
        <script src="<?php echo BASE_URL ;?>assets/js/modulos/login.js"></script>
    </div>

</body>

</html>