<form action="insertarCliente" method="post">
	<div class="row">
		<div class="col-md-12"><h5>Gestion de clientes</h5></div>
		<div class="clearfix"></div>
		<div class="form-column col-md-4">
			<div class="form-group">
				<label for="">Nombres</label>
				<input type="text" name="nombre" class="form-control">
			</div>
		</div>
		<div class="form-column col-md-4">
			<div class="form-group">
				<label for="">Apellidos</label>
				<input type="text" name="apellidos" class="form-control">
			</div>
		</div>
		<div class="form-column col-md-4">
			<div class="form-group">
				<label for="">Telefono</label>
				<input type="tel" name="telefono" class="form-control">
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-column col-md-6">
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="email" class="form-control">
			</div>
		</div>
		<div class="form-column col-md-6">
			<div class="form-group">
				<label for="">Direccion</label>
				<input type="text" name="direccion" class="form-control" multiple>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-column col-md-6">
			<div class="form-group">
				<label for="">Preferencias: </label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Jugar Play" name="prefe[]">
					<label class="form-check-label" for="inlineCheckbox1">Jugar Play</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Programar" name="prefe[]">
					<label class="form-check-label" for="inlineCheckbox2">Programar</label>
				</div>
			</div>
		</div>
		<div class="col-md-12"></div>
		<div class="clearfix"></div>
		<div class="form-column col-md-6">
			<div class="form-group">
				<input type="submit" name="cmdEnviar" value="Enviar" class="btn btn-success">
			</div>
		</div>
	</div>
</form>




