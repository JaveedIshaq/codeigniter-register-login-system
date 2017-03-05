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
	        <h1>Welcome to Mebers Page</h1>
	</div>
    <div class="row">
       <div class="col-lg-4">
          &nbsp;
       </div>
        <div class="col-lg-4">
        	<div class="alert alert-success">
        		<p>You have logged in Successfully</p>

            <a href="<?php echo base_url() ?>main/logout" class="btn btn-default">Log out</a>

        	</div>
        	<p>
        			
        			<?php 
        			    //echo "<pre>";
                  //print_r($this->session->all_userdata());
                  //echo "</pre>";
                        

        			 ?>
        		</p>

        </div>
         <div class="col-lg-4">
          &nbsp;
       </div>

    </div>
</div>

</body>
</html>