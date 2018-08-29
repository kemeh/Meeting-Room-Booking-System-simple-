<a href="/office/">[Offices]</a>
<div class="container">
    <div class="row">
        <div class="modal" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">New Reservation</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/reservation/create">
                            <div class="form-group">
                                <label for="start-time">Start Time</label>
                                <input id="start-time" type="text" class="form-control" name="start" />
                            </div>
                            <div class="form-group">
                                <label for="end-time">End Time</label>
                                <input id="end-time" type="text" class="form-control" name="end" />
                            </div>
                            <input type="submit" class="btn btn-success" value="Create Reservation">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="scheduler" class="jumbotron"></div>
    </div>
</div>


<script>
    var reservations = [];
    // Sets dates for example reservations to always be on current day or after
    var date = new Date(),
        day = date.getDate(),
        date1 = new Date(),
        date2 = new Date(),
        date3 = new Date();
    date1.setDate(day);
    date2.setDate(day + 1);
    date3.setDate(day + 2);
    date1 = date1.format('Y-m-d');
    date2 = date2.format('Y-m-d');
    date3 = date3.format('Y-m-d');
    // Array of example date
    // reservations = [
    //     {date: date3, start: '8:00', end: '13:00', row: 0},
    //     {date: date1, start: '8:00', end: '14:00', row: 1},
    //     {date: date1, start: '7:00', end: '8:25', row: 3},
    //     {date: date1, start: '12:00', end: '20:00', row: 5},
    //     {date: date2, start: '12:00', end: '18:00', row: 5},
    //     {date: date3, start: '8:00', end: '18:00', row: 4}
    // ];
    // Array of sample items
    var meetingRooms = [];
    meetingRooms = getMRs();
    // Initialize
    $("#scheduler").scheduler({items: meetingRooms, reservations: reservations, timeslotHeight: 40, timeslotWidth: 50, use24Hour: true, endTime:'23'});
    // Allows for reservation deletion
    $(document).on('click', ".reservation", function () {
        $(this).remove();
    });
    $(document).on('mouseover', ".reservation", function () {
        console.log('hoverrrrrrrr');
    });
    function getMRs(id = 1) {
        var meetingRooms = [];
        $.ajax({
            url: "home/getMeetingRooms",
            method: "post",
            async: false,
            success: function (data) {
                data = JSON.parse(data);
                meetingRooms = data.map(function (value) {
                    return value.mr_name;
                });
            }
        });
        return meetingRooms;
    }
</script>
<script type="text/javascript">
    $(function () {
        $("#start-time").datetimepicker();
        $("#end-time").datetimepicker();
    });
</script>