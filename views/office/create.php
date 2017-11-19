
<div class="container">
	<div class="col-sm-4 offset-md-4">
		<form method="post" action="/office/create">
			<div class="form-group">
					<label for="offce_name">Office Name</label>
					<input type="text" class="form-control" name="office_name" placeholder="Enter Office Name">
			</div>
			<div class="form-group">
					<label for="offce_address">Office Address</label>
					<input type="text" class="form-control" name="office_address" placeholder="Enter Office Address">
			</div>
			<div class="form-group">
					<label for="offce_phone">Office Phone</label>
					<input type="text" class="form-control" name="office_phone" placeholder="Enter Office Phone Number">
			</div>
			<div class="form-group">
					<label for="office_tz">Office Time Zone</label>
					<select name="office_tz" class="form-control" placeholder="Choose a Time Zone">
						<?php foreach(DateTimeZone::listIdentifiers(DateTimeZone::ALL) as $key => $value) :?>
						<option value=<?= $value ?>><?= $value ?></option>
						<?php endforeach ?>
					</select>
			</div>
			<input type="submit" class="btn btn-success" value="Create New Office">
		</form>
	</div>
</div>

				