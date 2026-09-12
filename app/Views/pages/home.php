<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1 class="page-title"><?= esc($title) ?></h1>
    <span class="badge">Operational</span>
</div>

<div class="prose">
    <p>Welcome to the POS central management interface. This application provides core access to store management, customer records, and authorized user accounts.</p>

    <h2>System Modules</h2>
    <ul>
        <li><strong>Customer Accounts:</strong> Directory of registered client profiles, contact points, and account records.</li>
        <li><strong>User Accounts:</strong> Registry of authenticated system personnel, operators, and role assignments.</li>
        <li><strong>System Information:</strong> Overview of point-of-sale operational architecture and platform standards.</li>
    </ul>

    <p>Select a section from the primary navigation above to access system records and configuration details.</p>
</div>
<?= $this->endSection() ?>
