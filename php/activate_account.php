<?php

session_start();

include 'function.php';

$mail=$_GET['mail'];

$hash=$_GET['hash'];


$data=$mail.$mail_salt;

$hash_salt = hash('ripemd128',$data);

if($hash_salt == $hash)

{
	echo "succesfully verified";

	$sql= "UPDATE user_info SET status='active'";

	$result = query($sql);

	if($result)
		automatic_login();

}


function automatic_login()
{
	
	global $mail;

	$sql = "SELECT * FROM user_info WHERE mail='$mail'";
	$result = query($sql);

	$row = 	mysqli_fetch_array($result,MYSQLI_ASSOC);

	$_SESSION['id']  = $row['id'];

	$_SESSION['type'] = $row['type'];

	if ($_SESSION['type']=="job_seeker") {
	

		header("Location: ../job_seeker/");
	}

	if ($_SESSION['type']== "employer" OR "Employer" ) {
		

									header("Location: ../job_employer/");

									header("Cache-Control: no-cache");
	
									header("Pragma: no-cache");

									}
	
}



