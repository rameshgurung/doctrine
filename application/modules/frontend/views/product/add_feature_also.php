<form action="" method="POST" role="form">
	<legend>Add Product</legend>

	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="" placeholder="Input field"
		name="name"
		value="<?php echo set_value('name');?>">
	</div>

	<div class="form-group">
		<label for="feature">Feature</label>
		<input type="text" class="form-control" id="" placeholder="Input field"
		name="feature"
		value="<?php echo set_value('feature');?>">
	</div>


	<button type="submit" class="btn btn-success" name="submit">Submit</button>
	<?php echo anchor('frontend', 'Cancel', 'class="btn btn-warning"'); ?>

</form>