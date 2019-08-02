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
				<form method="post" enctype="multidata/formdata" action="AddData/insertData_controller">
				  <div class="form-group">
				    <label for="sim_number">Sim number</label>
				    <input type="text" class="form-control" name="sim_number" placeholder="Enter Sim number">
				  </div>
				  <div class="form-group">
				    <label for="sim_price">Sim price</label>
				    <input type="text" class="form-control" name="sim_price" placeholder="Enter Sim price">
				  </div>
				  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
				  <input type="submit" value="Insert Data" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
</body>
</html>