<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="table-stage">
    <h1 class="page-title"><?= esc($title) ?></h1>

    <div class="glass-table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="cell-primary"><?= esc($user['username']) ?></td>
                        <td><?= esc($user['fullName']) ?></td>
                        <td><?= esc($user['role']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
