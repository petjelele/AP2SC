<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminAP2SC | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url()?>Welcome" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Dir. AP2SC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>AP2SC</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url()?>assets/backend/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?= base_url()?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('nama'); ?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?= base_url()?>Auth/action_logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
   <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?= ($this->uri->segment(2)==='index')?'active':''?>">
        	<a href="<?= base_url()?>Welcome/index"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="<?= ($this->uri->segment(2)==='slider')?'active':''?>">
        	<a href="<?= base_url()?>Welcome/slider"> <i class="fa fa-picture-o"></i> <span>Slider</span></a>
        </li>
        <li class="<?= ($this->uri->segment(2)==='galery')?'active':''?>">
        	<a href="<?= base_url()?>Welcome/galery"> <i class="fa fa-th"></i> <span>Galery</span></a>
        </li>
        <li class="<?= ($this->uri->segment(2)==='news')?'active':''?>">
        	<a href="<?= base_url()?>Welcome/news"> <i class="fa fa-newspaper-o"></i> <span>Berita</span></a>
        </li>
        <li class="<?= ($this->uri->segment(2)==='subscribe' || $this->uri->segment(2)==='inbox')?'active treeview':'treeview'?>">
          <a href="#">
              <i class="fa fa-envelope"></i>
              <span>Email</span>
              <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="<?= ($this->uri->segment(2)==='subscribe')?'active treeview':''?>">
                  <a href="<?= base_url()?>welcome/subscribe"><i class="fa fa-truck"></i> <span>Subcriber Berita</span></a>
              </li>
              <li class="<?= ($this->uri->segment(2)==='inbox')?'active treeview':''?>">
                  <a href="<?= base_url()?>welcome/inbox"><i class="fa fa-archive"></i> <span>Inbox Pertanyaan</span></a>
              </li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>
