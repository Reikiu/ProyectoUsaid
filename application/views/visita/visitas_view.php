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

    <!-- End Bread crumb and right sidebar toggle -->



    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">



            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Ver Visita </h4>

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
            <th>Nº personas</th>
            <th>Objetivo</th>
            <th>Estado</th>
            <th>Opciones</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Municipio</th>
            <th>Actividad</th>
            <th>Nombre Resposable</th>
            <th>Fecha Programada</th>
            <th>Nº personas</th>
            <th>Objetivo</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
        </tfoot>

        <?php foreach ($planificacion as $row){?>
            <?php foreach ($actividades as $a){
            if ($row->Id_Actividad == $a->Id_Actividad){?>
            <tr>
                <td><?php echo $row->Id_Planificacion?></td>
                <td><?php echo $row->municipio?></td>
                <td><?php echo $a->Nombre_Actividad?></td>
                <td><?php echo $row->Responsable?></td>
                <td><?php echo $row->fechaProgramada?></td>
                <td><?php echo $row->Personas_que_Viajan?></td>
                <td><?php echo $row->Objetivo?></td>
                <td><?php echo $row->Estado_Actividad?></td>
                <td>
            <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <?php echo "<a class='resultadoActividad' id='$row->Id_Planificacion' data-toggle='tooltip' data-original-title='Resultado'><i class='fa fa-file-text text-info m-r-10'></i></a>
                    <a class='CrearLogistica' id='$row->Id_Planificacion' data-toggle='tooltip' data-original-title='Crear Logistica'><i class='fa fa-file-text text-success m-r-10'></i></a>
                    <a class='editarVisita' id='$row->Id_Planificacion' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-pencil text-success m-r-10'></i></a>
                    <a class='eliminarVisita' id='$row->Id_Planificacion' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-trash text-danger m-r-10'></i></a>
                    ";?>
            <?php else: ?>
                <?php if(check_power(2)):?>
                    <?php echo "<a class='resultadoActividad' id='$row->Id_Planificacion' data-toggle='tooltip' data-original-title='Resultado'><i class='fa fa-file-text text-info m-r-10'></i></a>";?>
                <?php echo "<a class='CrearLogistica' id='$row->Id_Planificacion' data-toggle='tooltip' data-original-title='Crear Logistica'><i class='fa fa-file-text text-success m-r-10'></i></a>";?>
                    <a class='editarVisita' id='$row->Id_Planificacion' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-pencil text-success m-r-10'></i></a>";?>
                <?php endif; ?>
                    <?php if(check_power(3)):?>
                    <?php echo "<a class='eliminarVisita' id='$row->Id_Planificacion' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-trash text-danger m-r-10'></i></a>";?>
                <?php endif; ?>
            <?php endif ?>
                </td>
            </tr>
            <?php }}} ?>
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
<!--aqui termina la tabla -->
<!--ediccion moda-->
<div class="modal fade" id="modalEdicionVisita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edicion de Visita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="frmEdicionVisita">
<!--                donde va la informacion-->
                    <div class="clearfix"></div>


                    <input type="hidden" id="idVisita" name="idVisita">
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
                                    if ($i->role == "user")
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <div class="btn btn-success" id="modificarVisita">Guardar Modificacion</div>
            </div>
        </div>
    </div>
</div>




<!--aqui ira para resultado-->

