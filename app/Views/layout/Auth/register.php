<!doctype html>
<html lang="en">
  <head>
  	<title>Sistem Monitoring Kas | register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

	</head>
	<body>
	<!-- <section class="ftco-section" style="background: #343957"> -->
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-12 col-lg-10"> -->
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(<?= base_url(
          'images/1.jpeg'
      ) ?>);">
			        </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex mb-4">
			      		<div class="w-100 text-center">
			      			<h3 class="">Sistem Monitoring Kas
                                </h3>
								<h4 style="font-size: 20;">PT Karunia Ulul Azmi</h4>
                            
			      		</div>
					</div>
					<?php if (isset($validation)): ?>
					  <div class="alert alert-warning">
					  <?= $validation->listErrors() ?>
					  </div>
					  <?php endif; ?>
							<form action="<?= base_url('register/post'); ?>" class="signin-form" method="post">
			      		<div class="form-group mb-3">
			      			<!-- <label class="label" for="name">Username</label> -->
			      			<input type="text" class="form-control" placeholder="Username"  name="username" value="<?= set_value('username') ?>">
			      		</div>
			      		<div class="form-group mb-3">
			      			<!-- <label class="label" for="name">Username</label> -->
			      			<input type="text" class="form-control" placeholder="email" name="email" value="<?= set_value('email') ?>">
			      		</div>
		            <div class="form-group mb-3">
		            	<!-- <label class="label" for="password">Password</label> -->
		              <input type="password" class="form-control" placeholder="Password" name="password" >
		            </div>
		            <div class="form-group mb-3">
		            	<!-- <label class="label" for="password">Password</label> -->
						<input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
		            </div>
		            <!-- <div class="form-group d-md-flex">
		            	        <div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div> -->
		          </form>
		          <p class="text-center">You have Account ? <a href="<?= base_url(
                '/'
            ) ?>">Sign In</a></p>
		        <!-- </div> -->
		      </div>
				</div>
			</div>
		</div>
	<!-- </section> -->

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

