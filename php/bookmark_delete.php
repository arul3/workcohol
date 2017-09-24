<?php
include 'function.php';

$book_id =$_POST['book'];

$SQL = "DELETE FROM bookmarK  WHERE book_id='$book_id'";

$res = query($SQL);

if($res)  
{

	echo "success";
}



?>