<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Material Login Form</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assetslogin/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assetslogin/css/style.css">
  </head>

  <body>
<!-- Mixins-->
<!-- Pen Title-->
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
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
        <input type="text" name="name" required="required" value="<?=set_value('name')?>"/>
        <label for="name">Name</label>
        <div class="bar"></div>
      </div>
	  <div class="input-container">
        <input type="email" name="email" required="required" value="<?=set_value('email')?>"/>
        <label for="email" >Email</label>
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
