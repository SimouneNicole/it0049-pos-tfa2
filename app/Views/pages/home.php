<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1 class="page-title"><?= esc($title) ?></h1>
    <span class="badge">Operational</span>
</div>

<div class="prose">
    <p>Welcome to the POS central management interface. This system provides store staff and administrators with immediate access to daily point-of-sale directories.</p>

    <h2>Store Modules</h2>
    <ul>
        <li><strong>Customer Accounts:</strong> Access customer contact records, email addresses, and phone directories.</li>
        <li><strong>User Accounts:</strong> Review active staff members, cashier accounts, and management roles.</li>
        <li><strong>System Information:</strong> Read operational guidelines and store terminal information.</li>
    </ul>

    <p>Select a section from the navigation menu above to review account listings and manage store data.</p>
</div>
<?= $this->endSection() ?>
