<?php

include 'function.php';

function check($email)
{

	$sql = "SELECT * FROM user_info WHERE mail='$email'" ;

	$result = query($sql);

	$r = mysqli_num_rows($result);

	if($r)
	{
		return true;
	}

	if ($r==0) {
		return false;
	}
}




if(isset($_POST['email']))
{
	global $salt;
	

	$name = $_POST['name'];

	$email = $_POST['email'];

	$pass = $_POST['pass'].$salt;
	
	$mobile = $_POST['mobile'];
	
	$status="not"; 
	
	$type = $_POST['type'];     //user type eg company or findr



	if(check($email))
{
		header("Location: ../signin.html");

		die();

}
	


$passkey = hash('ripemd128',$pass);

$sql = "INSERT INTO user_info (name,mail,pass,mobile,status,type) VALUES ('$name','$email','$passkey','$mobile','$status','$type')";

$res = query($sql);

if($res) confirm();


}



function confirm()
{

?>
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

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/icofont.css"> 
    <link rel="stylesheet" href="../css/slidr.css">     
    <link rel="stylesheet" href="../css/main.css">  
	<link id="preset" rel="stylesheet" href="css/presets/preset1.css">	
    <link rel="stylesheet" href="../css/responsive.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon" sizes="57x57" href="../images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
	<!-- header -->

	<section class="job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account job-user-account" id="sign-up">
						
						<form action="confirm_mail.php" method="post">
							<div class="form-group">
											<input type="text" class="form-control" placeholder="Re-enter Email" name="email" required>
							</div>
							<div class="form-group">
											<input type="text" class="form-control" placeholder="Confirm Password"
											name="pass" required>
							</div>
							<button type="submit" class="btn" id="confirm">Confirm</button>

						</form>	
									
					</div>
								


								
							</div>				
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->

	<!-- footer -->
	<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
	
		  


	

	</script>	
  </body>


</html>



<?php
}

?>


<?php 

$reload=0;

if(!isset($_GET['step'])) die();

$reload = $_GET['step'];

if( $reload == "reload" )
{

?>




<!DOCTYPE html>
<html lang="en">
 
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
	<link id="preset" rel="stylesheet" href="css/presets/preset1.css">	
    <link rel="stylesheet" href="../css/responsive.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon" sizes="57x57" href="../images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
	<!-- header -->

	<section class="job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account job-user-account" id="sign-up">
						
						<form action="confirm_mail.php" method="post">
							<div class="form-group">
											<input type="text" class="form-control" placeholder="Re-enter Email" name="email" required>
							</div>
							<div class="form-group">
											<input type="text" class="form-control" placeholder="Confirm Password"
											name="pass" required>
							</div>
							<button type="submit" class="btn" id="confirm">Confirm</button>

						</form>	
									
					</div>
								


								
							</div>				
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->

	<!-- footer -->
	<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
	
		  


	

	</script>	
  </body>

<!-- Mirrored from demo.themeregion.com/jobs-updated/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 09:35:49 GMT -->
</html>

<?php



}
?>