<?php



session_start();

//$_SESSION['id']=1;

include 'main_function.php';

if(!isset($_SESSION['id'])) die("invalid_session");

if(!isset($_POST)) die("not post method");
//VARIABLES


$job_id = $_SESSION['edit'];

$user_id = $_SESSION['id'];


$category = $_POST['category'];

$type = $_POST['job_type'];

$title = $_POST['job_title'];

$description = $_POST['description'];

$country = $_POST['country'];

$state = $_POST['state'];

$salary_min = $_POST['salary_min'];

$salary_max = $_POST['salary_max'];

$exprience = $_POST['exprience'];

$expire = $_POST['expire']; // later check .... 

$note_mail = $_POST['notify_mail'];


$name = user_name($user_id);





$SQL = "UPDATE post_job SET id ='$user_id', category='$category', type='$type' ,title='$title',description='$description',country ='$country' ,state='$state',salary_min='$salary_min',salary_max = '$salary_max',exprience = '$exprience',notification_mail='$note_mail',company_name='$name' WHERE job_id='$job_id'";


		$res = query($SQL);

		if ($res) 
		{
						
						header("Location:../job_employer/");

		}










?>