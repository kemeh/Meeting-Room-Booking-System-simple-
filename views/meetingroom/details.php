<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4>Reservations</h4>
            <a href="/reservation/create/<?php echo $this->id ?>" class="btn btn-success">Book New</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>User</th>
                </tr>
                <?php foreach ($this->list as $reservation) :?>
                    <tr>
                        <td><?= htmlspecialchars($reservation['reservation_id']) ?></td>
                        <td><h6><?= htmlspecialchars($reservation['start']) ?></h6></td>
                        <td><?= htmlspecialchars($reservation['end']) ?></td>
                        <td><?= htmlspecialchars($reservation['username']) ?></td>
                        <td><a href="/reservation/edit/<?= $reservation['reservation_id']?>" class="btn btn-warning">Edit</a> </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>