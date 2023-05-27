<?php

$current_url = $_SERVER['REQUEST_URI'];
// echo($current_url);

?>

<!-- Brand Logo -->
<a href="index.php" class="brand-link">
<div class="container">
    <div class="row">
        <div class="col-xs-12 mt-2">
            <img src="./resources/dist/img/avatar.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light">`USERNAME`</span>
        </div>
    </div>
</div>
    
</a>

<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="./index.php" class="nav-link <?php echo($current_url == '/index.php' ? 'active' : ''); ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p class="ml-2">Dashboard</p>
            </a>
        </li>
        <li class="nav-header">Students</li>
        <li class="nav-item">
            <a href="./student.php" class="nav-link <?php if($current_url == '/student.php'){echo 'active';} ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p class="ml-2">Students List</p>
            </a>
        </li>
        <li class="nav-header">Settings</li>
        <li class="nav-item">
            <a href="./user.php" class="nav-link <?php if($current_url == '/user.php'){echo 'active';} ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p class="ml-2">User</p>
            </a>
        </li>
        <li class="nav-item">
        <a href="./class.php" class="nav-link <?php if($current_url == '/class.php'){echo 'active';} ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p class="ml-2">Class</p>
            </a>
        </li>
        <li class="nav-item">
        <a href="./parameter.php" class="nav-link <?php if($current_url == '/parameter.php'){echo 'active';} ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p class="ml-2">GL Parameter</p>
            </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>