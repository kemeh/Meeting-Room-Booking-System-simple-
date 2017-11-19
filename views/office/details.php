<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<h1><?= htmlspecialchars($this->office['office_name'])?></h1> <br/>
			<h4>Adress:</h4> <div><?= htmlspecialchars($this->office['office_address'])?></div> <br/>
			<h4>Phone Number:</h4> <div><?= htmlspecialchars($this->office['office_phone']) ?></div> <br/>
		</div>
		<div class="col-sm-9">
			<h4>Meeting Rooms</h4>
            <?php if($this->isUserAdmin): ?>
                <a href="/meetingroom/create" class="btn btn-success">Create New</a>
            <?php endif; ?>
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Capacity</th>
					<th>Multimedia</th>
					<th>Workstations</th>
					<th>Whiteboard</th>
				</tr>
				<?php foreach ($this->meetingRooms as $mr) :?>
				<tr>
					<td><?= htmlspecialchars($mr['mr_id']) ?></td>
                    <td><a href="/meetingroom/details/<?= $mr['mr_id'] ?>"><h5><?= htmlspecialchars($mr['mr_name']) ?></h5></a></td>
					<td><?= htmlspecialchars($mr['mr_capacity']) ?></td>
					<?php if($mr['multimedia']== 1) :?>
						<td>Yes</td>
						<?php else :?>
						<td>No</td>
					<?php endif ?>
					<?php if($mr['workstations']== 1) :?>
						<td>Yes</td>
						<?php else :?>
						<td>No</td>
					<?php endif ?>
					<?php if($mr['whiteboard']== 1) :?>
						<td>Yes</td>
						<?php else :?>
						<td>No</td>
					<?php endif ?>
                    <td><a href="/reservation/create/<?= $mr['mr_id']?>" class="btn btn-success">Book</a></td>
                    <?php if($this->isUserAdmin): ?>
                        <td><a href="/meetingroom/edit/<?= $mr['mr_id']?>" class="btn btn-warning">Edit</a></td>
                    <?php endif; ?>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>
</div>

	


