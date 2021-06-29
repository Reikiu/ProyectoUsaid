<div class="container-fluid">
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Tabla Actividad</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"">Home</a></li>
            <li class="breadcrumb-item active">tabla actividad</li>
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
                    <h4 class="m-b-0 text-white"> Ver Actividad </h4>

                </div>
                <div class="">
                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                <div class="card-body">

                                    <div class="table-responsive scrollspy-example" style="height: 350px">
                                        <table id="example23" class="display responsive nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">

        <thead >
        <tr>
            <th>ID</th>
            <th>Municipio</th>
            <th>Actividad</th>
            <th>Fecha inicio</th>
            <th>Fecha Fin</th>
            <th>Impacto</th>
            <th>Tipo Documento</th>
            <th>Verificacion</th>
            <th>Resultado</th>
            <th>Archivo</th>
            <th>Accciones</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Municipio</th>
            <th>Actividad</th>
            <th>Fecha inicio</th>
            <th>Fecha Fin</th>
            <th>Impacto</th>
            <th>Tipo Documento</th>
            <th>Verificacion</th>
            <th>Resultado</th>
            <th>Archivo</th>
            <th>Accciones</th>
        </tr>
        </tfoot>

        <?php foreach ($actividades as $row){?>
        
            <tr>
                <td><?php echo $row->Id_Actividad?></td>
                <td><?php echo $row->Municipio?></td>
                <td><?php echo $row->Nombre_Actividad?></td>
                <td><?php echo $row->Fecha_Inicio?></td>
                <td><?php echo $row->Fecha_Fin?></td>
                <td><?php echo $row->impacto?></td>
                <td><?php echo $row->Tipo_Documento?></td>
                <td><?php echo $row->verificacion?></td>
                <td><?php echo $row->resultado?></td>
                <td><?php echo "<a href='actividades/downloads/$row->ruta'>$row->ruta</a>";?></td>
                <td>
                <?php if ($this->session->userdata('role') == 'admin'): ?>
                <?php echo "<a class='editarActividad' id='$row->Id_Actividad' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-pencil text-success m-r-10'></i></a>";?>
                <?php echo "<a class='eliminarActividad' id='$row->Id_Actividad' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-trash text-danger m-r-10'></i></a>";?>
            <?php else: ?>
                <?php if(check_power(2)):?>
                        <?php echo "<a class='editarActividad' id='$row->Id_Actividad' data-toggle='tooltip' data-original-title='Editar'><i class='fa fa-pencil text-success m-r-10'></i></a>";?>
                <?php endif; ?>
                <?php if(check_power(3)):?>
                        <?php echo "<a class='eliminarActividad' id='$row->Id_Actividad' data-toggle='tooltip' data-original-title='Eliminar'><i class='fa fa-trash text-danger m-r-10'></i></a>";?>
                    <?php endif; ?>
                <?php endif ?>
                 </td>
            </tr>
         
           <?php } ?>
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
<div class="modal fade" id="modalEdicionActividad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edicion de Actividad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="frmEdicionActividad">


                        <div class="clearfix"></div>


                        <input type="hidden" id="idActividad" name="idActividad">
                        <div class="form-column col-md-12">

                            <div class="form-group">
                                <select name="Tipo_Documento" id="Tipo_Documento" class="form-control all-elements-tooltip"  >
                                    <option value="0">Tipo Documento</option>
                                    <option value="WP">WP</option>
                                    <option value="AFM"> AFM</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                        <div class="form-column col-md-12">
                            <div class="form-group">
                                <select name="Municipio" id="Municipio" class="form-control all-elements-tooltip"  >
                                    <option value="0">Municipio</option>
                                    <optgroup label="Municipios de Ahuachapán">
                                        <option value="Ahuachapán">Ahuachapán</option>
                                        <option value="Apaneca">Apaneca </option>
                                        <option value="Atiquizaya">Atiquizaya</option>
                                        <option value="Concepción de Ataco">Concepción de Ataco</option>
                                        <option value="El Refugio">El Refugio</option>
                                        <option value="Guaymango">Guaymango</option>
                                        <option value="Jujutla">Jujutla</option>
                                        <option value="San Francisco Menéndez">San Francisco Menéndez</option>
                                        <option value="San Lorenzo">San Lorenzo</option>
                                        <option value="San Pedro Puxtla">San Pedro Puxtla</option>
                                        <option value="Tacuba">Tacuba</option>
                                        <option value="Turín">Turín</option>
                                        <optgroup label="Municipios de Santa Ana">
                                            <option value="Candelaria de la Frontera">Candelaria de la Frontera</option>
                                            <option value="Chalchuapa">Chalchuapa</option>
                                            <option value="Coatepeque">Coatepeque</option>
                                            <option value="El Congo">El Congo</option>
                                            <option value="El Porvenir">El Porvenir</option>
                                            <option value="Masahuat">Masahuat</option>
                                            <option value="Metapán">Metapán</option>
                                            <option value="San Antonio Pajonal">San Antonio Pajonal</option>
                                            <option value="San Sebastián Salitrillo">San Sebastián Salitrillo</option>
                                            <option value="Santa Ana">Santa Ana</option>
                                            <option value="Santa Rosa Guachipilín">Santa Rosa Guachipilín</option>
                                            <option value="Santiago de la Frontera">Santiago de la Frontera</option>
                                            <option value="Texistepeque">Texistepeque</option>
                                            <optgroup label="Municipios de Sonsonate">
                                                <option value="Acajutla">Acajutla</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Caluco">Caluco</option>
                                                <option value="Cuisnahuat">Cuisnahuat</option>
                                                <option value="Izalco">Izalco</option>
                                                <option value="Juayúa">Juayúa</option>
                                                <option value="Nahuizalco">Nahuizalco</option>
                                                <option value="Nahulingo">Nahulingo</option>
                                                <option value="Salcoatitán">Salcoatitán</option>
                                                <option value="San Antonio del Monte">San Antonio del Monte</option>
                                                <option value="San Julián">San Julián</option>
                                                <option value="Santa Catarina Masahuat">Santa Catarina Masahuat</option>
                                                <option value="Santa Isabel Ishuatán">Santa Isabel Ishuatán</option>
                                                <option value="Santo Domingo Guzmán">Santo Domingo Guzmán</option>
                                                <option value="Sonsonate">Sonsonate</option>
                                                <option value="Sonzacate">Sonzacate</option>
                                                <optgroup label="Municipios de Chalatenango">
                                                    <option value="Agua Caliente">Agua Caliente</option>
                                                    <option value="Arcatao">Arcatao</option>
                                                    <option value="Azacualpa">Azacualpa</option>
                                                    <option value="Chalatenango (ciudad)">Chalatenango (ciudad)</option>
                                                    <option value="Comalapa">Comalapa</option>
                                                    <option value="Citalá">Citalá</option>
                                                    <option value="Concepción Quezaltepeque">Concepción Quezaltepeque</option>
                                                    <option value="Dulce Nombre de María">Dulce Nombre de María</option>
                                                    <option value="El Carrizal">El Carrizal</option>
                                                    <option value="El Paraíso">El Paraíso</option>
                                                    <option value="La Laguna">La Laguna</option>
                                                    <option value="La Palma">La Palma</option>
                                                    <option value="La Reina">La Reina</option>
                                                    <option value="Las Vueltas">Las Vueltas</option>
                                                    <option value="Nueva Concepción">Nueva Concepción</option>
                                                    <option value="Nueva Trinidad">Nueva Trinidad</option>
                                                    <option value="Nombre de Jesús">Nombre de Jesús</option>
                                                    <option value="Ojos de Agua">Ojos de Agua</option>
                                                    <option value="Potonico">Potonico</option>
                                                    <option value="San Antonio de la Cruz">San Antonio de la Cruz</option>
                                                    <option value="San Antonio Los Ranchos">San Antonio Los Ranchos</option>
                                                    <option value="San Fernando">San Fernando</option>
                                                    <option value="San Francisco Lempa">San Francisco Lempa</option>
                                                    <option value="San Francisco Morazán">San Francisco Morazán</option>
                                                    <option value="San Ignacio">San Ignacio</option>
                                                    <option value="San Isidro Labrador">San Isidro Labrador</option>
                                                    <option value="San José Cancasque">San José Cancasque</option>
                                                    <option value="San José Las Flores">San José Las Flores</option>
                                                    <option value="San Luis del Carmen">San Luis del Carmen</option>
                                                    <option value="San Miguel de Mercedes">San Miguel de Mercedes</option>
                                                    <option value="San Rafael">San Rafael</option>
                                                    <option value="Santa Rita">Santa Rita</option>
                                                    <option value="Tejutla">Tejutla</option>
                                                    <optgroup label="Municipios de Cuscatlán">
                                                        <option value="Candelaria">Candelaria</option>
                                                        <option value="Cojutepeque">Cojutepeque</option>
                                                        <option value="El Carmen">El Carmen</option>
                                                        <option value="El Rosario">El Rosario</option>
                                                        <option value="Monte San Juan">Monte San Juan</option>
                                                        <option value="Oratorio de Concepción">Oratorio de Concepción</option>
                                                        <option value="San Bartolomé Perulapía">San Bartolomé Perulapía</option>
                                                        <option value="San Cristóbal">San Cristóbal</option>
                                                        <option value="San José Guayabal">San José Guayabal</option>
                                                        <option value="San Pedro Perulapán">San Pedro Perulapán</option>
                                                        <option value="San Rafael Cedros">San Rafael Cedros</option>
                                                        <option value="San Ramón">San Ramón</option>
                                                        <option value="Santa Cruz Analquito">Santa Cruz Analquito</option>
                                                        <option value="Santa Cruz Michapa">Santa Cruz Michapa</option>
                                                        <option value="Suchitoto">Suchitoto</option>
                                                        <option value="Tenancingo">Tenancingo</option>
                                                        <optgroup label="Municipios de San Salvador">
                                                            <option value="Aguilares">Aguilares</option>
                                                            <option value="Apopa">Apopa</option>
                                                            <option value="Ayutuxtepeque">Ayutuxtepeque</option>
                                                            <option value="Cuscatancingo">Cuscatancingo</option>
                                                            <option value="Ciudad Delgado">Ciudad Delgado</option>
                                                            <option value="El Paisnal">El Paisnal</option>
                                                            <option value="Guazapa">Guazapa</option>
                                                            <option value="Ilopango">Ilopango</option>
                                                            <option value="Mejicanos">Mejicanos</option>
                                                            <option value="Nejapa">Nejapa</option>
                                                            <option value="Panchimalco">Panchimalco</option>
                                                            <option value="Rosario de Mora">Rosario de Mora</option>
                                                            <option value="San Marcos">San Marcos</option>
                                                            <option value="San Martín">San Martín</option>
                                                            <option value="San Salvador">San Salvador</option>
                                                            <option value="Santiago Texacuangos">Santiago Texacuangos</option>
                                                            <option value="Santo Tomás">Santo Tomás</option>
                                                            <option value="Soyapango">Soyapango</option>
                                                            <option value="Tonacatepeque">Tonacatepeque</option>
                                                            <optgroup label="Municipios de La Libertad">
                                                                <option value="Antiguo Cuscatlán">Antiguo Cuscatlán</option>
                                                                <option value="Chiltiupán">Chiltiupán</option>
                                                                <option value="Ciudad Arce">Ciudad Arce</option>
                                                                <option value="Colón">Colón</option>
                                                                <option value="Comasagua">Comasagua</option>
                                                                <option value="Huizúcar">Huizúcar</option>
                                                                <option value="Jayaque">Jayaque</option>
                                                                <option value="Jicalapa">Jicalapa</option>
                                                                <option value="La Libertad">La Libertad</option>
                                                                <option value="Nueva San Salvador (Santa Tecla)">Nueva San Salvador (Santa Tecla)</option>
                                                                <option value="Nuevo Cuscatlán">Nuevo Cuscatlán</option>
                                                                <option value="San Juan Opico">San Juan Opico</option>
                                                                <option value="Quezaltepeque">Quezaltepeque</option>
                                                                <option value="Sacacoyo">Sacacoyo</option>
                                                                <option value="San José Villanueva">San José Villanueva</option>
                                                                <option value="San Matías">San Matías</option>
                                                                <option value="San Pablo Tacachico">San Pablo Tacachico</option>
                                                                <option value="Talnique">Talnique</option>
                                                                <option value="Tamanique">Tamanique</option>
                                                                <option value="Teotepeque">Teotepeque</option>
                                                                <option value="Tepecoyo">Tepecoyo</option>
                                                                <option value="Zaragoza">Zaragoza</option>
                                                                <optgroup label="Municipios de San Vicente">
                                                                    <option value="Apastepeque">Apastepeque</option>
                                                                    <option value="Guadalupe">Guadalupe</option>
                                                                    <option value="San Cayetano Istepeque">San Cayetano Istepeque</option>
                                                                    <option value="San Esteban Catarina">San Esteban Catarina</option>
                                                                    <option value="San Ildefonso">San Ildefonso</option>
                                                                    <option value="San Lorenzo">San Lorenzo</option>
                                                                    <option value="San Sebastián">San Sebastián</option>
                                                                    <option value="San Vicente">San Vicente</option>
                                                                    <option value="Santa Clara">Santa Clara</option>
                                                                    <option value="Santo Domingo">Santo Domingo</option>
                                                                    <option value="Tecoluca">Tecoluca</option>
                                                                    <option value="Tepetitán">Tepetitán</option>
                                                                    <option value="Verapaz">Verapaz</option>
                                                                    <optgroup label="Municipios de Cabañas">
                                                                        <option value="Cinquera">Cinquera</option>
                                                                        <option value="Dolores">Dolores</option>
                                                                        <option value="Guacotecti">Guacotecti</option>
                                                                        <option value="Ilobasco">Ilobasco</option>
                                                                        <option value="Jutiapa">Jutiapa</option>
                                                                        <option value="San Isidro"></option>
                                                                        <option value="Sensuntepeque">Sensuntepeque</option>
                                                                        <option value="Tejutepeque">Tejutepeque</option>
                                                                        <option value="Victoria">Victoria</option>
                                                                        <optgroup label="Municipios de La Paz">
                                                                            <option value="Cuyultitán">Cuyultitán</option>
                                                                            <option value="El Rosario">El Rosario</option>
                                                                            <option value="Jerusalén">Jerusalén</option>
                                                                            <option value="Mercedes La Ceiba">Mercedes La Ceiba</option>
                                                                            <option value="Olocuilta">Olocuilta</option>
                                                                            <option value="Paraíso de Osorio">Paraíso de Osorio</option>
                                                                            <option value="San Antonio Masahuat">San Antonio Masahuat</option>
                                                                            <option value="San Emigdio">San Emigdio</option>
                                                                            <option value="San Francisco Chinameca">San Francisco Chinameca</option>
                                                                            <option value="San Juan Nonualco">San Juan Nonualco</option>
                                                                            <option value="San Juan Talpa">San Juan Talpa</option>
                                                                            <option value="San Juan Tepezontes">San Juan Tepezontes</option>
                                                                            <option value="San Luis Talpa">San Luis Talpa</option>
                                                                            <option value="San Luis La Herradura">San Luis La Herradura</option>
                                                                            <option value="San Miguel Tepezontes">San Miguel Tepezontes</option>
                                                                            <option value="San Pedro Masahuat">San Pedro Masahuat</option>
                                                                            <option value="San Pedro Nonualco">San Pedro Nonualco</option>
                                                                            <option value="San Rafael Obrajuelo">San Rafael Obrajuelo</option>
                                                                            <option value="Santa María Ostuma">Santa María Ostuma</option>
                                                                            <option value="Santiago Nonualco">Santiago Nonualco</option>
                                                                            <option value="Tapalhuaca">Tapalhuaca</option>
                                                                            <option value="Zacatecoluca"></option>
                                                                            <optgroup label="Municipios de Usulután">
                                                                                <option value="Alegría">Alegría</option>
                                                                                <option value="Berlín">Berlín</option>
                                                                                <option value="California">California</option>
                                                                                <option value="Concepción Batres">Concepción Batres</option>
                                                                                <option value="El Triunfo">El Triunfo</option>
                                                                                <option value="Ereguayquín">Ereguayquín</option>
                                                                                <option value="Estanzuelas">Estanzuelas</option>
                                                                                <option value="Jiquilisco">Jiquilisco</option>
                                                                                <option value="Jucuapa">Jucuapa</option>
                                                                                <option value="Jucuarán">Jucuarán</option>
                                                                                <option value="Mercedes Umaña">Mercedes Umaña</option>
                                                                                <option value="Nueva Granada">Nueva Granada</option>
                                                                                <option value="Ozatlán">Ozatlán</option>
                                                                                <option value="Puerto El Triunfo">Puerto El Triunfo</option>
                                                                                <option value="San Agustín">San Agustín</option>
                                                                                <option value="San Buenaventura">San Buenaventura</option>
                                                                                <option value="San Dionisio">San Dionisio</option>
                                                                                <option value="San Francisco Javier">San Francisco Javier</option>
                                                                                <option value="Santa Elena">Santa Elena</option>
                                                                                <option value="Santa María">Santa María</option>
                                                                                <option value="Santiago de María">Santiago de María</option>
                                                                                <option value="Tecapán">Tecapán</option>
                                                                                <option value="Usulután">Usulután</option>
                                                                                <optgroup label="Municipios de San Miguel">
                                                                                    <option value="Carolina">Carolina</option>
                                                                                    <option value="Chapeltique">Chapeltique</option>
                                                                                    <option value="Chinameca">Chinameca</option>
                                                                                    <option value="Chirilagua">Chirilagua</option>
                                                                                    <option value="Ciudad Barrios">Ciudad Barrios</option>
                                                                                    <option value="Comacarán">Comacarán</option>
                                                                                    <option value="El Tránsito">El Tránsito</option>
                                                                                    <option value="Lolotique">Lolotique</option>
                                                                                    <option value="Moncagua">Moncagua</option>
                                                                                    <option value="Nueva Guadalupe">Nueva Guadalupe</option>
                                                                                    <option value="Nuevo Edén de San Juan">Nuevo Edén de San Juan</option>
                                                                                    <option value="Quelepa">Quelepa</option>
                                                                                    <option value="San Antonio del Mosco">San Antonio del Mosco</option>
                                                                                    <option value="San Gerardo">San Gerardo</option>
                                                                                    <option value="San Jorge">San Jorge</option>
                                                                                    <option value="San Luis de la Reina">San Luis de la Reina</option>
                                                                                    <option value="San Miguel">San Miguel</option>
                                                                                    <option value="San Rafael Oriente">San Rafael Oriente</option>
                                                                                    <option value="Sesori">Sesori</option>
                                                                                    <option value="Uluazapa">Uluazapa</option>
                                                                                    <optgroup label="Municipios de Morazán">
                                                                                        <option value="Arambala">Arambala</option>
                                                                                        <option value="Cacaopera">Cacaopera</option>
                                                                                        <option value="Chilanga">Chilanga</option>
                                                                                        <option value="Corinto">Corinto</option>
                                                                                        <option value="Delicias de Concepción">Delicias de Concepción</option>
                                                                                        <option value="El Divisadero">El Divisadero</option>
                                                                                        <option value="El Rosario">El Rosario</option>
                                                                                        <option value="Gualococti">Gualococti</option>
                                                                                        <option value="Guatajiagua">Guatajiagua</option>
                                                                                        <option value="Joateca">Joateca</option>
                                                                                        <option value="Jocoaitique">Jocoaitique</option>
                                                                                        <option value="Jocoro">Jocoro</option>
                                                                                        <option value="Lolotiquillo">Lolotiquillo</option>
                                                                                        <option value="Meanguera">Meanguera</option>
                                                                                        <option value="Osicala">Osicala</option>
                                                                                        <option value="Perquín">Perquín</option>
                                                                                        <option value="San Carlos">San Carlos</option>
                                                                                        <option value="San Fernando">San Fernando</option>
                                                                                        <option value="San Francisco Gotera">San Francisco Gotera</option>
                                                                                        <option value="San Isidro">San Isidro</option>
                                                                                        <option value="San Simón">San Simón</option>
                                                                                        <option value="Sensembra">Sensembra</option>
                                                                                        <option value="Sociedad">Sociedad</option>
                                                                                        <option value="Torola">Torola</option>
                                                                                        <option value="Yamabal">Yamabal</option>
                                                                                        <option value="Yoloaiquín">Yoloaiquín</option>
                                                                                        <optgroup label="Municipios de La Unión">
                                                                                            <option value="Anamorós">Anamorós</option>
                                                                                            <option value="Bolivar">Bolivar</option>
                                                                                            <option value="Concepción de Oriente">Concepción de Oriente</option>
                                                                                            <option value="Conchagua">Conchagua</option>
                                                                                            <option value="El Carmen">El Carmen</option>
                                                                                            <option value="El Sauce">El Sauce</option>
                                                                                            <option value="Intipucá">Intipucá</option>
                                                                                            <option value="La Unión">La Unión</option>
                                                                                            <option value="Lislique">Lislique</option>
                                                                                            <option value="Meanguera del Golfo">Meanguera del Golfo</option>
                                                                                            <option value="Nueva Esparta">Nueva Esparta</option>
                                                                                            <option value="Pasaquina">Pasaquina</option>
                                                                                            <option value="Polorós">Polorós</option>
                                                                                            <option value="San Alejo">San Alejo</option>
                                                                                            <option value="San José">San José</option>
                                                                                            <option value="Santa Rosa de Lima">Santa Rosa de Lima</option>
                                                                                            <option value="Yayantique">Yayantique</option>
                                                                                            <option value="Yucuaiquín">Yucuaiquín</option>
                                                                                            <option value="Yucuaiquín">Trasversal</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>

                        <div class="form-column col-md-12">
                            <div class="form-group">
                                <label>Ingrese fecha Incio</label>
                                <input class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha inicio" required name="Fecha_Inicio" id="Fecha_Inicio" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
                            </div>
                        </div>
                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                        <div class="form-column col-md-12">
                            <div class="form-group">
                                <label for="">Ingrese fecha Fin</label>
                                <input class="form-control all-elements-tooltip" type="date" placeholder="Ingrese fecha fin" required name="Fecha_Fin" id="Fecha_Fin" data-toggle="tooltip" data-placement="top" title="Ingrese Hora Retorno de oficina." maxlength="50">
                            </div>
                        </div>
                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                        <div class="form-column col-md-12">
                            <div class="form-group">
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese nombre de la Actividad" required name="Nombre_Actividad" id="Nombre_Actividad" data-toggle="tooltip" data-placement="top" title="Ingrese nombre de la Actividad.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                            </div>
                        </div>
                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                        <div class="form-column col-md-12">
                            <div class="form-group">
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese medio de verificacion" required name="verificacion" id="verificacion" data-toggle="tooltip" data-placement="top" title="Ingrese medio de verificacion.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                            </div>
                        </div>

                        <div class="form-column col-md-12"><div class="form-group"></div></div>
                        <div class="clearfix"></div>
                        <div class="form-column col-md-12">
                            <div class="form-group">
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese impacto"  name="impacto" id="impacto" data-toggle="tooltip" data-placement="top" title="Ingrese impacto.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                            </div>
                        </div>
                    <div class="form-column col-md-12"><div class="form-group"></div></div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-12">
                        <div class="form-group">
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese resultado"  name="resultado" id="resultado" data-toggle="tooltip" data-placement="top" title="Ingrese resultado.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <div class="btn btn-success" id="modificarActiviad">Guardar Modificacion</div>
            </div>
        </div>
    </div>
</div>