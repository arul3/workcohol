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
								<input type="email" class="form-control" placeholder="  Email" name="email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="  Password" name="pass">

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
   <!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h5>Quik Links</h5>
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
							<h5>How to sell fast</h5>
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
							<h5>Follow us on</h5>
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
							<h5>Newsletter</h5>
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
    <script type="text/javascript">

    

      $(".profile_list").click(function(){
          $(".pro_nav_li").css("visibility", "visibile");
          $("#pro_manu_list").slideToggle(1);
          $(".pro_nav_li").slideToggle(1);
      }); 
    $(".navbar_brand").click(function(){
          $(".nav_li").css("visibility", "visibile");
          $("#manu_list").slideToggle(1);
          $(".nav_li").slideToggle(1);
     }); 

     $("#pro_manu_list").mouseleave(function(){
              $('#pro_manu_list').css("display", "none");
     });          
    
  function click_search(){

      document.getElementById('sea_rch_input').style.cssText = 'width: 87%;overflow: initial;border-top-left-radius:3px ;   border-top-right-radius: 0px; border-bottom-left-radius: 3px;border-bottom-right-radius:0px ;';
      document.getElementById('search_icon_2').style.cssText = 'display: initial;';
      document.getElementById('search_icon_1').style.cssText = 'display: none;';

  }
  $("#sea_rch_input").focusout(function(){

      document.getElementById('sea_rch_input').style.cssText = 'width: 87%;overflow: hidden;border-top-left-radius:0px ;   border-top-right-radius: 3px; border-bottom-left-radius: 0px;border-bottom-right-radius:3px ;';
      document.getElementById('search_icon_1').style.cssText = 'display: initial;';
      document.getElementById('search_icon_2').style.cssText = 'display: none;';

  });
    document.getElementById('chat_window').scrollTop = (document.getElementById('new_mess_line').offsetTop)-(document.getElementById('chat_resend').offsetTop);
</script>

  </body>

<!-- Mirrored from demo.themeregion.com/jobs-updated/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
</html>