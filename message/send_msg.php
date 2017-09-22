<?php
	session_start();
	require 'mysql_cnct.php';
	$output['error'] = true;
	$output['status'] = 'Please try again';
	if(empty($_SESSION['user_id']))
	{
		$output['status'] = "Please Login again";
	}
	$sender_id = $_POST['cu_id']; // to be fetch from get or post method
	$user_id = $_SESSION['user_id'];
	$msg_text = $_POST['msg'];
	$q="INSERT INTO `message` (`user_1`, `user_2` , `msg_text`) VALUES ('$user_id', '$sender_id' , '$msg_text' );";
	$r=mysqli_query($dbc,$q);
	if($r){
		$output['error'] = false;
		$output['status'] = 'Send';
	}else{
		$output['status'] = 'Unable to send';
	}
	echo json_encode($output);
                   
?>