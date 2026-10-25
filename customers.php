<?php ob_start(); ?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Customers</h2>
        <p class="text-muted mb-0">Manage and track all your customers</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-person-add text-primary me-2"></i>
                    Customer Form
                </h5>
                <p class="text-muted small mb-0">Fill in the details of a customer</p>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">Required fields</span>
            </div>
        </div>

        <form method="post">
            <div class="row g-3 mb-3">
                <div class="col">
                    <label class="form-label">Customer ID *</label>
                    <input type="text" name="customer_num" id="customer_num" class="form-control" placeholder="Enter Customer ID" required>
                </div>
                <div class="col">
                    <label class="form-label">Name *</label>
                    <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Enter Customer Name" required>
                </div>
                <div class="col">
                    <label class="form-label">Gender *</label>
                    <select name="customer_gender" id="customer_gender" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label">Phone Number *</label>
                    <input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="Enter Phone Number" required>
                </div>
            </div>
            <div class="row g-3 mb-4">
                <div class="col">
                    <label class="form-label">Register Date *</label>
                    <input type="date" name="register_date" id="register_date" class="form-control" placeholder="Select Register Date" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-plus-square me-1"></i> Create</button>
            <button type="reset" class="btn btn-secondary"><i class="bi bi-arrow-counterclockwise me-1"></i> Clear</button>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Customer List
                </h5>
                <p class="text-muted small mb-0">View and manage all customers</p>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 Items</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Register Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                 
                    <tr>
                        <td>C001</td>
                        <td>John Doe</td>
                        <td>Male</td>
                        <td>012-3456789</td>
                        <td>01-01-2026</td>
                        <td>
                            <button class="btn btn-warning btn-sm text-dark"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-center">No customers found</td>
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

