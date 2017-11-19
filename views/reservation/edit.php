<div class="container">
    <div class="col-sm-4 offset-md-4">
        <form method="post" action="/reservation/edit/<?= $this->reservation['reservation_id']?>">
            <div class="form-group">
                <label for="start">Start Time</label>
                <input id="datetime" type="datetime-local" class="form-control" name="start" value="<?php echo $this->reservation['start']; ?>">
            </div>
            <div class="form-group">
                <label for="start">End Time</label>
                <input id="datetime" type="datetime-local" class="form-control" name="end" value="<?php echo $this->reservation['end']; ?>">
            </div>
            <input type="hidden" name="mr_id" value="<?php echo $this->reservation['mr_id']; ?>"/>
            <input type="submit" class="btn btn-success" value="Edit Reservation">
        </form>
    </div>
</div>