<?php



session_start();

//$_SESSION['id']=1;

include 'main_function.php';

if(!isset($_SESSION['id'])) die("invalid_session");

if(isset($_POST)) die("not post method");
//VARIABLES

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


$SQL = "INSERT INTO post_job (".
		"id,category,type,title,description,country,state,salary_min,salary_max,exprience,notification_mail,company_name)VALUES ".
		"('$user_id','$category','$type','$title','$description','$country','$state','$salary_min','$salary_max','$exprience','$note_mail','$name')";

		$res = query($SQL);

		if ($res) 
		{
						
						echo "updated success";
		}

?>