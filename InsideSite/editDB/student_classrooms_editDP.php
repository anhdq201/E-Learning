<div class="container body">
	<div class="main_container">			
			<!-- page content -->
		<div class="right_col" role="main">
			<div class="">
				<div class="row">
					<div class="col-md-12 col-sm-12 ">
						<div class="x_panel">
							<div class="x_title">
								<h2>Edit</h2>
								</div>
									<div class="x_content">
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="#" method="post">
										
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">classroom id </label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="classroomID" class="form-control" value="<?php echo $profile['classroom_id'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">student code </label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="studentCode" class="form-control" value="<?php echo $profile['student_code'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">status </label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="status" class="form-control" value="<?php echo $profile['status'] ?>">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<a href="manageDatabase.php?page=student_classrooms" class="btn btn-primary ">Back</a>
												<button type="submit" name="saveProfile" class="btn btn-success pull-right">Submit</button>
											</div>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>