<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>
<!-- CSS -->
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
<?php  include "header.php" ?>


	<!-- signin-page -->
	<section class="clearfix job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account">
						<h2>User Login</h2>
						<!-- form -->
						<form action="php/logging.php" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="pass">

							</div>
							<button type="submit" href="#" class="btn" id="login">Login</button>
						</form><!-- form -->
					
						<!-- forgot-password -->
						<div class="user-option">
							<div id="pass_change">
							<div class="checkbox pull-left">
								<label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
							</div>
							<div class="pull-right forgot-password">
								<a href="#">Forgot password</a>
							</div>
						</div>
						<div id="create_change">
							<a href="signup.php" class="btn-primary">Create a New Account</a>
						</div>
						</div><!-- forgot-password -->
					</div>
					
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signin-page -->
	
	<!-- footer -->
	<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
   <?php  include "footer.php" ?>

	
	<!--/Preset Style Chooser--> 
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->

  </body>


</html>