<?php if($this->isUserAdmin): ?>
    <a class="btn btn-success" href="/user/create">Create User</a>
<?php endif; ?>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role</th>
        <th>Office</th>
        <th>Status</th>
    </tr>
    <?php foreach ($this->users as $user) :?>
        <tr>
            <td><?= htmlspecialchars($user['user_id']) ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['first_name']) ?></td>
            <td><?= htmlspecialchars($user['last_name']) ?></td>
            <td><?= htmlspecialchars($user['role_name']) ?></td>
            <td><?= htmlspecialchars($user['office_name']) ?></td>
            <?php if($user['user_status']== 1) :?>
                <td>Active</td>
            <?php else :?>
                <td style="color: red;">Inactive</td>
            <?php endif ?>
            <?php if($this->isUserAdmin): ?>
                <td><a href="/user/edit/<?= $user['user_id']?>" class="btn btn-warning">Edit</a> </td>
            <?php endif; ?>
        </tr>
    <?php endforeach ?>
</table>