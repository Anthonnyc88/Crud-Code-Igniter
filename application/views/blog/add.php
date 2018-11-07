
	<h3>Agregar Persona</h3>
	<a href="<?php echo base_url('blog/index'); ?>" class="btn btn-default">Back</a>
	<form action="<?php echo base_url('blog/submit') ?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="title" class="col-md-2 text-right">cedula</label>
			<div class="col-md-10">
				<input type="text" name="txt_cedula" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="title" class="col-md-2 text-right">Nombre</label>
			<div class="col-md-10">
				<input type="text" name="txt_nombre" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="title" class="col-md-2 text-right">Apellido</label>
			<div class="col-md-10">
				<input type="text" name="txt_apellido" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="title" class="col-md-2 text-right">Telefono</label>
			<div class="col-md-10">
				<input type="text" name="txt_telefono" class="form-control" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="Save">
			</div>
		</div>
	</form>
	
