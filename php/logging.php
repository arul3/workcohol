<?php
session_start();

include 'function.php';

if ($_POST) {


	$email = $_POST['email'];

	$pass = $_POST['pass'];

	$data = $pass.$salt;

	$hash = hash('ripemd128', $data);



	$SQL = "SELECT * FROM user_info WHERE mail='$email' AND pass='$hash'";

	$res = query($SQL);

	if ($res) 
	{
		$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

		if ($status == "not")
		 {
			die("not status");
		}else{

		$_SESSION['id'] =$row['id'];

		$_SESSION['type'] = $row['type'];

		if ($row['type']== "job_seeker") {    header('Location:../job_seeker/');  }

			if ($row['type']== "employer") {    header('Location:../job_employer/'); }
		


			



			}
	}
}



?>