<div class="modal fade" id="modalResultado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resultado de actividad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="frmResultado">
                    <!--                donde va la informacion-->

                    <input hidden type="text" id="idResultado" name="idResultado">

                    <form class="form-horizontal FormCatElec" id="resultadoForm"  role="form" enctype="multipart/form-data" method="post">
                        <div class="row card-body">
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label>Municipio</label>
                                <select disabled name="municipio1" id="municipio1" class="form-control all-elements-tooltip"  >
                                    <?php
                                    foreach ($actividades as $i)
                                        echo "<option  value='$i->Municipio'>$i->Municipio</option>";
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!--                    <div class="form-column col-md-6"><div class="form-group"></div></div>-->
                        <!--                    <div class="clearfix"></div>-->
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label>Responsable</label>
                                <select disabled  name="Responsable" id="responsable1" class="form-control all-elements-tooltip"  >
                                    <?php
                                    foreach ($user as $i) {
                                        if ($i->role == "user")
                                            echo "<option  value='$i->first_name $i->last_name'>$i->first_name $i->last_name</option>";
                                    }?>
                                </select>
                            </div>
                        </div>
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label>Fecha programada</label>
                                <input disabled class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha programada" required name="fechaProgramada" id="fechaProgramada1" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
                            </div>
                        </div>
                        <div class="form-column col-md-6">
                            <div  class="form-group">
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
                            <div class="form-column col-md-6">
                                <div hidden class="form-group">
                                    <label>Actividad</label>
                                    <select  name="idVisita" id="nombreActividad1" class="form-control all-elements-tooltip"  >
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
                            <textarea rows="4" cols="50"   placeholder="Ingrese agenda del viaje"  name="Agenda" data-toggle="tooltip" data-placement="top" title="Ingrese agenda.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <textarea rows="4" cols="50" placeholder="Ingrese observaciones"  name="Observaciones" data-toggle="tooltip" data-placement="top" title="Ingrese observaciones.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
                        </div>
                    </div>

                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese participantes municipalidades Mujeres"  name="partMunicM" data-toggle="tooltip" data-placement="top" title="Ingrese participantes municipalidades F.(solamente numeros)" pattern="{1,1000}" maxlength="50">
                        </div>
                    </div>

                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese participantes municipalidades Hombres"  name="partMunicH" data-toggle="tooltip" data-placement="top" title="Ingrese participantes municipalidades M.(solamente numeros)" pattern="{1,1000}" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-6"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese participantes otros de Mujeres"  name="partOtrosF" data-toggle="tooltip" data-placement="top" title="Ingrese participantes municipalidades F.(solamente numeros)" pattern="{1,1000}" maxlength="50">
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese participantes otros de Hombres"  name="partOtrosM" data-toggle="tooltip" data-placement="top" title="Ingrese participantes municipalidades M.(solamente numeros)" pattern="{1,1000}" maxlength="50">
                        </div>
                    </div>


                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <input class="form-control all-elements-tooltip" type="number" step="2" placeholder="Ingrese Horas reales invertidas"  name="hReaInvertidas" data-toggle="tooltip" data-placement="top" title="Ingrese Horas reales invertidad.(solamente numeros)." pattern="{1,50}" maxlength="50">

                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                           <textarea rows="4" cols="50" placeholder="Ingrese actividades realizadas"  name="acividadRea" data-toggle="tooltip" data-placement="top" title="Ingrese actividades realizadas" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
                        </div>
                    </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">


                            <label>Ingrese fecha proxima sesion</label>
                            <input class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha proxima session"  name="fechaProSesion" data-toggle="tooltip" data-placement="top" title="Ingrese fecha proxima session" maxlength="50">
                        </div>
                    </div>
<!--                    <div class="form-column col-md-12"><div class="form-group"></div></div>-->
<!--                    <div class="clearfix"></div>-->
<!--                    <div class="form-column col-md-12">-->
<!--                        <div class="form-group">-->
<!---->
<!---->
<!--                            <label>Ingrese documento adjunto</label>-->
<!--                            <input class="form-control all-elements-tooltip" type="file" placeholder="Ingrese documento adjunto" name="archivo" data-toggle="tooltip" data-placement="top" title="Ingrese documento adjunto" maxlength="50">-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">


                            <label>Ingrese fecha registro</label>
                            <input class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha registro"  name="fechaRegistro" data-toggle="tooltip" data-placement="top" title="Ingrese fecha registro" maxlength="50">
                        </div>
                    </div>

                    <br>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">

                            <textarea rows="4" cols="50" placeholder="Acuerdos/Resultados"  name="Acuerdos" data-toggle="tooltip" data-placement="top" title="Ingrese acuerdos(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
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

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <div class="btn btn-success" id="btnGuardarResultado">Guardar</div>
            </div>
        </div>
    </div>
</div>







