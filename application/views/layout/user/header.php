<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Melodi Muusic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!-- bootstrap -->
	<link href="<?= base_url('assets_user/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets_user/') ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

	<link href="<?= base_url('assets_user/') ?>themes/css/bootstrappage.css" rel="stylesheet" />

	<!-- global styles -->
	<link href="<?= base_url('assets_user/') ?>themes/css/flexslider.css" rel="stylesheet" />
	<link href="<?= base_url('assets_user/') ?>themes/css/main.css" rel="stylesheet" />

	<!-- scripts -->
	<script src="<?= base_url('assets_user/') ?>themes/js/jquery-1.7.2.min.js"></script>
	<script src="<?= base_url('assets_user/') ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets_user/') ?>themes/js/superfish.js"></script>
	<script src="<?= base_url('assets_user/') ?>themes/js/jquery.scrolltotop.js"></script>
	<link rel='shortcut icon' href='<?= base_url('assets_auth/images/logo/logo_music.png')?>'>
	<!--[if lt IE 9]>
			<script src="<?= base_url('assets_user/') ?>http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="<?= base_url('assets_user/') ?>js/respond.min.js"></script>
		<![endif]-->
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th,
		td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2
		}

		th {
			background-color: #04AA6D;
			color: white;
		}
	</style>
</head>

<body>
	<div id="top-bar" class="container">
		<div class="row">
			<div class="span4">
				<a href="<?= base_url('User/') ?>" class="logo pull-left"><img width="200" src="<?= base_url('assets_user/') ?>themes/images/melodi.png" class="site_logo" alt=""></a>
				<!-- <form method="POST" class="search_form">
					<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
				</form> -->
			</div>
			<div class="span8">
				<div class="account pull-right">
					<ul class="user-menu">
						<?php
						if ($user['role'] == 'User') {
						?>
							<li class="nav-item dropdown no-arrow mx-1">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong>Hello, <?= $user['nama']; ?> !</strong></span>
								</a>
							</li>

							<li class="nav-item dropdown no-arrow mx-1">
								<a class="nav-link dropdown-toggle" href="<?= base_url('User/pembelian') ?>">
									<img width="25" src="<?= base_url('assets_user/') ?>themes/images/history.png" class="site_logo" alt="">
									<!-- Counter - Alerts -->
									<span class="badge badge-danger badge-counter">!</span>
								</a>
							</li>
							<li class="nav-item dropdown no-arrow mx-1">
								<a class="nav-link dropdown-toggle" href="<?= base_url('User/detail') ?>">
									<img width="20" src="<?= base_url('assets_user/') ?>themes/images/basket.png" class="site_logo" alt="">
									<!-- Counter - Alerts -->
									<span class="badge badge-danger badge-counter">
										<?= $jlh ?>
									</span>

								</a>
							</li>
						<?php } ?>
						<li><a href="<?= site_url('Auth/logout') ?>"><img width="25" src="<?= base_url('assets_user/') ?>themes/images/logout.png" class="site_logo" alt="">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper" class="container">
		<section class="navbar main-menu">
			<div class="navbar-inner main-menu">
				<nav id="menu" class="pull-right">
					<ul>
						<li><a href="<?= base_url('User/displayGuitar') ?>">Guitar</a></li>
						<li><a href="<?= base_url('User/displayPiano') ?>">Piano</a></li>
						<li><a href="<?= base_url('User/displayDrum') ?>">Drum</a></li>
						<li><a href="<?= base_url('User/displayViolin') ?>">Violin</a></li>
						<li><a href="<?= base_url('User/displaySaxophone') ?>">Saxohpne</a></li>
						<li><a href="<?= base_url('User/displayHarp') ?>">Harp</a></li>
					</ul>
				</nav>
			</div>
		</section>