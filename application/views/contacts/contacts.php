<h1>Contacts</h1>

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Name <a href="<?php echo site_url('/?sort=asc'); ?>"><small><span class="glyphicon glyphicon-arrow-up"></span></small></a><a href="<?php echo site_url('/?sort=desc'); ?>"><small><span class="glyphicon glyphicon-arrow-down"></span></small></a></th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($contacts as $contact): ?>
		<tr>
			<td><?php echo $contact->contact_last_name; ?>, <?php echo $contact->contact_first_name; ?></td>
			<td><?php echo $contact->contact_email; ?></td>
			<td><?php echo $contact->contact_phone; ?></td>
			<td><?php echo $contact->contact_address; ?></td>
			<td><a href="<?php echo site_url('contacts/'.$contact->contact_id.'/edit'); ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-edit"></span></a> <a href="<?php echo site_url('contacts/'.$contact->contact_id.'/delete'); ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="<?php echo site_url('contacts/create_contact'); ?>" class="btn btn-primary">Add Contact</a>