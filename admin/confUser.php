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

        <!-- SweetAlert -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.all.js'></script>
        <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.css'>

        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Bootstrap 5 (elimina la inclusión de Bootstrap 4) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="../js/scripts.js"></script>
        <script src="../js/datatables-simple-demo.js"></script>

        <!-- Chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

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
                        <h1 class="mt-4">Configuracion de usuario</h1>
                        <hr>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Configuracion</li>
                        </ol>
                        
                        <div class="card mb-3" style="max-width: 100rem;">
                            <div class="card-header">
                              <h5><b>Listado de empleados(usuarios):</b></h5>
                            </div>
                            <div class="card-body">
                                <section class="row">
                                    <!-- listado Empleados -->
                   
                                    <section class="col-md-12">
                                        <div id="tablaUsuariosConf"></div>
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

        <!-- MODAL ASIGAR AREA EMPLEADO -->
        <div class="modal fade" id="modalAsignarAreaEmpleado" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Informacion Empleado:</h2><span id="nombreUser"></span>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <section class="row">
                                <input type="text" class="form-control" name="id" id="id" hidden>
                                <input type="text" class="form-control" name="contrasena" id="contrasena" hidden>

                                <section class="col-md-2"></section>
                                <section class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Nombres:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-user"></a></span>
                                        <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Primer nombre" disabled>
                                    </div>
                                </section>
                                <section class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Apellidos:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-user"></a></span>
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Segundo nombre" disabled>
                                    </div>
                                </section>
                                <section class="col-md-2"></section>
                            </section>

                            <section class="row">
                                <section class="col-md-2"></section>

                                <section class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Tipo de documento:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-id-card"></a></span>
                                        <select class="form-select" name="tipo_documento" id="tipo_documento" disabled>
                                            <option value="0" selected>Selecciona...</option>
                                            <option value="1">Tarjeta de identidad</option>
                                            <option value="2">Cedula de Ciudadania</option>
                                            <option value="3">Pasaporte</option>
                                            <option value="4">Cedula Extranjeria</option>
                                            <option value="5">NIT</option>
                                        </select>
                                    </div>
                                </section>
                                <section class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Numero de identificacion:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-hashtag"></a></span>
                                        <input type="number" class="form-control" name="numero_documento" id="numero_documento" placeholder="Numero de identificacion" disabled>
                                    </div>
                                </section>

                                <section class="col-md-2"></section>
                            </section>

                            <section class="row">
                                <section class="col-md-2"></section>

                                <section class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Correo electronico:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-at"></a></span>
                                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo electronico" disabled>
                                    </div>
                                </section>
                                <section class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Telefono de contacto:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-phone"></a></span>
                                        <input type="number" class="form-control" name="tel_contacto" id="tel_contacto" placeholder="Numero de telefono de contacto" disabled>
                                    </div>
                                </section>
                            
                                <section class="col-md-2"></section>
                            </section>

                            <section class="row">
                                <section class="col-md-2"></section>

                                <section class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Direccion de residencia:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-house"></a></span>
                                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion de residencia o apartamento" disabled>
                                    </div>
                                </section>
                                <section class="col-md-4">
                                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-calendar"></a></span>
                                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" aria-describedby="emailHelp" disabled>
                                    </div>
                                </section>

                                <section class="col-md-2"></section>
                            </section>

                            <section class="row">
                                <section class="col-md-2"></section>

                                <section class="col-md-8">
                                    <label for="exampleInputEmail1" class="form-label">Areas de proceso:</label>
                                    <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-building"></a></span>
                                        <select class="form-select" name="area_proceso" id="area_proceso">
                                            <option value="0" selected>Selecciona...</option>
                                            <option value="1">Bodega</option>
                                            <option value="2">Ventas</option>
                                            <option value="3">Almacen</option>
                                            <option value="4">Administracion</option>
                                        </select>
                                    </div>
                                </section>

                                <section class="col-md-2"></section>
                            </section>


                            <hr>
                            <section class="row">

                            <section class="col-md-2"></section>

                            <section class="col-md-4" style="text-align: center;">
                                <button onclick="ConfirmarAreaEmpleado()" name="boton_asignar_area" id="boton_asignar_area" class="btn btn-success"><span class="fa fa-save"></span> Asignar Area</button>
                            </section>

                            <section class="col-md-4" style="text-align: center;">
                                <button class="btn btn-danger" data-bs-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>
                            </section>

                            <section class="col-md-2"></section>
                            
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TERMINA MODIFICAR FASE AFECTADA -->
        

        <script type="text/javascript">
        
        listarUsuariosConf()
        
        function listarUsuariosConf() {
                let formulario = new FormData();
                formulario.append("funcion", "listarUsuariosConf")
                $('#tablaUsuariosConf').html('CARGANDO...');
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
                        $('#tablaUsuariosConf').html(data);
                    },
                    error: function(data) {
                        $('#tablaUsuariosConf').html('<p>Ha ocurrido un error</p>');
                    }
            });
        }


        
        async function asignarAreaEmpleado(id){
            $('#modalAsignarAreaEmpleado').modal('show');
            
            let formulario = new FormData();
            formulario.append("funcion", "infoUser");
            formulario.append("id", id);
            let req2 = await fetch("/sli/controller.php", {
                body: formulario,
                method: "POST"
            });
            let res2 = await req2.json();
            console.log(res2[10])
            console.log(res2[11])
            if (res2[10] == null || res2[11] == null || res2[10] == "" || res2[11] == "") {
                $("#area_proceso").removeAttr('disabled');
                $("#boton_asignar_area").show();
                $("#area_proceso").val('0')
            } else {
                $("#area_proceso").attr('disabled', true);
                $("#area_proceso").val(res2[11]).trigger('change');
                $("#boton_asignar_area").hide();
            }
            $("#nombreUser").html(`<b>`+res2[1] + res2[2]+`</b>`);
            $("#id").val(id);
            $("#contrasena").val(res2[9]);

            $("#nombres").val(res2[1]);
            $("#apellidos").val(res2[2]);
            $("#tipo_documento").val(res2[3]).trigger('change');
            $("#numero_documento").val(res2[4]);
			$("#correo").val(res2[5]);
		    $("#tel_contacto").val(res2[6]);
            $("#direccion").val(res2[7]);
            $("#fecha_nacimiento").val(res2[8]);
        }


        function ConfirmarAreaEmpleado(){
            let id = $("#id").val()
            let nombres = $("#nombres").val()
            let apellidos = $("#apellidos").val()
            Swal.fire({
                title: 'Asociar Area Empleado',
                text: `continuar con la asociacion de area en el empleado: ${nombres + apellidos}?`,
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Continuar'
            }).then((result) => {
                if (result.isConfirmed) {
                    asociarAreaEmpleado(id)
                }
            })
        }


        async function asociarAreaEmpleado(id){
            let proceso = $("#area_proceso").val()
            if (proceso == "0" || proceso == 0) {
                Swal.fire(
                        'Selecciona un area de proceso para continuar',
                        '',
                        'warning'
                    );
            }
            else{
            let formulario = new FormData();
            formulario.append("funcion", "asociarAreaEmpleado");
            
            let areaProceso = $("#area_proceso").val()
            formulario.append("id", id);
            formulario.append("areaProceso", areaProceso);

            let req2 = await fetch("/sli/controller.php", {
                body: formulario,
                method: "POST"
            });
            let res2 = await req2.json();
            //console.log(res2);
            if (res2[0] == 1) {
                $("#id").val('')
                $("#contrasena").val('')
                $("#nombres").val('')
                $("#apellidos").val('')
                $("#tipo_documento").val('0')
                $("#numero_documento").val('')
                $("#correo").val('')
                $("#tel_contacto").val('')
                $("#direccion").val('')
                $("#fecha_nacimiento").val('')
                $("#area_proceso").val('0')

                $('#modalAsignarAreaEmpleado').modal('hide');

                Swal.fire(
                        'Area asociada a empleado(a) correctamente',
                        '',
                        'success'
                    );
                listarUsuariosConf();
            }else{
                Swal.fire(
                        'Error al asignar Area de proceso',
                        '',
                        'danger'
                    );
                }
                listarUsuariosConf();
            }
        }


        </script>
    

    </body>
</html>
