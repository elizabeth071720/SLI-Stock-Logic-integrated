<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Charts - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="margin-right: 50px;" href="index.php">SLI (Stock Logic Integrated)</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> USUARIO</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><a class="dropdown-item" href="#!">Informacion</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Cerrar Seccion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading" style="text-align: center;">MENU PRINCIPAL</div> -->

                            <div class="sb-sidenav-menu-heading">Administracion</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdministrativo" aria-expanded="false" aria-controls="collapseAdministrativo">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Panel Administrativo
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAdministrativo" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admin/confUser.php"><i class="fas fa-cog" style="margin: 5px;"></i>  Configurar Usuario</a>
                                    <a class="nav-link" href="admin/regUser.php"><i class="fas fa-plus" style="margin: 5px;"></i>  Registrar Usuario</a>
                                    <a class="nav-link" href="admin/editUser.php"><i class="fas fa-pencil" style="margin: 5px;"></i>  Editar Usuario</a>
                                    <a class="nav-link" href="admin/delUser.php"><i class="fas fa-times" style="margin: 5px;"></i>  Eliminar Usuario</a>
                                </nav>
                            </div>
                            
                            <div class="sb-sidenav-menu-heading">LOGISTICA/INVENTARIOS</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#LogisticaMov" aria-expanded="false" aria-controls="LogisticaMov">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck"></i></div>
                                Movimientos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="LogisticaMov" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="logistica/movimientos/entsal.php"><i class="fas fa-list-ol" style="margin: 5px;"></i> Entradas/Salidas</a>
                                    <a class="nav-link" href="logistica/movimientos/novedades.php"><i class="fas fa-book" style="margin: 5px;"></i> Registro Novedades</a>
                                    <a class="nav-link" href="logistica/movimientos/pedidos.php"><i class="fas fa-shopping-cart" style="margin: 5px;"></i> Pedidos</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Producto" aria-expanded="false" aria-controls="Producto">
                                <div class="sb-nav-link-icon"><i class="fas fa-cube"></i></div>
                                Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Producto" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="logistica/productos/busProducto.php"><i class="fas fa-search" style="margin: 5px;"></i> Buscar Producto</a>
                                    <a class="nav-link" href="logistica/productos/regProducto.php"><i class="fas fa-plus" style="margin: 5px;"></i> Registrar Producto</a>
                                    <a class="nav-link" href="logistica/productos/editProducto.php"><i class="fas fa-file-text" style="margin: 5px;"></i> Editar Producto</a>
                                    <a class="nav-link" href="logistica/productos/regProducto.php"><i class="fas fa-trash" style="margin: 5px;"></i> Eliminar Producto</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Categoria" aria-expanded="false" aria-controls="Categoria">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>
                                Categorias
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Categoria" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#"><i class="fas fa-plus" style="margin: 5px;"></i> Agregar Categoria</a>
                                    <a class="nav-link" href="#"><i class="fas fa-cog" style="margin: 5px;"></i> Asociar Productos/Categoria</a>
                                    <a class="nav-link" href="#"><i class="fas fa-pencil" style="margin: 5px;"></i> Editar Categoria</a>
                                    <a class="nav-link" href="#"><i class="fas fa-trash" style="margin: 5px;"></i> Eliminar Categoria</a>
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">CONTABILIDAD</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Contabilidad" aria-expanded="false" aria-controls="Contabilidad">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Reportes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Contabilidad" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#"><i class="fas fa-file" style="margin: 5px;"></i> Rpt.pedidos</a>
                                    <a class="nav-link" href="#"><i class="fas fa-file" style="margin: 5px;"></i> Rpt.Ventas</a>
                                    <a class="nav-link" href="#"><i class="fas fa-file" style="margin: 5px;"></i> Rpt.Contable</a>
                                    <a class="nav-link" href="#"><i class="fas fa-file" style="margin: 5px;"></i> Rpt.Productos</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">TENDENCIAS</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Grafico" aria-expanded="false" aria-controls="Grafico">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Analisis
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Grafico" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="charts.php"><i class="fas fa-chart-bar" style="margin: 5px;"></i> Graficos</a>
                                    <a class="nav-link" href="tables.php"><i class="fas fa-table" style="margin: 5px;"></i> Tablas</a>
                                </nav>
                            </div>

                        </div>
                    </div>

                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Graficos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Graficos</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Chart.js is a third party plugin that is used to generate the charts in this template. The charts below have been customized - for further customization options, please visit the official
                                <a target="_blank" href="https://www.chartjs.org/docs/latest/">Chart.js documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Pie Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">

                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
