<?php
session_start();

include 'function.php'; 


if(isset($_SESSION['id']))  $user=$_SESSION['id'];

$offset=0;

if ($_REQUEST) {

						global $offset;
						$offset = $_REQUEST['offset'];


				}


$sql= "SELECT * FROM applied_user WHERE user_id='$user' LIMIT 6 OFFSET $offset";



$res = query($sql);

if ($res) 
{
				$num_row = mysqli_num_rows($res);
}

for ($i=0; $i <$num_row ; $i++)

		 { 

		 		$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
		 		$job_id =$row['job_id'];

		 		$sql2= "SELECT * FROM post_job WHERE job_id='$job_id'";

		 		$res2= query($sql2);

		 		if($res2)
		 		{
		 			$row2 = mysqli_fetch_array($res2,MYSQLI_ASSOC);

		 			apply_list($row2);

				 }	
		 		


		}
	


?>

<?php

function apply_list($row2)
{
?>

			<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
							<?php  		echo"	<a href=\"php/job-details.php?id=".$row2['job_id']."\" > "

							?>

											<img src="images/job/3.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span>
							<?php
								echo    "		<a  href=\"php/job-details.php?id=".$row2['job_id']."\" class=title>";
			
								?>										
										<?php echo $row2['title'] ?>
									

									</a> @ <a href="#">



										<?php echo  $row2['company_name']; ?>
											
											
										</a></span>
									<div class="ad-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>

											<?php echo $row2['state']."  ".$row2['country']; ?> 
										</a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>
												<?php echo $row2['type']; ?>

											</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>
												<?php 

												echo $row2['salary_min']."-".$row2['salary_max'];


												?>
											</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>
										
											<?php echo $row2['category'];

											?>

										</a></li>
										</ul>
									</div><!-- ad-meta -->									
								</div><!-- ad-info -->
								<div class="button">
								   <?php 	echo "<button  class=\"btn btn-primary applied\" data-id=\"".$row2['job_id']."\">View</button>";
								   ?>

								</div>
							</div><!-- item-info -->

</div>




<?php


}
?>
