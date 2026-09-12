<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Home') ?> | POS</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="site-wrapper">
        <header class="site-header">
            <a href="<?= base_url('/') ?>" class="brand-title">POS</a>
            <?php
                $currentUri = trim(service('request')->getPath(), '/');
            ?>
            <nav class="main-nav" aria-label="Primary Navigation">
                <a href="<?= base_url('/') ?>" class="nav-link <?= $currentUri === '' ? 'active' : '' ?>">Home</a>
                <a href="<?= base_url('about') ?>" class="nav-link <?= $currentUri === 'about' ? 'active' : '' ?>">About</a>
                <a href="<?= base_url('customers') ?>" class="nav-link <?= $currentUri === 'customers' ? 'active' : '' ?>">Customers</a>
                <a href="<?= base_url('users') ?>" class="nav-link <?= $currentUri === 'users' ? 'active' : '' ?>">Users</a>
            </nav>
        </header>

        <main class="main-content">
            <?= $this->renderSection('content') ?>
        </main>

        <footer class="site-footer">
            <p>&copy; <?= date('Y') ?> POS</p>
        </footer>
    </div>
</body>
</html>
