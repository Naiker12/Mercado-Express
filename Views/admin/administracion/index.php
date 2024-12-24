<?php include_once 'Views/template/header_Admin.php'; ?>


<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>
                        Comercio Electrónico</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#stroke-home">
                                    </use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Panel de control </li>
                        <li class="breadcrumb-item active">Comercio Electrónico</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 box-col-7">
                <div class="card">
                    <div class="card-header sales-chart card-no-border pb-0">
                        <h4>Gráfico de Ventas </h4>
                        <div class="sales-chart-dropdown">
                            <ul class="balance-data">
                                <li> <span class="circle bg-warning"></span><span class="f-light ms-1">Ingresos</span>
                                </li>
                                <li><span class="circle bg-primary"> </span><span class="f-light ms-1">Pedidos</span>
                                </li>
                            </ul>
                            <div class="sales-chart-dropdown-select">
                                <div class="card-header-right-icon online-store">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle dropdown-toggle-store"
                                            id="dropdownMenuButtonToggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">Tienda en Línea</button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButtonToggle" role="menu"><span
                                                class="dropdown-item">Todo </span><span
                                                class="dropdown-item">Empleado</span><span class="dropdown-item">Cliente
                                            </span></div>
                                    </div>
                                </div>
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">Último Año </button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton1" role="menu"><span
                                                class="dropdown-item">Último Mes</span><span
                                                class="dropdown-item">Última
                                                Semana </span><span class="dropdown-item">Hoy </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2 pt-0">
                        <div class="sales-wrapper">
                            <div id="saleschart"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 box-col-5 total-revenue-total-order">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="total-revenue mb-2"> <span>Ingresos Totales</span><a href="index.html">Ver
                                        Informe</a>
                                </div>
                                <h3 class="f-w-600">$0 </h3>
                                <div class="total-chart">
                                    <div class="data-grow d-flex gap-2"><i class="font-primary"
                                            data-feather="arrow-up-right"></i><span class="f-w-500">0% más que el
                                            año pasado </span></div>
                                    <div class="total-revenue-chart">
                                        <div id="revenue"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="total-revenue mb-2"> <span>Total de Pedidos </span><a href="index.html">Ver
                                        Informe</a>
                                </div>
                                <h3 class="f-w-600">0</h3>
                                <div class="total-chart">
                                    <div class="data-grow d-flex gap-2"> <i class="font-secondary"
                                            data-feather="arrow-down-left"></i><span class="f-w-500">0% menos que la
                                            semana pasada</span></div>
                                    <div class="total-order">
                                        <div id="totalOrder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 special-Offer-banner box-col-none">
                <div class="card">
                    <div class="special-Offer">
                        <div class="offer-contain">
                            <h4>Oferta Especial de Hoy</h4>
                            <p class="mt-2 text-center">Obtén un descuento del 20% en tu próxima versión profesional si
                                tus ventas superan tu último récord.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 box-col-12">
                <div class="row">
                    <div class="col-xl-5 col-sm-6">
                        <div class="card height-equal">
                            <div class="card-body">
                                <ul class="product-costing">
                                    <li class="product-cost">
                                        <div class="product-icon bg-primary-light">
                                            <svg>
                                                <use
                                                    href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#activity">
                                                </use>
                                            </svg>
                                        </div>
                                        <div><span class="f-w-500 f-14 mb-0">Ventas Totales</span>
                                            <h2 class="f-w-600">$0</h2>
                                        </div>
                                    </li>
                                    <li> <span class="f-light f-14 f-w-500">Hemos vendido +0k esta semana.</span>
                                    </li>
                                </ul>
                                <ul class="product-costing">
                                    <li class="product-cost">
                                        <div class="product-icon bg-warning-light">
                                            <svg>
                                                <use
                                                    href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#people">
                                                </use>
                                            </svg>
                                        </div>
                                        <div><span class="f-w-500 f-14 mb-0">Visitantes Totales</span>
                                            <h2 class="f-w-600">0</h2>
                                        </div>
                                    </li>
                                    <li> <span class="f-light f-14 f-w-500">Hemos tenido +0k visitantes esta
                                            semana.</span></li>
                                </ul>
                                <ul class="product-costing">
                                    <li class="product-cost">
                                        <div class="product-icon bg-light">
                                            <svg>
                                                <use
                                                    href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#task-square">
                                                </use>
                                            </svg>
                                        </div>
                                        <div><span class="f-w-500 f-14 mb-0">Órdenes Totales</span>
                                            <h2 class="f-w-600">0</h2>
                                        </div>
                                    </li>
                                    <li> <span class="f-light f-14 f-w-500">Hemos tenido +0k órdenes esta semana.</span>
                                    </li>
                                </ul>
                                <ul class="product-costing">
                                    <li class="product-cost">
                                        <div class="product-icon bg-danger-light">
                                            <svg>
                                                <use
                                                    href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#money-recive">
                                                </use>
                                            </svg>
                                        </div>
                                        <div><span class="f-w-500 f-14 mb-0">Reembolsos</span>
                                            <h2 class="f-w-600">$0</h2>
                                        </div>
                                    </li>
                                    <li> <span class="f-light f-14 f-w-500">Hemos recibido +66k en reembolsos esta
                                            semana.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-sm-6">
                        <div class="card height-equal">
                            <div class="card-header pb-0 total-revenue card-no-border">
                                <h4>Historial de Ventas</h4><a href="index.html">Ver Todo</a>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li class="sale-history-card">
                                        <div class="history-price"><a class="f-w-500 f-14  mb-0"
                                                href="category.html">Camisa Oxford con manga enrollada</a><span
                                                class="mb-0 txt-primary f-w-600 f-16">$0</span></div>
                                        <div class="state-time"> <span class="f-w-500 f-14 f-light mb-0">Estados
                                                Unidos</span><span class="f-w-400 f-14 f-light">Hace 50 min</span></div>
                                    </li>
                                    <li class="sale-history-card">
                                        <div class="history-price"><a class="f-w-500 f-14  mb-0"
                                                href="category.html">Camiseta Jordans 1 de cuello alto</a><span
                                                class="mb-0 txt-primary f-w-600 f-16">$0</span></div>
                                        <div class="state-time"> <span
                                                class="f-w-500 f-14 f-light mb-0">Canadá</span><span
                                                class="f-w-400 f-14 f-light">Hace 0 min</span></div>
                                    </li>
                                    <li class="sale-history-card">
                                        <div class="history-price"><a class="f-w-500 f-14  mb-0"
                                                href="category.html">Camiseta de cuello redondo con impresión
                                                gráfica</a><span class="mb-0 txt-primary f-w-600 f-16">$0</span>
                                        </div>
                                        <div class="state-time"> <span class="f-w-500 f-14 f-light mb-0">Estados
                                                Unidos</span><span class="f-w-400 f-14 f-light">Hace 35 min</span></div>
                                    </li>
                                    <li class="sale-history-card">
                                        <div class="history-price"><a class="f-w-500 f-14  mb-0"
                                                href="category.html">Chaqueta de mezclilla para mujeres de manga
                                                larga</a><span class="mb-0 txt-primary f-w-600 f-16">$0</span>
                                        </div>
                                        <div class="state-time"> <span
                                                class="f-w-500 f-14 f-light mb-0">Australia</span><span
                                                class="f-w-400 f-14 f-light">Hace 50 min</span></div>
                                    </li>
                                    <li class="sale-history-card">
                                        <div class="history-price"><a class="f-w-500 f-14  mb-0"
                                                href="category.html">Jeans negros para mujeres</a><span
                                                class="mb-0 txt-primary f-w-600 f-16">$0</span></div>
                                        <div class="state-time"> <span class="f-w-500 f-14 f-light mb-0">Reino
                                                Unido</span><span class="f-w-400 f-14 f-light">Hace 28 min</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6 col-md-12 box-col-12">
                <div class="card height-equal">
                    <div class="card-header total-revenue card-no-border">
                        <h4>Últimos Pedidos</h4>
                        <div class="d-flex align-items-center gap-2"><span
                                class="update-data d-none d-md-block f-light">Datos actualizados cada 3 horas</span>
                            <div class="sales-chart-dropdown-select">
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="dropdownMenuButtondownMenu"
                                            data-bs-toggle="dropdown" aria-expanded="false">Hoy</button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButtondownMenu" role="menu"><span
                                                class="dropdown-item">Último mes</span><span
                                                class="dropdown-item">Última semana</span><span
                                                class="dropdown-item">Último día</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-order table-responsive custom-scrollbar">
                            <table class="latest-orders w-100">
                                <thead>
                                    <tr>
                                        <th>ID de Pedido</th>
                                        <th>Nombre de Facturación</th>
                                        <th>Cantidad</th>
                                        <th>Estado</th>
                                        <th>Factura</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6 box-col-12">
                <div class="card">
                    <div class="card-header total-revenue card-no-border">
                        <h4>Producto en Vivo</h4><a href="product.html">Ver Todo</a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-order table-responsive custom-scrollbar">
                            <table class="order-table w-100">
                                <thead>
                                    <tr>
                                        <th>Nombre del Producto</th>
                                        <th>Tipo</th>
                                        <th>Stock</th>
                                        <th>Variantes</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6 box-col-6">
                <div class="card">
                    <div class="card-header total-revenue card-no-border">
                        <h4>Producto de Mayor Ingreso</h4>
                        <div class="sales-chart-dropdown-select">
                            <div class="card-header-right-icon">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" id="dropdownMenuButtonup"
                                        data-bs-toggle="dropdown" aria-expanded="false">Hoy</button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonup"
                                        role="menu">
                                        <span class="dropdown-item">Último mes</span><span class="dropdown-item">Última
                                            semana</span><span class="dropdown-item">Último día </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="revenueproduct" id="revenueproduct"> </div>
                        <div class="sales-chart-dropdown">
                            <ul class="balance-data flex-wrap flex">
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-6 box-col-6">
                <div class="card">
                    <div class="div ecommerce-banner"> </div>
                </div>
                <div class="col-xl-12">
                    <div class="card product-widget">
                        <div class="card-body new-product">
                            <div class="product-cost">
                                <div class="add-product">
                                    <div class="product-icon bg-light-primary">
                                        <svg>
                                            <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#box-add">
                                            </use>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Agregar Nuevo Producto</h6><span class="f-light">Las imágenes
                                            son cruciales para mostrar</span>
                                    </div>
                                </div>
                                <div class="product-icon">
                                    <svg>
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#arrow-down">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card product-widget">
                        <div class="card-body new-product">
                            <div class="product-cost">
                                <div class="add-product">
                                    <div class="product-icon bg-light-primary">
                                        <svg>
                                            <use
                                                href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#receipt-disscount">
                                            </use>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Agregar Descuento</h6><span class="f-light">Las imágenes del
                                            producto a la plataforma</span>
                                    </div>
                                </div>
                                <div class="product-icon">
                                    <svg>
                                        <use href="<?php echo BASE_URL ;?>assets-admin/svg/icon-sprite.svg#arrow-down">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include_once 'Views/template/footer_Admin.php'; ?>