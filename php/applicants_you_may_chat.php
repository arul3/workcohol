<?php
session_start();

include 'function.php';

function get_applicants($user)
{

$sql  = "SELECT  * FROM  user_info WHERE id='$user'";

$res = query($sql);


if($res)
	{
		$result = mysqli_fetch_array($res,MYSQLI_ASSOC);

		return $result;

	}
else
{
		return false;
}


}


if(!isset($_POST['job'])) die();

$job_id = $_POST['job'];

$sql = "SELECT * FROM applied_user WHERE job_id='$job_id' ORDER BY time DESC";


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

$user = $row['user_id'];

$applicant = get_applicants($user);


$applicant_id = $applicant['id'];



?>


<div class="profile">
					<div class="profile_img"> 
								<div class="profile_area">
									
									<img src="../php/chat_avatar.php?id=1&w=200&h=200" width="105px" height="105px">


								</div>
					

						<div class="usr_info">
							
							
							<div class="place"><?php echo $applicant['name']; ?></div>							
						</div>



					</div>
						<div class="connect_button_area">
							<?php echo "<button class=\"connect_button\" data-id=\"$applicant_id\"  >connect</button>"; 

							?>
					 	</div>
					</div>
	





<?php

}

?>