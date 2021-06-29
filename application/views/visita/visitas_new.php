<div class="container-fluid">

    <!-- Bread crumb and right sidebar toggle -->

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Visita</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar nueva Visita</li>
            </ol>
        </div>

    </div>

    <!-- End Bread crumb and right sidebar toggle -->



    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">



            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Agregar nueva Visita </h4>

                </div>
                <div class="card-body">
<form class="form-horizontal FormCatElec" id="visitaForm" role="form" method="post"  enctype="multipart/form-data">

    <div class="form-group row">
        <div class="col-md-12"><h3>Registro de Visita</h3></div>

        <div class="clearfix"></div>



        <div class="form-column col-md-6">
            <div class="form-group">
                <select name="municipio" class="form-control all-elements-tooltip"  >
                    <option value="0">Elija Municipio</option>
                    <?php
                    foreach ($actividades as $i)
                        echo "<option  value='$i->Municipio'>$i->Municipio</option>";
                    ?>
                </select>
            </div>
        </div>
        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>

        <div class="form-column col-md-6">
            <div class="form-group">
                <select name="nombreActividad" class="form-control all-elements-tooltip"  >
                    <option selected disabled>Elija nombre de la Actividad</option>
                    <?php
                    foreach ($actividades as $i)
                        echo "<option  value='$i->Id_Actividad'>$i->Nombre_Actividad</option>";
                    ?>
                </select>
            </div>
        </div>
        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <label for="">Objetivo de la visita</label>
            <div class="form-group">
                <textarea rows="3" cols="50" name="Objetivo" placeholder="Escriba el Objetivo de la visita"></textarea>
            </div>
        </div>

        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <label>Ingrese fecha programada</label>
                <input class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha programada" required name="fechaProgramada" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
            </div>
        </div>

        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <select class="form-control all-elements-tooltip"  name="Estado_Actividad">
                    <option value="0" selected>Elija Estado Actividad</option>
                    <option value="Programada">Programada</option>
                    <option value="Ejecutada">Ejecutada</option>
                    <option value="Cancelada">Cancelada</option>
                </select>
            </div>
        </div>
        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <select name="Responsable" class="form-control all-elements-tooltip"  >
                    <option value="0">Elija el nombre responsable</option>
                    <?php
                    foreach ($user as $i) {
                        if ($i->role == "user")
                        echo "<option  value='$i->first_name $i->last_name'>$i->first_name $i->last_name</option>";
                    }?>
                </select>
            </div>
        </div>


        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese numero de personas que viajan" name="Personas_que_Viajan" data-toggle="tooltip" data-placement="top" title="Ingrese impacto.(solamente letras)" pattern="{1,50}" maxlength="50">
            </div>
        </div>
<!--        <div class="form-column col-md-6"><div class="form-group"></div></div>-->
<!--        <div class="clearfix"></div>-->
<!--        <div class="form-column col-md-6">-->
<!--            <div class="form-group">-->
<!--                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese resultado"  name="resultado" data-toggle="tooltip" data-placement="top" title="Ingrese resultado.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">-->
<!--            </div>-->
<!--        </div>-->

        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-3">
            <div class="form-group">
                <button class="btn btn-success" id="btnGuardar2">Guardar</button>
            </div>
        </div>
        <div class="form-column col-md-3">
            <div class="form-group">
                <button  class="btn btn-primary" id="btnGuardar3">Guardar y Crear Logistica</button>
            </div>
        </div>

        <div class="clearfix"></div>


    </div>
</form>
</div>
</div>

        </div>
    </div>
</div>

<!-- End Page Content -->

</div>

<!--actividades realizadas tiene que ir en textarea-->
<!--agregar el campo resulatado y en el visita eliminarlo-->
<!--que muestre el responsable en logistica y resultado-->
