<?php
session_start();



$user_id = $_SESSION['id'];

include '../php/function.php';

$company_name = $_POST['company_name'];

$designation = $_POST['designation'];

$description =$_POST['job_description'];


$work_start = $_POST['work_start'];

$work_end = $_POST['work_end'];



$sql = "INSERT INTO work_history (user_id,company_name,designation,description,work_start,work_end) VALUES ('$user_id','$company_name','$designation','$description','$work_start','$work_end')";



$res = query($sql);


if($res)

	{

		echo "success";
	}


?>