<?php

session_start();

include 'function.php';


if ($_POST['id']) 

{

	$request_id = $_SESSION['id'];

	$r_receiver_id = $_POST['id'];


	$data =$request_id.$r_receiver_id;

	$request_hash = hash('ripemd128',$data);


$SQL = "INSERT INTO connection_request (request_id,r_receiver_id,request_hash) VALUES ('$request_id','$r_receiver_id'".",'$request_hash')";


$res = query($SQL);

if ($res) { 
		   echo "success";
	}	



}



?>