<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Point of Sale') ?> | POS</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="site-canvas">
        <header class="nav-capsule-wrapper">
            <nav class="nav-capsule" aria-label="Primary Navigation">
                <a href="<?= base_url('/') ?>" class="nav-brand">POS</a>
                <div class="nav-divider" aria-hidden="true"></div>
                <?php
                    $currentUri = trim(service('request')->getPath(), '/');
                ?>
                <div class="nav-links">
                    <a href="<?= base_url('/') ?>" class="nav-item <?= $currentUri === '' ? 'is-active' : '' ?>">Home</a>
                    <a href="<?= base_url('about') ?>" class="nav-item <?= $currentUri === 'about' ? 'is-active' : '' ?>">About</a>
                    <a href="<?= base_url('customers') ?>" class="nav-item <?= $currentUri === 'customers' ? 'is-active' : '' ?>">Customers</a>
                    <a href="<?= base_url('users') ?>" class="nav-item <?= $currentUri === 'users' ? 'is-active' : '' ?>">Users</a>
                </div>
            </nav>
        </header>

        <main class="content-stage">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</body>
</html>
