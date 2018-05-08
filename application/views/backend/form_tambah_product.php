<!doctype html>
<?php $this->load->view('layout/sidebar')?>	
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">	
				<h1>Tambah Product</h1>
				<div><?= validation_errors()?></div>
				<?= form_open_multipart('admin/products/create',['class'=>'form-horizontal']) ?>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">ID Product</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="id" placeholder="ID Product" required value="<?=set_value('id')?>">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Nama Product</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="name" placeholder="Nama Product" required value="<?=set_value('name')?>" >
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Jenis Motor</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="motor" placeholder="Jenis Motor" required value="<?=set_value('motor')?>" >
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi Product</label>
							<div class="col-sm-10">
							  <textarea class="form-control" name="description" required><?=set_value('description')?></textarea>
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Harga Product</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="price" placeholder="Harga Product" required value="<?=set_value('price')?>" >
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Stok Product</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="stock" placeholder="Stok Product" required value="<?=set_value('stok')?>" >
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Product Image</label>
							<div class="col-sm-10">
							  <input type="file" class="form-control" name="userfile" required>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-default">Save</button>
							</div>
						  </div>
				<?= form_close () ?>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
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