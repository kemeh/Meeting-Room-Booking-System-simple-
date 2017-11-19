<div class="container">
    <div class="col-sm-4 offset-md-4">
        <form method="post" action="/user/create">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="email">User E-mail</label>
                <input type="text" class="form-control" name="email" placeholder="Enter User E-mail">
            </div>
            <div class="form-group">
                <label for="password">User Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter User Password">
            </div>
            <div class="form-group">
                <label for="first_name">User First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter User First Name">
            </div>
            <div class="form-group">
                <label for="last_name">User First Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter User Last Name">
            </div>
            <div class="form-group">
                <label for="role_id">User Role</label>
                <select name="role_id" class="form-control">
                    <?php foreach ($this->roles as $role): ?>
                    <option value=<?= $role['role_id'] ?>><?= $role['role_name'] ?></option>
                    <?php endforeach; ?>
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
            <div class="form-group">
                <label for="user_tz">User Time Zone</label>
                <select name="user_tz" class="form-control" placeholder="Choose a Time Zone">
                    <?php foreach(DateTimeZone::listIdentifiers(DateTimeZone::ALL) as $key => $value) :?>
                        <option value=<?= $value ?>><?= $value ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Create New User">
        </form>
    </div>
</div>