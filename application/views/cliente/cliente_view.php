<div class="row">
	<div class="col-md-1">
		<a href="cliente/agregarCliente" class="btn btn-primary">Nuevo</a>
	</div>
</div>


<div class="table-responsive" style="margin-top: 10px;">
	<table class="table table-bordered" id="dataCliente" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Direccion</th>
                <th>Acciones</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Direccion</th>
                <th>Acciones</th>
			</tr>
		</tfoot>
		<tbody>
		<?php

				foreach ($cliente as $row){
					echo "<tr>
							<td>$row->nombres</td>
							<td>$row->apellidos</td>
							<td>$row->direccion</td>
							<td>
							<div class='btn btn-success editarCliente' id='$row->id'>Editar</div>
							<div class='btn btn-danger editarCliente' id='$row->id'>Eliminar</div>
							</td>
						  </tr>";
				}
		?>
		</tbody>
	</table>
</div>
<!-- Modal de edicicm cliente  -->
<div class="modal fade" id="modalEdicionCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edicion de Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" id="frmEdicionCliente">

                    <div class="clearfix"></div>
                    <input type="hidden" id="idCliente" name="idCliente">
                    <div class="form-column col-md-4">
                        <div class="form-group">
                            <label for="">Nombres</label>
                            <input type="text" name="nombre" id="nombres" class="form-control">
                        </div>
                    </div>
                    <div class="form-column col-md-4">
                        <div class="form-group">
                            <label for="">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control">
                        </div>
                    </div>
                    <div class="form-column col-md-4">
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="tel" name="telefono" id="telefono" class="form-control">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-column col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-column col-md-6">
                        <div class="form-group">
                            <label for="">Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" multiple>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <div class="btn btn-success" id="modificarCliente">Guardar Modificacion</div>
            </div>
        </div>
    </div>
</div>