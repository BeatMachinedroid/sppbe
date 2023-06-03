<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Monitoring Kas</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png"> -->
    <!-- Retina iPad Touch Icon -->
    <!-- Styles -->
    <link href="<?= base_url('assets/css/lib/calendar2/pignose.calendar.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/lib/chartist/chartist.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/lib/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/lib/themify-icons.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/lib/owl.carousel.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/lib/owl.theme.default.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/lib/weather-icons.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/lib/menubar/sidebar.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/lib/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/lib/helper.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo">
                        <a href="<?= base_url('dashboard') ?>" class="text-right">
                            <!-- <img src="assets/images/logo.png" alt=""/>  -->
                            
                            <span>Sistem Monitoring Kas</span>
                        </a>
                    </div>
                    <li><a href="<?= base_url('dashboard') ?>" class="sidebar"><i class="ti-home"></i> Dashboard</a></li>
                    <li><a href="<?= base_url('dashboard/barang') ?>"><i class="ti-package"></i> Barang </a></li>
                    <li><a href="<?= base_url('dashboard/penjualan') ?>"><i class="ti-shopping-cart-full"></i> Penjualan </a></li>
                    <li class=""><a class="sidebar-sub-toggle"><i class="ti-receipt"></i> Kas <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul style="display: none;">
                            <li><a href="<?= base_url('dashboard/kas/masuk'); ?>"> Kas Masuk </a></li>
                            <li><a href="<?= base_url('dashboard/kas/keluar'); ?>"> Kas Keluar </a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('/dashboard/acount'); ?>"><i class="ti-user"></i> Acount </a></li>
                    <li><a href="<?= base_url('/dashboard/logout'); ?>"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <!-- <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. Soeng Souy</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. Soeng Souy</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. Soeng Souy</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. Soeng Souy</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <ul class="nav user-menu">
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><span class="user-img"><?= session()->get('username'); ?></span> </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-content-heading">
                                <span class="text-left"><?= session()->get('role'); ?></span>
                                <!-- <p class="trial-day"></p> -->
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="<?= base_url('profile'); ?>">
                                            <i class="ti-user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('dashboard/logout'); ?>">
                                            <i class="ti-power-off"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </li>
                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>