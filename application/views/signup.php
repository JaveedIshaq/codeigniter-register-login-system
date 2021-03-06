<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
     <div class="jumbotron">
	        <h1>CodeIgniter Auth System <small>Signup Page</small></h1>
	</div>
    <div class="row">
       <div class="col-lg-4">
          &nbsp;
       </div>
        <div class="col-lg-4">
        	<?php echo form_open('main/signup_validation', ['class' => 'form-signin', 'role' => 'form']); ?>

<h2 class="form-signin-heading">Please sign up</h2>
  <div class="text-danger"><?php echo validation_errors(); ?></div>
 <div class="form-group">
    <label for="email">Email address:</label>

<?php echo form_input(['name' => 'email', 'id' => 'email', 'class' => 'form-control', 'value' => set_value('email'), 'placeholder' => 'Email']); ?>
</div>
 <div class="form-group">
    <label for="password">Password:</label>
<?php echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
</div>
 <div class="form-group">
    <label for="cpassword">Confirm Password:</label>
<?php echo form_password(['name' => 'cpassword', 'id' => 'cpassword', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
</div>

<!--  <div class="form-group">
    <label for="remember_me">Remeber Me:</label>

    <?php //echo form_checkbox(['name' => 'remember_me','id' => 'remember_me','class' => 'form-control', 'value' => 1]); ?>

</div> -->

<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>

<?php echo form_close(); ?>
<hr>


<br>
<br>
<div style="clear: both;"></div>

        </div>
         <div class="col-lg-4">
          &nbsp;
       </div>

    </div>
</div>

</body>
</html>