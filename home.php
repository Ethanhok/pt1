<?php
ob_start();
?>
<div class="card shadow border-0 border-start border-5 border-dark mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to The CACAO BAR</h2>
        <p class="text-muted mb-0">Premium Dark Chocolate Bar Management System</p>
    </div>
</div>


<div class="card shadow-sm mb-4">
    <div id="chocoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/home1.png" class="d-block w-100" alt="Dark Chocolate Bar">
            </div>
            <div class="carousel-item">
                <img src="images/home2.png" class="d-block w-100" alt="Cocoa Raw Material">
            </div>
            <div class="carousel-item">
                <img src="images/home3.png" class="d-block w-100" alt="Chocolate Packaging">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#chocoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#chocoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- 介绍卡片 -->
<div class="card shadow-sm mb-4">
    <div class="card-body text-center py-5">
        <h3 class="text-dark mb-3">Crafted Premium Dark Chocolate</h3>
        <p class="fs-5 text-secondary">Manage your chocolate products, orders, staff and customers here.</p>
        
    </div>
</div>


<div class="row g-4">
    <div class="col-md-6 col-lg-3">
        <div class="card shadow h-100 text-center p-3">
            <div class="card-body">
                <i class="bi bi-box-seam fs-2 text-dark mb-2"></i>
                <h5>Products</h5>
                <p class="text-muted small">Manage all dark chocolate products</p>
                <a href="products.php" class="btn btn-dark btn-sm">Go</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow h-100 text-center p-3">
            <div class="card-body">
                <i class="bi bi-person fs-2 text-dark mb-2"></i>
                <h5>Customers</h5>
                <p class="text-muted small">View and manage customer records</p>
                <a href="customers.php" class="btn btn-dark btn-sm">Go</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow h-100 text-center p-3">
            <div class="card-body">
                <i class="bi bi-people fs-2 text-dark mb-2"></i>
                <h5>Staffs</h5>
                <p class="text-muted small">Staff information management</p>
                <a href="staffs.php" class="btn btn-dark btn-sm">Go</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card shadow h-100 text-center p-3">
            <div class="card-body">
                <i class="bi bi-receipt fs-2 text-dark mb-2"></i>
                <h5>Orders</h5>
                <p class="text-muted small">Track and review sales orders</p>
                <a href="orders.php" class="btn btn-dark btn-sm">Go</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
