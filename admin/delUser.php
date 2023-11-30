<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Configuracion de usuarios</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.all.js'></script>
        <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.css'>

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/datatables-simple-demo.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="margin-right: 50px;" href="../index.php">SLI (Stock Logic Integrated)</a>
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
                                    <a class="nav-link" href="../admin/confUser.php"><i class="fas fa-cog" style="margin: 5px;"></i>  Configurar Usuario</a>
                                    <a class="nav-link" href="../admin/regUser.php"><i class="fas fa-plus" style="margin: 5px;"></i>  Registrar Usuario</a>
                                    <a class="nav-link" href="../admin/editUser.php"><i class="fas fa-pencil" style="margin: 5px;"></i>  Editar Usuario</a>
                                    <a class="nav-link" href="../admin/delUser.php"><i class="fas fa-times" style="margin: 5px;"></i>  Eliminar Usuario</a>
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
                                    <a class="nav-link" href="../logistica/movimientos/entsal.php"><i class="fas fa-list-ol" style="margin: 5px;"></i> Entradas/Salidas</a>
                                    <a class="nav-link" href="../logistica/movimientos/novedades.php"><i class="fas fa-book" style="margin: 5px;"></i> Registro Novedades</a>
                                    <a class="nav-link" href="../logistica/movimientos/pedidos.php"><i class="fas fa-shopping-cart" style="margin: 5px;"></i> Pedidos</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Producto" aria-expanded="false" aria-controls="Producto">
                                <div class="sb-nav-link-icon"><i class="fas fa-cube"></i></div>
                                Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Producto" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../logistica/productos/busProducto.php"><i class="fas fa-search" style="margin: 5px;"></i> Buscar Producto</a>
                                    <a class="nav-link" href="../logistica/productos/regProducto.php"><i class="fas fa-plus" style="margin: 5px;"></i> Registrar Producto</a>
                                    <a class="nav-link" href="../logistica/productos/editProducto.php"><i class="fas fa-file-text" style="margin: 5px;"></i> Editar Producto</a>
                                    <a class="nav-link" href="../logistica/productos/delProducto.php"><i class="fas fa-trash" style="margin: 5px;"></i> Eliminar Producto</a>
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
                                    <a class="nav-link" href="../charts.php"><i class="fas fa-chart-bar" style="margin: 5px;"></i> Graficos</a>
                                    <a class="nav-link" href="../tables.php"><i class="fas fa-table" style="margin: 5px;"></i> Tablas</a>
                                </nav>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <hr>
                        <h1 class="mt-4">Eliminar/Desactivar Usuario</h1>
                        <hr>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Eliminar Usuario</li>
                        </ol>
                        <div class="card mb-3" style="max-width: 100rem;">
                            <div class="card-header">
                              <h5><b>Deshabilitar o eliminar usuario del sistema</b></h5>
                            </div>
                            <div class="card-body">
                                <h6>

                                </h6>
                                <section class="row">
                                    <section class="col-md-12">
                                                                    
                                        <!-- TABLA DE USUARIOS ELIMINAR -->
                                            <div id="tablaUsuariosDel"></div>

                                    </section>
                                </section>

                
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
        <script type="text/javascript">

        listarUsuarios()

        function listarUsuarios() {
            let formulario = new FormData();
            formulario.append("funcion", "listarUsuariosDel")
            $('#tablaUsuariosDel').html('CARGANDO...');
            $.ajax({
                url: "/sli/controller.php",
                data: formulario,
                type: 'POST',
                datatype: 'HTML',
                cache: false,
                contentType: false,
                processData: false,
                async: true,
                success: function(data) {
                    $('#tablaUsuariosDel').html(data);
                },
                error: function(data) {
                    $('#tablaUsuariosDel').html('<p>Ha ocurrido un error</p>');
                }
            });
        }


        
        function confirmareliminar(id) {
            Swal.fire({
                title: 'Eliminar?',
                text: `¿Confirma eliminar registro con id: ${id}?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    eliminarregistroVerf(id)
                }
            })
        }

        async function eliminarregistroVerf(id) {
            let formulario = new FormData();
            formulario.append("funcion", "eliminarregistroVerf");
            formulario.append("id", id);
            let req2 = await fetch("/sli/controller.php", {
                body: formulario,
                method: "POST"
            });
            let res2 = await req2.json();
            //console.log(res2[1])
            if (res2[1] == 1) {
                Swal.fire({
                title: 'ERROR',
                text: `El usuario seleccionado esta activo o pertenece a un area`,
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Continuar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        listarUsuarios();
                    }
                })
            } else {
                eliminarregistro(id);
                listarUsuarios();
            }
        }


        async function eliminarregistro(id) {
            let formulario = new FormData();
            formulario.append("funcion", "eliminarregistro");
            formulario.append("id", id);
            let req2 = await fetch("/sli/controller.php", {
                body: formulario,
                method: "POST"
            });
            let res2 = await req2.json();
            console.log(res2[0])
            if (res2[0] == 1) {
                Swal.fire(
                    'Usuario Eliminado Correctamente',
                    '',
                    'success'
                );
                listarUsuarios();
            }
        }


</script>
        
    </body>
</html>
