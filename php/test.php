<?php

$link = mysqli_connect("localhost", "root","","job");

if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
if ($link) {
	# code...
	echo " connect";
}
?>



<fieldset>
								<div class="section postdetails">
									<h4>Post Your Job<span class="pull-right">* Mandatory Fields</span></h4>
									<div class="row form-group add-title">
										<label class="col-sm-3 label-title">Job Category</label>
										<div class="col-sm-9">
											<div class="dropdown category-dropdown">
												<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Select a category</span> <i class="fa fa-angle-down pull-right"></i></a>
												
												<ul class="dropdown-menu category-change" id="category">
													<li><a href="#">Select a category</a></li>
													<li><a href="#" data-value="software engineer">Software Engineer</a></li>
													<li><a href="#" data-value="program development">Program Development</a></li>
													<li><a href="#" data-value="project manager">Project Manager</a></li>
													<li><a href="#" data-value="Graphics Designer">Graphics Designer</a></li>
												</ul>	

												<input type="text" name="category" style="display: none;" id="category_input" >								
											</div>
										</div>
									</div>			
									<div class="row form-group">
										<label class="col-sm-3">Job Type<span class="required">*</span></label>
										<div class="col-sm-9 user-type">
											<input type="radio" name="type" value="full-time" id="full-time">

											<input type="radio" name="type" value="part-time" id="part-time"> 


											<input type="radio" name="type" value="freelance" id="freelance">

											<input type="radio" name="type" value="contract" id="contract"> 
												
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Title for your Job<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="ex, Human Resource Manager" name="title">
										</div>
									</div>					
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Description<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" id="textarea" placeholder="Write few lines about your jobs" rows="8" name="description"></textarea>		
										</div>
									</div>
									<div class="row characters">
										<div class="col-sm-9 col-sm-offset-3">
											<p>5000 characters left</p>
										</div>
									</div>	
									<div class="row form-group add-title location">
										<label class="col-sm-3 label-title">Location<span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="dropdown category-dropdown pull-left">
												<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Country</span> <i class="fa fa-angle-down pull-right"></i></a>
												

												<ul class="dropdown-menu category-change" id="country">
													<li><a href="#" data-vaue="Argentina">Argentina</a></li>
													<li><a href="#" data-value="Australia">Australia</a></li>
													<li><a href="#" data-value="belgium"> Belgium</a></li>
													<li><a href="#"  data-value="Brazil">Brazil</a></li>
													<li><a href="#" data-value="Cambodia">Cambodia</a></li>
												</ul>	
												<input type="text" name="country" style="display: none;" id="country_input" >							
											</div>
											<div class="dropdown category-dropdown pull-right">
												<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">State</span> <i class="fa fa-angle-down pull-right"></i></a>
												
												<ul class="dropdown-menu category-change" id="state">
													<li><a href="#" data-value="state1">State 1</a></li>
													<li><a href="#" data-value="state2">State 2</a></li>
													<li><a href="#" date-value="state3">State 3</a></li>
												</ul>
												<input type="text" name="category" style="display: none;" id="state_input" >								
											</div>
										</div>
									</div>
									<div class="row form-group select-price">
										<label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
										<div class="col-sm-9">
											<label>$USD</label>
											<input type="text" class="form-control" placeholder="Min" name="salary_min">
											<span>-</span>
											<input type="text" class="form-control" placeholder="Max" name="salary_max">
											

										</div>
									</div>	
									


									<div class="row form-group add-title">
										<label class="col-sm-3 label-title">Exprience<span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="dropdown category-dropdown">
												<a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Mid Level</span> <i class="fa fa-angle-down pull-right"></i></a>
												
												<ul class="dropdown-menu category-change" id="exprience">
													<li><a href="#">Entry Level</a></li>
													<li><a href="#">Mid Level</a></li>
													<li><a href="#">Mid-Senior Level</a></li>
													<li><a href="#">Top Level</a></li>
												</ul>	

												<!-- <input type="text" name="exprience"  style="display: none;"> -->								
											</div>
										</div>
									</div>	
									



									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Expire Date<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="Set a date or leave blank to automatically use the Expired date">
										</div>
									</div>


									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Custom URL<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="Custom link to redirect job seekers to when applying for this job">
										</div>
									</div>

									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Notification E-mail<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="Email to receive application notification. Leave it blank to use your account email.">
									</div>

								</div>


								</div><!-- postdetails -->
								
								
									
								



								
								
								<div class="checkbox section agreement">
									<label for="send">
										<input type="checkbox" name="send" id="send">
										You agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Jobs to find a genuine buyer.
									</label>
									<button type="submit" class="btn btn-primary">Post Your Job</button>
								</div><!-- section -->
								
							</fieldset>