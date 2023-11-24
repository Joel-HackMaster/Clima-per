
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/Helpdesk.ico">
    <title>ADRTecnology</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrate</h1>
                            </div>
                            <form class="user" id="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="form-input col-sm-6 mb-3 mb-sm-0 empleadoCod">
                                        <input type="text" class="form-control form-control-user" id="empleadoCod"
                                            name="empleadoCod" placeholder="Codigo">
                                    </div>
                                    <div class="form-input col-sm-6 empleadoName">
                                        <input type="text" class="form-control form-control-user" id="empleadoName"
                                        name="empleadoName" placeholder="Nombre Completo">
                                        <p class="text-danger nameError"> </p>
                                    </div>
                                </div>
                                <div class="form-input form-group empleadoDNI">
                                    <input type="number" class="form-control form-control-user" id="empleadoDNI"
                                    name="empleadoDNI" placeholder="Ingresa tu Nº de identificacion">
                                    <p class="text-danger dniError"> </p>
                                </div>
                                <div class="form-input form-group empleadoEmail">
                                    <input type="text" class="form-control form-control-user" id="empleadoEmail"
                                    name="empleadoEmail" placeholder="Correo">
                                    <p class="text-danger emailError"> </p>
                                </div>
                                <div class="form-group row">
                                    <div class=".form-input col-sm-6 mb-3 mb-sm-0 password">
                                        <input type="password" class="form-control form-control-user"
                                        name="password" id="password" placeholder="Contraseña">
                                        <p class="text-danger passwordError"> </p>
                                    </div>
                                    <div class="form-input col-sm-6 repeatPassword">
                                        <input type="password" class="form-control form-control-user"
                                        id="repeatPassword"  name="password_confirmation" 
                                        required autocomplete="new-password" placeholder="Repite la contraseña">
                                        <p class="text-danger rpasswordError"> </p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" href="{{url('/')}}" id="Registro">
                                            Registrar
                                        </button>
                                <p id="error" class="text-danger"> </p>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">¿Olvidaste tu Contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{url('/')}}">¿Ya tienes una cuenta? ¡Iniciar Sesión!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/Formulario.js')}}"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/registrar.js"></script>
    <script src="js/Validacion.js"></script>

</body>

</html>