<div class="row">
	<div class="col-sm-12">
		<div class="card-box">
			<div class="row">
				<div class="col-lg-6">
					<h5 class="m-b-5"><b>Partner Preferences</b></h5>
					<p class="text-muted font-13 m-b-30">
						
					</p>
					
					<form class="form-horizontal group-border-dashed" action="myprofileactions.php" name="partnerpref" method="post">
						<?php
						$fetch_partner_preferences="select * from tbl_partner_preference where profile_id='$profileId'";	
						$partner_preferences_rs= mysqli_query($conn,$fetch_partner_preferences);
						
						$partner_preferences_numrows=mysqli_num_rows($partner_preferences_rs);
						if($partner_preferences_numrows > 0) 
							{
							while($partner_preferences_row = mysqli_fetch_array($partner_preferences_rs)) 
								{
								$lookingFor			= $partner_preferences_row[1];
								$ageFrom			= $partner_preferences_row[2];
								$ageTo				= $partner_preferences_row[3];
								$partnereducation	= $partner_preferences_row[4];
								$partnerCaste		= $partner_preferences_row[5];
								}
							}
						else
							{
							$lookingFor   		 = "";
							$ageFrom 			 = "";
							$ageTo     			 = "";
							
							$partnereducation	 = "";
							$partnerCaste		 = "";
							}
						?>
									
						<div class="form-group">
							<label class="col-sm-3 control-label">Looking For</label>
							<div class="col-sm-6">
								<select name="lookingFor" id="lookingFor" class="form-control" disabled>
								<option value="">- Unspecified -</option>
								<?php
									$lookingForOptions  = array('Unmarried', 'Divorced','Widowed','Separated');
									
									foreach($lookingForOptions  as $option){
										if($lookingFor == $option){
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
							<label class="col-sm-3 control-label">Age</label>
							<div class="col-sm-6">
								From
								<select name="ageFrom" id="ageFrom" class="select-res" disabled>
								<option value=" ">-</option>
								<?php
								$ageFromOptions  = array('18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
								'51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70');
								
								foreach($ageFromOptions  as $option){
									if($ageFrom == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>
								</select>
								to
								<select name="ageTo" id="ageTo" class="select-res" disabled>
								<option value=" ">-</option>
								<?php
								$ageToOptions  = array('18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
								'51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70');
								
								foreach($ageToOptions  as $option){
									if($ageTo == $option){
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
							<label class="col-sm-3 control-label">Education</label>
							<div class="col-sm-6">
								<div class="well">
									<?php 
									$replaced = str_replace(",", "\n", $partnereducation);
									echo wordwrap($replaced,22,"<br>\n");
									?>
								</div>	
							</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-3 control-label">Caste</label>
							<div class="col-sm-6">
								<select name="partnerCaste" id="partnerCaste" class="form-control" disabled>
								<?php
									$subCasteOptions  = array('Maratha', 'Maratha 96Kuli','Maratha Kunbi','Maratha Deshmukh');
									$selectedSubCaste = $partnerCaste;
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
			</div><!-- end row -->
		</div>
	</div><!-- end col -->
</div>
<!-- end row -->