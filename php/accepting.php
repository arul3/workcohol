<?php

session_start();


if ($_POST) {
	
$accept_id = $_SESSION['id'];

$request_id = $_POST['id'];

$validate  = $_POST['validate'];

$data = $sender_id.$receiver_id;

$validate_hash = hash('ripemd', $data);

if($validate == $validate_hash)
add_user_f_list();





}



?>