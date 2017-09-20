<?php 

function job_list()
{


$sql = "SELECT * FROM post_job ORDER BY time DESC LIMIT 1"; 

$res = query($sql);

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

while($row>0)
    {

?>

<div class="job-ad-item">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="ad-info">
									<span><a href="job-details.html" class=title>
										
										<?php echo $row['title'] ?>
									</a> @ <a href="#"><?php echo  $row['company_name']; ?></a></span>
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
								   <?php 	echo "<button  class=\"btn btn-primary\" data-id=\"".$row['job_id']."\">Apply Now</button>";
								   ?>

								</div>
							</div><!-- item-info -->

</div>




<?php

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

    	}


}


 ?>
