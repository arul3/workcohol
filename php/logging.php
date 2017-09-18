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

		$_SESSION['id'] =$row['id'];

		header('Location:../index.html');

	}
}



?>