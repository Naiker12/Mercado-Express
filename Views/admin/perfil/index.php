<?php include_once 'views/template/header_Admin.php'; ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Edit Profile</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active"> Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Mi perfil</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                                <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="media">
                                            <img class="img-70 rounded-circle" alt="" src="../assets/images/user/7.jpg">
                                            <div class="media-body">
                                                <h5 class="mb-1">MARK JECNO</h5>
                                                <p>DISEÑADOR</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h6 class="form-label">Biografía</h6>
                                    <textarea class="form-control"
                                        rows="5">Por otro lado, denunciamos con justa indignación</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo electrónico</label>
                                    <input class="form-control" placeholder="tu-email@dominio.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contraseña</label>
                                    <input class="form-control" type="password" value="contraseña">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sitio web</label>
                                    <input class="form-control" placeholder="http://Uplor.com">
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <form class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Editar perfil</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                                <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Compañía</label>
                                        <input class="form-control" type="text" placeholder="Compañía">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre de usuario</label>
                                        <input class="form-control" type="text" placeholder="Nombre de usuario">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Correo electrónico</label>
                                        <input class="form-control" type="email" placeholder="Correo electrónico">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Primer nombre</label>
                                        <input class="form-control" type="text" placeholder="Primer nombre">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Apellido</label>
                                        <input class="form-control" type="text" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Dirección</label>
                                        <input class="form-control" type="text" placeholder="Dirección">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Ciudad</label>
                                        <input class="form-control" type="text" placeholder="Ciudad">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Código Postal</label>
                                        <input class="form-control" type="number" placeholder="Código Postal">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">País</label>
                                        <select class="form-control btn-square">
                                            <option value="0">--Seleccionar--</option>
                                            <option value="1">Alemania</option>
                                            <option value="2">Canadá</option>
                                            <option value="3">EE. UU.</option>
                                            <option value="4">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">Acerca de mí</label>
                                        <textarea class="form-control" rows="4"
                                            placeholder="Ingrese la descripción sobre ti"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Actualizar perfil</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Agregar proyectos y cargar</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>
                                <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="table-responsive add-project custom-scrollbar">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Nombre del proyecto</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a class="text-inherit" href="#">Prevenciones sin restricciones</a></td>
                                        <td>25 de junio de 2018</td>
                                        <td><span class="status-icon bg-success"></span> Completado</td>
                                        <td>$15,987</td>
                                        <td class="text-end">
                                            <a class="icon" href="javascript:void(0)"></a>
                                            <a class="btn btn-primary btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-pencil"></i> Editar</a>
                                            <a class="icon" href="javascript:void(0)"></a>
                                            <a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-link"></i> Actualizar</a>
                                            <a class="icon" href="javascript:void(0)"></a>
                                            <a class="btn btn-danger btn-sm" href="javascript:void(0)"><i
                                                    class="fa fa-trash"></i> Eliminar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

<?php include_once 'Views/template/footer_Admin.php'; ?>