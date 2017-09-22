



<?php


include 'function.php';


//control variables SHOULD IN global scope 

$offset = "3";

$orderby = "time"; 

if ($_REQUEST) 
{

global $offset,$orderby;

	$offset = $_REQUEST['offset'];

	$orderby = $_REQUEST['orderby'];

		 
	job_list();

}




//echo "SELECT * FROM `post_job` ORDER BY $orderby DESC LIMIT 10 OFFSET $offset"; 

function job_list()
{

global $offset,$orderby;

//echo "SELECT * FROM `post_job` ORDER BY $orderby DESC LIMIT 10 OFFSET $offset"; 




$sql = "SELECT * FROM `post_job` ORDER BY $orderby DESC LIMIT 10 OFFSET $offset"; 

$res = query($sql);

$num_rows = mysqli_num_rows($res);




for ($i=0; $i <$num_rows ; $i++) { 
	# code...

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);    

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
								<div class="button"><a 
								   <?php 	echo " href=\"job-details.php?id=".$row['job_id']. "\"> <button  class=\"btn btn-primary apply\" data-id=\"".$row['job_id']."\">Apply Now</button>";
								   ?></a>

								</div>
							</div><!-- item-info -->

</div>


		



<?php





    	}


}


 ?>

<?php


function hot_list()
{

	$offset=0;
	 $orderby="salary_max";

//echo "SELECT * FROM `post_job` ORDER BY $orderby DESC LIMIT 10 OFFSET $offset"; 




$sql = "SELECT * FROM `post_job` ORDER BY $orderby DESC LIMIT 10 OFFSET $offset"; 

$res = query($sql);

$num_rows = mysqli_num_rows($res);




for ($i=0; $i <$num_rows ; $i++) { 
	# code...

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);    

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
								   <?php 	echo "<button  class=\"btn btn-primary apply\" data-id=\"".$row['job_id']."\">Apply Now</button>";
								   ?>

								</div>
							</div><!-- item-info -->

</div>


		



<?php

	




    	}


}


 ?>
