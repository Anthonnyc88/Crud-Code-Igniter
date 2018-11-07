
	<h3>Listado de Clientes</h3>

	<?php
		if($this->session->flashdata('success_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_msg'); ?>
		</div>
	<?php		
		}
	?>


	<?php
		if($this->session->flashdata('error_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
	<?php		
		}
	?>

	<a href="<?php echo base_url('blog/add'); ?>" class="btn btn-primary">Add New</a>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td>ID</td>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Telefono</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			if($blogs){
				foreach($blogs as $blog){
		?>
			<tr>
				<td><?php echo $blog->id; ?></td>
				<td><?php echo $blog->cedula; ?></td>
				<td><?php echo $blog->nombre; ?></td>
				<td><?php echo $blog->apellido; ?></td>
				<td><?php echo $blog->telefono; ?></td>
				<td>
					<a href="<?php echo base_url('blog/edit/'.$blog->id); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('blog/delete/'.$blog->id); ?>" class="btn btn-danger" onclick="return confirm('Estas seguro que deseas eliminar el cliente?');">Delete</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</tbody>
	</table>
