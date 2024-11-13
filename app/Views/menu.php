<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                           <img src="<?= base_url('img/sph.png') ?>" alt="E Office" class="dark-logo" width="150" height="auto"/>

                        </b>
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                       
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?=base_url('img/duck.jpg')?>" alt="user" class="profile-pic me-2">Bebek
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                       <ul class="sidebar">
    <!-- Dashboard -->
   <!-- Dashboard Menu -->
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('home/dashboard') ?>" aria-expanded="false">
        <i class="me-3 far fa-clock" aria-hidden="true"></i>
        <span class="hide-menu">Dashboard</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('home/user') ?>" aria-expanded="false">
        <i class="me-3 far fa-user fa-fw" aria-hidden="true"></i>
        <span class="hide-menu">Data User</span>
    </a>
</li>
<!-- Surat Masuk and Keluar -->
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('home/suratmasuk') ?>" aria-expanded="false">
        <i class="me-3 fas fa-envelope fa-fw" aria-hidden="true"></i>
        <span class="hide-menu">Surat Masuk</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('home/suratkeluar') ?>" aria-expanded="false">
        <i class="me-3 fas fa-paper-plane fa-fw" aria-hidden="true"></i>
        <span class="hide-menu">Surat Keluar</span>
    </a>
</li>

<!-- Arsip -->
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('home/arsip') ?>" aria-expanded="false">
        <i class="me-3 fas fa-archive fa-fw" aria-hidden="true"></i>
        <span class="hide-menu">Arsip</span>
    </a>
</li>
    <!-- Logout -->
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('home/logout') ?>" aria-expanded="false">
            <i class="me-3 fas fa-sign-out-alt fa-fw" aria-hidden="true"></i>
            <span class="hide-menu">Logout</span>
        </a>
    </li>
</ul>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
       
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              
             
             
                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->
            </div>