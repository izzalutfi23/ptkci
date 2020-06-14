<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Dashboard</title>

	<!-- Fontfaces CSS-->
	<link href="<?=base_url()?>asset/css/font-face.css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
		media="all">

	<!-- Sweet alert -->
	<link href="<?=base_url()?>asset/sweetalert/css/sweetalert.css" rel="stylesheet"
		media="all">

	<!-- Bootstrap CSS-->
	<link href="<?=base_url()?>asset/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="<?=base_url()?>asset/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
		media="all">
	<link href="<?=base_url()?>asset/vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url()?>asset/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="<?=base_url()?>asset/css/theme.css" rel="stylesheet" media="all">

	<!-- Datatable -->
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet"> -->

</head>

<body class="animsition">
	<div class="page-wrapper">
		<!-- HEADER MOBILE-->
		<header class="header-mobile d-block d-lg-none">
			<div class="header-mobile__bar">
				<div class="container-fluid">
					<div class="header-mobile-inner">
						<a class="logo" href="index.html">
							<img src="<?=base_url()?>asset/images/icon/logoadmin.png" width="150px" alt="CoolAdmin" />
						</a>
						<button class="hamburger hamburger--slider" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<nav class="navbar-mobile">
				<div class="container-fluid">
					<ul class="navbar-mobile__list list-unstyled">
						<li class="active has-sub">
							<a class="js-arrow" href="home.html">
								<i class="fas fa-tachometer-alt"></i>Dashboard</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-user"></i>Data Pegawai</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="pns.html">PNS</a>
								</li>
								<li>
									<a href="pns.html">GTY</a>
								</li>
								<li>
									<a href="pns.html">Honorer</a>
								</li>
								<li>
									<a href="pns.html">CPNS</a>
								</li>
							</ul>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="info.html">
								<i class="fas fa-address-card"></i>Informasi</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- END HEADER MOBILE-->

		<!-- MENU SIDEBAR-->
		<aside class="menu-sidebar d-none d-lg-block">
			<div class="logo">
				<a href="#">
					<img src="<?=base_url()?>asset/images/icon/logoadmin.png" width="150px" alt="Cool Admin" />
				</a>
			</div>
			<div class="menu-sidebar__content js-scrollbar1">
				<nav class="navbar-sidebar">
					<ul class="list-unstyled navbar__list">
						<li class="has-sub">
							<a class="js-arrow" href="<?=base_url('home')?>">
								<i class="fas fa-tachometer-alt"></i>Dashboard</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?=base_url('home/add')?>">
								<i class="fas fa-plus"></i>Tambah Pegawai</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-user"></i>Data Pegawai</a>
							<ul class="list-unstyled navbar__sub-list js-sub-list">
							<li>
									<a href="<?=base_url('home/pegawai')?>">Semua Pegawai</a>
								</li>
								<li>
									<a href="<?=base_url('home/pegawaistatus/PNS')?>">PNS</a>
								</li>
								<li>
									<a href="<?=base_url('home/pegawaistatus/GTY')?>">GTY/PTY</a>
								</li>
								<li>
									<a href="<?=base_url('home/pegawaistatus/Honor')?>">Honorer</a>
								</li>
								<li>
									<a href="<?=base_url('home/pegawaistatus/CPNS')?>">CPNS</a>
								</li>
							</ul>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?=base_url('home/info')?>">
								<i class="fas fa-address-card"></i>Informasi</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							<form class="form-header" action="" method="POST">
								
							</form>
							<div class="header-button">
								<div class="account-wrap">
									<div class="account-item clearfix js-item-menu">
										<div class="image">
											<img src="<?=base_url()?>asset/images/icon/avatar-01.jpg" alt="John Doe" />
										</div>
										<div class="content">
											<a class="js-acc-btn" href="#"><?=$nama?></a>
										</div>
										<div class="account-dropdown js-dropdown">
											<div class="info clearfix">
												<div class="image">
													<a href="#">
														<img src="<?=base_url()?>asset/images/icon/avatar-01.jpg"
															alt="John Doe" />
													</a>
												</div>
												<div class="content">
													<h5 class="name">
														<a href="#"><?=$nama?></a>
													</h5>
												</div>
											</div>
											<div class="account-dropdown__body">
												<div class="account-dropdown__item">
													<a href="#">
														<i class="zmdi zmdi-settings"></i>Setting</a>
												</div>
											</div>
											<div class="account-dropdown__footer">
												<a href="<?=base_url('login/logout')?>">
													<i class="zmdi zmdi-power"></i>Logout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- HEADER DESKTOP-->

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
