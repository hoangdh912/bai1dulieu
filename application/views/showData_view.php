
	
	<?php require_once('header.php'); ?>

	<div class="container">
		<h3 class="text-xs-center">Sims list</h3>
		<hr>
	</div>

	<div class="container">
		<div class="row">
			<?php foreach ($result_array as $key => $sim_data): ?>
				
			<div class="col-sm-4">
				<div class="card card-block">
					<h3 class="card-title">Sim number: <?php echo $sim_data['sim_number']; ?></h3>
					<p class="card-text">Price: <?php echo $sim_data['sim_price']; ?></p>
					<a href="showData/deleteData/<?php echo $sim_data['id']; ?>" class="btn btn-danger delete">Delete</a>
					<a href="showData/editData/<?php echo $sim_data['id']; ?>" class="btn btn-warning delete">Edit</a>
				</div>
			</div>
			
			<?php endforeach ?>
		</div>
	</div>

</body>
</html>