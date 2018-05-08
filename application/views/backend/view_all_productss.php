<!doctype html>
<html>
	<head>
		<title>Admin Page | View All Products</title>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/jquery.js"></script>
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/dataTables.bootstrap.js"></script>
		<link href="<?php echo base_url() ?>media/css/dataTables.bootstrap.css" rel="stylesheet"/>
		<link href="<?php echo base_url() ?>media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.css"/></head>
	<body>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">	
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Produk</th>
							<th>Motor</th>
							<th>Gambar Produk</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>
								<?=anchor(	'admin/products/create',
											'Add Product', 
											['class'=>'btn btn-primary btn-sm'])
								?>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($products as $product) : ?>
						<tr>
							<td><?=$product->id?></td>
							<td><?=$product->name?></td>
							<td><?=$product->motor?></td>
							<td><?php
								$product_image = [	'src'	=> 'uploads/' . $product->image,
													'height'	=> '50'
													];
								echo img($product_image)
							?></td>
							<td><?=$product->price?></td>
							<td><?=$product->stock?></td>
							<td>
								<?=anchor(	'admin/products/update/' . $product->id, 
											'Edit',
											['class'=>'btn btn-default btn-sm'])
								?> 
								<?=anchor(	'admin/products/delete/' . $product->id, 
											'Delete',
											['class'=>'btn btn-danger btn-sm',
											 'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
											])
								?> 
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>