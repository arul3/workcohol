<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/edit-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

   <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/icofont.css"> 
    <link rel="stylesheet" href="../css/slidr.css"> 

        
    <link rel="stylesheet" href="../css/main.css">  
	<link id="preset" rel="stylesheet" href="../css/presets/preset1.css">	
    <link rel="stylesheet" href="../css/responsive.css">

    <link rel="stylesheet" href="../css/form-validation.css">


    <link rel="stylesheet" type="text/css" href="../css/form-validation.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  <?php include 'header.php' ?>
	<!-- header -->
	<!-- header -->

	<section class=" job-bg ad-details-page">
		<div class="container">
		
			<!-- banner -->

			<div class="adpost-details post-resume">
				<div class="row">	
					<div class="col-md-8 clearfix">
						<!-- <form action="../php/resume_update.php" method="post"  id="resume" autocomplete="on"> -->
							<fieldset>

								
								<div class="section express-yourself">
									<h4>Express Yourself</h4>
									<div class="row form-group">
										<label class="col-sm-4 label-title">Full Name</label>
										<div class="col-sm-8">
											<input type="text" name="name" class="form-control" placeholder="ex Jhon Doe" required>
										</div>
									</div>
									<div class="row form-group additional-information">
										<label class="col-sm-4 label-title">Additional Information</label>
										<div class="col-sm-8">
											<textarea class="form-control" placeholder="Address: 123 West 12th Street, Suite 456 New York, NY 123456\n Phone: +012 345 678 910 \n Email: itsme@surzilegeek.com*"  name="additional_information" required></textarea>
										</div>
									</div>
									<div class="row form-group photos-resume">
										<label class="col-sm-4 label-title">Photos for your Resume</label>
										<div class="col-sm-8 ">
											<label class="upload-image left" for="upload-image-one">
												<input type="file" id="upload-image-one" name="resume_photo" required>
												Type: JPG, PNG  Size: 3.5 x 4.5 cm
											</label>
											<label  for="upload-image-two">
												<button type="button" id="upload-image-two" class="btn">
												Upload Photo</button>
											</label>
										</div>
									</div>
								</div><!-- postdetails -->
								
								<div class="section career-objective">
									<h4>Career Objective</h4>
									<div class="form-group">
										<textarea class="form-control" placeholder="Write few lines about your career objective" rows="8" name="career"></textarea>		
									</div>
									<span>5000 characters left</span>
								</div><!-- career-objective -->
								
								<div class="section">
									<h4>Work History</h4>

								<div id="work_list">
								



								
									</div>
								</div><!-- work-history -->
								
								<div class="section education-background">
									<h4>Education Background</h4>


								<div id="education_list">

								</div>
							</div><!-- work-history -->

								<div class="section special-qualification">
									<h4>Special Qualification</h4>
									<div class="form-group item-description">
										<textarea class="form-control" placeholder="Write few lines about your special qualification" rows="8" name="special"></textarea>
									</div>								
								</div><!-- special-qualification -->								
								
								<div class="section language-proficiency">
									<h4>Language Proficiency:</h4>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Language Name</label>
										<div class="col-sm-9">
											<input type="text" name="lang" class="form-control" placeholder="English">
										</div>
									</div>
									<div class="row form-group rating">
										<label class="col-sm-3 label-title">Rating</label>
										<div class="col-sm-9">
											<div class="rating-star">
											    <div class="rating">
											        <input type="radio" id="star1" name="rating"><label class="full" for="star1"></label>

											        <input type="radio" id="star2" name="rating"><label class="half" for="star2"></label>

											        <input type="radio" id="star3" name="rating"><label class="full" for="star3"></label>

											        <input type="radio" id="star4" name="rating"><label class="half" for="star4"></label>

											        <input type="radio" id="star5" name="rating"><label class="full" for="star5"></label>

											        <input type="radio" id="star6" name="rating"><label class="half" for="star6"></label>

											        <input type="radio" id="star7" name="rating"><label class="full" for="star7"></label>

											        <input type="radio" id="star8" name="rating"><label class="half" for="star8"></label>

											        <input type="radio" id="star9" name="rating"><label class="full" for="star9"></label>

											        <input type="radio" id="star10" name="rating"><label class="half" for="star10"></label>
											    </div>
											</div><!-- rating-star -->
										</div>
									</div>
									<div class="buttons pull-right">
										<a href="#" class="btn">Add New Language</a>
										<a href="#" class="btn delete">Delete</a>
									</div>
								</div><!-- language-proficiency -->

								<div class="section company-information">
									<h4>Personal Deatils</h4>

							<form	id="personal">
								
									<div class="row form-group">
										<label class="col-sm-3 label-title">Full Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" placeholder="Jon Snow" >
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Father's Name</label>
										<div class="col-sm-9">
											<input type="text" name="fname" class="form-control" placeholder="Robert deo">
										</div>
									</div>
									
									<div class="row form-group">
										<label class="col-sm-3 label-title">Date of Birth</label>
										<div class="col-sm-9">
											<input type="date" name="dob" class="form-control" placeholder="20/02/1995"  required>
										</div>
									</div>
									


									<div class="row form-group">
										<label class="col-sm-3 label-title">Nationality</label>
										<div class="col-sm-9">
											<input type="text" name="nationality" class="form-control" placeholder="Indian" required>
										</div >
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Sex</label>
										<div class="col-sm-9">
											<input type="text" name="sex" class="form-control" placeholder="Male" required>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Address</label>
										<div class="col-sm-9">
											<input type="text" name="permenent_address" class="form-control" placeholder="Sardar patel road, Guindy, Cheenai 25" required>
										</div>
									</div>
									<div class="buttons pull-right">
										<a href="#" class="btn"> UPDATE </a>
									</div>
								</div><!-- section -->

							</form>

								<div class="section special-qualification">
									<h4>Declaration</h4>
									<div class="form-group item-description">
										<textarea class="form-control" placeholder="" rows="8" name="special-qualification"></textarea>
									</div>								
								</div><!-- special-qualification -->	
							</fieldset>

							<input type="submit" value="submit" class="btn" id="submit">
					<!-- 	</form> --><!-- form -->
						<div class="buttons">
							
							<a href="index.php" class="btn cancle"> CANCEL </a>
						</div>							
					</div>
				
					<!-- quick-rules -->	
					<!-- quick-rules -->	
				</div><!-- photos-ad -->				
			</div>	
		</div><!-- container -->
	</section><!-- main -->
	
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
					<!-- footer-widget -->
				


				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; <a href="#">Jobs</a>2017. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php include 'header_script.php';  ?>
	

	<script type="text/javascript">
		$("#resume").submit(function(e){
		
    
});
		$("#submit").click(function(){
			var file = document.getElementById('upload-image-one').checkValidity();
			if (!file) {   alert("upload image"); }
		});
		$("#upload-image-two").click(function (argument) {
			$("#upload-image-one").click();
			
		})



		document.getElementById("upload-image-one").onchange =function(evt){

			var file = document.getElementById('upload-image-one').checkValidity();

			if(file)
			{
				$("#upload-image-two").html("Uploaded");

				$("#upload-image-two").css({"background-color":"rgb(66,134,240)","color":"white"});
			
				$(".upload-image").css("border-color","rgb(0,166,81)");

			}
		}
	</script>


	<script type="text/javascript">
		
		$("#work_list").load("work_history_list.php");

		$("#education_list").load("education_list.php");

		$(document).on('click','#add_work',function (evt) {

    		 
			
			

			var formdt = new Object();


					var input = $("#latest").serialize();

					


				$.post("work_history_insert.php",input,function (data,status) 
				{
					if (data == "success")
					 {

							
					 		$("#work_list").load("work_history_list.php");
					}

					


				});
    		


    		
    	});

		$(document).on('click','#delete_work',function (evt) {

    		 
			var formdt = new Object();

				formdt.work_id = $(this).attr("data-work_id");
			

			$.post("work_delete.php",formdt,function (data,status) 
				{
					if ( data == "success")
					 {

					 		$("#work_list").load("work_history_list.php");
					}

					


				});
    		


    		
    	});


$(document).on('click','#add_education',function (evt) {

    		 
			

					var input = $("#education").serialize();

					
					alert(input);


				$.post("education_insert.php",input,function (data,status) 
				{
					if (data == "success")
					 {

							
					 		$("#education_list").load("education_list.php");
					}

					


				});
    		


    		
    	});

		$(document).on('click','#delete_education',function (evt) {

    		 
			var formdt = new Object();

				formdt.educat_id = $(this).attr("data-educat_id");
			

			$.post("education_delete.php",formdt,function (data,status) 
				{
					if ( data == "success")
					 {

					 		$("#education_list").load("education_list.php");
					}

					


				});
    		


    		
    	});

	</script>
		
  </body>

</html>