<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-dark mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to The CACAO BAR</h2>
        <p class="text-muted mb-0">Premium Dark Chocolate Bar Management System</p>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body text-center py-5">
        <h3 class="text-dark mb-3">Crafted Premium Dark Chocolate</h3>
        <p class="fs-5 text-secondary">Manage your chocolate products, orders, staff and customers here.</p>
        <div class="mt-4">
            <i class="bi bi-chocolate fs-1"></i>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
