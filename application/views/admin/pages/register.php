<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 19:06:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png">
    <title><?php echo $title ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>assets/css/colors/red.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" >
        <div class="login-register " style="background-image:url(<?php echo base_url() ?>assets/images/background/login-register.jpg);">
            <div class="login-box card" style="width:50%;top: -30%;">
            <div class="card-body" >
                <?php $error_msg = $this->session->flashdata('error_msg'); ?>
                <?php if (isset($error_msg)): ?>
                    <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                <?php endif ?>
                <form method="post" action="<?php echo base_url('registro/agregar') ?>" class="form-horizontal" novalidate>
                    <div class="form-group row">
                    <h3 class="col-md-12">Registrate</h3>


                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="Nombre" required data-validation-required-message="Primer nombre es requerido">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" form-group ">
                            <input type="text" name="last_name" class="form-control" placeholder="Apellido" required data-validation-required-message="Segundo nombre es requerido">
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>

                    <div class="col-md-12 ">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required data-validation-required-message="Email es requerido">
                        </div>
                    </div>
                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" required data-validation-required-message="Password is required">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="mobile" placeholder="Telefono" class="form-control">
                        </div>
                    </div>
                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control custom-select" name="puesto" aria-invalid="false">
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
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control custom-select" name="area" aria-invalid="false">
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
                        </div>
                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">Regístrate</button>
                        </div>
                    </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3"></label>
                                    <div class="controls">
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input id="user" name="role" type="radio" value="user" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Tecnico</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="admin" name="role" type="radio" value="Motorista" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Motorista</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- CSRF token -->
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />


                        <hr>



                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p>¿Ya tienes una cuenta? <a href="<?php echo base_url('auth') ?>" class="text-info m-l-5"><b>Registrarse</b></a></p>
                        </div>
                    </div>






                </form>

            </div>
          </div>
        </div>
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 19:06:54 GMT -->
</html>