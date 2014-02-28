<h1>Create Contact</h1>

<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

<form role="form" action="<?php echo site_url('contacts/'.$contacts[0]->contact_id.'/edit'); ?>" method="post">
	<div class="form-group">
		<label for="firstName">First Name</label>
		<input type="text" class="form-control" name="contact_first_name" id="firstName" placeholder="Enter first name" value="<?php echo (set_value('contact_first_name') != '') ? set_value('contact_first_name') : $contacts[0]->contact_first_name; ?>">
	</div>
	<div class="form-group">
		<label for="lastName">Last Name</label>
		<input type="text" class="form-control" name="contact_last_name" id="lastName" placeholder="Enter last name" value="<?php echo (set_value('contact_last_name') != '') ? set_value('contact_last_name') : $contacts[0]->contact_last_name; ?>">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" name="contact_email" id="email" placeholder="Enter email" value="<?php echo (set_value('contact_email') != '') ? set_value('contact_email') : $contacts[0]->contact_email; ?>">
	</div>
	<div class="form-group">
		<label for="phone">Phone</label>
		<input type="text" class="form-control" name="contact_phone" id="phone" placeholder="Enter phone" value="<?php echo (set_value('contact_phone') != '') ? set_value('contact_phone') : $contacts[0]->contact_phone; ?>">
	</div>
	<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" name="contact_address" id="address" placeholder="Enter address" value="<?php echo (set_value('contact_address') != '') ? set_value('contact_address') : $contacts[0]->contact_address; ?>">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>