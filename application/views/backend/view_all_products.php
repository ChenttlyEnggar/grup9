<!DOCTYPE html>
	<?php $this->load->view('layout/sidebar')?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">PRODUK</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">PRODUK VARIASI MOTOR</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Produk</th>
							<th>Motor</th>
							<th>Gambar Produk</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>
								<?=anchor(	'admin/products/create',
											'Tambah Produk', 
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
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
						</ul>
					</div>
				</div>
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="<?php echo base_url()?>admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url()?>admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>admin/js/chart.min.js"></script>
	<script src="<?php echo base_url()?>admin/js/chart-data.js"></script>
	<script src="<?php echo base_url()?>admin/js/easypiechart.js"></script>
	<script src="<?php echo base_url()?>admin/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url()?>admin/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
