<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>AP2SC</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="assets/frontend/custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href=" assets/frontend/css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/frontend/css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="assets/frontend/css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="assets/frontend/css/jquery.fancybox.css" media="screen" />
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="assets/frontend/css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
         <!-- Header -->
        <header>
            <!-- Top Navbar -->
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li><a href="#"><span class="fa fa-phone"></span> 0812 - 1437 - 4202</a></li>
                        <li><a href="#"><span class="fa fa-envelope"></span> ap2sc@unikom.ac.id</a></li>
                        <li><a href="#"><span class="fa fa-clock-o"></span> Senin - Jumat 08:00 - 15:00</a></li>
                    </ul>
                    <ul class="list-inline social_icon">
                        <li><a href="https://www.facebook.com/unikomitsc/"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="https://twitter.com/itsc_unikom?lang=en"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="https://www.instagram.com/unikomitsc/?hl=en"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UC6M28Sf-qizojBJXROYN7-A"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                </div>
            </div><!-- Top Navbar end -->

            <!-- Navbar -->
            <nav class="navbar bootsnav">
                <!-- Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <!-- Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?=base_url()?>"><img class="logo" src="assets/frontend/images/whatthefuck.png" alt=""></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">News</a></li>
                            <li><a href="#portfolio">Gallery</a></li>
                            <li><a href="#contact_form">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav><!-- Navbar end -->
        </header><!-- Header end -->

       
