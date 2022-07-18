<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets_admin/') ?>favicon.ico">
    <title>Melodi Music</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="<?= base_url('assets_admin/') ?>https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/feather.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/select2.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/dropzone.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/uppy.min.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/jquery.steps.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="<?= base_url('assets_admin/') ?>css/dataTables.bootstrap4.css">
    <link rel='shortcut icon' href='<?= base_url('assets_auth/images/logo/logo_music.png')?>'>
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <!-- <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="<?= base_url('assets_admin/') ?>#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="<?= base_url('assets_admin/') ?>./#" data-toggle="modal" data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="<?= base_url('assets_admin/') ?>./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="<?= base_url('assets_admin/') ?>#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2 ">
                            <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="..." class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activities</a>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="<?= base_url('assets_admin/') ?>#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a href="<?= base_url('assets_user/') ?>index.html" class="logo pull-left"><img width="200" src="<?= base_url('assets_user/') ?>themes/images/melodi.png" class="site_logo" alt=""></a>
                    <!-- <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="<?= base_url('assets_admin/') ?>./index.html">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg>
                    </a> -->
                </div>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= site_url('Dashboard/') ?>">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Data</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= site_url('Music/') ?>">
                            <i class="fe fe-music fe-16"></i>
                            <span class="ml-3 item-text">Music</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= site_url('Penjualan/') ?>">
                            <i class="fe fe-shopping-cart fe-16"></i>
                            <span class="ml-3 item-text">Penjualan</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= site_url('Auth/logout') ?>">
                            <i class="fe fe-arrow-left-circle fe-16"></i>
                            <span class="ml-3 item-text">Logout</span>
                        </a>
                    </li>
                </ul>

        </aside>