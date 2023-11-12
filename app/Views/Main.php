<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        body {
            background-color: #f4f4f4;
        }

        .admin-container {
            display: flex;
            align-items: stretch;
            min-height: 100vh;
        }

        .admin-sidebar {
            background-color: #3498db;
            color: #fff;
            width: 280px;
            padding: 20px;
            min-height: 100%;
        }

        .admin-content {
            flex: 1;
            background-color: #fff;
            padding: 20px;
        }

        .admin-logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .admin-nav {
            list-style: none;
            padding: 0;
        }

        .admin-nav li {
            margin-bottom: 10px;
        }

        .admin-nav a {
            text-decoration: none;
            color: #fff;
        }

        .admin-nav a:hover {
            color: #ccc;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .btn-primary, .btn-success, .btn-info {
            color: #fff;
        }

        .action-links a {
            margin-right: 10px;
        }

        .modal-dialog {
            max-width: 400px;
        }

        .modal-body ul {
            list-style: none;
            padding: 0;
        }

        .modal-body li {
            margin-bottom: 5px;
        }

        .table tbody a {
            text-decoration: underline;
        }
        .admin-nav .nav-link.active {
    color: black; /* Change to your desired color */
}

    </style>
    <title>Admin Page</title>
</head>
<body>

<div class="admin-container">
    <!-- Sidebar Content -->
    <div class="admin-sidebar">
    <div class="admin-logo">Ferlan Merchandise</div>
    <ul class="admin-nav">
        <li>
            <a href="<?= base_url('dashboard') ?>" class="nav-link <?= ($_SERVER['REQUEST_URI'] === '/dashboard') ? 'active' : ''; ?>">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="<?= base_url('test') ?>" class="nav-link <?= ($_SERVER['REQUEST_URI'] === '/test') ? 'active' : ''; ?>">
                <i class="fas fa-shopping-cart"></i> Product Management
            </a>
        </li>
        <li>
    <a href="<?= base_url('categories') ?>" class="nav-link <?= (current_url() === site_url('categories')) ? 'active' : ''; ?>">
        <i class="fas fa-folder"></i> Category
    </a>
</li>

        <li>
            <a href="<?= base_url('logout') ?>" class="nav-link <?= ($_SERVER['REQUEST_URI'] === '/logout') ? 'active' : ''; ?>">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </li>
    </ul>
</div>


    <div class="admin-content">
        
        <!-- Include your existing "Product Management" content here -->
        <!-- Add your content below this line -->
        <div class="container mt-5">
            <h2 class="mb-4">PRODUCT MANAGEMENT</h2>
            <a href="<?= base_url('create') ?>" class="btn btn-primary mb-3">Add Product</a>
            <a href="<?= base_url('add-category') ?>" class="btn btn-success mb-3">Add Category</a>

            <div class="mb-3 d-flex justify-content-between align-items-center">
                <form method="get" class="d-inline-block">
                    <label for="categoryFilter" class="form-label">Filter by Category:</label>
                    <select class="form-select" id="categoryFilter" name="categoryFilter">
                        <option value="">All Categories</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['category_id'] ?>" <?= (isset($categoryFilter) && $category['category_id'] == $categoryFilter) ? 'selected' : '' ?>><?= $category['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="btn btn-primary" id="applyFilter">Apply Filter</button>
                </form>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#categoryModal">Show Categories</button>
            </div>
            <div class="d-flex justify-content-center">
           <table class="table table-bordered table-striped" style="max-width: 600px;">
    <thead class="bg-primary text-white">
        <tr class="text-center">
            <th>Product</th>
            <th>View</th>
            <th>Approval</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sk as $product): ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td class="text-center" style="width: 40px;">
                    <a href="<?= base_url('student/' . $product['id']) ?>" class="text-decoration-none">
                        <i class="fas fa-eye" style="color: #20809d;"></i>
                    </a>
                </td>
                
                <td class="text-center" style="width: 40px;">
    <button class="toggle-approval btn btn-<?= ($product['is_approved'] == 1) ? 'danger' : 'success' ?>" data-product-id="<?= $product['id'] ?>">
        <?= ($product['is_approved'] == 1) ? 'Unapprove' : 'Approve' ?>
    </button>
</td>








            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Modal for Password Verification -->


</div>
<!-- Password verification modal -->


        <!-- Add your content above this line -->

        <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Categories</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <?php foreach ($categories as $category): ?>
                                <li><?= $category['name'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
    document.getElementById('applyFilter').addEventListener('click', function() {
        const categoryFilter = document.getElementById('categoryFilter').value;
        const tableRows = document.querySelectorAll('tbody tr');

        tableRows.forEach(function(row) {
            const categoryValue = row.querySelector('td:nth-child(3)').textContent;

            if (categoryFilter === '' || categoryFilter === categoryValue) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
<!-- Admin -->
<script>
    // Check if the admin is logged out and trying to access an authenticated page
    window.addEventListener('pageshow', function (event) {
        var page = event.target;
        var adminSessionData = <?= json_encode(session()->get('admin_id')) ?>; // Check your admin session variable name

        if (!adminSessionData && page.location.pathname !== 'login') {
            // If the admin is logged out and not on the admin login page, redirect them to the admin login page
            window.location.href = 'login'; // Replace 'admin_login' with your actual admin login page URL
        }
    });
</script>
<!-- Include Font Awesome and other scripts in the <head> section as previously shown -->

<script>
    // Add a click event to the rows with the "clickable-row" class
    document.addEventListener("DOMContentLoaded", function () {
        const rows = document.querySelectorAll(".clickable-row");
        rows.forEach(function (row) {
            row.addEventListener("click", function () {
                window.location = this.dataset.href;
            });
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->

<script>
    $(document).ready(function () {
        $('button.toggle-approval').on('click', function () {
            console.log('Button clicked');
            
            // Store a reference to 'this' in a variable
            const button = $(this);
            
            const productId = button.data('product-id');
            const isApproved = button.hasClass('btn-success') ? 1 : 0;

            $.ajax({
                url: '<?= site_url('product/approve/') ?>' + productId,
                type: 'POST',
                data: { is_approved: isApproved },
                success: function (response) {
                    // Handle the response, e.g., update the button style or text
                    if (isApproved === 1) {
                        button.removeClass('btn-success').addClass('btn-danger').text('Unapprove');
                    } else {
                        button.removeClass('btn-danger').addClass('btn-success').text('Approve');
                    }
                },
                error: function (error) {
                    // Handle the error
                    console.error('Error:', error);
                }
            });
        });
    });
</script>


</body>
</html>
