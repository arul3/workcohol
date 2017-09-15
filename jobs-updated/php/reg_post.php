<?php


	require 'mysql_cnct.php'; 
	//   (NULL, 'dfqdf', 'df', 'dfd');
	//  ("yoga",232,89127382)

	$arr['name'] = "yoga";
	$arr['email'] = 232;
	$arr['phone'] = 89127382;

	// $total['khjjjh'] = $post['jfkd']+ $postp['dfjdk'];
   //unset($post['jfkd']);
	$array_val = array_values($arr);
	$insert_vals = json_encode($array_val);
	$replace = str_replace("[", "(", $insert_vals);
	$insert_vals = str_replace("]", ")", $replace);

	
	$q = "INSERT INTO `users` (`name`, `email`, `phone`) VALUES $insert_vals";
	echo $q;
