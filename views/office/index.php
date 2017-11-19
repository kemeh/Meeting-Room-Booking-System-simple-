<?php if($this->isUserAdmin): ?>
<a class="btn btn-success" href="/office/create">Create Office</a>
<?php endif; ?>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Adress</th>
        <th>Phone</th>
        <th>Active</th>
    </tr>
    <?php foreach ($this->offices as $office) :?>
    <tr>
        <td><?= htmlspecialchars($office['office_id']) ?></td>
        <td><a href="/office/details/<?= htmlspecialchars($office['office_id']) ?>"><?= htmlspecialchars($office['office_name']) ?></a></td>
        <td><?= htmlspecialchars($office['office_address']) ?></td>
        <td><?= htmlspecialchars($office['office_phone']) ?></td>
        <?php if($office['is_active']== 1) :?>
            <td>Yes</td>
            <?php else :?>
            <td>No</td>
        <?php endif ?>
        <?php if($this->isUserAdmin): ?>
            <td><a href="/office/edit/<?= $office['office_id']?>" class="btn btn-warning">Edit</a> </td>
        <?php endif; ?>
    </tr>
    <?php endforeach ?>
</table>
