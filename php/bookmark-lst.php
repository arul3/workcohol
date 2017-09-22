<?php
session_start();

include 'function.php';

$offset = 0;

if(isset($_POST['offset']))
{
	global $offset ;

	$offset = $_POST['offset'];

	

}



$user_id = $_SESSION['id'];

$sql = "SELECT * FROM bookmark WHERE user_id='$user_id' ORDER BY time DESC LIMIT 6 OFFSET $offset";

$res = query($sql);

if (!$res) {
	
			die();

			}

$num_row = mysqli_num_rows($res);





for ($i=0; $i< $num_row ; $i++) { 
	
		$rows = mysqli_fetch_array($res,MYSQLI_ASSOC);


		 		$job_id =$rows['job_id'];

		 		$sql2= "SELECT * FROM post_job WHERE job_id='$job_id'";

		 		$res2= query($sql2);

		 		if($res2)
		 		{
		 			$row = mysqli_fetch_array($res2,MYSQLI_ASSOC);

		 			book_list($row);

				 }	
		 		


		}
	



?>

<?php
function book_list($row)
{

?>

<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
							<?php  		echo"	<a href=\"job-details.php?id=".$row['job_id']."\" > "?>

											<img src="images/job/3.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span>
							<?php
								echo    "		<a  href=\"job-details.php?id=".$row['job_id']."\" class=title>";
			
								?>										
										<?php echo $row['title'] ?>
									

									</a> @ <a href="#">



										<?php echo  $row['company_name']; ?>
											
											
										</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>

											<?php echo $row['state']."  ".$row['country']; ?> 
										</a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>
												<?php echo $row['type']; ?>

											</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>
												<?php 

												echo $row['salary_min']."-".$row['salary_max'];


												?>
											</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>
										
											<?php echo $row['category'];

											?>

										</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->

								<div class="close-icon">
									<i class="fa fa-window-close" aria-hidden="true"></i>
								</div>
								
							</div><!-- item-info -->

</div>




<?php

}

?>

