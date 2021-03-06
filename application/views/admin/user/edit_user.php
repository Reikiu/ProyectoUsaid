

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Usuario</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Edit User</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">

                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Edit User <a href="<?php echo base_url('admin/user/all_user_list') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All Users </a></h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/user/update/'.$user->id) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nombre <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Apellido <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tel??fono </label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="mobile" class="form-control" value="<?php echo $user->mobile; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


<!--                            <div class="row">-->
<!--                                <div class="col-md-9">-->
<!--                                    <div class="form-group row">-->
<!--                                        <label class="control-label text-right col-md-3">Ciudad</label>-->
<!--                                        <div class="col-md-9 controls">-->
<!--                                            <div class="form-group has-success">-->
<!--                                                <select class="form-control form-control-line" name="country">-->
<!---->
<!--                                                    --><?php //foreach ($country as $cn): ?>
<!--                                                        --><?php //
//                                                            if($cn['id'] == $user->country){
//                                                                $selec = 'selected';
//                                                            }else{
//                                                                $selec = '';
//                                                            }
//                                                        ?>
<!--                                                        <option --><?php //echo $selec; ?><!-- value="--><?php //echo $cn['id']; ?><!--">--><?php //echo $cn['name']; ?><!--</option>-->
<!--                                                    --><?php //endforeach ?>
<!---->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!--/span-->
<!--                            </div>-->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Puesto </label>
                                        <div class="col-md-9 controls">
                                            <div class="form-group has-success">
                                                <select class="form-control custom-select" name="puesto" id="puesto" aria-invalid="false">
                                                    <option selected><?php echo $user->puesto; ?></option>
                                                    <option value="Chief of Party">Chief of Party</option>
                                                    <option value="Deputy Chief of Party">Deputy Chief of Party</option>
                                                    <option value="Gerente">Gerente</option>
                                                    <option value="Especialista">Especialista</option>
                                                    <option value="Coordinador">Coordinador</option>
                                                    <option value="T??cnico/Asesor">T??cnico/Asesor</option>
                                                    <option value="Asistente">Asistente</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Area </label>
                                        <div class="col-md-9 controls">
                                            <div class="form-group has-success">
                                                <select class="form-control custom-select" name="area" id="area" aria-invalid="false">
                                                    <option selected><?php echo $user->area; ?></option>
                                                    <option value="Direcci??n">Direcci??n</option>
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
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <div class="form-check">
                                                <label class="custom-control custom-radio">
                                                    <input <?php if($user->role == "user"){echo "checked";}; ?> id="user" name="role" type="radio" value="user" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Tecnico</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input <?php if($user->role == "admin"){echo "checked";}; ?> id="admin" name="role" type="radio" value="admin" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Admin</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input <?php if($user->role == "Motorista"){echo "checked";}; ?> id="Motorista" name="role" type="radio" value="Motorista" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Motorista</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <?php if ($user->role == "user"): ?>
                                <?php $dis = 'block'; ?>
                            <?php else: ?>
                                <?php $dis = 'none'; ?>
                            <?php endif ?>

                            <div class="row user_role_area" style="display: <?php echo $dis; ?>">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Permiso de usuario</label>
                                        <div class="controls">

                                            <?php foreach ($power as $pw): ?>

                                                <?php foreach ($user_role as $role){
                                                        if ($role['action'] == $pw['id']) {
                                                            $check = 'checked';
                                                            break;
                                                        }else{
                                                            $check = '';
                                                        }
                                                    }
                                                ?>

                                                <label class="custom-control custom-checkbox">
                                                    <input <?php if(isset($check)) {echo $check;} else {echo "";} ?> type="checkbox" value="<?php echo $pw['power_id'] ?>" name="role_action[]" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description"><?php echo $pw['name'] ?></span> 
                                                </label>
                                            
                                            <?php endforeach ?>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                            
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>