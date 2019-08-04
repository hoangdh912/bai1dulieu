	<?php require_once('header.php'); ?>

	<div class="container">
		<h2 class="text-xs-center">Add new phone number:</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form method="post" enctype="multidata/formdata" action="<?php echo base_url('index.php/addData/insertData_controller'); ?>">
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