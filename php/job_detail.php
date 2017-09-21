<?php

if(!isset($_POST)) die("NOT POST");

$job_id = $_POST['job_id'];

$sql = "SELECT * FROM post_job WHERE job_id='$job_id'";

$res = query($sql);

if(!$res) die("error ");

?>