
<!DOCTYPE html>
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
					<li class=" menu__item menu__link"><?php echo anchor('welcome/index', 'ABOUT US');?>
					<li class=" menu__item menu__link"><?php echo anchor('welcome/index', 'CONTACT');?>
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
<?php echo form_open('welcome/update'); ?>
<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Nomor</th>
					<th>Product</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i=0;
					foreach($this->cart->contents() as $items) : 
					$i++;
				?>	
				<tr>
					<td><?= $i ?></td>
					<td><?= $items['name'] ?></td>
					<td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'class' => 'input-mini')); ?></td>
					<td align="right"><?= number_format ($items['price'],0,',','.') ?></td>
					<td align="right"><strong><?php echo number_format($this->cart->total()); ?></strong></td>
					
				</tr>
				<?php endforeach;?>
			</tbody>
				<tfoot>
					<tr>
						<td align="right" colspan="4">Total </td>
						<td align="right"><?= number_format ($this->cart->total(),0,',','.');?></td>
		</table>
		<div align="center">
			<?= anchor('welcome/update','Update',['class'=>'btn btn-info']) ?>
			<?= anchor('welcome/clear_cart','Batal membeli',['class'=>'btn btn-danger']) ?>
			<?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?>
			<?= anchor('order','Check Out',['class'=>'btn btn-success']) ?>
		</div>
	</body>
</html>
