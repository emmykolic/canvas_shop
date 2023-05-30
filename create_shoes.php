<?php 
include("db/config.php");
$site->auth();
include("header.php");
?>
<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1><?= $site:: CREATE_PRODUCT ?></h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="dashboard.php"><?=SUBTITLE; ?></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Creating Shoes Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img" style="margin-top: 20vh;">
						<img class="img-fluid" src="asset/img/banner-img-1.jpg" style="min-height: 90vh;" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<!-- <a class="primary-btn" href="login.php">Already have an Account?</a> -->
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Create Products</h3><hr width="90">
						<form class="row login_form" action="create_shoes_process.php" onsubmit="validateForm();" method="post" id="contactForm">
							<?= $site->get_alert(); ?>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control prevent" name="shoe_name" placeholder="Shoe Name (Jordan)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shoe Name (Jordan)'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control prevent" name="shoe_price" placeholder="Shoe Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shoe Price'"><hr class="d-none">
							</div>
							<div class="col-md-12 form-group">
								<!-- <label>Description <span class="text-danger">*</span></label> -->
								<textarea type="text" class="form-control prevent create_shoes_description" name="description" placeholder="Description" onfocus="this.placeholder = 'Description'" onblur="this.placeholder = 'Description'"></textarea>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control prevent" name="shoe_brand" placeholder="Shoe Brand" onfocus="this.placeholder = 'Shoe Brand'" onblur="this.placeholder = 'Shoe Braand' ">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control prevent" name="available_qty" placeholder="Available Qty" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Available Qty'">
							</div>
							<div class="col-md-12 form-group">
								<input type="date" class="form-control prevent" name="date_created" onfocus="this.placeholder = ''" onblur="this.placeholder = 'date'">
							</div>
							<!-- <div class="col-md-12 form-group">
								<input type="text" class="form-control prevent" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div> -->
							<!-- <div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div> -->
							<div class="col-md-12 form-group">
								<button type="submit" name="<?=$site->token;?>" class="primary-btn">Create Shoes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Creating Product Area =================-->

<?php include("footer.php"); ?>