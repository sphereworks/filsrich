<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Filsrich admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Filsrich admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= base_url('/backend_assets/images/filsrich-logo/favicon.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('/backend_assets/images/filsrich-logo/favicon.png') ?>" type="image/x-icon">
    <title> Wholesale online shopping sites | b2b online store </title>
    <!-- Google font-->
    <link href="'https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/backend_assets/css/fontawesome.css') ?>">
 <!-- Flag icon-->
 <link rel="stylesheet" type="text/css" href="<?= base_url('/backend_assets/css/themify.css') ?>">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/backend_assets/css/themify-icons.css') ?>">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css"  href="<?= base_url('/backend_assets/css/flag-icon.css') ?>">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css"  href="<?= base_url('/backend_assets/css/icofont.css') ?>">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css"  href="<?= base_url('/backend_assets/css/prism.css') ?>">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css"  href="<?= base_url('/backend_assets/css/chartist.css') ?>">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css"  href="<?= base_url('/backend_assets/css/bootstrap.css') ?>">

    <!-- App css-->
    <link rel="stylesheet" type="text/css"  href="<?= base_url('/backend_assets/css/admin.css') ?>">
    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/backend_assets/css/slick.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/backend_assets/css/slick-theme.css') ?>">

</head>
    <body>
      <!-- page-wrapper Start-->
<?php
 
if( base_url(uri_string()) != base_url().'admin') { ?>

<!-- add header section start here -->
<div class="top-header1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="header-contact">
                    <ul>
                        <li> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:filsrichindia@gmail.com"> filsrichindia@gmail.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:9871046943">+91-9871046943</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="social-header">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/filsrich/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/filsrich/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/filsrichindia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/filsrich/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.ca/filsrichindia/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 text-right my-account">
                <div class="nav-right">
                    <ul class="nav-menus">
                        <li class="onhover-dropdown" id="account">
                            <div class="media align-items-center"> <i class="fa fa-user" aria-hidden="true"></i> My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Edit Profile</a></li>
                            <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a></li>
                            <li><a href="<?= base_url('admin/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- add header section end here -->
<div class="page-wrapper">
    <!-- Page Header Start-->
    <div class="page-main-header" id="top-fix">
        <div class="container">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
               <div class="logo-wrapper">
                    <a href="<?= base_url().'admin/home' ?>"><img class="blur-up lazyloaded" src="<?= base_url('backend_assets/images/filsrich-logo/logo.png') ?>" alt=""></a>
                </div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li class="onhover-dropdown" id="notification"><i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="<?= base_url('backend_assets/images/user.jpg') ?>" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    </div>
    <!-- Page Header Ends -->

<!-- Page Body Start-->
<div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                 <div class="logo-wrapper"><a href="<?= base_url().'admin/home' ?>">
                 <img class="blur-up lazyloaded" src="<?= base_url('backend_assets/images/filsrich-logo/logo.png') ?>" alt=""></a>
                </div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                   <div><img class="img-60 rounded-circle lazyloaded blur-up" src="<?= base_url('backend_assets/images/user.jpg') ?>" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">JOHN</h6>
                    <p>general manager.</p>
                    <a href="http://dev.filsrich.com/" target="_blank">filsrich.com</a>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="<?= base_url('admin') ?>"><i class="fa fa-home" aria-hidden="true"></i> <span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i class="fa fa-codepen" aria-hidden="true"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?= base_url('admin/shopcategories') ?>" <?= urldecode(uri_string()) == 'admin/shopcategories' ? 'class="active"' : '' ?>><i class="fa fa-list-alt" aria-hidden="true"></i>Categories</a>
                            </li>
                            <li><a href="<?= base_url('admin/products') ?>" <?= urldecode(uri_string()) == 'admin/products' ? 'class="active"' : '' ?>><i class="fa fa-files-o" aria-hidden="true"></i> Product List</a>
                            </li>
                            <li><a href="<?= base_url('admin/publish') ?>" <?= urldecode(uri_string()) == 'admin/publish' ? 'class="active"' : '' ?>><i class="fa fa-inr" aria-hidden="true"></i> Add Product</a>
                            </li>
                           <li><a href="product-detail.php"><i class="fa fa-info" aria-hidden="true"></i> Product Detail</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i class="fa fa-inr" aria-hidden="true"></i> <span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="order.php"><i class="fa fa-first-order" aria-hidden="true"></i>  Orders</a></li>
                        <li><a href="transactions.php"><i class="fa fa-exchange" aria-hidden="true"></i>  Transactions</a></li>
                    </ul>
                   </li>
                   <li><a class="sidebar-header" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i> <span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="list-pages.php"><i class="fa fa-list-ul" aria-hidden="true"></i> List Page</a></li>
                        <li><a href="create-page.php"><i class="fa fa-plus" aria-hidden="true"></i> Create Page</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-header" href="media.php"><i class="fa fa-camera" aria-hidden="true"></i> <span>Media</span></a>
                </li>
                <li><a class="sidebar-header" href=""><i class="fa fa-user" aria-hidden="true"></i> <span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="user-list.php"><i class="fa fa-users" aria-hidden="true"></i> User List</a></li>
                        <li><a href="create-user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create User</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-header" href="reports.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span>Reports</span></a></li>
                 <li><a class="sidebar-header" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> <span>Settings</span></a>
                 </li>
                  <li><a href="<?= base_url('admin/logout') ?>" class="sidebar-header"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
<?php
} ?>

