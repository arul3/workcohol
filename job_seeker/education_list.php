

<?php

session_start();


include '../php/function.php';

$user_id = $_SESSION['id'];

$sql="SELECT * FROM educational_background WHERE user_id='$user_id'";

$res = query($sql);

if($res)
{
	$num = mysqli_num_rows($res);


	for ($i=0; $i <$num ; $i++) { 
			
			$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

?>
	<div class="row form-group">
										


			
										<label class="col-sm-3 label-title">Institute Name</label>
										<div class="col-sm-9">
											

								<?php

									$college_name = $row['institute_name'];


									echo "<input type=\"text\" name=\"college_name\" class=\"form-control\" placeholder=\"ropbox\" value=\"$college_name\" required>";

								?>
										

										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Degree</label>
										<div class="col-sm-9">

							<?php

								$degree = $row['degree'];

									echo "<input type=\"text\" name=\"degree\" class=\"form-control\" placeholder=\"Human Resource Manager\" value=\"$degree\"required>";			

							?>
										</div>
									</div>
									<div class="row form-group time-period">
										<label class="col-sm-3 label-title">Time Period</label>
										<div class="col-sm-9">

								<?php			
											
											$start = $row['start_date'];


									echo "<input type=\"date\"  name=\"start-time\" class=\"form-control\" placeholder=\"dd/mm/yy\" required>";

									?>

											<span>-</span>

								<?php


									$end = $row['finish_date'];

										echo "<input type=\"date\"  name=\"end_time\" class=\"form-control pull-right\" value=\"$end\" placeholder=\"dd/mm/yy\" required>";

								?>


										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" placeholder="" rows="3" name="ed_description" required>
												<?php   echo $row['description'];    ?>
											</textarea>		
										</div>
									</div>
									<div class="buttons pull-right">
										
										
							<?php	

							$educat_id = $row['educat_id'];


							echo "<a  class=\"btn delete\" id=\"delete_education\" data-educat_id=\"$educat_id\">Delete</a>";


							?>

									</div>




<?php


		}	
}

?>

<form id = "education">

			<div class="row form-group">
										<label class="col-sm-3 label-title">Institute Name</label>
										<div class="col-sm-9">
											<input type="text" name="college_name" class="form-control" placeholder="ropbox" required>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Degree</label>
										<div class="col-sm-9">
											<input type="text" name="degree" class="form-control" placeholder="Human Resource Manager" required>
										</div>
									</div>
									<div class="row form-group time-period">
										<label class="col-sm-3 label-title">Time Period</label>
										<div class="col-sm-9">
											<input type="date"  name="start-time" class="form-control" placeholder="dd/mm/yy" required><span>-</span>
											<input type="date"  name="end_time" class="form-control pull-right" placeholder="dd/mm/yy" required>
										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" placeholder="" rows="8" name="ed_description" required></textarea>		
										</div>
									</div>
									<div class="buttons pull-right">
										<a  class="btn" id="add_education">Add New Education  </a>
										
									</div>

		</form>