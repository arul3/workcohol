<?php
include 'function.php';


function category_count($cat)
{
	global $link;

	$sql = "SELECT COUNT(id) FROM post_job WHERE category='$cat'";



	$res = query($sql);

	return $res;

}

function total_count($count)
{
	$sql = "SELECT COUNT(job_id) FROM post_job";


	$res = query($sql);

	return $res;

}

function no_users()
{


	$sql = "SELECT COUNT(id) FROM user_info";

$res = query($sql);

	return $res;

	
}


 function user_name($id)
{
	
	$sql = "SELECT * FROM user_info WHERE id='$id'";

	$res = query($sql);

	$row = mysqli_fetch_array($res,MYSQLI_ASSOC);


	return $row['name'];


}








?>