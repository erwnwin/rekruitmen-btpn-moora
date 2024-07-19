<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/btpn-logo.png'); ?>">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?= base_url() ?>assets_new/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets_new/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets_new/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets_new/dist/css/skins/skin-blue.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets_new/dist/css/mystyle.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets_new/bower_components/pace/pace-theme-flash.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="<?= base_url() ?>assets_new/bower_components/jquery/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>assets_new/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
	<script type="text/javascript">
		var base_url = '<?= base_url() ?>';
	</script>
</head>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<header class="main-header">
			<?php require "_menu.php"; ?>
		</header>
		<!-- Full Width Column -->
		<div class="content-wrapper">
			<div class="container">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Ujian Online
						<small>Psikotes</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="<?= base_url('my_dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
						<li><a href="<?= base_url() ?>ujian/list"><?= $title ?></a></li>
						<li class="active"><?= $title1 ?></li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">