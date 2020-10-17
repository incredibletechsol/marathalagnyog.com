<div class="row">
	<div class="col-sm-12">
		<div class="card-box">
			<div class="row">
				<div class="col-lg-6">
					<h5 class="m-b-5"><b>Basic Information</b></h5>
					<p class="text-muted font-13 m-b-30">
						
					</p>
					
					<form class="form-horizontal group-border-dashed" action="myprofileactions.php" name="basicprofile" method="post">
						<?php
						$fetch_basic_profile="select * from tbl_basic_profile where profile_id='$profileId'";	
						$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);
						while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
							{
								$firstName = $basic_profile_row['first_name'];	
								$lastName  = $basic_profile_row['last_name'];
								$gender    = $basic_profile_row['gender'];
								$birthDate = $basic_profile_row['birth_date'];
								$maritalStatus = $basic_profile_row['marital_status'];
								$subCaste = $basic_profile_row['sub_caste'];
								$password = $basic_profile_row['password'];
								$age = $basic_profile_row['age'];
								$albumStatus=$basic_profile_row['album_status'];
							}
						?>	
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<b>Age as on date : <?php echo $age; ?></b>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">First Name</label>
							<div class="col-sm-6">
								<input name="firstName" type="text" maxlength="20" id="txtFirstName" value="<?php echo $firstName; ?>" onkeydown= "return isAlpha(event.keyCode);" class="form-control" disabled/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Last Name</label>
							<div class="col-sm-6">
								<input name="lastName" type="text" maxlength="20" id="txtLastName" value="<?php echo $lastName; ?>" onkeydown= "return isAlpha(event.keyCode);" class="form-control" disabled/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Gender</label>
							<div class="col-sm-6">
							<select name="gender" id="gender" class="form-control" disabled>
							<?php
								$genderOptions  = array('Male', 'Female');
								$selectedGender = $gender;
								foreach($genderOptions as $option){
									if($selectedGender == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
							?>
							</select>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-3 control-label">Date Of Birth</label>
							<div class="col-sm-6">
								<input type="text" id="bdate" name="bdate" class="form-control" disabled style="width:235px;" value="<?php echo $birthDate; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Marital Status</label>
							<div class="col-sm-6">
							<select name="maritalStatus" id="maritalStatus" class="form-control" disabled>
							<?php
								$maritalStatusOptions  = array('Unmarried', 'Divorced','Widowed','Separated');
								$selectedmaritalStatus = $maritalStatus;
								foreach($maritalStatusOptions  as $option){
									if($selectedmaritalStatus == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
							?>
							</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Subcaste</label>
							<div class="col-sm-6">
								<select name="subCaste" id="subCaste" class="form-control" disabled>
								<?php
									$subCasteOptions  = array('Maratha', 'Maratha 96Kuli','Maratha Kunbi','Maratha Deshmukh');
									$selectedSubCaste = $subCaste;
									foreach($subCasteOptions  as $option){
										if($selectedSubCaste == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
								?>
								</select>
							</div>
						</div>
					
					</form>
				</div><!-- end col -->
				<?php
				if($_GET['who'] == "who")
					{
				?>
				<div class="col-lg-6">
					<h5 class="m-b-5"><b>Contact Information</b></h5>
					<p class="text-muted font-13 m-b-30">
						
					</p>
					<form class="form-horizontal group-border-dashed" action="myprofileactions.php" name="basicprofile" method="post">
						<?php
						$fetch_contact_info="select * from tbl_contact_info where profile_id='$profileId'";	
						$contact_info_rs= mysqli_query($conn,$fetch_contact_info);
						while($contact_info_row = mysqli_fetch_array($contact_info_rs)) 
							{
								$mobileNo = $contact_info_row['mobile_no'];
								$alternateMobileNo = $contact_info_row['alternate_mobile_no'];
								$emailId = $contact_info_row['email_Id'];
								$address = $contact_info_row['address'];
								$district = $contact_info_row['district'];
								$taluka = $contact_info_row['city'];
								$goan = $contact_info_row['goan'];
							}
						?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Mobile No</label>
							<div class="col-sm-6">
								<input type="text" name="mobileNo" class="form-control" disabled maxlength="10" value="<?php echo $mobileNo; ?>" onkeypress="return isNumberKey(event)"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Alternate Mobile No</label>
							<div class="col-sm-6">
								<input type="text" name="alternateMobileNo" class="form-control" disabled maxlength="10" value="<?php echo $alternateMobileNo; ?>" onkeypress="return isNumberKey(event)"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Email Id</label>
							<div class="col-sm-6">
								<input type="email" class="form-control" disabled value="<?php echo $emailId; ?>" name="emailId"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-6">
								<textarea columns="2" rows="3" name="address" id="address" class="form-control" disabled>
								<?php echo $address; ?>
								</textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">District</label>
							<div class="col-sm-6">
							<select name="district" id="district" class="form-control" disabled>
							<?php
								$districtOptions  = array('Ahmednagar','Akola','Amravati','Aurangabad','Beed','Belgaum','Bhandara','Bidar','Buldana','Chandrapur','Dhule','Gadchiroli','Gondia','Hingoli','Jalana','Jalgaon','Kolhapur','Latur','Mumbai','Nagpur','Nanded','Nandurbar','Nashik','Osmanabad','Parbhani','Pune','Raigad','Ratnagiri','Sangli','Satara','Sindhudurg','Solapur','Thane','Wardha','Washim','Yavatmal');
								$selectedDistrict = $district;
								foreach($districtOptions as $option){
									if($selectedDistrict == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
							?>
							</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Taluka</label>
							<div class="col-sm-6">
								<input type="text" name="taluka" class="form-control" disabled value="<?php echo $taluka; ?>" onkeypress="return isAlpha(event.keyCode)"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Goan</label>
							<div class="col-sm-6">
								<input type="text" name="goan" class="form-control" disabled value="<?php echo $goan; ?>" onkeypress="return isAlpha(event.keyCode)"> 
							</div>
						</div>
					</form>
				</div><!-- end col -->
				<?php 
					}
				?>
			</div><!-- end row -->
		</div>
	</div><!-- end col -->
</div>
<!-- end row -->