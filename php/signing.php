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


		$sql = "SELECT * FROM user_info WHERE mail='$email'" ;

		$result = query($sql);

		$row = mysqli_fecth_array($result);

		if($row['status'] =="active"){  header("Location: ../index.php");  }

			if( $row['status'] == "not" ) {

					header("Location: signing.php?step=reload");

				}

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
<html>
<head>
	<title></title>

<link rel="stylesheet" href="../css/main.css">
 <link rel="stylesheet" href="../css/font-awesome.min.css">  
<?php     include '../header.php';   ?>


	<section class="job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->	
				<div id="not_show_win">		
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-4">
					<div class="user-account job-user-account" id="sign-up">
						
						<form action="confirm_mail.php" method="post">
							<div class="form-group">
											<input type="text" class="form-control" placeholder="Re-enter Email" name="email" required>
							</div>
							<div class="form-group">
											<input type="Password" class="form-control" placeholder="Confirm Password"
											name="pass" required>
							</div>
							<button type="submit" class="btn" id="confirm">Confirm</button>

						</form>	
									
					</div>
							
							</div>	
							</div>			
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->

	<!-- footer -->
	<!-- <?php     include '../footer.php';   ?> -->
	<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
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
<html>
<head>
	<title></title>

<link rel="stylesheet" href="../css/main.css">
 <link rel="stylesheet" href="../css/font-awesome.min.css">  
<?php     include '../header.php';   ?>


	<section class="job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->	
				<div id="not_show_win">		
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-4">
					<div class="user-account job-user-account" id="sign-up">
						
						<form action="confirm_mail.php" method="post">
							<div class="form-group">
											<input type="text" class="form-control" placeholder="Re-enter Email" name="email" required>
							</div>
							<div class="form-group">
											<input type="password" class="form-control" placeholder="Confirm Password"
											name="pass" required>
							</div>
							<button type="submit" class="btn" id="confirm">Confirm</button>

						</form>	
									
					</div>
							
							</div>	
							</div>			
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->

	<!-- footer -->
	<!-- <?php     include '../footer.php';   ?> -->
	<!-- footer -->
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
	
    <!-- JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
	
		  


	

	</script>	
  </body>


</html>








<?php



}
?>