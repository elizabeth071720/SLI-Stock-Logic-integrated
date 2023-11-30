<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.all.js'></script>
        <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.css'>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Creacion Cuenta SLI</h3></div>
                                    <div class="card-body">
                                        <form>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-user"></a></span>
                                                        <div class="form-floating mb-md-0">
                                                            <input class="form-control" id="nombres" name="nombres" type="text" placeholder="Enter your first name" required/>
                                                            <label for="inputFirstName">Nombres</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-user"></a></span>
                                                        <div class="form-floating">
                                                            <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Enter your last name" required/>
                                                            <label for="inputLastName">Apellidos</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-address-card"></a></span>
                                                        <div class="form-floating mb-md-0">
                                                            <select class="form-select" name="tipo_documento" id="tipo_documento" required>
                                                                <option value="0" selected>Selecciona...</option>
                                                                <option value="1">Tarjeta de identidad</option>
                                                                <option value="2">Cedula de Ciudadania</option>
                                                                <option value="3">Pasaporte</option>
                                                                <option value="4">Cedula Extranjeria</option>
                                                                <option value="5">NIT</option>
                                                            </select>
                                                            <label for="inputFirstName">Tipo Documento</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-credit-card"></a></span>
                                                        <div class="form-floating">
                                                            <input class="form-control" id="numero_documento" name="numero_documento" type="number" placeholder="Enter your last name" required/>
                                                            <label for="inputLastName">Numero Documento</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <hr>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-at"></a></span>
                                                        <div class="form-floating">
                                                            <input class="form-control" id="correo" name="correo" type="email" placeholder="name@example.com" required/>
                                                            <label for="inputEmail">Direccion Correo Electronico</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-phone"></a></span>
                                                        <div class="form-floating">
                                                            <input class="form-control" id="tel_contacto" name="tel_contacto" type="number" min="0" max="9" placeholder="name@example.com" required/>
                                                            <label for="inputEmail">Telefono Contacto:</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-house"></a></span>
                                                        <div class="form-floating">
                                                            <input class="form-control" id="direccion" name="direccion" type="text" placeholder="name@example.com" required/>
                                                            <label for="inputEmail">Direccion Residencia/Domicilio</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-calendar"></a></span>
                                                        <div class="form-floating">
                                                            <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" placeholder="name@example.com" required/>
                                                            <label for="inputEmail">Fecha Nacimiento:</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-key"></a></span>
                                                        <div class="form-floating mb-md-0">
                                                            <input class="form-control" id="contrasena" name="contrasena" type="password" placeholder="Create a password" required/>
                                                            <label for="inputPassword">Contraseña</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3"> 
                                                        <span class="input-group-text" id="basic-addon1"><a class="fas fa-key"></a></span>
                                                        <div class="form-floating mb-md-0">
                                                            <input class="form-control" id="verf_contrasena" name="verf_contrasena" type="password" placeholder="Confirm password" required/>
                                                            <label for="inputPasswordConfirm">Confirme Contraseña</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <div class="mb-0">
                                                        <button onclick="Validar_Contraseña()" name="boton_registro" id="boton_registro" class="btn btn-success btn-block"><span class="fa fa-save"> Crear</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Tienes una cuenta? Ingresa</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <!-- <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditionss</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script type="text/javascript">


                function Validar_Contraseña(){
                    $("#boton_registro").prop("disabled", true);
                    let formulario = new FormData();

                    let contr1 = $("#contrasena").val();
                    let contr2 = $("#verf_contrasena").val();

                    if (contr1 == "" && contr2 == "") {
                        Swal.fire(
                                'Diligencie todos los campos antes de continuar',
                                '',
                                'warning'
                            );
                        $("#boton_registro").prop("disabled", false);
                    }else{
                        if (contr1 != contr2) {
                            Swal.fire(
                                'Las Contraseñas no coinciden',
                                '',
                                'warning'
                            );
                            $("#boton_registro").prop("disabled", false);
                        }else{
                            registrarUsuario();
                        }
                    }    
                }



                async function registrarUsuario(){
                    let formulario = new FormData();
                    

                    let nombres = $("#nombres").val()
                    let apellidos = $("#apellidos").val()
                    let tipo_documento = $("#tipo_documento").val()
                    let numero_documento = $("#numero_documento").val()
                    let correo = $("#correo").val()
                    let tel_contacto = $("#tel_contacto").val()
                    let direccion = $("#direccion").val()
                    let fecha_nacimiento = $("#fecha_nacimiento").val()
                    let contraseña = $("#contrasena").val()

                    formulario.append("nombres", nombres);
                    formulario.append("apellidos", apellidos);
                    formulario.append("tipo_documento", tipo_documento);
                    formulario.append("numero_documento", numero_documento);
                    formulario.append("correo", correo);
                    formulario.append("tel_contacto", tel_contacto);
                    formulario.append("direccion", direccion);
                    formulario.append("fecha_nacimiento", fecha_nacimiento);
                    formulario.append("contrasena", contraseña);

                    formulario.append("funcion", "registrarUsuario");

                    let req2 = await fetch("/sli/controller.php", {
                        body: formulario,
                        method: "POST"
                    });
                    let res2 = await req2.json();
                    //console.log(res2);
                    if (res2[0] == 1) {
                        Swal.fire(
                            'USUARIO REGISTRADO CORRECTAMENTE',
                            '',
                            'success'
                        );
                        $("#nombres").val('')
                        $("#apellidos").val('')
                        $("#tipo_documento").val('')
                        $("#numero_documento").val('')
                        $("#correo").val('')
                        $("#tel_contacto").val('')
                        $("#direccion").val('')
                        $("#fecha_nacimiento").val('')
                        $("#contrasena").val('')
                        $("#verf_contrasena").val('')

                        $("#boton_registro").prop("disabled", false);
                        
                        ContinuarRegistro();
                    } else {
                        Swal.fire(
                            'ERROR AL GUARDAR REGISTRO DE USUARIO',
                            '',
                            'error'
                        );
                    }
                }


                function ContinuarRegistro() {
                    Swal.fire({
                        title: 'Operacion Realizada Correctamente',
                        text: `Usuario registrado`,
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Continuar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/sli/login.php';
                        }else{
                            window.location.href = '/sli/login.php';
                        }
                    })
                }



        </script>
    </body>
</html>
