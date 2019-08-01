<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New Sim</title>

	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Add new phone number:</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Sim name</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Sim price</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>