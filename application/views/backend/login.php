<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Material Login Form</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assetslogin/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assetslogin/css/styles.css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  </head>

  <body>
<!-- Mixins-->
<!-- Pen Title-->
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form>
	<div><?=validation_errors()?></div>
	<div><?=$this->session->flashdata('error')?></div>
	<?=form_open('users', ['class'=>'form-horizontal'])?>
      <div class="input-container">
        <input type="text" name="username" required="required"/>
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Login</span></button>
      </div>
	  <?=form_close() ?>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
	<div><?= validation_errors()?></div>
	<?= form_open('users/create',['class'=>'form-horizontal']) ?>
	<form>
	  <div class="input-container">
        <input type="text" name="username" required="required" value="<?=set_value('username')?>"/>
        <label for="username" >Username</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="password" name="password" required="required" value="<?=set_value('password')?>"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Next</span></button>
      </div>
	  <?=form_close() ?>
    </form>
  </div>
</div> <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="<?php echo base_url() ?>assetslogin/js/index.js"></script>    
  </body>
</html>
