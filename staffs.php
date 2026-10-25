<?php ob_start(); ?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Staffs</h2>
        <p class="text-muted mb-0">Manage and track all your staff members</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-person-badge text-primary me-2"></i>
                    Staff Form
                </h5>
                <p class="text-muted small mb-0">Fill in the details of a staff member</p>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">Required fields</span>
            </div>
        </div>

        <form method="post">
            <div class="row g-3 mb-4">
                <div class="col">
                    <label class="form-label">Staff ID *</label>
                    <input type="text" name="staff_num" id="staff_num" class="form-control" placeholder="Enter Staff ID" required>
                </div>
                <div class="col">
                    <label class="form-label">Name *</label>
                    <input type="text" name="staff_name" id="staff_name" class="form-control" placeholder="Enter Staff Name" required>
                </div>
                <div class="col">
                    <label class="form-label">Phone Number *</label>
                    <input type="text" name="staff_phone" id="staff_phone" class="form-control" placeholder="Enter Phone Number" required>
                </div>
                <div class="col">
                    <label class="form-label">Email Address *</label>
                    <input type="email" name="staff_email" id="staff_email" class="form-control" placeholder="Enter Email Address" required>
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
                    Staff List
                </h5>
                <p class="text-muted small mb-0">View and manage all staff members</p>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 Items</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Staff ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                 
                    <tr>
                        <td>S001</td>
                        <td>Jane Smith</td>
                        <td>019-8765432</td>
                        <td>janesmith@example.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm text-dark"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">No staff members found</td>
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