<!--aqui ira la parte de crear logistica-->
<div class="modal fade" id="modaLogistica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Logistica</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="frmLogistica">
                    <!--                donde va la informacion-->

                    <form class="form-horizontal FormCatElec" id="logisticaForm" role="form" method="post" data-form="save">
                        <div class="row card-body">
                            <div class="form-column col-md-12"><div class="form-group"></div></div>

                            <div class="clearfix"></div>

                            <!--    <div class="form-column col-md-6">
                                 <div class="form-group">
                               <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese Nombre de Conductor" required name="conductor-fullname" data-toggle="tooltip" data-placement="top" title="Ingrese conductor.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                             </div>
                           </div> -->
                            <div class="form-column col-md-6">
                                <div class="form-group">
                                    <label>Municipio</label>
                                    <select disabled name="municipio2" id="municipio2" class="form-control all-elements-tooltip"  >
                                        <?php
                                        foreach ($actividades as $i)
                                            echo "<option  value='$i->Municipio'>$i->Municipio</option>";
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-column col-md-6">
                                <div class="form-group">
                                    <label>Responsable</label>
                                    <select disabled name="Responsable" id="responsable2" class="form-control all-elements-tooltip"  >
                                        <?php
                                        foreach ($user as $i) {
                                            if ($i->role == "user")
                                                echo "<option  value='$i->first_name $i->last_name'>$i->first_name $i->last_name</option>";
                                        }?>
                                    </select>
                                </div>
                            </div>

                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label>Fecha programada</label>
                                <input disabled class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha programada" required id="fechaProgramada2" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
                            </div>
                        </div>
                            <!--   <div class="form-column col-md-6"><div class="form-group"></div></div>
                                  <div class="clearfix"></div> -->
                            <div class="form-column col-md-6">
                                <div class="form-group">
                                    <label>Actividad</label>
                                    <select disabled  name="actividad" id="actividad" class="form-control all-elements-tooltip"  >
                                        <?php
                                        foreach ($planificacion as $i)
                                            foreach ($actividades as $a)
                                                if ($i->Id_Actividad == $a->Id_Actividad) {
                                                    echo "<option  value='$i->Id_Planificacion'>$a->Nombre_Actividad</option>";
                                                }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-column col-md-6">
                                <div class="form-group">
                                    <label>Actividad</label>
                                    <select hidden name="actividad" id="actividad" class="form-control all-elements-tooltip"  >
                                        <?php
                                        foreach ($planificacion as $i)
                                            foreach ($actividades as $a)
                                                if ($i->Id_Actividad == $a->Id_Actividad) {
                                                    echo "<option  value='$i->Id_Planificacion'>$a->Nombre_Actividad</option>";
                                                }?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-column col-md-12"><div class="form-group"></div></div>
                            <div class="clearfix"></div>
                            <div class="form-column col-md-12">
                                <div class="form-group">
                                    <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese Nombre de Lugar" required name="Lugar" data-toggle="tooltip" data-placement="top" title="Ingrese Lugar.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                            </div>

                            <div class="form-column col-md-12"><div class="form-group"></div></div>
                            <div class="clearfix"></div>
                            <div class="form-column col-md-12">
                                <div class="form-group">
                                    <textarea rows="4" cols="50"  placeholder="Ingrese Equipo y Material Requerido " required name="Equipo_Y_Material_Requerido" data-toggle="tooltip" data-placement="top" title="Ingrese Equipo y Material requerido.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50"></textarea>
                                </div>
                            </div>
                            <div class="form-column col-md-12"><div class="form-group"></div></div>
                            <div class="clearfix"></div>
                            <div class="form-column col-md-12">
                                <div class="form-group">
                                    <label>Ingrese Hora Salida de oficina</label>
                                    <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese Hora Salida de oficina" required name="Hora_Salida_Oficina" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Salida de oficina" maxlength="50">
                                </div>
                            </div>
                            <div class="form-column col-md-12"><div class="form-group"></div></div>
                            <div class="clearfix"></div>
                            <div class="form-column col-md-12">
                                <div class="form-group">
                                    <label>Ingrese Hora Retorno a oficina</label>
                                    <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese Hora Retorno de oficina" required name="Hora_Retorno_Oficina" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
                                </div>
                            </div>


                            <div class="form-column col-md-12"><div class="form-group"></div></div>
                            <div class="clearfix"></div>
                            <div class="form-column col-md-12">
                                <div class="form-group">
                                    <label>Ingrese Hora Inicio de Sesion</label>
                                    <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese hora inicio de sesion:" required name="Hora_Inicio_Sesion" data-toggle="tooltip" data-placement="top" title="Ingrese hora inicio de sesion" maxlength="50">
                                </div>
                            </div>
                            <div class="form-column col-md-12"><div class="form-group"></div></div>
                            <div class="clearfix"></div>
                            <div class="form-column col-md-12">
                                <div class="form-group">
                                    <label>Ingrese Hora Fin de Sesion</label>
                                    <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese hora fin de sesion" required name="Hora_Fin_Sesion" data-toggle="tooltip" data-placement="top" title="Ingrese hora fin de sesion" maxlength="50">
                                </div>
                            </div>

                            <!-- marcar como ejecuta ira aqui -->

<!--                            <div class="form-column col-md-12"><div class="form-group"></div></div>-->
<!--                            <div class="clearfix"></div>-->
<!---->
<!--                            <div class="form-column col-md-3">-->
<!--                                <div class="form-group">-->
<!--                                    <button  class="btn btn-success" id="btnGuardar4">Guardar</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-column col-md-3">-->
<!--                                <div class="form-group">-->
<!--                                    <button  class="btn btn-primary" id="btnGuardar5" >Guardar y Salir</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="clearfix"></div>-->


                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <div class="btn btn-success" id="btnGuardarLogistica">Guardar</div>
            </div>
        </div>
    </div>
</div>



