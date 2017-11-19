<div class="container">
	<div class="col-sm-4 offset-md-4">
		<form method="post" action="/office/edit/<?= $this->office['office_id'] ?>">
			<div class="form-group">
					<label for="offce_name">Office Name</label>
					<input type="text" class="form-control" name="office_name" value="<?= $this->office['office_name'] ?>">
			</div>
			<div class="form-group">
					<label for="offce_name">Office Address</label>
					<input type="text" class="form-control" name="office_address" value="<?= $this->office['office_address'] ?>">
			</div>
			<div class="form-group">
					<label for="offce_name">Office Phone</label>
					<input type="text" class="form-control" name="office_phone" value="<?= $this->office['office_phone'] ?>">
			</div>
			<div class="form-group">
					<label for="office_tz">Office Time Zone</label>
					<select name="office_tz" class="form-control">
						<?php foreach(DateTimeZone::listIdentifiers(DateTimeZone::ALL) as $key => $value) :?>
						<?php if($value == $this->office['office_tz']): ?>
						<option value=<?= $value ?> selected><?= $value ?></option>
						<?php else: ?>
						<option value=<?= $value ?>><?= $value ?></option>
						<?php endif; ?>
						<?php endforeach ?>
					</select>
			</div>
			<div class="form-group">
					<label for="is_active">Active</label>
					<select name="is_active" class="form-control">
						<?php if($this->office['is_active'] == 1): ?>
						<option value="1" selected>Yes</option>
						<option value="0">No</option>
						<?php else: ?>
						<option value="1">Yes</option>
						<option value="0" selected>No</option>
						<?php endif ?>
					</select>
			</div>
			<input type="submit" class="btn btn-success" value="Edit Office">
		</form>
	</div>
</div>