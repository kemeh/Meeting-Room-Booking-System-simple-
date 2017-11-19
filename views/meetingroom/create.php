<div class="container">
	<div class="col-sm-4 offset-md-4">
		<form method="post" action="/meetingroom/create">
			<div class="form-group">
				<label for="mr_name">Meeting Room Name</label>
				<input type="text" class="form-control" name="mr_name" placeholder="Enter Room Name">
			</div>
			<div class="form-group">
				<label for="mr_name">Meeting Room Capacity</label>
				<input type="number" class="form-control" name="mr_capacity" placeholder="Enter Room Capacity" min="2">
			</div>
			<div class="form-group">
				<label for="has_multimedia">Multimedia</label>
				<select name="has_multimedia" class="form-control">
					<option value="1">Yes</option>
					<option value="0" selected>No</option>
				</select>
			</div>
			<div class="form-group">
				<label for="has_workstations">Workstations</label>
				<select name="has_workstations" class="form-control">
					<option value="1">Yes</option>
					<option value="0" selected>No</option>
				</select>
			</div>
			<div class="form-group">
				<label for="has_whiteboard">Whiteboard</label>
				<select name="has_whiteboard" class="form-control">
					<option value="1">Yes</option>
					<option value="0" selected>No</option>
				</select>
			</div>
			<div class="form-group">
				<label for="office_id">Office</label>
				<select name="office_id" class="form-control">
				<?php foreach($this->offices as $office): ?>
					<option value=<?= $office['office_id'] ?>><?= $office['office_name'] ?></option>
				<?php endforeach; ?>
				</select>
			</div>
			
			<input type="submit" class="btn btn-success" value="Create Meeting Room">
			
		</form>
	</div>
</div>