<?php

session_start();

include '../php/function.php';



$user_id =$_SESSION['id'];

$institute_name = $_POST['college_name'];

$degree = $_POST['degree'];

$start_time = $_POST['start-time'];

$end_time = $_POST['end_time'];

$ed_description = $_POST['ed_description'];


$SQL = "INSERT INTO educational_background (user_id,institute_name,degree,start_date,finish_date,description) VALUES('$user_id','$institute_name','$degree','$start_time','$end_time','$ed_description')";

$res = query($SQL);

if($res)

{

	echo "success";

}

?>