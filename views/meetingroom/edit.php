<div class="container">
	<div class="col-sm-4 offset-md-4">
		<form method="post" action="/meetingroom/edit/<?= $this->meetingRoom['mr_id']?>">
			<div class="form-group">
				<label for="mr_name">Meeting Room Name</label>
				<input type="text" class="form-control" name="mr_name" value="<?= $this->meetingRoom['mr_name'] ?>">
			</div>
			<div class="form-group">
				<label for="mr_name">Meeting Room Capacity</label>
				<input type="number" class="form-control" name="mr_capacity" value="<?= $this->meetingRoom['mr_capacity'] ?>">
			</div>
			<div class="form-group">
				<label for="has_multimedia">Multimedia</label>
				<select name="has_multimedia" class="form-control">
				<?php if($this->meetingRoom['multimedia'] == 1): ?>
					<option value="1" selected>Yes</option>
					<option value="0">No</option>
				<?php else: ?>
					<option value="1">Yes</option>
					<option value="0" selected>No</option>
				<?php endif; ?>				
				</select>
			</div>
			<div class="form-group">
				<label for="has_workstations">Workstations</label>
				<select name="has_workstations" class="form-control">
				<?php if($this->meetingRoom['workstations'] == 1): ?>
					<option value="1" selected>Yes</option>
					<option value="0">No</option>
				<?php else: ?>
					<option value="1">Yes</option>
					<option value="0" selected>No</option>
				<?php endif; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="has_whiteboard">Whiteboard</label>
				<select name="has_whiteboard" class="form-control">
				<?php if($this->meetingRoom['whiteboard'] == 1): ?>
					<option value="1" selected>Yes</option>
					<option value="0">No</option>
				<?php else: ?>
					<option value="1">Yes</option>
					<option value="0" selected>No</option>
				<?php endif; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="office_id">Office</label>
				<select name="office_id" class="form-control">
				<?php foreach($this->offices as $office): ?>
				<?php if($this->meetingRoom['office_id'] == $office['office_id']): ?>
					<option value=<?= $office['office_id'] ?> selected><?= $office['office_name'] ?></option>
				<?php else: ?>
					<option value=<?= $office['office_id'] ?>><?= $office['office_name'] ?></option>
				<?php endif; ?>
				<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
					<label for="mr_status">Active</label>
					<select name="mr_status" class="form-control">
						<?php if($this->meetingRoom['mr_status'] == 1): ?>
						<option value="1" selected>Yes</option>
						<option value="0">No</option>
						<?php else: ?>
						<option value="1">Yes</option>
						<option value="0" selected>No</option>
						<?php endif ?>
					</select>
			</div>
			
			<input type="submit" class="btn btn-success" value="Edit Meeting Room">
			
		</form>
	</div>
</div>