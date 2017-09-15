<?php


	require 'mysql_cnct.php'; // (NULL, 'dfqdf', 'df', 'dfd');

	$arr = $_POST;
	
	echo json_encode(array_values($_POST));

	$q = "INSERT INTO `users` (`id`, `name`, `email`, `phone`) VALUES $insert_vals";