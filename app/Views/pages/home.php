<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1 class="page-title"><?= esc($title) ?></h1>
</div>

<div class="prose">
    <p>Welcome to the POS management interface. This application provides central access to store customer accounts and staff user profiles.</p>
    <p>Use the navigation above to browse customer listings and user accounts.</p>
</div>
<?= $this->endSection() ?>
