
	
	<?php require_once('header.php'); ?>

	<div class="container">
		<h3 class="text-xs-center">Edits sim data</h3>
		<hr>
	</div>

	<div class="container">
		<div class="row">
			<?php foreach ($result_array as $key => $sim_data): ?>
				
			<div class="container">
				<div class="row">
					<div class="col-sm-8 push-sm-2">
						<form method="post" enctype="multidata/formdata" action="<?php echo base_url('index.php/showData/updateData'); ?>">
						    <input type="hidden" class="form-control" name="id" placeholder="Enter Sim number" value="<?php echo $sim_data['id']; ?>">
						    <div class="form-group">
							    <label for="sim_number">Sim number</label>
							    <input type="text" class="form-control" name="sim_number" placeholder="Enter Sim number" value="<?php echo $sim_data['sim_number']; ?>">
						    </div>
						    <div class="form-group">
							    <label for="sim_price">Sim price</label>
							    <input type="text" class="form-control" name="sim_price" placeholder="Enter Sim price" value="<?php echo $sim_data['sim_price']; ?>">
						    </div>
						    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
						    <input type="submit" value="Save Data" class="btn btn-success">
						</form>
					</div>
				</div>
			</div>
			
			<?php endforeach ?>
		</div>
	</div>

</body>
</html>