<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME</title>
	<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/jquery.js"></script>
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>media/js/dataTables.bootstrap.js"></script>
		<link href="<?php echo base_url() ?>media/css/dataTables.bootstrap.css" rel="stylesheet"/>
		<link href="<?php echo base_url() ?>media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.css"/></head>
	
	<link href="<?php echo base_url() ?>assethome/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="<?php echo base_url() ?>assethome/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="<?php echo base_url() ?>assethome/css/styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="<?php echo base_url() ?>js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap-3.1.1.min.js"></script>

	</head>
<body>
	<?php $this->load->view('layout/top_menu')?>
<div class="product-easy">
	<div class="container">
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span> AYO BELANJA BRO !</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
						  <?php foreach($products as $product) : ?>
						<div class="col-md-3 col-sm-3 product-men">
								<div class="men-thumb-item">
									<span class="product-new-top">New</span>	
								</div>
								<div class="item-info-product ">
									<h4  style="min-height:30px;"><?=$product->name?></h4>
									<div class="thumbnail">
									  <?=img([
										'src'		=> 'uploads/' . $product->image,
										'style'		=> 'max-width: 100%; max-height:100%; height:100px'
									  ])?>
									  <div class="caption">
									<div class="info-product-price">
										<span class="item_price">Rp.<?=$product->price?></span>
									</div>
									<?=anchor('welcome/add_to_cart/' .$product->id, 'Buy' , [
										'class' => 'item_add single-item hvr-outline-out button2',
										'role' => 'button'
									])?>
								</div>	
							</div>
						</div>
						</div>
						</div>
						<?php endforeach; ?>
						<?php echo br(15); ?>
<?php $this->load->view('layout/footer')?>
	</body>
</html>
