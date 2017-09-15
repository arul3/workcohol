<?php

	
		require 'mysql_cnct.php'; 
		$mysearch = $_POST['keyword'];
		$q = "SELECT * FROM `users` WHERE `name` LIKE '%$mysearch%'";
		$r = mysqli_query($dbc,$q);
		if($r){
			$user_data = array();
			while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)){
				$vv['idk'] = $row['name'];
				$user_data[] = $vv['idk'];
			}

		}
		$all['users'] = $user_data;
		echo json_encode($all);


?>