<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Dashboard
				<small>Control panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<?php

				?>
				<div class="col-lg-2 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3><?php echo $jmlSlider; ?></h3>
							<p>Total Slider</p>
						</div>
						<div class="icon">
							<i class="ion ion-android-camera"></i>
						</div>
						<a href="<?= base_url()?>/Welcome/slider" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
				<div class="col-lg-2 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-red">
						<div class="inner">
							<h3><?php echo $jmlGal; ?></h3>
							<p>Total Galery</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="<?= base_url()?>/Welcome/galery" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
				<div class="col-lg-2 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?php echo $jmlNews; ?></h3>
							<p>Total Berita</p>
						</div>
						<div class="icon">
							<i class="ion ion-ios-paper"></i>
						</div>
						<a href="<?= base_url()?>/Welcome/news" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
				<div class="col-lg-2 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-primary">
						<div class="inner">
							<h3><?php echo $jmlSubs; ?></h3>
							<p>Total Subscriber</p>
						</div>
						<div class="icon">
							<i class="ion ion-android-notifications"></i>
						</div>
						<a href="<?= base_url()?>/Welcome/subscribe" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
				<div class="col-lg-2 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-purple">
						<div class="inner">
							<h3><?php echo $jmlInbox; ?></h3>
							<p>Total Pesan Masuk</p>
						</div>
						<div class="icon">
							<i class="ion ion-android-drafts"></i>
						</div>
						<a href="<?= base_url()?>/Welcome/inbox" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div><!-- ./col -->
			</div><!-- /.row -->
			<!-- Main row -->


		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->
	<footer class="main-footer">
	    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Direktorat AP2SC</a>.</strong> All rights
	    reserved.
	  </footer>
	<!-- Add the sidebar's background. This div must be placed
		 immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="<?= base_url()?>assets/backend/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- jQuery 3 -->
<script src="<?= base_url()?>assets/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>assets/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>assets/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/backend/dist/js/demo.js"></script>
</body>
</html>
