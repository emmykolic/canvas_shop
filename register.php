<?php 
include("db/config.php");
$site->set_token();
include("header.php");
?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="asset/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="login.php">Already have an Account?</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Sign Up First</h3>
						<form class="row login_form" action="register_process.php" method="post" id="contactForm">
							<?php $site->get_alert(); ?>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="firstname" placeholder="FirstName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Firstname'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="lastname" placeholder="Lastname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lastname'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="date" class="form-control" name="dash" onfocus="this.placeholder = ''" onblur="this.placeholder = 'date'">
							</div>
							<!-- <div class="col-md-12 form-group">
								<input type="text" class="form-control" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div> -->
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" name="<?=$site->token?>" class="primary-btn">Register</button>
								<span class="d-inline-flex">Already have an account ?</span><a class="d-inline-flex text-decoration-none px-1" href="login.php">Sign In?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
	<?php include("footer.php") ?>