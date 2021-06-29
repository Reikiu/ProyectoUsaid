<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Tabla Logistica</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"">Home</a></li>
                <li class="breadcrumb-item active">tabla Logistica</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">

                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Bread crumb and right sidebar toggle -->



    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">



            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Ver Logistica </h4>

                </div>
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <div class="card-body">

                                    <div class="table-responsive scrollspy-example" style="height: 350px">
                                        <table id="example23" class="display responsive nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">

        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Municipio</th>
            <th scope="col">Actividad</th>

            <th scope="col">Responsable</th>
            <th scope="col">Nombre de Lugar</th>
            <th scope="col">Equipo y Material</th>
            <th scope="col">Hora Salida de Oficina</th>
            <th scope="col">Hora Retorno de Oficiona</th>
            <th scope="col">Hora Inicio de Sesion</th>
            <th scope="col">Hora Fin de Sesion</th>
            <th scope="col">Accciones</th>
        </tr>
        </thead>
<!--        <tfoot class="thead-dark">-->
<!--        <tr>-->
<!--            <th>ID</th>-->
<!--            <th>Nombre de Lugar</th>-->
<!--            <th>Equipo y Material</th>-->
<!--            <th>Hora Salida de Oficina</th>-->
<!--            <th>Hora Retorno de Oficiona</th>-->
<!--            <th>Hora Inicio de Seccion</th>-->
<!--            <th>Hora Fin de Seccion</th>-->
<!--            <th>Accciones</th>-->
<!--        </tr>-->
<!--        </tfoot>-->

        <?php foreach ($detalle_de_actividad as $row){  ?>
            <?php foreach ($actividades as $a){
                foreach ($planificacion as $roww){
            if ($row->actividad == $roww->Id_Planificacion && $roww->Id_Actividad ==  $a->Id_Actividad){?>
            <tr>
                <td scope="row"><?php echo $row->Id_Detalle ?></td>
                <td><?php echo $a->Municipio?></td>
                <td><?php echo $a->Nombre_Actividad?></td>

                <td><?php echo $roww->Responsable?></td>
                <td><?php echo $row->Lugar?></td>
                <td><?php echo $row->Equipo_Y_Material_Requerido?></td>
                <td><?php echo $row->Hora_Salida_Oficina?></td>
                <td><?php echo $row->Hora_Retorno_Oficina?></td>
                <td><?php echo $row->Hora_Inicio_Sesion?></td>
                <td><?php echo $row->Hora_Fin_Sesion?></td>
                <td>
                <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <?php echo "<a class='editarLogistica' id='$row->Id_Detalle' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-pencil text-success m-r-10'></i></a>
                    <a class='eliminarLogistica' id='$row->Id_Detalle' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-trash text-danger m-r-10'></i></a>" ?>
                <?php else: ?>
                    <?php if(check_power(2)):?>
                       <?php echo "<a class='editarLogistica' id='$row->Id_Detalle' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-pencil text-success m-r-10'></i></a>";?>
                    <?php endif; ?>
                    <?php if(check_power(3)):?>
                    <?php echo "<a class='eliminarLogistica' id='$row->Id_Detalle' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-trash text-danger m-r-10'></i></a>";?>
                    <?php endif; ?>
                <?php endif ?>
                </td>
            </tr>
            <?php
        }}}}
        ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Page Content -->

            </div>
        </div>
    </div>
</div>
<!--ediccion moda-->
<div class="modal fade" id="modalEdicionLogistica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edicion de Logistica</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="frmEdicionLogistica">




                    <div class="clearfix"></div>
                    <input type="hidden" id="idLogistica" name="idLogistica">
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese Nombre de Lugar" required name="Lugar" id="Lugar" data-toggle="tooltip" data-placement="top" title="Ingrese Lugar.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                        </div>
                    </div>

                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese Equipo y Material Requerido " required name="Equipo_Y_Material_Requerido" id="Equipo_Y_Material_Requerido" data-toggle="tooltip" data-placement="top" title="Ingrese Equipo y Material requerido.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <label>Ingrese Hora Salida de oficina</label>
                            <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese Hora Salida de oficina" required name="Hora_Salida_Oficina" id="Hora_Salida_Oficina" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Salida de oficina" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <label>Ingrese Hora Retorno a oficina</label>
                            <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese Hora Retorno de oficina" required name="Hora_Retorno_Oficina" id="Hora_Retorno_Oficina" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
                        </div>
                    </div>


                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <label>Ingrese Hora Inicio de Sesion</label>
                            <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese hora inicio de sesion:" required name="Hora_Inicio_Sesion" id="Hora_Inicio_Sesion" data-toggle="tooltip" data-placement="top" title="Ingrese hora inicio de sesion" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <label>Ingrese Hora Fin de Sesion</label>
                            <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese hora fin de sesion" required name="Hora_Fin_Sesion" id="Hora_Fin_Sesion" data-toggle="tooltip" data-placement="top" title="Ingrese hora fin de sesion" maxlength="50">
                        </div>
                    </div>

                    <!-- marcar como ejecuta ira aqui -->

                    <div class="clearfix"></div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <div class="btn btn-success" id="modificarLogistica">Guardar Modificacion</div>
            </div>
        </div>
    </div>
</div>

<!--Quitar campo de resultado-->

<!--trabar en mover logistica en visita -->