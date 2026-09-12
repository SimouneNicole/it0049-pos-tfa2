<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1 class="page-title"><?= esc($title) ?></h1>
    <span class="badge"><?= count($users) ?> Records</span>
</div>

<div class="table-container">
    <table class="data-table">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Full Name</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td class="mono"><strong><?= esc($user['username']) ?></strong></td>
                    <td><?= esc($user['fullName']) ?></td>
                    <td><span class="badge"><?= esc($user['role']) ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
