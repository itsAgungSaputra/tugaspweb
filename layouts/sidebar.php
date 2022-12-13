<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../home.php">
        <div class="sidebar-brand-text"><img src="../assets/img/logo/icon-text.png" width="250px" alt="" class="img-fluid"></div>
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="../assets/img/logo/icon-logo.png" width="220px" alt="" class="img-fluid">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == "/webwisata/dashboard/index.php") { ?> active <?php } ?>">
        <a class="nav-link" href="../dashboard/index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item  <?php if ($_SERVER['PHP_SELF'] == "/webwisata/pengguna/index.php") { ?> active <?php } ?>">
        <a class="nav-link active" href="../pengguna/index.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Pengguna</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == "/webwisata/kabkot/index.php") { ?> active <?php } ?>">
        <a class="nav-link" href="../kabkot/index.php">
            <i class="fas fa-fw fa-building"></i>
            <span>Kabupaten/Kota</span>
        </a>
    </li>

    <li class="nav-item  <?php if ($_SERVER['PHP_SELF'] == "/webwisata/destinasi/index.php") { ?> active <?php } ?>">
        <a class="nav-link" href="../destinasi/index.php">
            <i class="fas fa-fw fa-plane"></i>
            <span>Destinasi</span>
        </a>
    </li>

    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == "/webwisata/hotel/index.php") { ?> active <?php } ?>">
        <a class="nav-link" href="../hotel/index.php">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Hotel</span>
        </a>
    </li>

    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == "/webwisata/kuliner/index.php") { ?> active <?php } ?>">
        <a class="nav-link" href="../kuliner/index.php">
            <i class="fas fa-fw fa-utensils"></i>
            <span>Kuliner</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->