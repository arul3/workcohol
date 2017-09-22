<?php

include 'function.php';

session_start();

if(isset($_POST['job_id']))
$job_id = $_POST['job_id'];







$user_id = $_SESSION['id'];

$sql = "INSERT INTO bookmark (job_id,user_id) VALUES ('$job_id','$user_id')";


$res = query($sql);

if (!$res) 
{

	die();
	
}

echo "success";






?>