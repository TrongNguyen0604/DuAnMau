<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h3>Admin Dashboard</h3>
            </div>
            <ul class="nav-links">
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Danh mục sản phẩm</a></li>
                <li><a href="#">Người dùng</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <header>
                <div class="header-right">
                    <div class="user-info">
                        <img src="avatar.png" alt="Admin Avatar" class="avatar">
                        <span class="admin-name">Admin Name</span>
                    </div>
                </div>
            </header>
            <main>
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'products':
                            include 'pages/products.php';
                            break;
                        case 'categories':
                            include 'pages/categories.php';
                            break;
                        case 'users':
                            include 'pages/users.php';
                            break;
                        default:
                            echo '<h1>Welcome to Admin Dashboard</h1>';
                    }
                } else {
                    echo '<h1>Welcome to Admin Dashboard</h1>';
                }
                ?>
            </main>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>