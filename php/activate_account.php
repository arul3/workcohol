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
	

	$sql = "SELECT * FROM user_info WHERE mail='$mail'";
	$result = query($sql);

	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

	$_SESSION['id']  = $row['id'];

	$_SESSION['type'] = $row['type'];

	header("Location: ../main.php");

	header("Cache-Control: no-cache");
	
	header("Pragma: no-cache");

}


