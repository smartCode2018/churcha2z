<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LANDING PAGE | ChurchA2Z </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700,700i%7CRubik:300,400,500,700" rel="stylesheet">

    <link rel="icon" type="image/png" href="favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.theme.min.css">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" />
</head>

<body class="">
    <!-- <div id="preloader">
        <div class="preloader-wrapper">
            <div class="spinner"></div>
        </div>
        <div class="preloader-cancel-btn">
            <a href="#" class="btn btn-secondary prelaoder-btn">Cancel Preloader</a>
        </div>
    </div> END prelaoder -->
    <div class="header-transparent">
        <!-- topBar section -->
        <div class="xs-top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="xs-top-bar-info">
                            <li>
                                <p><i class="icon icon-phone3"></i>+234</p>
                            </li>
                            <li>
                                <a href="mailto:info@domain.com"><i class="icon icon-envelope4"></i>info@sotirtech.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="top-menu">
                            <li><a href="<?=site_url('login')?>"><i class="icon icon-key2"></i> Login</a></li>
                            <!-- <li><a href="signup.html">Sign Up</a></li> -->
                            <li><a href="#"><i class="icon icon-hours-support"></i> Support</a></li>
                        </ul>
                    </div>
                </div><!-- .row END -->
            </div><!-- .container END -->
        </div> <!-- End topBar section -->

        <!-- header section -->
        <header class="xs-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="xs-logo-wraper">
                        <a href="<?= site_url('/') ?>" class="xs-logo">
                                <img src="<?php echo base_url(); ?>assets/images/church_logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <nav class="xs-menus">
                            <div class="nav-header">
                                <a class="nav-brand" href="index.html">
                                    <img src="assets/images/logo.png" alt="">
                                </a>
                                <div class="nav-toggle"></div>
                            </div>
                            <div class="nav-menus-wrapper">
                                <ul class="nav-menu align-to-right">
                                <li><a href="<?= site_url('/') ?>">Home</a>
                                    </li>

                                    <li><a href="<?= site_url('/login') ?>">Login</a>
                                    </li>
                                    <!-- <li><a href="#">Register</a>    -->
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2">
                        <ul class="xs-menu-tools">
                            <li>
                                <a href="#modal-popup-1" class="languageSwitcher-button xs-modal-popup"><i class="icon icon-internet"></i></a>
                            </li>
                            <li>
                                <a href="#" class="offset-side-bar"><i class="icon icon-cart2"></i><span class="item-count">2</span></a>
                            </li>
                            <li>
                                <a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="icon icon-search"></i></a>
                            </li>
                            <li>
                                <a href="#" class="navSidebar-button"><i class="icon icon-burger-menu"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- .row END -->
            </div><!-- .container END -->
        </header> <!-- End header section -->
    </div>