<?php
session_start();

include 'function.php';

//variables
$id = $_SESSION['id'];

$offset =0;

if (isset($_POST['offset']))  {       global $offset;     $offset = $_POST['offset'];
			
 }

$sql = "SELECT * FROM post_job WHERE id='$id' LIMIT 6 OFFSET $offset";


$res = query($sql);


if (!$res) die("some error");

$num_rows =mysqli_num_rows($res);



 


for ($i=0; $i <$num_rows ; $i++) { 

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);


$job_id = $row['job_id'];


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
									

									</a> 



											</span>
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
								<div class="button">
								    <button class="applicants_btn" data-id="">Applicant</button>

								   	<?php	echo "<div class=\"edit_icon\" data-job_id=\"$job_id\">";  ?>


								   	<i class="fa fa-edit" style="font-size:28px"></i>
								   </div>


			        <?php		echo  "<div class=\"delete_icon\"  data-job_id=\"$job_id\" >";  ?>
								   	<i class="fa fa-remove" style="font-size:32px"></i>
								   	
								   </div>

								</div>
							</div><!-- item-info -->

</div>








<?php

}






?>

