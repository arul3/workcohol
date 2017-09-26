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

// variables need

$_SESSION['edit']=$post_id;

$full_time = "";



$part_time = "";



$freelance = "";


//1			if($post['type']=="contract")
		
$contract = "";

$hardware ="";

//										if($post['category']=="software")

$software="";

												//if($post['category']== "accounts")

$accounts = "";

$beginner ="";
$beginner ="";
											
$top_level ="";

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
    <link rel="stylesheet" type="text/css" href="post_aditional.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">   
    <link rel="stylesheet" href="../css/main.css">  
	
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

			<div class="job-postdetails">
				<div class="row">	
					<div class="col-md-8">
						<form id="form" method="post" action="../php/edit_posting.php">
							<fieldset>
								<div class="section postdetails">
									<h4>Edit Posted Job<span class="pull-right">* Mandatory Fields</span></h4>

									<div class="row form-group">
										

										<label class="col-sm-3 label-title">Job Category<span class="required">*</span></label>


										<div class="col-sm-9">
											
										<select name="category" class="form-control"  required>
											
									
									<?php

									if($post['category']=="hardware")

											$hardware ="selected";

										if($post['category']=="software")

													$software="selected";

												if($post['category']== "accounts")

														$accounts = "selected";

										
										echo	"	<option value=\"hardware\" $hardware>Hardware Developer</option>";


										echo 	"<option value=\"software\" $software>Software Developer</option>
											<option value=\"accounts\" $accounts>Accounting Manager</option>";


											?>

										</select>

										</div>
										








									</div>

									

									


									<div class="row form-group">
										<label class="col-sm-3">Job Type<span class="required">*</span></label>
										<div class="col-sm-9 user-type">
											

<?php

			if($post['type']=="full-time")
				$full_time = "checked";



			if($post['type']=="part-time")
				$part_time = "checked";


			if($post['type']=="freelance")
				$freelance = "checked";


			if($post['type']=="contract")
				$contract = "checked";


							echo "<input type=\"radio\" name=\"job_type\" value=\"full-time\" id=\"full-time\" $full_time> <label for=\"full-time\">Full Time</label>

									<input type=\"radio\" name=\"job_type\" value=\"part-time\" id=\"part-time\" $part_time> <label for=\"part-time\">Part Time</label>


											<input type=\"radio\" name=\"job_type\" value=\"freelance\" id=\"freelance\" $freelance> <label for=\"freelance\">Freelance</label>

											<input type=\"radio\" name=\"job_type\" value=\"contract\" id=\"contract\" $contract> <label for=\"contract\">Contract</label> ";

?>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Title for your job<span class="required">*</span></label>
										<div class="col-sm-9">
											<?php

											$title = $post['title'];


											echo "<input type=\"text\" class=\"form-control\" placeholder=\"ex, Human Resource Manager\" name=\"job_title\" value=\"$title\" required>";


											?>

										</div>
									</div>	

									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Description<span class="required">*</span></label>
										<div class="col-sm-9">

						<?php										

							$des = $post['description'];

									
									echo "<textarea class=\"form-control\" id=\"textarea\" placeholder=\"Write few lines about your jobs\" rows=\"8\" name=\"description\" value=\"$des\" required></textarea>";			



						?>

										</div>
									</div>
									<div class="row characters">
										<div class="col-sm-9 col-sm-offset-3">
											<p>5000 characters left</p>
										</div>
									</div>	
									
									<div class="row form-group select-price">
										<label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
										<div class="col-sm-9" id="divition_sub">
											<label>$USD</label>

									<?php											
											
											$min = $post['salary_min'];

											echo "
												<input type=\"text\" class=\"form-control\" placeholder=\"Min\" name=\"salary_min\" 
												value = \"$min\"required>";
									?>
											<span>-</span>


									<?php
										
										$max = $post['salary_max'];

										echo "<input type=\"text\" class=\"form-control\" placeholder=\"Max\" name=\"salary_max\" value=\"$max\"required>
										";

										?>											
										</div>
									</div>	

									<div class="row form-group">
										

										<label class="col-sm-3 label-title">Exprience<span class="required">*</span></label>


										<div class="col-sm-9">
											
										<select name="exprience" class="form-control"  required>
											
										<?php

											if($post['exprience']=="beginner")
												$beginner ="selected";
											if($post['exprience']=="mid-exprience")
												$beginner ="selected";
											if($post['exprience']=="top-level")
												$top_level ="selected";
											


										echo	"<option value=\"beginner\" $beginner>BEGINNER</option><option value=\"mid-exprience\" $mid_exprience>MID-Exprience</option>
											<option value=\"top-level\" $top_level>Top-Level</option>";
										
										?>

										</select>

										</div>



									</div>

									<div class="row form-group">
										

										<label class="col-sm-3 label-title">Location<span class="required">*</span></label>


										<div class="col-sm-9" id="select_location">
											
											
										<select name="country" class="form-control short" required>
												<option value="">COUNTRY</option>
									<?php

											if ($post['country']== "india") 
												$india = "selected";

												
											

												echo "<option value=\"india\" $india>INDIA</option>
											</select>";

									?>
										
										<select name="state" class="form-control short" required>

										         <option value="">STATE </option>
									<?php

										$tamilnadu="";
										$telungana="";
										$Kerala ="";

										if($post['state']=="Tamilnadu")
											$tamilnadu ="selected";

											if($post['state']=="Telungana")

												$telungana ="selected";

												if($post['state']=="Kerala")

														$Kerala="selected";


										echo	"<option value=\"Tamilnadu\" $tamilnadu>TAMILNADU</option>
										         <option value=\"Telungana\" $telungana>Telungana</option>
										         <option value=\"Kerala\" $Kerala>KERALA</option>";




									?>

										         

										</select>

										

									</div>
									</div>									


								

									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Expire Date<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="date" class="form-control" placeholder="Set a date or leave blank to automatically use the Expired date" name="expire" required>
										</div>
									</div>


									

									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Notification E-mail<span class="required">*</span></label>
										<div class="col-sm-9">
									<?php

									$mail =$post['notification_mail'];

										echo "<input type=\"email\" name=\"notify_mail\"  class=\"form-control\" placeholder=\"Email to receive application notification. Leave it blank to use your account email.\" value=\"$mail\">";



									?>
									</div>

								</div>
									<div id="submit_butt">
									<button type="submit" id="submit_btn" class="btn btn-primary">Edit Your Job</button>
								</div>

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
	<?php  include 'footer.php';  ?>
	<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    

    <script type="text/javascript">
    		
<?php     echo "var desc = \"$des\" ";  ?>

		document.getElementById('textarea').innerHTML = desc;



    </script>
	
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