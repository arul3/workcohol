<?php

session_start();

include '../php/function.php';


$educat_id = $_POST['educat_id'];


$sql = "DELETE FROM educational_background WHERE educat_id='$educat_id'";


$res = query($sql);


if($res)
{

	echo "success";


}





?>