<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <h1 class="page-title"><?= esc($title) ?></h1>
    <span class="badge">Platform Info</span>
</div>

<div class="prose">
    <p>The POS platform delivers lightweight, reliable point-of-sale management with structured data organization. Built on clean architectural separation, it establishes a dependable foundation for retail and service operations.</p>

    <h2>Architecture & Core Principles</h2>
    <ul>
        <li><strong>Modular Organization:</strong> Independent route definitions and controller actions orchestrate data cleanly across each module.</li>
        <li><strong>Secure Data Rendering:</strong> Standardized output escaping across all displayed record fields to prevent injection vulnerabilities.</li>
        <li><strong>Adaptive Interface:</strong> Fluid liquid-glass layout optimized for wide desktop stations, tablets, and handheld devices.</li>
        <li><strong>Accessibility Standards:</strong> WCAG AA compliant color contrasts, semantic table structures, and complete keyboard focus visibility.</li>
    </ul>

    <p>All functional modules utilize a shared layout framework to ensure consistent navigation and readability across operational workstations.</p>
</div>
<?= $this->endSection() ?>
