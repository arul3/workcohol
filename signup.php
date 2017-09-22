<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

    <link rel="stylesheet" type="text/css" href="css/testing.css">
   <!-- CSS -->
   
    <link rel="stylesheet" href="css/font-awesome.min.css">   
    <link rel="stylesheet" href="css/main.css">  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
<?php  include "job_seeker/header.php" ?>


	<section class="job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account job-user-account">
						<h2>Create An Account</h2>
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="#find-job" aria-controls="find-job" role="tab" data-toggle="tab" id="find">Find A Job</a></li>
								<li role="presentation"><a href="#post-job" aria-controls="post-job" role="tab" data-toggle="tab" id="post" >Post A Job</a></li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane" id="find-job">
									<form action="php/signing.php" method="post" >
										<div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="Name" required>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="Email Id" required>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="pass" placeholder="Password" required>
										</div>
										


										<div class="form-group">
											<input type="text" class="form-control" placeholder="Mobile Number" maxlength="10" name="mobile"  required>
										</div>
										<!-- select -->
									
		
										<div class="checkbox">
											<label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
										</div><!-- checkbox -->	
										<input type="text" name="type" value="job_seeker" hidden>

										<button type="submit" class="btn">Registration</button>	
									</form>
								</div>
								<div role="tabpanel" class="tab-pane" id="post-job">
									<form action="php/signing.php" method="post">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Employer Name"  required>
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email Id" required>
										</div>
										<div class="form-group">
											<input type="password" name="pass" class="form-control" placeholder="Password" minlength="8" required>
										</div>
									
										<div class="form-group">
											<input type="text" name="mobile" class="form-control" placeholder="Contact Number" required>
										</div>
										<div class="checkbox">
											<label class="pull-left checked" for="signing-2"><input type="checkbox" name="signing-2" id="signing-2">By signing up for an account you agree to our Terms and Conditions</label>
										</div><!-- checkbox -->	

										<input type="text" name="type" value="employer" hidden>

										<button type="submit" class="btn">Registration</button>	
									</form>
								</div>
							</div>				
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->

	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Quik Links</h3>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">All Cities</a></li>
								<li><a href="#">Help & Support</a></li>
								<li><a href="#">Advertise With Us</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>How to sell fast</h3>
							<ul>
								<li><a href="#">How to sell fast</a></li>
								<li><a href="#">Membership</a></li>
								<li><a href="#">Banner Advertising</a></li>
								<li><a href="#">Promote your ad</a></li>
								<li><a href="#">Jobs Delivers</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget social-widget">
							<h3>Follow us on</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h3>Newsletter</h3>
							<p>Jobs is Worldest leading Portal platform that brings!</p>
							<!-- form -->
							<form action="#">
								<input type="email" class="form-control" placeholder="Your email id">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</form><!-- form -->			
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; <a href="#">Jobs</a> 2017. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">

    	$("#post-job").css({"display": "none" });
    	
    	$("#find").click(function (argument) {
    		
    		$("#post-job").css({"display": "none" });

    		
    		$("#find-job").css({"display": "initial" });



    	});


    	$("#post").click(function (argument) {
    		
    		$("#post-job").css({"display": "initial" });

    		
    		$("#find-job").css({"display": "none" });



    	});
    </script>
    	
  </body>

</html>