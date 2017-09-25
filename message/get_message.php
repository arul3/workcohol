<?php
	session_start();
		$output['error'] = true;
		$output['status'] = "";
		
		if(empty($_SESSION['user_id']))
			$status['status'] = "Please login";
		require 'mysql_cnct.php';
		if($output['status'] == ""){
			$change_user = $_POST['load_ten'];
			$user_id = $_SESSION['user_id'];
			$cu_id = $_POST['cu_id'];

			$from  = 0;
            $q = "SELECT * from read_messages where user_id = $user_id and cu_id = $cu_id";
            $r = mysqli_query($dbc,$q);
            if($r){
            	if(mysqli_num_rows($r) >  0){
            	$row = mysqli_fetch_array($r);
            	if($row != null)
            		$from = $row['msg_id'];
                }
                else{ 

                		$q6 = "INSERT INTO `read_messages`(`id`, `user_id`, `msg_id`, `cu_id`) VALUES ('','$user_id','1','$cu_id')" ;
                		$r6 = mysqli_query($dbc,$q6);
                		if ($r6) {
                			$q = "SELECT * from read_messages where user_id = $user_id and cu_id = $cu_id";
				            $r = mysqli_query($dbc,$q);
				            if($r){
				            	
				            	$row = mysqli_fetch_array($r);
				            	if($row != null)
				            		$from = $row['msg_id'];
				                
				        	}


                  }
            }
        }
            if($change_user == "true"){
            	$from -= 12;
            	$fst_msg_id = $from+1;
            	$output['fst_msg_id'] = $fst_msg_id;
            	$output['chage'] = "yes";
            }

			$q1="SELECT * from message where ((user_1 = '$cu_id' and user_2 = '$user_id') or (user_2 = '$cu_id' and user_1 = '$user_id')) and id > $from order by id asc";
			$r1=mysqli_query($dbc,$q1);
			if($r1){
				if(mysqli_num_rows($r1) >  0){
					$chat_data = array();
					$output['error'] = false;
					$n = 0;
					$tot_cnt = mysqli_num_rows($r1);
					while($row=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
						$data['msg'] = nl2br(htmlentities($row['msg_text']));
						$data['my_msg'] = ($row['user_1'] == $user_id) ? true : false;
						$chat_data[] =  $data;
						$output['chat_data'] = $chat_data;
						$msg_id = $row['id'];
						$da_time = $row['date_send'];	
						$send_date=date_create($da_time);
						$time_da = date_format($send_date,"d M Y") ;
						$output['send_date'] = $time_da;
						$upt = 0;
						$n++;
						if($n == $tot_cnt){
							$q3 = "UPDATE read_messages set msg_id = $msg_id where user_id = $user_id and cu_id = $cu_id";
							$r3 = mysqli_query($dbc,$q3);
							if($r3){
								$upt = 1;
							}				
						}
						$output['updated'] = $upt;
						$output['new_msg'] = true;

					}
				}else{
					$output['new_msg'] = false;
				}
				
			}
			else {
		           $output['status'] =  mysqli_error($dbc);
			}

		
		}
		echo json_encode($output);

?>