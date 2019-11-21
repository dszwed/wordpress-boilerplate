<form method="post" action="<?php admin_url('admin-ajax.php') ?>">
	<?php wp_nonce_field('send-form'); ?>
	<input type="hidden" action="send-form">
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
	</div>
	<div class="form-group">
		<label for="exampleInputMessage">Message</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
