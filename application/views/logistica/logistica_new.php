<div class="container-fluid">

    <!-- Bread crumb and right sidebar toggle -->

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">logistica</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar nueva logistica</li>
            </ol>
        </div>

    </div>

    <!-- End Bread crumb and right sidebar toggle -->



    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">



            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Agregar nueva logistica </h4>

                </div>
                <div class="card-body">
<form class="form-horizontal FormCatElec" id="logisticaForm" role="form" method="post" data-form="save">
    <div class="form-group row">
        <div class="col-md-12"><h3>Registro de Logistica</h3></div>
        <div class="clearfix"></div>

        <!--    <div class="form-column col-md-6">
             <div class="form-group">
           <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese Nombre de Conductor" required name="conductor-fullname" data-toggle="tooltip" data-placement="top" title="Ingrese conductor.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
         </div>
       </div> -->



        <!--   <div class="form-column col-md-6"><div class="form-group"></div></div>
              <div class="clearfix"></div> -->
        <div class="form-column col-md-6">
            <div class="form-group">
                <select name="actividad" class="form-control all-elements-tooltip"  >
                    <option selected disabled>Seleccione el nombre de la actividad</option>
                    <?php
                    foreach ($planificacion as $i)
                        foreach ($actividades as $a)
                    if ($i->Id_Actividad == $a->Id_Actividad) {
                        echo "<option  value='$i->Id_Planificacion'>$a->Nombre_Actividad</option>";
                    }?>
                </select>
            </div>
        </div>
        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese Nombre de Lugar" required name="Lugar" data-toggle="tooltip" data-placement="top" title="Ingrese Lugar.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
            </div>
        </div>

        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese Equipo y Material Requerido " required name="Equipo_Y_Material_Requerido" data-toggle="tooltip" data-placement="top" title="Ingrese Equipo y Material requerido.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
            </div>
        </div>
        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <label>Ingrese Hora Salida de oficina</label>
                <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese Hora Salida de oficina" required name="Hora_Salida_Oficina" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Salida de oficina" maxlength="50">
            </div>
        </div>
        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <label>Ingrese Hora Retorno a oficina</label>
                <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese Hora Retorno de oficina" required name="Hora_Retorno_Oficina" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
            </div>
        </div>


        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <label>Ingrese Hora Inicio de Sesion</label>
                <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese hora inicio de sesion:" required name="Hora_Inicio_Sesion" data-toggle="tooltip" data-placement="top" title="Ingrese hora inicio de sesion" maxlength="50">
            </div>
        </div>
        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>
        <div class="form-column col-md-6">
            <div class="form-group">
                <label>Ingrese Hora Fin de Sesion</label>
                <input class="form-control all-elements-tooltip" type="time" placeholder="Ingrese hora fin de sesion" required name="Hora_Fin_Sesion" data-toggle="tooltip" data-placement="top" title="Ingrese hora fin de sesion" maxlength="50">
            </div>
        </div>

        <!-- marcar como ejecuta ira aqui -->

        <div class="form-column col-md-6"><div class="form-group"></div></div>
        <div class="clearfix"></div>

        <div class="form-column col-md-3">
            <div class="form-group">
                <button  class="btn btn-success" id="btnGuardar4">Guardar</button>
            </div>
        </div>
        <div class="form-column col-md-3">
            <div class="form-group">
                <button  class="btn btn-primary" id="btnGuardar5" >Guardar y Salir</button>
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

<!--poner en visita para agregar y que pararesca siempre el objetivo visita y actividad fecha programda-->
<!--icono de crear logistica-->
<!--quitar el campo resultado-->
<!--que no meta archivo si lo desea como condicion y que deje subir cualquier tipo de archivo-->
<!--municipio actividad fecha y responsable -->

</div>