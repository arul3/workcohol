<?php

session_start();


include '../php/function.php';

$user_id = $_SESSION['id'];

$sql="SELECT * FROM work_history WHERE user_id='$user_id'";

$res = query($sql);

if($res)
{
	$num = mysqli_num_rows($res);


	for ($i=0; $i <$num ; $i++) { 
			
			$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

?>


<div class="row form-group">


						<label class="col-sm-3 label-title">Company Name</label>
										<div class="col-sm-9">
					<?php	

						$company_name = $row['company_name'];


						echo	"<input type=\"text\" name=\"company_name\" class=\"form-control\" placeholder=\"Name\" value=\"$company_name\" required>";  


					  ?>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Designation</label>
										<div class="col-sm-9">
											
							<?php	

							$designation = $row['designation'];			
										

										echo "<input type=\"text\" name=\"designation\" class=\"form-control\" placeholder=\"Human Resource Manager\" value =\"$designation\" required>
										";				

							?>
										</div>
									</div>
									<div class="row form-group time-period">
										<label class="col-sm-3 label-title">Time Period</label>
										<div class="col-sm-9">

										<?php

										$work_start =$row['work_start'];


										echo "	<input type=\"date\" name=\"work_start\" class=\"form-control\" placeholder=\"dd/mm/yy\" 

											value = \"$work_start\"
											required >";


										?>

									

											<span>-</span>


											<?php

												$work_end = $row['work_end'];

											echo "<input type=\"date\" name=\"work_end\"   class=\"form-control pull-right\" placeholder=\"dd/mm/yy\" value=\"$work_end\" required>
										";



											?>
											




										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Job Description</label>
										<div class="col-sm-9">


								<textarea class="form-control" placeholder="" rows="3" name="job_description" required>
								<?php  echo $row['description'];?></textarea>


										</div>
									</div>
									<div class="buttons pull-right">
							<?php	

								$work_id = $row['work_id'];	

								echo "
									<a  class=\"btn delete\" data-work_id=\"$work_id\" id=\"delete_work\">Delete</a>
									";



								?>
									</div>
								</div>










<?php


		}	
}

?>

	<form  id="latest"  >  
		<div class="row form-group">
										<label class="col-sm-3 label-title">Compnay Name</label>
										<div class="col-sm-9">
											<input type="text" name="company_name" class="form-control" placeholder="Name" required>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Designation</label>
										<div class="col-sm-9">
											<input type="text" name="designation" class="form-control" placeholder="Human Resource Manager" required>
										</div>
									</div>
									<div class="row form-group time-period">
										<label class="col-sm-3 label-title">Time Period</label>
										<div class="col-sm-9">
											<input type="date" name="work_start" class="form-control" placeholder="dd/mm/yy" 

											
											required ><span>-</span>
											<input type="date" name="work_end"   class="form-control pull-right" placeholder="dd/mm/yy" required>
										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Job Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" placeholder="" rows="8" name="job_description" required></textarea>		
										</div>
									</div>
									<div class="buttons pull-right">
										<a  class="btn" id="add_work" >Add New Exprience</a>
										<a  class="btn delete">Delete</a>
									</div>
								</div>



	</form>
