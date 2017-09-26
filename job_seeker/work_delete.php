<?php

session_start();

include '../php/function.php';


$work_id = $_POST['work_id'];


$sql = "DELETE FROM work_history WHERE work_id='$work_id'";


$res = query($sql);


if($res)
{

	echo "success";


}










?>