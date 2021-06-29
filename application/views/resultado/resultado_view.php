<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Tabla Resultado</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"">Home</a></li>
                <li class="breadcrumb-item active">Tabla Resultado</li>
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
                    <h4 class="m-b-0 text-white"> Ver Resultado </h4>

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
                                                <th>Nombre Resposable</th>
                                                <th>Fecha Programada</th>
                                                <th>Agenda</th>
                                                <th>Observaciones</th>
                                                <th>Participantes Mun Femenino</th>
                                                <th>Participantes Mun Masculino</th>
                                                <th>Participantes Otros Femenino</th>
                                                <th>Participantes Otros Masculino</th>
                                                <th>Horas Reales Invertidas</th>
                                                <th># Actividades</th>
                                                <th>Fecha proxima sesion</th>
                                                <th>Fecha Registro</th>
                                                <th>Acuerdos/Resultado</th>
                                                <th>Acciones</th>

                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Municipio</th>
                                                <th>Actividad</th>
                                                <th>Nombre Resposable</th>
                                                <th>Fecha Programada</th>
                                                <th>Agenda</th>
                                                <th>Observaciones</th>
                                                <th>Participantes Mun Femenino</th>
                                                <th>Participantes Mun Masculino</th>
                                                <th>Participantes Otros Femenino</th>
                                                <th>Participantes Otros Masculino</th>
                                                <th>Horas Reales Invertidas</th>
                                                <th># Actividades</th>
                                                <th>Fecha proxima sesion</th>
                                                <th>Fecha Registro</th>
                                                <th>Acuerdos/Resultado</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </tfoot>

                                            <?php foreach ($planificacion as $row){?>
                                            <?php foreach ($actividades as $roww){?>
                                                <?php foreach ($actividad_finalizada as $a){
                                                    if ($row->Id_Planificacion == $a->idVisita && $roww->Id_Actividad == $row->Id_Actividad){?>
                                                        <tr>
                                                            <td><?php echo $a->idResultado?></td>
                                                            <td><?php echo $row->municipio?></td>
                                                            <td><?php echo $roww->Nombre_Actividad?></td>
                                                            <td><?php echo $row->Responsable?></td>
                                                            <td><?php echo $row->fechaProgramada?></td>
                                                            <td><?php echo $a->Agenda?></td>
                                                            <td><?php echo $a->Observaciones?></td>
                                                            <td><?php echo $a->partMunicM?></td>
                                                            <td><?php echo $a->partMunicH?></td>
                                                            <td><?php echo $a->partOtrosF?></td>
                                                            <td><?php echo $a->partOtrosM?></td>
                                                            <td><?php echo $a->hReaInvertidas?></td>
                                                            <td><?php echo $a->acividadRea?></td>
                                                            <td><?php echo $a->fechaProSesion?></td>
                                                            <td><?php echo $a->fechaRegistro?></td>
                                                            <td><?php echo $a->Acuerdos?></td>
                                                            <td>
                                                                <?php if ($this->session->userdata('role') == 'admin'): ?>
                                                                    <?php echo "
                                                                        <a class='editarResultado' id='$a->idResultado' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-pencil text-success m-r-10'></i></a>
                                                                        <a class='eliminarResultado' id='$a->idResultado' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-trash text-danger m-r-10'></i></a>
                                                                                    ";?>
                                                                <?php else: ?>
                                                                    <?php if(check_power(2)):?>
                                                                        <?php echo "<a class='editarResultado' id='$a->idResultado' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-pencil text-success m-r-10'></i></a>";?>
                                                                    <?php endif; ?>
                                                                    <?php if(check_power(3)):?>
                                                                        <?php echo "<a class='eliminarResultado' id='$a->idResultado' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-trash text-danger m-r-10'></i></a>";?>
                                                                    <?php endif; ?>
                                                                <?php endif ?>
                                                            </td>
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


<!--aqui termina lo de la tabla-->
<!--ediccion moda-->
<div class="modal fade" id="modalEdicionResultado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edicion de Resultado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="frmEdicionResultado">
                    <!--                donde va la informacion-->
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <input hidden type="text" id="idResultado" name="idResultado">
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <label>Actividad</label>
                            <select disabled name="idVisita" id="nombreActividad1" class="form-control all-elements-tooltip"  >
                                <?php
                                foreach ($planificacion as $i)
                                    foreach ($actividades as $a)
                                        if ($i->Id_Actividad == $a->Id_Actividad) {
                                            echo "<option value='$i->Id_Planificacion'>$a->Nombre_Actividad</option>";
                                        }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <textarea rows="4" cols="50"   placeholder="Ingrese agenda del viaje"  name="Agenda" id="Agenda" data-toggle="tooltip" data-placement="top" title="Ingrese agenda.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <textarea rows="4" cols="50" placeholder="Ingrese observaciones"  name="Observaciones" id="Observaciones" data-toggle="tooltip" data-placement="top" title="Ingrese observaciones.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
                        </div>
                    </div>

                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese participantes municipalidades Mujeres"  name="partMunicM" id="partMunicM" data-toggle="tooltip" data-placement="top" title="Ingrese participantes municipalidades Mujeres.(solamente numeros)" pattern="{1,1000}" maxlength="50">
                        </div>
                    </div>

                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese participantes municipalidades Hombres"  name="partMunicH" id="partMunicH" data-toggle="tooltip" data-placement="top" title="Ingrese participantes municipalidades Hombres.(solamente numeros)" pattern="{1,1000}" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-6"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese participantes otros de Mujeres"  name="partOtrosF" id="partOtrosF" data-toggle="tooltip" data-placement="top" title="Ingrese participantes otros de Mujeres.(solamente numeros)" pattern="{1,1000}" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese participantes otros de Hombres"  name="partOtrosM" id="partOtrosM" data-toggle="tooltip" data-placement="top" title="Ingrese participantes otros de Hombres.(solamente numeros)" pattern="{1,1000}" maxlength="50">
                        </div>
                    </div>


                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese Horas reales invertidas"  name="hReaInvertidas" id="hReaInvertidas" data-toggle="tooltip" data-placement="top" title="Ingrese Horas reales invertidad.(solamente numeros)." pattern="{1,50}" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">


                            <textarea rows="4" cols="50" placeholder="Ingrese actividades realizadas"  name="acividadRea" id="acividadRea" data-toggle="tooltip" data-placement="top" title="Ingrese actividades realizadas" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">


                            <label>Ingrese fecha proxima sesion</label>
                            <input class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha proxima session"  name="fechaProSesion" id="fechaProSesion" data-toggle="tooltip" data-placement="top" title="Ingrese fecha proxima session" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">


                            <label>Ingrese fecha registro</label>
                            <input class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha registro"  name="fechaRegistro" id="fechaRegistro" data-toggle="tooltip" data-placement="top" title="Ingrese fecha registro" maxlength="50">
                        </div>
                    </div>

                    <br>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <textarea rows="4" cols="50" placeholder="Acuerdos/Resultados"  name="Acuerdos" id="Acuerdos" data-toggle="tooltip" data-placement="top" title="Ingrese acuerdos(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
                        </div>
                    </div>

                    <!--        <div class="form-column col-md-6"><div class="form-group"></div></div>-->
                    <!--        <div class="clearfix"></div>-->
                    <!--        <div class="form-column col-md-6">-->
                    <!--            <div  id="frmEdicionLogistica">-->
                    <!--            <input type="hidden" id="id" name="id">-->
                    <!--            <div class="form-group">-->
                    <!--                <select class="form-control all-elements-tooltip"  name="estadoActividad">-->
                    <!--                    <option value="0" selected>Elija Estado Actividad</option>-->
                    <!--                    <option value="Programada">Programada</option>-->
                    <!--                    <option value="Ejecutada">Ejecutada</option>-->
                    <!--                    <option value="Cancelada">Cancelada</option>-->
                    <!--                </select>-->
                    <!--            </div>-->
                    <!--            <div class="btn btn-success" id="modificarResultado">Cambiar Estado</div>  <br> <br>-->
                    <!--        </div>-->
                    <!--        </div>-->


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <div class="btn btn-success" id="modificarResultado">Guardar Modificacion</div>
            </div>
        </div>
    </div>
</div>
<!--fin de edicion-->