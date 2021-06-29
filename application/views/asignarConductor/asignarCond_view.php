<style type="text/css">
    .camb{
        width: 200px;
    }
</style>

<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Tabla asignar conductor</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"">Home</a></li>
                <li class="breadcrumb-item active">tabla  asignar conductor</li>
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
                    <h4 class="m-b-0 text-white">Asignar conductor </h4>

                </div>
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <div class="card-body">

                                    <div class="table-responsive scrollspy-example" style="height: 350px">
                                        <table id="example23" class="display responsive nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">

        <thead>
        <tr>
            <th>ID</th>
            <th>Fecha Programada</th>
            <th>Municipio</th>
            <th class="camb">Actividad</th>
            <th>Nombre Resposable</th>
            <th>Nº personas</th>
            <th>Objetivo</th>
            <th>Estado</th>
            <th>Resultado</th>
            <?php foreach ($planificacion as $row){
            foreach ($detalle_de_actividad as $roww){?>
            <?php if ($row->Id_Planificacion == $roww->actividad && $row->Estado_Actividad == "Programada"){?>
            <th>Nombre de Lugar</th>
            <th>Hora Salida de Oficina</th>
            <th>Hora Retorno de Oficiona</th>
            <th>Hora Inicio de Sesion</th>
            <th>Hora Fin de Sesion</th>
            <?php }}}?>
            <th>Conductor</th>
            <th width="200px">Opciones</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Fecha Programada</th>
            <th>Municipio</th>
            <th class="camb">Actividad</th>
            <th>Nombre Resposable</th>
            <th>Nº personas</th>
            <th>Objetivo</th>
            <th>Estado</th>
            <th>Resultado</th>
            <?php foreach ($planificacion as $row){
             foreach ($detalle_de_actividad as $roww){?>
            <?php if ($row->Id_Planificacion == $roww->actividad && $row->Estado_Actividad == "Programada"){?>
            <th>Nombre de Lugar</th>
            <th>Hora Salida de Oficina</th>
            <th>Hora Retorno de Oficiona</th>
            <th>Hora Inicio de Sesion</th>
            <th>Hora Fin de Sesion</th>
            <th>Conductor</th>
            <th>Opciones</th>
            <?php }}}?>
        </tr>
        </tfoot>
        <?php

        foreach ($planificacion as $row){
        foreach ($actividades as $a){
            if ($row->Estado_Actividad == "Programada" && $row->Id_Actividad == $a->Id_Actividad){
        ?>
            <tr>
                <td><?php echo $row->Id_Planificacion?></td>
                <td><?php echo $row->fechaProgramada?></td>
                <td><?php echo $row->municipio?></td>
                <td class="camb"><?php echo $a->Nombre_Actividad?></td>
                <td><?php echo $row->Responsable?></td>
                <td><?php echo $row->Personas_que_Viajan?></td>
                <td><?php echo $row->Objetivo?></td>
                <td><?php echo $row->Estado_Actividad?></td>
                <td><?php echo $a->resultado?></td>
                <?php foreach ($detalle_de_actividad as $roww){?>
                        <?php if ($row->Id_Planificacion == $roww->actividad){?>
                        <td><?php echo $roww->Lugar?></td>
                        <td><?php echo $roww->Hora_Salida_Oficina?></td>
                        <td><?php echo $roww->Hora_Retorno_Oficina?></td>
                        <td><?php echo $roww->Hora_Inicio_Sesion?></td>
                        <td><?php echo $roww->Hora_Fin_Sesion?></td>
                    <?php }}?>
                <td><?php echo $row->conductor?></td>

                <td>
                    <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <?php echo "<div class='btn btn-success btn-sm asignarConductor' id='$row->Id_Planificacion'>Asignar conductor</div>" ?>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('role') == 'Motorista'): ?>
                        <?php echo "<div class='btn btn-success btn-sm asignarConductor' id='$row->Id_Planificacion'>Asignar conductor</div>" ?>
                    <?php endif; ?>
                </td>
                <?php }}}?>
            </tr>


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
</div> <!-- fin de la tabla -->

<div class="modal fade" id="modalAsignarConductor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Asignar conductor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div >
            <div class="modal-body">
                <div class="row" id="frmAsignarConductor">
                    <div hidden>
                    <div class="clearfix"></div>


                    <input type="hidden" id="idConductor" name="idConductor">
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <select name="municipio" id="municipio" class="form-control all-elements-tooltip"  >
                                <option value="0">Elija Municipio</option>
                                <?php
                                foreach ($actividades as $i)
                                    echo "<option  value='$i->Municipio'>$i->Municipio</option>";
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>

                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <select name="nombreActividad" id="nombreActividad" class="form-control all-elements-tooltip"  >
                                <option selected disabled>Elija nombre de la Actividad</option>
                                <?php
                                foreach ($actividades as $i)
                                    echo "<option  value='$i->Id_Actividad'>$i->Nombre_Actividad</option>";
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <label for="">Objetivo de la vista</label>
                        <div class="form-group">
                            <textarea rows="3" cols="50" name="Objetivo" id="Objetivo" placeholder="Escriba el Objetivo de la visita"></textarea>
                        </div>
                    </div>

                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <label>Ingrese fecha programada</label>
                            <input class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha programada" required name="fechaProgramada" id="fechaProgramada" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
                        </div>
                    </div>

                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <select class="form-control all-elements-tooltip"  name="Estado_Actividad" id="Estado_Actividad">
                                <option value="0" selected>Elija Estado Actividad</option>
                                <option value="Programada">Programada</option>
                                <option value="Ejecutada">Ejecutada</option>
                                <option value="Cancelada">Cancelada</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <select name="Responsable" id="Responsable" class="form-control all-elements-tooltip"  >
                                <option value="0">Elija el nombre responsable</option>
                                <?php
                                foreach ($user as $i) {
                                    if ($i->role == "user" || $i->role =="Motorista")
                                        echo "<option  value='$i->first_name $i->last_name'>$i->first_name $i->last_name</option>";
                                }?>
                            </select>
                        </div>
                    </div>


                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese numero de personas que viajan" name="Personas_que_Viajan" id="Personas_que_Viajan" data-toggle="tooltip" data-placement="top" title="Ingrese numero de personas que viajan" pattern="{1,50}" maxlength="50">
                        </div>
                    </div>
<!--                    <div class="form-column col-md-12"><div class="form-group"></div></div>-->
<!--                    <div class="clearfix"></div>-->
<!--                    <div class="form-column col-md-12">-->
<!--                        <div class="form-group">-->
<!--                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese resultado"  name="resultado" id="resultado" data-toggle="tooltip" data-placement="top" title="Ingrese resultado.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">-->
<!--                        </div>-->
<!--                    </div>-->
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                        <label><span class="glyphicon glyphicon-user"></span>&nbsp;Conductor</label>
                        <select name="conductor" id="conductor" class="form-control all-elements-tooltip"  >
                            <option disabled>Elija nombre del conductor</option>
                            <?php
                            foreach ($user as $i) {
                                if ($i->role =="Motorista")
                                    echo "<option  value='$i->first_name $i->last_name'>$i->first_name $i->last_name</option>";
                            }?>
                        </select>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <div class="btn btn-success" id="asignarConductor">Guardar Modificacion</div>
            </div>
        </div>
    </div>
</div>

<!--faltarian campos de logistica-->