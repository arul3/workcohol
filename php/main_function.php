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


function post_detail($post_id)
{

	$sql = "SELECT * FROM post_job WHERE job_id='$post_id'";

	$res = query($sql);

	if($res)

	$row = mysqli_fetch_array($res,MYSQLI_ASSOC);


	return $row;


}
function validate_job($post_id,$id)
{


	$sql = "SELECT * FROM post_job WHERE job_id='$post_id' AND id='$id'";

	$res = query($sql);

	if($res)
		
	$num = mysqli_num_rows($res);

	if($num >0)
	{
	return true;
	}
	else
	{
		return false;
	}


}





?>