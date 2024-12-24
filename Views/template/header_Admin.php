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
    <title>Panel de Administración</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ;?>assets-admin/css/vendors/animate.css">
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
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader4"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Riho .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Cargando..... </span>
                                </div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"> </div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"> <a href="index.html"><img class="img-fluid for-light"
                                src="<?php echo BASE_URL ;?>assets-admin/images/logo/logo_dark.png"
                                alt="logo-light"><img class="img-fluid for-dark"
                                src="<?php echo BASE_URL ;?>assets-admin/images/logo/logo.png" alt="logo-dark"></a>
                    </div>
                    <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i>
                    </div>
                </div>
                <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
                    <div> <a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
                        <div class="d-flex align-items-center gap-2 ">
                            <h4 class="f-w-600">Bienvenido Naiker</h4><img class="mt-0"
                                src="<?php echo BASE_URL ;?>assets-admin/images/hand.gif" alt="hand-gif">
                        </div>
                    </div>
                    <div class="welcome-content d-xl-block d-none"><span class="text-truncate col-12">Esto es lo que está sucediendo con
                              tu tienda hoy.</span></div>
                </div>
                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li class="d-md-block d-none">
                            <div class="form search-form mb-0">
                                <div class="input-group"><span class="input-icon">
                                        <svg>
                                            <use
                                                href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#search-header">
                                            </use>
                                        </svg>
                                        <input class="w-100" type="search" placeholder="Search"></span></div>
                            </div>
                        </li>
                        <li class="d-md-none d-block">
                            <div class="form search-form mb-0">
                                <div class="input-group"> <span class="input-show">
                                        <svg id="searchIcon">
                                            <use
                                                href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#search-header">
                                            </use>
                                        </svg>
                                        <div id="searchInput">
                                            <input type="search" placeholder="Search">
                                        </div>
                                    </span></div>
                            </div>
                        </li>
                        <li class="onhover-dropdown">
                            <svg>
                                <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#star"></use>
                            </svg>
                            <div class="onhover-show-div bookmark-flip">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="front">
                                            <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                            <ul class="bookmark-dropdown">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon"><i
                                                                        data-feather="file-text"></i></div>
                                                                <span>Formulario</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon"><i data-feather="user"></i>
                                                                </div><span>Perfil</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon"><i data-feather="server"></i>
                                                                </div><span>Table</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn"
                                                        href="javascript:void(0)">Add
                                                        New Bookmark</a></li>
                                            </ul>
                                        </div>
                                        <div class="back">
                                            <ul>
                                                <li>
                                                    <div class="bookmark-dropdown flip-back-content">
                                                        <input type="text" placeholder="search...">
                                                    </div>
                                                </li>
                                                <li><a class="f-w-700 d-block flip-back" id="flip-back"
                                                        href="javascript:void(0)">Back</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mode"><i class="moon" data-feather="moon"> </i></div>
                        </li>
                        <li class="onhover-dropdown notification-down">
                            <div class="notification-box">
                                <svg>
                                    <use
                                        href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#notification-header">
                                    </use>
                                </svg><span class="badge rounded-pill badge-secondary">4 </span>
                            </div>
                            <div class="onhover-show-div notification-dropdown">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <div class="common-space">
                                            <h4 class="text-start f-w-600">Notitications</h4>
                                            <div><span>4 Nuevos</span></div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="notitications-bar">
                                            <ul class="nav nav-pills nav-primary p-0" id="pills-tab" role="tablist">
                                                <li class="nav-item p-0"> <a class="nav-link active"
                                                        id="pills-aboutus-tab" data-bs-toggle="pill"
                                                        href="#pills-aboutus" role="tab" aria-controls="pills-aboutus"
                                                        aria-selected="true">Todo(3)</a></li>
                                                <li class="nav-item p-0"> <a class="nav-link" id="pills-blog-tab"
                                                        data-bs-toggle="pill" href="#pills-blog" role="tab"
                                                        aria-controls="pills-blog" aria-selected="false">
                                                        Mensaje</a></li>
                                                <li class="nav-item p-0"> <a class="nav-link" id="pills-contactus-tab"
                                                        data-bs-toggle="pill" href="#pills-contactus" role="tab"
                                                        aria-controls="pills-contactus" aria-selected="false">
                                                        Carrito </a></li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-aboutus"
                                                    role="tabpanel" aria-labelledby="pills-aboutus-tab">
                                                    <div class="user-message">
                                                        <div class="cart-dropdown notification-all">
                                                            <ul>
                                                                <li class="pr-0 pl-0 pb-3 pt-3">
                                                                    <div class="media"><img
                                                                            class="img-fluid b-r-5 me-3 img-60"
                                                                            src="<?php echo BASE_URL ;?>assets-admin/images/other-images/receiver-img.jpg"
                                                                            alt="">
                                                                        <div class="media-body"><a
                                                                                class="f-light f-w-500"
                                                                                href="../template/product.html">Men Blue
                                                                                T-Shirt</a>
                                                                            <div class="qty-box">
                                                                                <div class="input-group"> <span
                                                                                        class="input-group-prepend">
                                                                                        <button
                                                                                            class="btn quantity-left-minus"
                                                                                            type="button"
                                                                                            data-type="minus"
                                                                                            data-field="">-
                                                                                        </button></span>
                                                                                    <input
                                                                                        class="form-control input-number"
                                                                                        type="text" name="quantity"
                                                                                        value="1"><span
                                                                                        class="input-group-prepend">
                                                                                        <button
                                                                                            class="btn quantity-right-plus"
                                                                                            type="button"
                                                                                            data-type="plus"
                                                                                            data-field="">+</button></span>
                                                                                </div>
                                                                            </div>
                                                                            <h6 class="font-primary">$695.00</h6>
                                                                        </div>
                                                                        <div class="close-circle"><a class="bg-danger"
                                                                                href="#"><i data-feather="x"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="user-alerts">
                                                                    <img class="user-image rounded-circle img-fluid me-2"
                                                                        src="<?php echo BASE_URL ;?>assets-admin/images/dashboard/user/5.jpg"
                                                                        alt="usuario" />
                                                                    <div class="user-name">
                                                                        <div>
                                                                            <h6><a class="f-w-500 f-14"
                                                                                    href="../template/user-profile.html">Floyd
                                                                                    Miles</a></h6>
                                                                            <span class="f-light f-w-500 f-12">Señor,
                                                                                ¿puedo eliminar parte del diseño?</span>
                                                                        </div>
                                                                        <div>
                                                                            <svg>
                                                                                <use
                                                                                    href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#more-vertical">
                                                                                </use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="user-alerts">
                                                                    <img class="user-image rounded-circle img-fluid me-2"
                                                                        src="<?php echo BASE_URL ;?>assets-admin/images/dashboard/user/6.jpg"
                                                                        alt="usuario" />
                                                                    <div class="user-name">
                                                                        <div>
                                                                            <h6><a class="f-w-500 f-14"
                                                                                    href="../template/user-profile.html">Dianne
                                                                                    Russell</a></h6>
                                                                            <span class="f-light f-w-500 f-12">Entonces,
                                                                                ¿cuál es mi próximo trabajo?</span>
                                                                        </div>
                                                                        <div>
                                                                            <svg>
                                                                                <use
                                                                                    href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#more-vertical">
                                                                                </use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-blog" role="tabpanel"
                                                    aria-labelledby="pills-blog-tab">
                                                    <div class="notification-card">
                                                        <ul>
                                                            <li
                                                                class="notification d-flex w-100 justify-content-between align-items-center">
                                                                <div
                                                                    class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                                    <div class="user-alerts flex-shrink-0">
                                                                        <img class="rounded-circle img-fluid img-40"
                                                                            src="<?php echo BASE_URL ;?>assets-admin/images/dashboard/user/3.jpg"
                                                                            alt="usuario" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="common-space user-id w-100">
                                                                            <div class="common-space w-100">
                                                                                <a class="f-w-500 f-12"
                                                                                    href="../template/private-chat.html">Robert
                                                                                    D. Hambly</a>
                                                                            </div>
                                                                        </div>
                                                                        <div><span class="f-w-500 f-light f-12">Hola
                                                                                Señorita... 😊</span></div>
                                                                    </div>
                                                                    <span class="f-light f-w-500 f-12">44 seg</span>
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="notification d-flex w-100 justify-content-between align-items-center">
                                                                <div
                                                                    class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                                    <div class="user-alerts flex-shrink-0">
                                                                        <img class="rounded-circle img-fluid img-40"
                                                                            src="<?php echo BASE_URL ;?>assets-admin/images/dashboard/user/7.jpg"
                                                                            alt="usuario" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="common-space user-id w-100">
                                                                            <div class="common-space w-100">
                                                                                <a class="f-w-500 f-12"
                                                                                    href="../template/private-chat.html">Courtney
                                                                                    C. Strang</a>
                                                                            </div>
                                                                        </div>
                                                                        <div><span class="f-w-500 f-light f-12">¡Te
                                                                                deseo un feliz cumpleaños querido/a!
                                                                                🥳🎊</span></div>
                                                                    </div>
                                                                    <span class="f-light f-w-500 f-12">52 min</span>
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="notification d-flex w-100 justify-content-between align-items-center">
                                                                <div
                                                                    class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                                    <div class="user-alerts flex-shrink-0">
                                                                        <img class="rounded-circle img-fluid img-40"
                                                                            src="<?php echo BASE_URL ;?>assets-admin/images/dashboard/user/5.jpg"
                                                                            alt="usuario" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="common-space user-id w-100">
                                                                            <div class="common-space w-100">
                                                                                <a class="f-w-500 f-12"
                                                                                    href="../template/private-chat.html">Raye
                                                                                    T. Sipes</a>
                                                                            </div>
                                                                        </div>
                                                                        <div><span class="f-w-500 f-light f-12">¡Hola
                                                                                querido/a! Este tema es muy
                                                                                bonito</span></div>
                                                                    </div>
                                                                    <span class="f-light f-w-500 f-12">48 min</span>
                                                                </div>
                                                            </li>
                                                            <li
                                                                class="notification d-flex w-100 justify-content-between align-items-center">
                                                                <div
                                                                    class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                                    <div class="user-alerts flex-shrink-0">
                                                                        <img class="rounded-circle img-fluid img-40"
                                                                            src="<?php echo BASE_URL ;?>assets-admin/images/dashboard/user/6.jpg"
                                                                            alt="usuario" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="common-space user-id w-100">
                                                                            <div class="common-space w-100">
                                                                                <a class="f-w-500 f-12"
                                                                                    href="../template/private-chat.html">Henry
                                                                                    S. Miller</a>
                                                                            </div>
                                                                        </div>
                                                                        <div><span class="f-w-500 f-light f-12">Hoy eres
                                                                                más viejo/a que ayer, ¡feliz
                                                                                cumpleaños!</span></div>
                                                                    </div>
                                                                    <span class="f-light f-w-500 f-12">3 min</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="pills-contactus" role="tabpanel"
                                                    aria-labelledby="pills-contactus-tab">
                                                    <div class="cart-dropdown mt-4">
                                                        <ul>
                                                            <li class="pr-0 pl-0 pb-3">
                                                                <div class="media">
                                                                    <img class="img-fluid b-r-5 me-3 img-60"
                                                                        src="<?php echo BASE_URL ;?>assets-admin/images/other-images/cart-img.jpg"
                                                                        alt="">
                                                                    <div class="media-body">
                                                                        <a class="f-light f-w-500"
                                                                            href="../template/product.html">Silla de
                                                                            muebles para el hogar</a>
                                                                        <div class="qty-box">
                                                                            <div class="input-group">
                                                                                <span class="input-group-prepend">
                                                                                    <button
                                                                                        class="btn quantity-left-minus"
                                                                                        type="button" data-type="minus"
                                                                                        data-field="">-</button>
                                                                                </span>
                                                                                <input class="form-control input-number"
                                                                                    type="text" name="quantity"
                                                                                    value="1">
                                                                                <span class="input-group-prepend">
                                                                                    <button
                                                                                        class="btn quantity-right-plus"
                                                                                        type="button" data-type="plus"
                                                                                        data-field="">+</button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <h6 class="font-primary">$500</h6>
                                                                    </div>
                                                                    <div class="close-circle">
                                                                        <a class="bg-danger" href="#"><i
                                                                                data-feather="x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="pr-0 pl-0 pb-3 pt-3">
                                                                <div class="media">
                                                                    <img class="img-fluid b-r-5 me-3 img-60"
                                                                        src="<?php echo BASE_URL ;?>assets-admin/images/other-images/receiver-img.jpg"
                                                                        alt="">
                                                                    <div class="media-body">
                                                                        <a class="f-light f-w-500"
                                                                            href="../template/product.html">Camiseta
                                                                            azul de mezcla de algodón para hombres</a>
                                                                        <div class="qty-box">
                                                                            <div class="input-group">
                                                                                <span class="input-group-prepend">
                                                                                    <button
                                                                                        class="btn quantity-left-minus"
                                                                                        type="button" data-type="minus"
                                                                                        data-field="">- </button>
                                                                                </span>
                                                                                <input class="form-control input-number"
                                                                                    type="text" name="quantity"
                                                                                    value="1">
                                                                                <span class="input-group-prepend">
                                                                                    <button
                                                                                        class="btn quantity-right-plus"
                                                                                        type="button" data-type="plus"
                                                                                        data-field="">+</button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <h6 class="font-primary">$695.00</h6>
                                                                    </div>
                                                                    <div class="close-circle">
                                                                        <a class="bg-danger" href="#"><i
                                                                                data-feather="x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="mb-3 total">
                                                                <a href="../template/checkout.html">
                                                                    <h6 class="mb-0">
                                                                        Total del pedido: <span
                                                                            class="f-right">$1195.00</span>
                                                                    </h6>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-footer pb-0 pr-0 pl-0">
                                                    <div class="text-center">
                                                        <a class="f-w-700" href="private-chat.html">
                                                            <button class="btn btn-primary" type="button"
                                                                title="btn btn-primary">Ver todo</button>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown">
                            <div class="media profile-media">
                                <img class="b-r-10"
                                    src="<?php echo BASE_URL ;?>assets-admin/images/dashboard/profile.png" alt="">
                                <div class="media-body d-xxl-block d-none box-col-none">
                                    <div class="d-flex align-items-center gap-2">
                                        <span>Naiker Gomez </span><i class="middle fa fa-angle-down"> </i>
                                    </div>
                                    <p class="mb-0 font-roboto">Administrador</p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="user-profile.html"><i data-feather="user"></i><span>Mi Perfil</span></a>
                                </li>
                                <li><a href="letter-box.html"><i data-feather="mail"></i><span>Bandeja de
                                            Entrada</span></a></li>
                                <li><a href="edit-profile.html"><i
                                            data-feather="settings"></i><span>Configuración</span></a></li>
                                <li><a class="btn btn-pill btn-outline-primary btn-sm" href="login.html">Cerrar
                                        Sesión</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details"> 
            <div class="ProfileCard-realName">{{name}}</div>
            </div> 
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" data-layout="stroke-svg">
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                            src="<?php echo BASE_URL ;?>assets-admin/images/logo/logo.png" alt=""></a>
                    <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                    </div>
                </div>
                <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                            src="<?php echo BASE_URL ;?>assets-admin/images/logo/logo-icon.png" alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <a href="index.html">
                                    <img class="img-fluid"
                                        src="<?php echo BASE_URL ;?>assets-admin/images/logo/logo-icon.png" alt="">
                                </a>
                                <div class="mobile-back text-end">
                                    <span>Regresar</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li class="pin-title sidebar-main-title">
                                <div>
                                    <h6>Fijados</h6>
                                </div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan-1">General</h6>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-home">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-home">
                                        </use>
                                    </svg><span class="lan-3">Panel de Control</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="index.html">Predeterminado</a></li>
                                    <li><a href="dashboard-02.html">Comercio Electrónico</a></li>
                                    <li><a href="dashboard-03.html">Proyecto</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-widget">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-widget">
                                        </use>
                                    </svg><span class="lan-6">Widgets</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="general-widget.html">General</a></li>
                                    <li><a href="chart-widget.html">Gráfico</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-layout">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-layout">
                                        </use>
                                    </svg><span class="lan-7">Diseño de Páginas</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="box-layout.html">Caja</a></li>
                                    <li><a href="layout-rtl.html">RTL</a></li>
                                    <li><a href="layout-dark.html">Diseño Oscuro</a></li>
                                    <li><a href="hide-on-scroll.html">Ocultar Navegación al Desplazar</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan-8">Aplicaciones</h6>
                                </div>
                            </li>

                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-project">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-project">
                                        </use>
                                    </svg><span>Proyecto</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="projects.html">Lista de Proyectos</a></li>
                                    <li><a href="projectcreate.html">Crear Nuevo</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                                    href="file-manager.html">
                                    <svg class="stroke-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-file">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-file">
                                        </use>
                                    </svg><span>Administrador de Archivos</span></a>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-ecommerce">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-ecommerce">
                                        </use>
                                    </svg><span>Comercio Electrónico</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="add-products.html">Agregar Productos</a></li>
                                    <li><a href="product.html">Producto</a></li>
                                    <li><a href="category.html">Página de Categorías</a></li>
                                    <li><a href="product-page.html">Página de Productos</a></li>
                                    <li><a href="list-products.html">Lista de Productos</a></li>
                                    <li><a href="payment-details.html">Detalles de Pago</a></li>
                                    <li><a href="order-history.html">Historial de Pedidos</a></li>
                                    <li><a href="cart.html">Carrito</a></li>
                                    <li><a href="list-wish.html">Lista de Deseos</a></li>
                                    <li><a href="checkout.html">Pago</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                                    href="letter-box.html">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-email">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-email">
                                        </use>
                                    </svg><span>Buzón</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="email-application.html">Aplicación de Correo</a></li>
                                    <li><a href="email-compose.html">Redactar Correo</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-chat">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-chat">
                                        </use>
                                    </svg><span>Chat</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="private-chat.html">Chat Privado</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-user">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-user">
                                        </use>
                                    </svg><span>Usuarios</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="user-profile.html">Perfil de Usuario</a></li>
                                    <li><a href="edit-profile.html">Editar Usuario</a></li>
                                </ul>
                            </li>

                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="bookmark.html">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-bookmark">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-bookmark">
                                        </use>
                                    </svg><span>Marcadores</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="contacts.html">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-contact">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-contact">
                                        </use>
                                    </svg><span>Contactos</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="task.html">
                                    <svg class="stroke-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-task">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-task">
                                        </use>
                                    </svg><span>Tareas</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="calendar-basic.html">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-calendar">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-calender">
                                        </use>
                                    </svg><span>Calendario</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="social-app.html">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-social">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-social">
                                        </use>
                                    </svg><span>Aplicación Social</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="to-do.html">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-to-do">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-to-do">
                                        </use>
                                    </svg><span>Lista de Tareas</span></a></li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Páginas</h6>
                                </div>
                            </li>

                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="landing-page.html">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-landing-page">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-landing-page">
                                        </use>
                                    </svg><span>Página de aterrizaje</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="internationalization.html">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-internationalization">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-internationalization">
                                        </use>
                                    </svg><span>Internacionalización</span></a></li>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Varios</h6>
                                </div>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-blog">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-blog">
                                        </use>
                                    </svg><span>Blog</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="blog.html">Detalles del blog</a></li>
                                    <li><a href="blog-single.html">Blog individual</a></li>
                                    <li><a href="add-post.html">Agregar publicación</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title link-nav" href="faq.html">
                                    <svg class="stroke-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-faq">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-faq">
                                        </use>
                                    </svg><span>Preguntas frecuentes</span></a></li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-job-search">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-job-search">
                                        </use>
                                    </svg><span>Búsqueda de empleo</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="job-cards-view.html">Vista en tarjetas</a></li>
                                    <li><a href="job-list-view.html">Vista en lista</a></li>
                                    <li><a href="job-details.html">Detalles del empleo</a></li>
                                    <li><a href="job-apply.html">Aplicar</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-learning">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use
                                            href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-learning">
                                        </use>
                                    </svg><span>Aprendizaje</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="learning-list-view.html">Lista de aprendizaje</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-maps">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#fill-maps">
                                        </use>
                                    </svg><span>Mapas</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="map-js.html">Mapas JS</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </div>