<?php
session_start();

include 'function.php';

$_SESSION['id'] = 1;

$_SESSION['type'] = "user";

$id =$_SESSION['id'];


$sql = "SELECT COUNT(job_id) FROM post_job ";

$res = query($sql);



?>