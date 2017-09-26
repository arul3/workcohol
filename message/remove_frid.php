    <?php
	session_start();
		$output['error'] = true;
		$output['status'] = "";

	
		
		if(empty($_SESSION['id']))
			$status['status'] = "Please login";

		require 'mysql_cnct.php';
		if($output['status'] == ""){
			                   
			                    $user_id = $_SESSION['id'];
                    			$fri_id = $_POST['fri_id'];



	    							$q3 = "DELETE FROM `contacts` WHERE ((user_id = '$fri_id' and cu_id = '$user_id') or (user_id = '$user_id' and cu_id = '$fri_id'))" ;
	    							$r3 = mysqli_query($dbc,$q3);
	    							if ($r3) {
	    										
	    										$q4 = "DELETE FROM `message` WHERE ((user_1 = '$fri_id' and user_2 = '$user_id') or (user_1 = '$user_id' and user_2 = '$fri_id'))" ;
	    							            $r4 = mysqli_query($dbc,$q4);

	    							            


	    							}


	    	}
	    	echo json_encode($output);

    				?>