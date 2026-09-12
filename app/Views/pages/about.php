<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1 class="page-title"><?= esc($title) ?></h1>
</div>

<div class="prose">
    <p>This POS application manages store account records, customer directories, and authorized staff profiles for point-of-sale operations.</p>
    <p>It provides a central interface for viewing customer contact information and staff role assignments.</p>
</div>
<?= $this->endSection() ?>
