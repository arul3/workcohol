<?php
session_start();

include '../php/main_function.php';

if(!isset($_GET['job_id']))  die();

$user = $_SESSION['id'];

$post_id = $_GET['job_id'];

$post = post_detail($post_id);

if (!validate_job($post_id,$user))

{
	die();

}

?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
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
	
	<!-- font -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
 -->
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

    <style type="text/css">
    	.short{

    		width: 200px;
    		display: inline-block;
    		

    	}
    </style>


<?php include 'header.php'; ?>



	<!-- header -->
	<!-- header -->

	<section class=" job-bg ad-details-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
										
				<h2 class="title">Edit your posted job</h2>
			</div><!-- banner -->

			<div class="job-postdetails">
				<div class="row">	
					<div class="col-md-8">
						<form id="form" method="post" action="../php/posting.php">
							<fieldset>
								<div class="section postdetails">
									<h4>Edit Posted Job<span class="pull-right">* Mandatory Fields</span></h4>

									<div class="row form-group">
										

										<label class="col-sm-3 label-title">Job Category<span class="required">*</span></label>


										<div class="col-sm-9">
											
										<select name="category" class="form-control"  required>
												<option value="">Select Category</option>
									

												<option value="hardware" >Hardware Developer</option>

											<option value="hardware" >Software Developer</option>
											<option value="hardware" >Accounting Manager</option>
										</select>

										</div>
										








									</div>

									

									


									<div class="row form-group">
										<label class="col-sm-3">Job Type<span class="required">*</span></label>
										<div class="col-sm-9 user-type">
											<input type="radio" name="job_type" value="full-time" id="full-time" checked> <label for="full-time">Full Time</label>
											<input type="radio" name="job_type" value="part-time" id="part-time"> <label for="part-time">Part Time</label>
											<input type="radio" name="job_type" value="freelance" id="freelance"> <label for="freelance">Freelance</label>	
											<input type="radio" name="job_type" value="contract" id="contract"> <label for="contract">Contract</label>	
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Title for your jonb<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="ex, Human Resource Manager" name="job_title" required>


										</div>
									</div>					
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Description<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" id="textarea" placeholder="Write few lines about your jobs" rows="8" name="description" required></textarea>		
										</div>
									</div>
									<div class="row characters">
										<div class="col-sm-9 col-sm-offset-3">
											<p>5000 characters left</p>
										</div>
									</div>	
									
									<div class="row form-group select-price">
										<label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
										<div class="col-sm-9">
											<label>$USD</label>
											<input type="text" class="form-control" placeholder="Min" name="salary_min" required>
											
											<span>-</span>
											<input type="text" class="form-control" placeholder="Max" name="salary_max" required>
											
										</div>
									</div>	

									<div class="row form-group">
										

										<label class="col-sm-3 label-title">Exprience<span class="required">*</span></label>


										<div class="col-sm-9">
											
										<select name="exprience" class="form-control"  required>
												<option value="beginner">BEGINNER</option>
									

												<option value="mid-exprience" >MID-Exprience</option>
										</select>

										</div>



									</div>

									<div class="row form-group">
										

										<label class="col-sm-3 label-title">Location<span class="required">*</span></label>


										<div class="col-sm-9" >
											
											
										<select name="country" class="form-control short" required>
												<option value="america">COUNTRY</option>
									

												<option value="india" >INDIA</option>
											</select>

										
										<select name="state" class="form-control short" required>

										         <option value="">STATE </option>
									

										         <option value="india" >TAMILNADU</option>
										</select>

										

									</div>
									</div>									


								

									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Expire Date<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="Set a date or leave blank to automatically use the Expired date" name="expire" required>
										</div>
									</div>


									

									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Notification E-mail<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="notify_mail"  class="form-control" placeholder="Email to receive application notification. Leave it blank to use your account email.">
									</div>

								</div>
									<button type="submit" id="submit_btn" class="btn btn-primary">Post Your Job</button>

								</div><!-- postdetails -->
								
							
							
									
									
								
								
							</fieldset>
						</form><!-- form -->	
					</div>
				

					<!-- quick-rules -->	
					


						
				</div><!-- photos-ad -->				
			</div>	
		</div><!-- container -->
	</section><!-- main -->
	
	<!-- footer -->
	<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    

    
	
	<script type="text/javascript">
		
		$(document).ready(function(){


			//alert('ok');
/*
			$("#form").submit(function(evt) {


				evt.preventDefault();





				$('input').each(function(e){
					
					if($(this).val() != ""){
						$(this).css({
							"border" : "1px solid gray"
						});


					}

					if($(this).val() == ""){
						$(this).css({
							"border" : "1px solid crimson"
						});
					
				var x=	$(this).attr('name');

						console.log(x);
					}
			});

			});

			

			
			


				

				
		});




*/










	</script>	


	<?php include 'header_script.php'; ?>
  </body>

<!-- Mirrored from demo.themeregion.com/jobs-updated/post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
</html>