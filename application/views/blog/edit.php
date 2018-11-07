
	<h3>Edit Blog</h3>
	<a href="<?php echo base_url('blog/index'); ?>" class="btn btn-default">Back</a>
	<form action="<?php echo base_url('blog/update') ?>" method="post" class="form-horizontal">
		<input type="hidden" name="txt_hidden" value="<?php echo $blog->id; ?>">
		<div class="form-group">
			<label for="title" class="col-md-2 text-right">Cedula</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->cedula; ?>" name="txt_cedula" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="title" class="col-md-2 text-right">Nombre</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->nombre; ?>" name="txt_nombre" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="title" class="col-md-2 text-right">Apellido</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->apellido; ?>" name="txt_apellido" class="form-control" required>
			</div>
		</div>


		<div class="form-group">
			<label for="title" class="col-md-2 text-right">Telefono</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->telefono; ?>" name="txt_telefono" class="form-control" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
			</div>
		</div>
	</form>
	
