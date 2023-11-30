<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
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
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ingreso SLI</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="input-group mb-3"> 
                                                <span class="input-group-text" id="basic-addon1"><a class="fas fa-at"></a></span>
                                                <div class="form-floating">
                                                    <input class="form-control" id="correo" name="correo" type="email" placeholder="name@example.com" />
                                                    <label for="inputEmail">Correo Electronico</label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3"> 
                                                <span class="input-group-text" id="basic-addon1"><a class="fas fa-key"></a></span>
                                                <div class="form-floating">
                                                    <input class="form-control" id="contrasena" name="contrasena" type="password" placeholder="Password" />
                                                    <label for="inputPassword">Contraseña</label>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Recordar Contraseña?</a>
                                                <a class="btn btn-success" id="boton_login" name="boton_login" onclick="loginUsuario()">Ingresar</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">No tienes una cuenta? Registrate!</a></div>
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
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script type="text/javascript">


            function loginUsuario(){
                let formulario = new FormData();

                let contr1 = $("#correo").val();
                let contr2 = $("#contrasena").val();

                if (contr1 == "" || contr2 == "") {
                    Swal.fire(
                            'Diligencie todos los campos antes de continuar',
                            '',
                            'warning'
                        );
                }else{
                    validarUsuario();
                }    
            }

                async function validarUsuario(){
                    $("#boton_login").prop("disabled", true);
                    let formulario = new FormData();
                    
                    let correo = $("#correo").val()
                    let contrasena = $("#contrasena").val()

                    formulario.append("correo", correo);
                    formulario.append("contrasena", contrasena);

                    formulario.append("funcion", "validarUsuario");

                    let req2 = await fetch("/sli/controller.php", {
                        body: formulario,
                        method: "POST"
                    });
                    let res2 = await req2.json();
                    console.log(res2);
                    if (res2[0] == 1) {
                        ContinuarRegistro(res2[1],res2[2],res2[3]);
                    } else {
                        Swal.fire(
                            'El correo y contraseña ingresado no corresponde a ninguna cuenta o son incorrectos, por favor verificar credenciales',
                            '',
                            'error'
                        );
                    }
                }


                function ContinuarRegistro(correo,nombres,apellidos) {
                    Swal.fire({
                        title: 'Usuario Validado',
                        text: `Bienvenido usuario: ${nombres}`,
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Continuar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/sli/index.php';
                        }
                    })
                }

        </script>

    </body>
</html>
