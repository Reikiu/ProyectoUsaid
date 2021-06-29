<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo "Registro" ?></title>

    <!-- Custom fonts for this template-->
    <link href=" <?php echo base_url('resources/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('resources/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/sweetalert2/dist/sweetalert2.min.css'); ?>" rel="stylesheet">

</head>
<body background="<?php echo base_url( 'resources/img/fd.jpg')?>">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block "><img src="<?php echo base_url( 'resources/img/r2.jpg')?>" style="width: 125%; height: 90%;padding-top: 30%"  alt=""></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Crea una cuenta!</h1>
                        </div>
                        <form class="form-horizontal FormCatElec" action="Registro/insertarUsuario" role="form" method="post" dataform="save">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="Nombre" id="Nombre" placeholder="Ingrese sus nombres">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="Apellido" id="Apellido" placeholder="Ingrese sus apellidos">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"placeholder="Ingrese Nombre de usuario" required name="nombreUsuario" id="nombreUsuario" data-toggle="tooltip" data-placement="top" title="Ingrese su usuario. Máximo 15 caracteres (solamente letras)"  maxlength="15">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="Correo_Electronico" id="Correo_Electronico" placeholder="Email Address">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="pass" id="pass" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" name="salt" id="salt" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="direccion" id="direccion" placeholder="Ingrese su dirección">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control form-control-user" data-toggle="tooltip" data-placement="top" title="Ingrese su número telefónico. Mínimo 8 digitos" pattern="[0-9]{4}-[0-9]{4}" name="Telefono" id="Telefono" placeholder="Ingrese su número telefónico">
                            </div>
                            <div class="form-group">
                                <select name="Area" id="Area" class="form-control all-elements-tooltip">
                                    <option selected>Área</option>
                                    <option value="Dirección">Dirección</option>
                                    <option value="Objetivo 1">Objetivo 1</option>
                                    <option value="Objetivo 2">Objetivo 2</option>
                                    <option value="Objetivo 3">Objetivo 3</option>
                                    <option value="MEL">MEL</option>
                                    <option value="IT">IT</option>
                                    <option value="Comunicaciones">Comunicaciones</option>
                                    <option value="Capacity Building">Capacity Building</option>
                                    <option value="ISIG">ISIG</option>
                                    <option value="Operaciones">Operaciones</option>
                                    <option value="Seguridad">Seguridad</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="Puesto" id="Puesto" class="form-control all-elements-tooltip"  >
                                    <option selected>Puesto</option>
                                    <option value="Chief of Party">Chief of Party</option>
                                    <option value="Deputy Chief of Party">Deputy Chief of Party</option>
                                    <option value="Gerente">Gerente</option>
                                    <option value="Especialista">Especialista</option>
                                    <option value="Coordinador">Coordinador</option>
                                    <option value="Técnico/Asesor">Técnico/Asesor</option>
                                    <option value="Asistente">Asistente</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="Tipo_Usuario" class="form-control all-elements-tooltip"  >
                                    <option selected disabled>Tipo Usuario</option>
                                    <?php
                                    foreach ($rol as $i)
                                        echo "<option  value='$i->id'>$i->nombre</option>";
                                    ?>
                                </select>
                            </div>
                            <p><button type="submit" class="btn btn-success btn-block" name="guardar"><i class="fa fa-pencil"></i>&nbsp; Registrarse</button></p>
                            <hr>


                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">¿Se te olvidó tu contraseña?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?php echo site_url('login/login') ?>">¿Ya tienes una cuenta? ¡Iniciar sesión!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="<?php echo base_url("resources/vendor/jquery/jquery.min.js");?>"></script>
<script src="<?php echo base_url("resources/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url("resources/vendor/jquery-easing/jquery.easing.min.js");?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url("resources/js/sb-admin-2.min.js");?>"></script>
<!-- Page level plugins -->
<script src="<?php echo base_url("resources/vendor/datatables/jquery.dataTables.min.js"); ?>"></script>
<script src="<?php echo base_url("resources/vendor/datatables/dataTables.bootstrap4.min.js"); ?>"></script>
<script src="<?php echo base_url("resources/src/js/cliente/cliente.js"); ?>"></script>
<script src="<?php echo base_url("resources/src/js/Actividad/actividad.js"); ?>"></script>
<script src="<?php echo base_url("resources/src/js/Visita/Visita.js"); ?>"></script>
<script src="<?php echo base_url("resources/sweetalert2/dist/sweetalert2.min.js"); ?>"></script>



</body>

</html>