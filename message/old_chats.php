<?php 
session_start();
		$output['error'] = true;
		$output['status'] = "";
		
		if(empty($_SESSION['id']))
			$status['status'] = "Please login";

		    if($output['status'] == ""){
			$user_id = $_SESSION['id'];
			$cu_id = $_POST['cu_id'];

					require 'mysql_cnct.php';
                    $last_id = $_POST['last_id'] ;
					$q1="SELECT * from message where ((user_1 = '$cu_id' and user_2 = '$user_id') or (user_2 = '$cu_id' and user_1 = '$user_id') ) and id < $last_id order by id desc limit 10";
					$r1=mysqli_query($dbc,$q1);
					if($r1){
						

					$output['error'] = false;
					$n = 0;
					$chat_data = array();
					$tot_cnt = mysqli_num_rows($r1);
					while($row=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
						$n++;
						
						
						$da_time = $row['date_send'];	
						$send_date=date_create($da_time);
						$time_da = date_format($send_date,"d M Y") ;
						$data['send_date'] = $time_da;
						
						$data['msg'] = nl2br(htmlentities($row['msg_text']));
						$data['my_msg'] = ($row['user_1'] == $user_id) ? true : false;
						if($n == $tot_cnt){
							$output['last_id'] = $row['id'];
						}
						$data['each_id'] = $row['id'];
						$chat_data[] =  $data;
						$msg_id = $row['id'];
					}

						$output['chat_data'] = $chat_data;
				}
				
			}
			else {
		           $output['status'] =  mysqli_error($dbc);
			}

		
		
		echo json_encode($output);

?>