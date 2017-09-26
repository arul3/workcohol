<?php

session_start();

if (!isset($_SESSION['id'])) {
	
	die();
}


include '../php/job_list.php';


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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <!-- CSS -->
   <!--  <link rel="stylesheet" href="../css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">    
    <link rel="stylesheet" href="../css/main.css">  
   <!--  <link rel="stylesheet" href="../css/responsive.css"> -->
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">

    <link rel="stylesheet" href="../css/additional.css">





<?php  include 'header.php'; ?>



  		<!-- <div class="toast" >Request sent successfully </div> -->

	<!-- header -->
<!-- header -->

<!-- banner-section -->

	<div class="page">

<div id="main_box">
		<div style="display: inline-block; padding: 10px; " id="people_list">

			<div  class="people_layout">
				<div class="people_header">Employers, you may chat </div>

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
					<h4>Latest Jobs</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"  class="active"><a href="#hot-jobs" data-toggle="tab"
							id="hot-list">Hot Jobs</a></li>
						
						<li role="presentation"  >
							<a href="#recent-jobs" data-toggle="tab"  id="recent-list">Recent Jobs
							</a>
						</li>

							<li role="presentation"><a href="#popular-jobs" data-toggle="tab" id="applied-list">Applied Jobs</a>
							</li>
							
						
					</ul>
				</div>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="display-area">
						<!-- ad-item -->	

					<?php hot_list(); ?>	


					</div><!-- tab-pane -->

					<div id = "next_list_butt" >
						<button class="btn-primary" id="more">load more</button> 
					</div>


				</div><!-- tab-content -->
			</div><!-- trending ads -->		

</div>








	</div><!-- page -->
	
	<!-- download -->
	<!-- download -->
	
<?php
		include 'footer.php';

?>

	<!-- footer -->
	<!-- footer -->

	
    <!-- JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	
    	$(".people").load("../php/employer_you_may_chat.php");
    	
    </script>
    
<script type="text/javascript">
			$(document).ready(function(){
			
			$(".connect_button").click(function(){
				
			

			var id = $(this).attr("data-id");

			var formdata = new Object();
			formdata.id= $(this).attr("data-id");

			 formdata.validate = $(this).attr("data-validate");

			 var th =$(this);

			 var toast =$(".toast");

			// $.ajax({

			// 			url:"php/send_request.php",
			// 			data:formdata,
			// 			type:'post',
			// 			success:function(res,status,xhr)
			// 			{

			// 				connected(res);

			// 			},error: function(err){
			// 				console.log(err);
			// 			}
			// });


			$.post("../php/send_request.php",formdata,function(data,status){ 



				if (data == "success") {  th.text("sent"); toast.text("Request send success"); 

											th.parentsUntil(".people").remove();

											//th.parents(".profile").removeClass("profile");

											th.addClass("loader");  

										


									 }
									});




			});



});
</script>

    

<script type="text/javascript">

	var apply_offset=0;

offset=0;

orderby="salary_max";



		$(document).ready(function(){
			
			$(".connect_button").click(function(){
				
			

			var id = $(this).attr("data-id");

			var formdata = new Object();
			formdata.id= $(this).attr("data-id");

			 formdata.validate = $(this).attr("data-validate");

			 var th =$(this);

			 var toast =$(".toast");

			// $.ajax({

			// 			url:"php/send_request.php",
			// 			data:formdata,
			// 			type:'post',
			// 			success:function(res,status,xhr)
			// 			{

			// 				connected(res);

			// 			},error: function(err){
			// 				console.log(err);
			// 			}
			// });


			$.post("php/send_request.php",formdata,function(data,status){ 



				if (data == "success") {  th.text("sent"); toast.text("Request send success"); 

											th.parentsUntil(".people").remove();

											//th.parents(".profile").removeClass("profile");

											th.addClass("loader");  

										


									 }
									});




			});



});

	
//variables 




		

			$("#more").on("click",function (evt) {

					
					

				

					//console.log("offset",offset,"order",orderby);

					offset +=6;
					
				var formdt = new Object();

				formdt.offset = offset;


				formdt.orderby =  orderby;

				$.post("../php/job_list.php",formdt,function(data,status){ 



				if (status == "success") {    

											load_tapContent(data);


										 }



										});


				

			});


$("#recent-list").click(function (evt) {





offset=0;

orderby="time";
	
		var formdt = new Object();

				formdt.offset=offset;


				formdt.orderby=orderby;

		

		$.post("../php/job_list.php",formdt,function(data,status){ 



				if (status == "success") {    

											load_tapContent(data);


										 }



										});
	
});

$("#hot-list").click(function (evt) {

	
		orderby = "salary_max";

		offset =0;

		

	var formdt = new Object();

				formdt.offset = offset;


				formdt.orderby = orderby;


				$.post("../php/job_list.php",formdt,function(data,status){ 



				if (status == "success") {    

											load_tapContent(data);


										 }



										});		

	






});


$("#applied-list").click(function (evt) {

			apply_offset=0;
		

	var formdt = new Object();

				formdt.offset = offset;


				formdt.orderby = orderby;


				$.post("../php/apply_list.php",formdt,function(data,status){ 



				if (status == "success") {    

											$("#display-area").html(data);


										 }



										});		

	

});

$("#more2").click(function (evt) {

			

			apply_offset=apply_offset+1;

			var formdt = new Object();

			formdt.offset= apply_offset;

			$("#popular-jobs").load("../php/apply_list.php",formdt);

			});





function load_tapContent(data)
				{
						if(orderby=="time")
						
							
							$("#display-area").html(data);

						if(orderby=="salary_max")

						
							$("#display-area").html(data);



						

				}


	$("btn-primary").click(function(){

		var id= $(this).attr("data-id");


		window.location.assign("job-details.php?id="+id);

	});



		
	</script>
	
	<?php include 'header_script.php'; ?>

  </body>

</html>