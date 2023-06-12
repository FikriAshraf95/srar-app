<?php

$current_url = $_SERVER['REQUEST_URI'];
// echo($current_url);
?>

<!-- Brand Logo -->
<a href="/srar-app/index.php" class="brand-link">
    <div class="container">
        <div class="row">
        <?php 
        if($current_url == "/srar-app/index.php"){
        ?>
        <div class="col-xs-12 mt-2">
            <img src="./resources/dist/img/avatar.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light">SRAR Al Muttaqin</span>
        </div>
        <?php
        } else {
        ?>
        <div class="col-xs-12 mt-2">
            <img src="../resources/dist/img/avatar.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light">SRAR Al Muttaqin</span>
        </div>
        <?php
        }
        ?>
        </div>
    </div>
</a>


<div class="sidebar">
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/srar-app/index.php" class="nav-link <?php echo($current_url == '/srar-app/index.php' ? 'active' : ''); ?>">
            <i class="fa fa-home" aria-hidden="true"></i>
                <p class="ml-2">Laman Utama</p>
            </a>
        </li>
        <li class="nav-header">Pelajar</li>
        <li class="nav-item">
            <a href="/srar-app/pelajar/senaraiKelas.php" class="nav-link <?php if($current_url == '/srar-app/pelajar/senaraiKelas.php'){echo 'active';} ?>">
            <i class="fa fa-users" aria-hidden="true"></i>
                <p class="ml-2">Senarai Pelajar</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/srar-app/pelajar/tambahPelajar.php" class="nav-link <?php if($current_url == '/srar-app/pelajar/tambahPelajar.php'){echo 'active';} ?>">
            <i class="fa fa-plus" aria-hidden="true"></i>
                <p class="ml-2">Tambah Pelajar</p>
            </a>
        </li>
        <li class="nav-header">Kelas</li>
        <li class="nav-item">
            <a href="/srar-app/kelas/senaraiKelas.php" class="nav-link <?php if($current_url == '/srar-app/kelas/senaraiKelas.php'){echo 'active';} ?>">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
                <p class="ml-2">Senarai Kelas</p>
            </a>
        </li><li class="nav-item">
            <a href="/srar-app/kelas/tambahKelas.php" class="nav-link <?php if($current_url == '/srar-app/kelas/tambahKelas.php'){echo 'active';} ?>">
            <i class="fa fa-plus" aria-hidden="true"></i>
                <p class="ml-2">Tambah Kelas</p>
            </a>
        </li>
        <li class="nav-header">Lain-lain</li>
        <li class="nav-item">
            <a href="/srar-app/pelajar/user.php" class="nav-link <?php if($current_url == '/user.php'){echo 'active';} ?>">
            <i class="fa fa-file" aria-hidden="true"></i>
                <p class="ml-2">Laporan</p>
            </a>
        </li>
        <li class="nav-item">
        <a href="/srar-app/tetapan/parameter.php" class="nav-link <?php if($current_url == '/parameter.php'){echo 'active';} ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p class="ml-2">GL Parameter</p>
            </a>
        </li>
    </ul>
    </nav>
</div>