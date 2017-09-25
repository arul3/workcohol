<?php
session_start();

include 'function.php';

function get_user($job_id)
{

$sql  = "SELECT id FROM post_job WHERE job_id='$job_id'";

$res = query($sql);


if($res)
{
	$result = mysqli_fetch_array($res,MYSQLI_ASSOC);

	return $result['id'];

}
else
{
	return false;
}


}



$user = $_SESSION['id'];

$sql = "SELECT * FROM applied_user WHERE user_id='$user' ORDER BY time DESC";


$result = query($sql);


if(!$result) 
{

	die();


}


	$num_row = mysqli_num_rows($result);

	for ($i=0; $i <$num_row ; $i++) { 
		
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


					chat_list($row);


					}





?>


<?php

function chat_list($row)

{

$job_id = $row['job_id'];


$employer_id = get_user($job_id);

$sql = "SELECT id,name,mail FROM user_info WHERE id='$employer_id'";

$res = query($sql);

if ($res) 
	
	$employer = mysqli_fetch_array($res,MYSQLI_ASSOC);






?>


<div class="profile">
					<div class="profile_img"> 
								<div class="profile_area">
									
									<img src="../php/chat_avatar.php?id=1&w=200&h=200" width="105px" height="105px">


								</div>
					

						<div class="usr_info">
							
							
							<div class="place"><?php echo $employer['name']; ?></div>							
						</div>



					</div>
						<div class="connect_button_area">
							<?php echo "<button class=\"connect_button\" data-id=\"$employer_id\"  >connect</button>"; 

							?>
					 	</div>
					</div>
	





<?php

}

?>