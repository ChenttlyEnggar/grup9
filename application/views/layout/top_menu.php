<?php $this->load->view('layout/header')?>	
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class=" menu__item menu__link" ><?php echo anchor('welcome/index', 'HOME');?>
					<li class=" menu__item menu__link"><?php echo anchor('welcome/index', 'ABOUT ');?>
					<!-- ?--<li class=" menu__item menu__link"><?php echo anchor('welcome/index', 'CONTACT');?>-->>
					<li class=" menu__item menu__link"><?php echo anchor('login', 'ACCOUNT');?>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
					<?php
						$text_cart_url = '</br><h3><span class="glyphicon glyphicon-shopping-cart" area-hidden="true"></span>&nbsp<font color="white"> Shopping Cart </font></br></br>';
						$text_cart_url .=''.$this->cart->total_items() .'&nbsp 	<font color="white">Items</font></h3>';
					?>
						<?=anchor('welcome/cart', $text_cart_url)?>
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
	<script type="text/javascript" src="<?php echo base_url()?>assethome/js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>
</div>
