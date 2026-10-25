<?php ob_start(); ?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Orders</h2>
        <p class="text-muted mb-0">Manage and track all your orders</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-cart-plus text-primary me-2"></i>
                    Order Form
                </h5>
                <p class="text-muted small mb-0">Create an order header before adding products</p>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">Required fields</span>
            </div>
        </div>

        <form method="post">
            <div class="row g-3 mb-3">
                <div class="col">
                    <label class="form-label">Order Date *</label>
                    <input type="date" name="order_date" id="order_date" class="form-control" placeholder="Select Order Date" required>
                </div>
                <div class="col">
                   <label class="form-label">Staff *</label>
                   <select name="staff_num" id="staff_num" class="form-control" required>
                       <option value="">Select Staff</option>
                       <option value="S001">Jane Smith</option>
                    </select>
                </div>

                <div class="col">
                    <label class="form-label">Customer *</label>
                    <select name="customer_num" id="customer_num" class="form-control" required>
                        <option value="">Select Customer</option>
                        <option value="C001">John Doe</option>
                    </select>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary"><i class="bi bi-plus-square me-1"></i> Create Order</button>
                <button type="reset" class="btn btn-secondary"><i class="bi bi-arrow-counterclockwise me-1"></i> Clear</button>
            </div>
        </form>

            
            

           
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Order List
                </h5>
                <p class="text-muted small mb-0">View and manage all orders</p>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 Items</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Order No.</th>
                        <th>Date</th>
                        <th>Staff</th>
                        <th>Customer</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td>O001</td>
                        <td>2026-10-03</td>
                        <td>Jane Smith</td>
                        <td>Alice Johnson</td>
                        <td>
                          <a href="orderdetails.php" class="btn btn-sm btn-info text-white" title="Order details"><i class="bi bi-list"></i></a>
                          <a href="invoice.php" class="btn btn-sm btn-success" title="View invoice"><i class="bi bi-receipt"></i></a>
                          <button class="btn btn-warning btn-sm text-dark"><i class="bi bi-pencil-square"></i></button>
                          <button class="btn btn-danger btn-sm text-white"><i class="bi bi-trash"></i></button>
                        </td>

                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>

