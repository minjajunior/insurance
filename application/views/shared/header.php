<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 1/5/2018
 * Time: 1:01 PM
 */?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demi Insurance</title>

    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="">
    <meta name="author" content="#">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themify-icons.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/icofont.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sweetalert.css')?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/buttons.dataTables.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.bootstrap4.min.css')?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/j-pro-modern.css')?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/sweetalert.min.js')?>"></script>
</head>
<body>

<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a href="<?php echo base_url() ?>">
                        Demi Insurance
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <a href="#">
                                <span><?php echo $this->session->firstname ." ". $this->session->lastname ?></span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <!--li>
                                    <a href="auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                </li-->
                                <li>
                                    <a href="<?php echo site_url('login/logout')?>">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="">
                            <div class="main-menu-header">
                                <div class="user-details">
                                    <span><?php echo $this->session->firstname ." ". $this->session->lastname ?></span>
                                    <span id="more-details">User<i class="ti-angle-down"></i></span>
                                </div>
                            </div>
                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        <!--a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                        <a href="#!"><i class="ti-settings"></i>Settings</a-->
                                        <a href="<?php echo site_url('login/logout')?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>