<?php
session_start();

include 'function.php';

$_SESSION['id'] = 1;

$_SESSION['type'] = "user";

$id =$_SESSION['id'];


$sql = "SELECT * FROM post_job LIMIT 8";

$res = query($sql);



?>