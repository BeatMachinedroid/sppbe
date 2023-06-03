<!doctype html>
<html lang="en">
  <head>
  	<title>Sistem Monitoring Kas | login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section" style="background: #343957">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/bg.jpg);">
			        </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex mb-4">
			      		<div class="w-100 text-center">
			      			<h3 class="">Sistem Monitoring Kas
                                </h3>
								<h4 style="font-size: 20;">PT Karunia Ulul Azmi</h4>
								</div>
			      		</div>
						  	<?php if(session()->getFlashdata('msg')):?>
								<div class="alert alert-warning">
								<?= session()->getFlashdata('msg') ?>
								</div>
							<?php endif;?>
			      	
							<form action="<?= base_url('login/post'); ?>" method="post" class="signin-form">
			      		<div class="form-group mb-3">
			      			<!-- <label class="label" for="name">Username</label> -->
			      			<input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email') ?>">
			      		</div>
		            <div class="form-group mb-3">
		            	<!-- <label class="label" for="password">Password</label> -->
		              <input type="password" class="form-control" placeholder="Password" name="password">
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		          </form>
		          <p class="text-center">dont have acount? <a href="<?= base_url('register'); ?>">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

