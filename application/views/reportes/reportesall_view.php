<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Tabla Visita</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"">Home</a></li>
                <li class="breadcrumb-item active">Tabla Visita</li>
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

    <div class="row">
        <div class="col-lg-12">



            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Reportes general horas y visitas</h4>

                </div>
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <div class="card-body">

                                    <div class="table-responsive scrollspy-example" style="height: 350px">
                                        <table id="example23" id="dataCliente" class="display responsive nowrap table table-hover table-striped table-bordered " cellspacing="0" width="100%">
                                            <thead class="">
                                            <tr>
                                                <th>ID</th>
                                                <th>Municipio</th>
                                                <th>Actividad</th>
                                                <th>Documento</th>
                                                <th>Fecha Inicio</th>
                                                <th>Fecha fin</th>
                                                <th>Resultado</th>
                                                <th>Impacto</th>
                                                <th>Objetivo</th>
                                                <th>Fecha programada</th>
                                                <th>Responsable</th>
                                                <th>Horas invertidas</th>
                                                <th>Participantes muni hombres</th>
                                                <th>Participantes muni mujeres</th>
                                                <th>Participantes otros hombres</th>
                                                <th>Participantes otros mujeres</th>
                                                <th>Actividades realizadas</th>
                                                <th>Resultado/acuerdos</th>
                                                <th>Observaciones</th>
                                                <th>Status</th>
                                                <th>Fecha proxima sesion</th>

                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Municipio</th>
                                                <th>Actividad</th>
                                                <th>Documento</th>
                                                <th>Fecha Inicio</th>
                                                <th>Fecha fin</th>
                                                <th>Resultado</th>
                                                <th>Impacto</th>
                                                <th>Objetivo</th>
                                                <th>Fecha programada</th>
                                                <th>Responsable</th>
                                                <th>Horas invertidas</th>
                                                <th>Participantes muni hombres</th>
                                                <th>Participantes muni mujeres</th>
                                                <th>Participantes otros hombres</th>
                                                <th>Participantes otros mujeres</th>
                                                <th>Actividades realizadas</th>
                                                <th>Resultado/acuerdos</th>
                                                <th>Observaciones</th>
                                                <th>Status</th>
                                                <th>Fecha proxima sesion</th>
                                            </tr>
                                            </tfoot>

                                            <?php foreach ($planificacion as $row){?>
                                                <?php foreach ($actividades as $roww){?>
                                                    <?php foreach ($actividad_finalizada as $a){
                                                        if ($row->Id_Planificacion == $a->idVisita && $roww->Id_Actividad == $row->Id_Actividad){?>
                                                            <tr>
                                                                <td><?php echo $row->Id_Planificacion?></td>
                                                                <td><?php echo $row->municipio?></td>
                                                                <td><?php echo $roww->Nombre_Actividad?></td>
                                                                <td><?php echo $roww->Tipo_Documento?></td>
                                                                <td><?php echo $roww->Fecha_Inicio?></td>
                                                                <td><?php echo $roww->Fecha_Fin?></td>
                                                                <td><?php echo $roww->resultado?></td>
                                                                <td><?php echo $roww->impacto?></td>
                                                                <td><?php echo $row->Objetivo?></td>
                                                                <td><?php echo $row->fechaProgramada?></td>
                                                                <td><?php echo $row->Responsable?></td>
                                                                <td><?php echo $a->hReaInvertidas?></td>
                                                                <td><?php echo $a->partMunicH?></td>
                                                                <td><?php echo $a->partMunicM?></td>
                                                                <td><?php echo $a->partOtrosM?></td>
                                                                <td><?php echo $a->partOtrosF?></td>
                                                                <td><?php echo $a->acividadRea?></td>
                                                                <td><?php echo $a->Acuerdos?></td>
                                                                <td><?php echo $a->Observaciones?></td>
                                                                <td><?php echo $row->Estado_Actividad?></td>
                                                                <td><?php echo $a->fechaProSesion?></td>
                                                            </tr>
                                                        <?php }}}} ?>
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