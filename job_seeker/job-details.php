<?php
session_start();

$user = $_SESSION['id'];


include '../php/function.php';


if($_GET) 

$job_id = $_GET['id'];  //$_GET['job_id'];


function check_apply($user,$job_id)
{
	
$SQL ="SELECT * FROM applied_user WHERE job_id='$job_id' AND user_id='$user'";


$rest = query($SQL);

if(!$rest) die("error check apply");

$num = mysqli_num_rows($rest);


if($num==0){ 		return false; }

else      {  		return true;  }



}
function check_bookmark($user,$job_id)
{

$SQL ="SELECT * FROM bookmark WHERE job_id='$job_id' AND user_id='$user'";


$rest = query($SQL);

if(!$rest) die("error check apply");

$num = mysqli_num_rows($rest);


if($num==0){ 		return false; }

else      {  		return true;  }




	
}





$sql = "SELECT * FROM post_job WHERE job_id='$job_id'";

$res = query($sql);

if(!$res) die("error ");

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
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
  <?php   include 'header.php';  ?>
	<!-- header -->
	<!-- header -->
	
	<section class="job-bg page job-details-page">
		<div class="container">
			<!-- breadcrumb -->

			<!-- banner-form -->

			<div class="job-details">
				<div class="section job-ad-item">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image">
								<img src="images/job/4.png" alt="Image" class="img-responsive">
							</div><!-- item-image -->
						</div>

						<div class="ad-info">
							<span><span><a href="#" class="title">


								<?php echo $row['title'];  ?>

							</a></span> @ <a href="#">
							 
							 <?php echo $row['company_name']; ?>
							
							</a></span>
							<div class="ad-meta">
								<ul>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>


						<?php  echo $row['country']." ".$row['state']; ?>


									</a></li>
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>

									<?php     ?>	
									

								</a></li>
								<li><i class="fa fa-money" aria-hidden="true"></i>

									<?php  echo $row['salary_min']." - ".$row['salary_max'];

									?>

									</li>
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>
								<?php  echo $row['category'];   ?>


								</a></li>
									<li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline :

					 		<?php  //need to update ?>

									</li>
								</ul>
							</div><!-- ad-meta -->									
						</div><!-- ad-info -->
					</div><!-- item-info -->
					<div class="social-media">
						<div class="button">

							<?php 


							if(check_apply($user,$job_id)){

									echo "<button  class=\"btn btn-primary\"><i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>Applied</button>";
  							
  							
															}

  							else{

  								echo "<button id=\"apply\"  class=\"btn btn-primary\"><i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>Apply now</button>";
  							
  								}

							if(check_bookmark($user,$job_id))
							{

							echo "<button  class=\"btn btn-primary bookmark\">
								<i class=\"fa fa-bookmark-o\" aria-hidden=\"true\"></i>
							Bookmarked</button>
												";
							}

							else
							{

							echo "<button id=\"bookmark\" class=\"btn btn-primary bookmark\">
								<i class=\"fa fa-bookmark-o\" aria-hidden=\"true\"></i>
							Bookmark</button>
												";	
							}
							
							?>
						</div>
						<ul class="share-social">
							<li>Share this ad</li>
							<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
						</ul>
					</div>					
				</div><!-- job-ad-item -->
				
				<div class="job-details-info">
					<div class="row">
						<div class="col-sm-8">
							<div class="section job-description">
								<div class="description-info">
									<h1>Description</h1>
									<p><span>
										

							<?php    echo $row['description'];      ?>
									</span></p>
									<p>
										
									</p>
								</div>
								


								<div class="requirements">
									<h1>Minimum Requirements</h1>
									<ul>
										<li>Bachelor's Degree</li>
										<li>2-5 years of relevant experience ( or equivalent educational experience)</li>
										<li>Experience developing in Wordpress and other web design platforms</li>
										<li>HTML, CSS and JavaScript experience a plus</li>
										<li>In depth knowledge & technical experience of Photoshop, Illustrator, InDesign, Adobe PDF, Keynote, PowerPoint, Microsoft Word & Excel</li>
										<li>Exceptional eye for design, deep understanding of creativity and ability to recognize fresh approaches to Advertising </li>
										<li>Must be fluent in Spanish; working written and spoken proficiency</li>
										<li>**All applicants must be eligible to work in the U.S. without sponsorship</li>
									</ul>
								</div>							
							</div>							
						</div>
						<div class="col-sm-4">
							<div class="section job-short-info">
								<h1>Short Info</h1>
								<ul>
									<li><span class="icon"><i class="fa fa-bolt" aria-hidden="true"></i></span>Posted: 1 day ago</li>
									<li><span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span> Job poster: <a href="#">Lance Ladaga</a></li>
									<li><span class="icon"><i class="fa fa-industry" aria-hidden="true"></i></span>Industry: <a href="#">Marketing and Advertising</a></li>
									<li><span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>Experience: <a href="#">Entry level</a></li>
									<li><span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span>Job function: Advertising,Design, Art/Creative</li>
								</ul>
							</div>
							<div class="section company-info">
								<h1>Company Info</h1>
								<ul>
									<li>Compnay Name: <a href="#">Dropbox Inc</a></li>
									<li>Address: London, United Kingdom</li>
									<li>Compnay SIze:  2k Employee</li>
									<li>Industry: <a href="#">Technology</a></li>
									<li>Phone: +1234 567 8910</li>
									<li>Email: <a href="#">info@dropbox.com</a></li>
									<li>Website: <a href="#">www.dropbox.com</a></li>
								</ul>
								<ul class="share-social">
									<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								</ul>								
							</div>
						</div>
					</div><!-- row -->					
				</div><!-- job-details-info -->				
			</div><!-- job-details -->
		</div><!-- container -->
	</section><!-- job-details-page -->

	<!-- something-sell -->
	
	<!-- footer -->
<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	

	<?php 

	include 'footer.php';
	?>
	<!--/End:Preset Style Chooser-->
	


<script type="text/javascript">
<?php 

echo "var job_id=\"".$job_id."\";";

?>

	
</script>    <!-- JS -->

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
		
		$("#apply").click(function(){
			

			var html ='<i class="fa fa-briefcase" aria-hidden="true"></i>Applied';
			

		


				var formdata = new Object();
				formdata.job_id = job_id;
				$.post("../php/apply.php",formdata,function (data,status) {
					

					if(data== "success"){  

						$("#apply").html(html); 

						console.log("succes");
				}

				});


		});  


		$("#bookmark").click(function(){
			

			var html ='<i class="fa fa-briefcase" aria-hidden="true"></i>Bookmarked';
			
				var formdata = new Object();
				
				formdata.job_id = job_id;

				$.post("../php/bookmarking.php",formdata,function (data,status) {
					

					if(data== "success"){  

						$("#bookmark").html(html); 

						console.log("succes");
				}

				});


		});  





	</script>	
  </body>

<!-- Mirrored from demo.themeregion.com/jobs-updated/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
</html>