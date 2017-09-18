<?php 
session_start();


include 'function.php';

if ($_POST) 
{


	$user_id = $_SESSION['id'];


$name = $_POST['name'];

$add_info = $_POST['additional_information'];

$special = $_POST['special-qualification'];










	$SQL ="INSERT INTO resume (user_id,full_name,additional_info,special_qualification) VALUES ('$user_id','$name','$add_info','$special')";

	$res = query($SQL);

	if($res)
	{

		$flag =1;
	}


$company_name = $_POST['company_name'];

$designation = $_POST['designation'];

$description =$_POST['job_description'];


$work_start = $_POST['work_start'];

$work_end = $_POST['work_end'];


$SQL2 = "INSERT INTO work_history (user_id,company_name,designation,description,work_start,work_end) VALUES ('$user_id','$company_name','$designation','$description',STR_TO_DATE('$work_start', '%m/%d/%Y'),STR_TO_DATE('$work_end', '%m/%d/%Y'))";

	$res2= query($SQL2);

	if ($res2) 
	{
			$flag = 2;	
	}

$institute_name = $_POST['college_name'];

$degree = $_POST['degree'];

$start_time = $_POST['start-time'];

$end_time = $_POST['end_time'];

$ed_description = $_POST['ed_description'];

$SQL3 = "INSERT INTO educational_background (user_id,institute_name,degree,start_date,finish_date,description) VALUES('$user_id','$institute_name','$degree',STR_TO_DATE('$start_time', '%m/%d/%Y'),STR_TO_DATE('$end_time', '%m/%d/%Y'),'$ed_description')";

	$res3 = query($SQL3);

	if($res3)
		$flag=3;



if($flag==3)


	header("Location: ../index.php");













}


 ?>