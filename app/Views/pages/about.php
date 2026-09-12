<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1 class="page-title"><?= esc($title) ?></h1>
    <span class="badge">Store Operations</span>
</div>

<div class="prose">
    <p>The POS terminal management system serves as the central administrative hub for retail sales, store personnel, and client accounts.</p>

    <h2>Operational Capabilities</h2>
    <ul>
        <li><strong>Register & Checkout Management:</strong> Oversees daily register activity, cashier assignments, and transaction processing across all checkout counters.</li>
        <li><strong>Customer Account Directory:</strong> Maintains client profiles, purchase contact records, and communication details.</li>
        <li><strong>Staff Administration:</strong> Manages store employee credentials and role assignments for cashiers, inventory specialists, and managers.</li>
        <li><strong>Station Reliability:</strong> Ensures dependable daily performance across in-store terminals and back-office management desks.</li>
    </ul>

    <p>Use the navigation menu above to access and review customer directories and employee accounts.</p>
</div>
<?= $this->endSection() ?>
