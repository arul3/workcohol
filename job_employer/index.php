<?php

session_start();

if (!isset($_SESSION['id'])) {
		die();
}


//echo $_SESSION['type'];

?>




<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:34:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

    
    <link rel="stylesheet" href="../css/font-awesome.min.css">  
    <link rel="stylesheet" href="../css/main.css">  

    <link rel="stylesheet" href="../css/additional.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/employer.css">




<?php  include 'header.php' ?>


 

  		<!-- <div class="toast"  style="display: none;">Request sent successfully </div> -->

	<!-- header -->
<!-- header -->

<!-- banner-section -->

	<div class="page">

<div id="main_box">
		<div style="display: inline-block; padding: 10px; ">

			<div  class="people_layout">
				<div class="people_header">Applicants, you may chat </div>

				<div class="people">

				<div class="profile">
					<div class="profile_img"> 
								<div class="profile_area">
									<img src="../php/chat_avatar.php?id=1&w=200&h=200" width="105px" height="105px">
								</div>
					

						<div class="usr_info">
							
							<div class="position">ARULKUMAR S</div>
							<div class="place" >ZOHO Corparation</div>							
						</div>



					</div>
						<div class="connect_button_area">
							<button class="connect_button" data-id="1" data-validate="hasing" >connect</button>
					 	</div>
				</div>



				<div class="profile">
					<div class="profile_img"> 
								<div class="profile_area">
									
									<img src="../php/chat_avatar.php?id=1&w=200&h=200" width="105px" height="105px">


								</div>
					

						<div class="usr_info">
							
							<div class="position">SAKTHI J</div>
							<div class="place" >Notion Press</div>							
						</div>



					</div>
						<div class="connect_button_area">
							<button class="connect_button" data-id="1" data-validate="hasing" >connect</button>
					 	</div>
				</div>
				</div>






			 </div> 

	</div>


	



<div class="section latest-jobs-ads">
				<div class="section-title tab-manu">
					<h4>Posted Jobs</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="#hot-jobs" data-toggle="tab"
							id="aplicants-list">Applicants</a></li>
						<li role="presentation" class="active" >
							<a href="#recent-jobs" data-toggle="tab"  id="recent-list">Posted 
								Jobs
							</a></li>

							
						
					</ul>
				</div>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in" id="hot-jobs">
						

						<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
								<a href="job-details.php?id=9"> 
											<img src="images/job/3.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span>
									<a href="job-details.php?id=9" class="title">										
										management									

									</a> @ <a href="#">



										AR labs inc											
											
										</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>

											india  india 
										</a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>
												full-time
											</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>
												2000-4000											</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>
										
											hardware
										</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">


								   <button class="applicants_btn" data-id="9">Applicant</button>

								   <div class="edit_icon" data-job_id="11">
								   	<i class="fa fa-edit" style="font-size:28px"></i>
								   </div>
								   <div class="delete_icon">
								   	<i class="fa fa-remove" style="font-size:32px"></i>
								   	
								   </div>
								

								</div>
							</div><!-- item-info -->

						</div>
					</div><!-- tab-pane -->

					<div role="tabpanel" class="tab-pane fade in active" id="recent-jobs">
						

						 
						<!-- ad-item -->						
					
					<!-- ad-item -->	
					</div><!-- tab-pane -->

					<div id = "next_list_butt" >
						<button class="btn-primary" id="more">load more</button> 
					</div>

				<!-- tab-pane -->
				</div><!-- tab-content -->
			</div><!-- trending ads -->		

</div>










		<div class="container">
			<!-- category ad -->	

				

			
			
		<!-- workshop-traning -->

			<div class="section cta cta-two text-center">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-cta">
							<div class="cta-icon icon-jobs">
								<img src="images/icon/31.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>3,412</h3>
							<h4>Live Jobs</h4>
							
						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-company">
								<img src="images/icon/32.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>12,043</h3>
							<h4>Total Company</h4>
							
						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
						<div class="single-cta">
							<div class="cta-icon icon-candidate">
								<img src="images/icon/33.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>5,798,298</h3>
							<h4>Total Candidate</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->			

		</div><!-- conainer -->
	</div><!-- page -->
	
	<!-- download -->
	<!-- download -->
	
<?php
		include 'footer.php';

?>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close_modal">&times;</span>
      <h2>Are you sure ?</h2>
    </div>
    <div class="modal-body">
    

						<div class="job-ad-item"  id="delete-item">
							<!-- item-info -->

						</div>

    </div>
    <div class="modal-footer">
      <h3> Delete </h3>
      <div class="inline-block">
      		<button class="delete_yes"> Yes</button>
      		<button class="delete_no" > No </button>
   	   </div>


       </div>
  </div>

</div>



	
    <!-- JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>


    <script type="text/javascript">

    	var id ;
    	var modal = document.getElementById('myModal');

    	//variables
    	
    	$("#hot-jobs").load("../php/posted_job.php");

    	$(document).on('click','.applicants_btn',function (evt) {

    		alert("djfj");

    		$("#applicants-list").triger('click');

    		
    	});

    	$(document).on('click','.edit_icon',function (evt) {
    		
    			var id = $(this).attr("data-job_id");

    			var loc = "edit_post.php?job_id="+id;

    			window.location.assign(loc);
    		
    		

    		
    	});


    	$(document).on('click','.delete_icon',function (evt) {

    		
    			id = $(this).attr("data-job_id");

    		

    			 var htm = $(this).parents(".job-ad-item").html();

    			 $("#delete-item").html(htm);

    			 modal.style.display = "block";

    		
    	});
    	


$("#close_modal").click(function() {


    modal.style.display = "none";


});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	
		$(".delete_yes").click(function (argument) {


			//var delete_id = id;

			var formdt = new Object();

			formdt.delete_id = id;

			console.log(id);
		
				$.post("../php/delete_job.php",formdt,function (data,status) 
				{
					if (data == "success")
					 {

								window.location.assign("index.php");


					}

					


				});

		});

		$(".delete_no").click(function(){


		$("#close_modal").click();


		});

    </script>


    

<?php include 'header_script.php'; ?>

  </body>

</html>