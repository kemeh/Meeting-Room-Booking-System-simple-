<div class="container">
    <div class="col-sm-4 offset-md-4">
        <form method="post" action="/reservation/create">
            <div class="form-group">
                <label for="start">Start Time</label>
                <input id="datetime" type="datetime-local" class="form-control" name="start">
            </div>
            <div class="form-group">
                <label for="start">End Time</label>
                <input id="datetime" type="datetime-local" class="form-control" name="end">
            </div>
            <input type="submit" class="btn btn-success" value="Create Reservation">
        </form>
    </div>
</div>