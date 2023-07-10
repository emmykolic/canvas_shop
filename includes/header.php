<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="asset/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Ultimate Shoe World</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="asset/css/linearicons.css">
	<link rel="stylesheet" href="asset/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/themify-icons.css">
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="asset/css/owl.carousel.css">
	<link rel="stylesheet" href="asset/css/nice-select.css">
	<link rel="stylesheet" href="asset/css/nouislider.min.css">
	<link rel="stylesheet" href="asset/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="asset/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="asset/css/magnific-popup.css">
	<link rel="stylesheet" href="asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="asset/croppie.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="" alt=""><?= $site:: NAME;?></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
								</ul>
							</li>
							<?php if (isset($site->uid)): ?>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">My Shoes</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="List_of_shoes.php">List</a></li>
									<li class="nav-item"><a class="nav-link" href="create_shoes.php">Post A Shoe</a></li>
									<li class="nav-item"><a class="nav-link" href="orders.php">Orders</a></li>
								</ul>
							</li>
							<?php endif; ?>
							<?php if (isset($site->uid)): ?>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"><?= ucwords($site->user->firstname)." ", ucwords($site->user->lastname) ?></a>
								<ul class="dropdown-menu">
									<!-- <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li> -->
									<li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
									<li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
								</ul>
							</li>
							<?php else: ?>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									 aria-expanded="false">Sign Up/Sign In</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>
										<li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>
									</ul>
								</li>
							<?php endif; ?>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item mb-0"><a href="#" class="cart"><span class="ti-bag"></span></a></li><span class="badge text-white" style="background-color: #FF7500;">5</span>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->