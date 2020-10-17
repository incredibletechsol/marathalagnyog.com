<div class="row">
	<div class="col-sm-12">
		<div class="card-box">
			<div class="row">
				<div class="col-lg-6">
					<h5 class="m-b-5"><b>Socio Religious Attributes</b></h5>
					<p class="text-muted font-13 m-b-30">
						
					</p>
					
					<form class="form-horizontal group-border-dashed" action="myprofileactions.php" name="socioattr" method="post">
						<?php
						$fetch_socio_religious_attr="select * from tbl_socio_religious_attr where profile_id='$profileId'";	
						$socio_religious_attr_rs= mysqli_query($conn,$fetch_socio_religious_attr);
						$socio_numrows=mysqli_num_rows($socio_religious_attr_rs);
						if($socio_numrows > 0) 
							{
							while($socio_religious_attr_row = mysqli_fetch_array($socio_religious_attr_rs)) 
								{
									$gothra		= $socio_religious_attr_row[1];
									$rashi		= $socio_religious_attr_row[2];
									$nakshtra	= $socio_religious_attr_row[3];
									$charan		= $socio_religious_attr_row[4];
									$nadi		= $socio_religious_attr_row[5];
									$gan		= $socio_religious_attr_row[6];
									$birthPlace	= $socio_religious_attr_row[7];
									$birthTime	= $socio_religious_attr_row[8];
									$mangal		= $socio_religious_attr_row[9];
								}
							}
						else
							{
								$gothra		= "";
								$rashi		= "";
								$nakshtra	= "";
								$charan		= "";
								$nadi		= "";
								$gan		= "";
								$birthPlace	= "";
								$birthTime	= "00:00:AM";
								$mangal		= "No";
							}
						?>	
									
						<div class="form-group">
							<label class="col-sm-3 control-label">Gothra/Devak</label>
							<div class="col-sm-6">
								<input name="gothra" type="text" maxlength="50" id="gothra" value="<?php echo $gothra; ?>" class="form-control" disabled onkeydown= "return isAlpha(event.keyCode);"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Rashi</label>
							<div class="col-sm-6">
								<select size="1" name="rashi" class="form-control" disabled>
								  <option value=" " selected="selected"></option>
								  <?php
									$rashiOptions  = array('Mesh','Vrushabh','Mithun','Kark','Sinha','Kanya','Tula','Vrischik','Dhanu','Makar','Kumbh','Meen');
									foreach($rashiOptions as $option){
										if($rashi == $option){
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
							<label class="col-sm-3 control-label">Nakshtra</label>
							<div class="col-sm-6">
							<select size="1" name="nakshtra" class="form-control" disabled>
								<option value=" " selected="selected"></option>
								  <?php
									echo $rashi;
									$nakshtraOptions  = array('Ashwini','Ardra','Aslesha','Anuradha','Bharani','Chitra','Dhanishta','Hasta','Jyeshta','Krittika','Moola','Magha',
									'Mrigasira','Pushya','Purva Phalgini','Purva Bhadra','Purva Shadha','Punarvasu','Rohini','Swati','Revati',
									'Shattarka','Shravan','Uttara Phalguni','Uttara Bhadra','Uttara Shadha','Vishakha');
									foreach($nakshtraOptions as $option){
										if($nakshtra == $option){
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
							<label class="col-sm-3 control-label">Charan</label>
							<div class="col-sm-6">
								<select name="charan" class="form-control" disabled>
									<option value=" " selected="selected"></option>
									<?php
									$charanOptions  = array('1', '2','3','4');
									foreach($charanOptions  as $option){
										if($charan == $option){
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
							<label class="col-sm-3 control-label">Nadi</label>
							<div class="col-sm-6">
								<select class="form-control" disabled name="nadi">
										<option value=" " selected="selected"></option>
										<?php
										$nadiOptions  = array('Adhya', 'Madhya','Antya');
										foreach($nadiOptions  as $option){
											if($nadi == $option){
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
							<label class="col-sm-3 control-label">Gan</label>
							<div class="col-sm-6">
								<select class="form-control" disabled name="gan">
									<option value=" " selected="selected"></option>
									<?php
									$ganOptions  = array('Dev Gan', 'Manushya Gan','Rakshas Gan');
									foreach($ganOptions  as $option){
										if($gan == $option){
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
							<label class="col-sm-3 control-label">Mangal</label>
							<div class="col-sm-6">
								<select name="mangal" id="mangal" class="form-control" disabled>
								<?php
								$mangalOptions  = array('No', 'Yes','Saumya','Nirdosh','Not Known');
								
								foreach($mangalOptions  as $option){
									if($mangal == $option){
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
							<label class="col-sm-3 control-label">Birth Place</label>
							<div class="col-sm-6">
								<input name="birthPlace" type="text" maxlength="50" id="birthPlace" value="<?php echo $birthPlace; ?>" class="form-control" disabled  onkeydown= "return isAlpha(event.keyCode);" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Birth Time</label>
							<div class="col-sm-6">
								 <?php
									$birthTimeSplit = explode (":", $birthTime); 
									$hours = $birthTimeSplit[0];
									$mins  = $birthTimeSplit[1];
									$ampm  = $birthTimeSplit[2];
																				
									$birthTimeHoursOptions  = array('00','01','02','03','04','05','06','07','08','09','10','11','12');
									echo "<select name='birthTimeHours' id='birthTimeHours' class='select-res' disabled>";
									foreach($birthTimeHoursOptions as $option){
										if($hours == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									echo "</select>";
									echo ":";
									$birthTimeMinsOptions  = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
									'51','52','53','54','55','56','57','58','59','60');
									echo "<select name='birthTimeMins' id='birthTimeMins' class='select-res' disabled>";
									foreach($birthTimeMinsOptions as $option){
										if($mins == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									echo "</select>";
									echo ":";
									$birthTimeAMPMOptions  = array('AM','PM');
									echo "<select name='birthTimeAMPM' id='birthTimeAMPM' class='select-res' disabled>";
									foreach($birthTimeAMPMOptions as $option){
										if($ampm == $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									echo "</select>";
									?>
							</div>
						</div>
						
					</form>
				</div><!-- end col -->

				<div class="col-lg-6">
					<h5 class="m-b-5"><b>Family Details</b></h5>
					<p class="text-muted font-13 m-b-30">
						
					</p>
					<form class="form-horizontal group-border-dashed" action="myprofileactions.php" name="familydetails" method="post">
						<?php
						$fetch_family_details="select * from tbl_family_details where profile_id='$profileId'";	
						$family_details_rs= mysqli_query($conn,$fetch_family_details);
						
						$family_details_numrows=mysqli_num_rows($family_details_rs);
						if($family_details_numrows > 0) 
							{
							while($family_details_row = mysqli_fetch_array($family_details_rs)) 
								{
								$fatherName				= $family_details_row[1];
								$fatherOccupation		= $family_details_row[2];
								$motherName				= $family_details_row[3];
								$motherOccupation		= $family_details_row[4];
								$noofBrothers			= $family_details_row[5];
								$noofBrothersMarried	= $family_details_row[6];
								$noofSisters			= $family_details_row[7];
								$noofSistersMarried		= $family_details_row[8];
								$mamaLastName			= $family_details_row[9];
								$lastNameOfRelatives	= $family_details_row[10];
								}
							}
						else
							{
							$fatherName					= "";
							$fatherOccupation			= "";
							$motherName					= "";
							$motherOccupation			= "";
							$noofBrothers				= "";
							$noofBrothersMarried		= "";	
							$noofSisters				= "";
							$noofSistersMarried			= "";
							$mamaLastName				= "";
							$lastNameOfRelatives		= "";
							}
						?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Father Name</label>
							<div class="col-sm-6">
								<input type="text" name="fatherName" class="form-control" disabled maxlength="10" value="<?php echo $fatherName; ?>" onkeypress="return isAlpha(event.keyCode)"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Father Occupation</label>
							<div class="col-sm-6">
								<input type="text" name="fatherOccupation" class="form-control" disabled maxlength="10" value="<?php echo $fatherOccupation; ?>" onkeypress="return isAlpha(event.keyCode)"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Mother Name</label>
							<div class="col-sm-6">
								<input type="text" name="motherName" class="form-control" disabled maxlength="10" value="<?php echo $motherName; ?>" onkeypress="return isAlpha(event.keyCode)"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Mother Occupation</label>
							<div class="col-sm-6">
								<input type="text" name="motherOccupation" class="form-control" disabled maxlength="10" value="<?php echo $motherOccupation; ?>" onkeypress="return isAlpha(event.keyCode)"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">No.Of Brothers</label>
							<div class="col-sm-6">
								<select name="noofBrothers" id="noofBrothers" class="select-res" disabled onChange="checkNoOfBrotherSister();">
								<option value=" "></option>
								
								 <?php
									$noofBrothersOptions  = array('0','1','2','3','4','5','6','7','8','9');
									foreach($noofBrothersOptions  as $option){
										if($noofBrothers== $option){
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
							<label class="col-sm-3 control-label">No.Of Brothers Married</label>
							<div class="col-sm-6">
								<select name="noofBrothersMarried" id="noofBrothersMarried"  class="select-res" disabled>
									<option value=" "></option>
																		
									 <?php
										$noofBrothersMarriedOptions  = array('0','1','2','3','4','5','6','7','8','9');
										foreach($noofBrothersMarriedOptions  as $option){
											if($noofBrothersMarried== $option){
												echo "<option selected='selected' value='$option'>$option</option>" ;
											}else{
												echo "<option value='$option'>$option</option>" ;
											}
										}
										?>
								</select>
								</textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">No.Of Sisters</label>
							<div class="col-sm-6">
							<select name="noofSisters" id="noofSisters" class="select-res" disabled  onChange="checkNoOfBrotherSister();">
									<option value=" "></option>
									 <?php
										$noofSistersOptions  = array('0','1','2','3','4','5','6','7','8','9');
										foreach($noofSistersOptions  as $option){
											if($noofSisters== $option){
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
							<label class="col-sm-3 control-label">No.Of Sisters Married</label>
							<div class="col-sm-6">
								<select name="noofSistersMarried" id="noofSistersMarried" class="select-res" disabled>
									<option value=" "></option>
									 <?php
										$noofSistersMarriedOptions  = array('0','1','2','3','4','5','6','7','8','9');
										foreach($noofSistersMarriedOptions  as $option){
											if($noofSistersMarried== $option){
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
							<label class="col-sm-3 control-label">Mama's Last Name</label>
							<div class="col-sm-6">
								<input type="text" name="mamaLastName" class="form-control" disabled value="<?php echo $mamaLastName; ?>" onkeypress="return isAlpha(event.keyCode)"> 
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Last Name's Of Relatives</label>
							<div class="col-sm-6">
								<textarea columns="2" rows="3" name="lastNameOfRelatives" id="lastNameOfRelatives" class="form-control" disabled>
								<?php echo $lastNameOfRelatives; ?>
								</textarea>
							</div>
						</div>

						
					</form>
				</div><!-- end col -->
			</div><!-- end row -->
		</div>
	</div><!-- end col -->
</div>
<!-- end row -->