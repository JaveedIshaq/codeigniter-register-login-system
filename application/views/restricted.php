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
	        <h1>Welcome to Codeigniter Page</h1>
	</div>
    <div class="row">
       <div class="col-lg-4">
          &nbsp;
       </div>
        <div class="col-lg-4">
        	<div class="alert alert-danger text-center">
        		<p>You Do not have access to this page</p>
        		<hr>
        		<a href="<?php echo base_url() ?>main/login" class="btn btn-info">Log In</a>

        	</div>

        </div>
         <div class="col-lg-4">
          &nbsp;
       </div>

    </div>
</div>

</body>
</html>