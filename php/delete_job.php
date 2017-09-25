<?php

session_start();

include '../php/main_function.php';

if(!isset($_POST['delete_id']))  die();

$user = $_SESSION['id'];

$delete_id = $_POST['delete_id'];




if (!validate_job($delete_id,$user))

{
	die();

}


$sql1 = "DELETE FROM post_job WHERE job_id='$delete_id'";


$sql2 = "DELETE FROM applied_user WHERE job_id='$delete_id'";

$sql3 = "DELETE FROM bookmark WHERE job_id='$delete_id'";


$res = query($sql1);


if($res)

{
	$res2 =query($sql2);

	if ($res2) {
		
					$res3 = query($sql3);

					if($res3)
					{

						echo "success";

					}


	}
}


























?>