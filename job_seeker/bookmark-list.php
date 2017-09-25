<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs-updated/bookmark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Jobs | Job Portal / Job Board HTML Template</title>

    <!-- CSS -->
 <!--    <link rel="stylesheet" href="../css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="../css/icofont.css"> 
    <link rel="stylesheet" href="../css/slidr.css"> -->     
    <link rel="stylesheet" href="../css/main.css">  
	<!-- <link id="preset" rel="stylesheet" href="../css/presets/preset1.css">	
    <link rel="stylesheet" href="../css/responsive.css"> -->
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">

    <style type="text/css">
    	
    </style>
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
<?php include 'header.php'; ?>
	<!-- header -->
	<!-- header -->

	<section class=" job-bg page  ad-profile-page">
		<div class="container">
			<!-- breadcrumb-section -->
		<!-- ad-profile -->

			<div class="section trending-ads latest-jobs-ads"  id="bookmark_list">
				
					

				<!-- ad-item -->	
			</div><!-- latest-jobs-ads -->									
		</div><!-- container -->
	</section><!-- ad-profile-page -->

	<!-- footer -->
	<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <button id="more"> Load more </button>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   


	<script>
	  $("#bookmark_list").load("../php/bookmark-lst.php");


		
		//variables

		var offset=0;


$(document).ready(function (argument) {

	
	


			$("#more").click(function (argument) {
		

				offset +=6;

				var formdt = new Object();

				formdt.offset = offset;

					$("#bookmark_list").load("../php/bookmark-lst.php",formdt);

					

					});


 


			
		$(document).on('click','.delete',function(){

			
			

				th=$(this);

				var formdt = new Object();

				formdt.book = $(this).attr('data-book_id');


				$.post("../php/bookmark_delete.php",formdt,function(data,status){

					if(data=="success"){
											th.parentsUntil("#bookmark_list").remove();


										}

									});
				});
		
	


});
	
	</script>	
  
<?php  include'header_script.php';  ?>

  </body>


</html>