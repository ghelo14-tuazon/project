<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo.png'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

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
            width: 343px;
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

        .table {
            background-color: #fff;
        }

        .table thead th {
            background-color: #3498db;
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
<div class="container mt-5">
            <h2 class="mb-4">Category Management</h2>

      

    </div>
</body>
</html>