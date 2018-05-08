<?php $this->load->view('layout/sidebar')?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">HOME</h1>
			</div>
		</div><!--/.row-->
		<?php if($this->session->userdata('username')) : ?>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Welcome Admin</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<?php echo 'You Are :' . $this->session->userdata('username');?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif ?><!--/.row-->
		
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
