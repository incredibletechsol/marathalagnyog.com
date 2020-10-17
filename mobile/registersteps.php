<?php
$registerfrom  = $_GET['registerfrom']; 
?>
<div class="row">
	<div>
		<form class="stepform" action="regComplete.php" method="post" enctype="multipart/form-data">
            <input type="hidden"  name="registerfrom" value="<?php echo $registerfrom; ?>">
         
			<fieldset class="sf-step">
				<legend>1. Basic Information</legend>
					<div class="col-sm-4 form-group">
						<label>Profile Created By : </label>
						<select class="form-control input-res" name="profile_created_by" id="profile_created_by" data-validate="1">
                            <option value="">Select</option>
                            <option value="Self">Self</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Sister">Sister</option>
                            <option value="Friend">Friend</option>
                            <option value="Head Office">Head Office</option>
                            <option value="Agent">Agent</option>
                            <option value="Brother">Brother</option>
                        </select>
					</div>
					
					<div class="col-sm-4 form-group">
						<label>First Name : </label>
						<input type="text" placeholder="First Name" class="form-control input-res" data-validate="1" name="firstName">
					</div>
					
					<div class="col-sm-4 form-group">
						<label>Last Name : </label>
						<input type="text" placeholder="Last Name" class="form-control input-res" data-validate="1" name="lastName">
					</div>
					
					<div class="col-sm-4 form-group">
						<label>Gender : </label>
						<select name="gender" id="gender" class="form-control input-res" data-validate="1">
							<option value=""></option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>	
					
					<div class="col-sm-4 form-group">
						<label>Date of Birth : </label>
						<input type="text" class="form-control input-res" id="bdate" name="bdate" size="60" data-validate="1">
					</div>
							
					<div class="col-sm-4 form-group">
						<label>Caste-Subcaste : </label>
						<select name="castesubcaste" id="castesubcaste" class="form-control input-res" data-validate="1">
							<option value="Maratha">Maratha</option>
							<option value="Maratha96Kuli">Maratha 96Kuli</option>
							<option value="MarathaKunbi">Maratha Kunbi</option>
							<option value="MarathaDeshmukh">Maratha Deshmukh</option>
						</select>
					</div>	
					
					<div class="col-sm-4 form-group">
						<label>Marital Status : </label>
						<select name="maritalStatus" id="maritalStatus" class="form-control input-res" data-validate="1">
							<option value=""></option>
							<option value="Unmarried">Unmarried</option>
							<option value="Divorced">Divorced</option>
							<option value="Widowed">Widowed</option>
							<option value="Separated">Separated</option>
						</select>
					</div>
					
					<div class="col-sm-4 form-group"><br>
						<label>Height : </label>
						<select name="heightFt" class="select-res" id="heightFt" data-validate="1">
							 <option value="">-</option>
							 <option value="4">4</option>
							 <option value="5">5</option>
							 <option value="6">6</option>
							 <option value="7">7</option>
						</select>

						<select name="heightInch" id="heightInch" class="select-res" data-validate="1">
							<option value="">-</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>
					
					<div class="col-sm-4 form-group">
						<label>Blood Group : </label>
							<select name="bloodGroup" id="bloodGroup" class="form-control select-res" data-validate="1">
							 <option value=" "></option>
							 
								<?php
								$bloodGroup =""; 
								$bloodGroupOptions  = array('A+','A','B','B+','AB+','AB','O+','O');
								
								foreach($bloodGroupOptions  as $option){
									if($bloodGroup == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>	
							</select>
						</select>
					</div>
					
					<div class="col-sm-4 form-group">
						<label>Complexion : </label>
							<select name="complexion" id="complexion" class="form-control input-res" data-validate="1">
								 <option value=" "></option>
								 
								 <?php
								    $complexion = "";
									$complexionOptions  = array('FAIR','GORA','SAWALA','GAVHAL','NIMGORA','BLACK','GORA,SMART','FAIR,SMART','GAVHAL,SMART');
									
									foreach($complexionOptions  as $option){
										if($complexion== $option){
											echo "<option selected='selected' value='$option'>$option</option>" ;
										}else{
											echo "<option value='$option'>$option</option>" ;
										}
									}
									?>
							</select>
						</select>
					</div>
					
					<div class="col-sm-4 form-group">
						<label>Passord : </label>
						<input type="password" placeholder="Password" class="form-control input-res" data-validate="1" name="password">
					</div>
					
					<div class="col-sm-4 form-group">
						<label>Profile Photo : </label>
						<input name="photo" type="file" id="photo" onchange="return CheckPhotoExt();" data-validate="1"/>
						<DIV id="error_photo" style="color:red;"></DIV>
					</div>
			</fieldset>
			
			<fieldset class="sf-step">
				<legend>2. Contact Details</legend>
				<div class="col-sm-4 form-group">
					<label>Address : </label>
					<textarea columns="10" rows="5" name="address" id="address" class="form-control input-res" data-validate="1"></textarea>
				</div>
				
				<div class="col-sm-4 form-group">
					<label class="control-label" for="email">District</label>
					<select name="district" id="district" class="form-control select1-res" data-validate="1">
						<option value=""></option>
						<option value="Ahmednagar">Ahmednagar</option>
						<option value="Akola">Akola</option>
						<option value="Amravati">Amravati</option>
						<option value="Aurangabad">Aurangabad</option>
						<option value="Beed">Beed</option>
						<option value="Belgaum">Belgaum</option>
						<option value="Bhandara">Bhandara</option>
						<option value="Bidar">Bidar</option>
						<option value="Buldana">Buldana</option>
						<option value="Chandrapur">Chandrapur</option>
						<option value="Dhule">Dhule</option>
						<option value="Gadchiroli">Gadchiroli</option>
						<option value="Gondia">Gondia</option>
						<option value="Hingoli">Hingoli</option>
						<option value="Jalana">Jalana</option>
						<option value="Jalgaon">Jalgaon</option>
						<option value="Kolhapur">Kolhapur</option>
						<option value="Latur">Latur</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Nagpur">Nagpur</option>
						<option value="Nanded">Nanded</option>
						<option value="Nandurbar">Nandurbar</option>
						<option value="Nashik">Nashik</option>
						<option value="Osmanabad">Osmanabad</option>
						<option value="Parbhani">Parbhani</option>
						<option value="Pune">Pune</option>
						<option value="Raigad">Raigad</option>
						<option value="Ratnagiri">Ratnagiri</option>
						<option value="Sangli">Sangli</option>
						<option value="Satara">Satara</option>
						<option value="Sindhudurg">Sindhudurg</option>
						<option value="Solapur">Solapur</option>
						<option value="Thane">Thane</option>
						<option value="Wardha">Wardha</option>
						<option value="Washim">Washim</option>
						<option value="Yavatmal">Yavatmal</option>
					</select>
				</div>
				
				<div class="col-sm-4 form-group">
					<label class="control-label" for="email">Taluka</label>
					<input class="form-control input-res" id="taluka" name="taluka" data-validate="1"/>
				</div>
				
				<div class="col-sm-4 form-group">
					<label class="control-label" for="email">Goan</label>
					<input class="form-control input-res" id="goan" name="goan" data-validate="1"/>
				</div>
				
				<div class="col-sm-4 form-group">
					<label class="control-label" for="mobile">Mobile Number</label>
					<input class="form-control input-res" id="mobileNo" name="mobileNo" data-validate="10"/>
				</div>
				
				<div class="col-sm-4 form-group">
					<label class="control-label" for="mobile">Alternate Mobile Number</label>
					<input class="form-control input-res" id="alternateMobileNo" name="alternateMobileNo" data-validate="10"/>
				</div>
					
				<div class="col-sm-4 form-group">
					<label class="control-label" for="email">Email Id</label>
					<input class="form-control input-res" id="email" name="email" data-validate="email"/>
				</div>
				
				
			</fieldset>

			<fieldset class="sf-step">
				<legend>3. Educational Qualification and Professional Details</legend>
				<div class="col-sm-4 form-group">
					<label>Education : </label>
					<select name="education" id="education" class="form-control select1-res" data-validate="1">
					<option value=" "></option> 
					 <?php
					    $education = "";
						$educationOptions  = array('M.C.A','H.S.C','B.A.M.S','B.C.A','B.H.M.S','B.Tech','M.Tech','B.A','B.S.C','B.Com','B.E-IT','B.E-COMPUTER','B.E-MECH','B.E-ENTC','B.E-ELEC','B.E-CIVIL','Bachelors Of Architect','B.C.S','BPT','C.A','D.Pharma','B.Pharma','M.Pharma','Diploma','Fashion Desining','BL','ML','LLB','LLM','M.B.B.S','B.D.S','M.ED','B.ED','D.ED','B.B.A','M.B.A','M.A','M.S.C','M.COM','M.E','Medicine - General','Medicine - Dental','Medicine - Surgeon','Ph.d','IAS','IPS','S.S.C','M.C.S','I.T.I');
						
						foreach($educationOptions  as $option){
							if($education== $option){
								echo "<option selected='selected' value='$option'>$option</option>" ;
							}else{
								echo "<option value='$option'>$option</option>" ;
							}
						}
						?>
					</select>
				</div>
				
				<div class="col-sm-4 form-group">
					<label>Annual Income  : </label>
					<input name="annualIncome" type="text" maxlength="10" id="annualIncome" class="form-control input-res" onkeypress="return isNumberKey(event)" data-validate="1"/> 
				</div>
				
				<div class="col-sm-4 form-group">
					<label>Job/Business : </label>
					<input name="occupation" type="text" id="occupation" class="form-control input-res" onkeydown= "return isAlpha(event.keyCode);" data-validate="1"/> 
				</div>	
				<legend>4.Socio Religious Attributes</legend>
				<div class="col-sm-4 form-group">
					<label>Gothra/Devak  : </label>
					<input name="gothra" type="text" id="gothra" class="form-control input-res" onkeydown= "return isAlpha(event.keyCode);" data-validate="1"/> 
				</div>
				
				<div class="col-sm-4 form-group">
					<label>Rashi : </label>
					<select name="rashi" class="form-control select1-res">
					  <option value=" " selected="selected"></option>
					  <?php
					   $rashi = "";
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
				
				<div class="col-sm-4 form-group">
					<label>Nakshtra : </label>
					<select name="nakshtra" class="form-control select1-res">
					  <option value=" " selected="selected"></option>
					  <?php
					  $nakshtra = "";
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
				
				<div class="col-sm-4 form-group">
					<label>Charan : </label>
					<select name="charan" class="form-control select1-res">
						<option value=" " selected="selected">- Unspecified -</option>
						<?php
						$charan = ""; 
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
				
				<div class="col-sm-4 form-group">
					<label>Nadi : </label>
					<select class="form-control select1-res" name="nadi">
						<option value=" " selected="selected">- Unspecified -</option>
						<?php
						$nadi = "";
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
				
				<div class="col-sm-4 form-group">
					<label>Gan : </label>
					<select  class="form-control select1-res" name="gan">
						<option value=" " selected="selected"></option>
						<?php
						$gan = "";
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
				
				<div class="col-sm-4 form-group">
					<label>Birth Place  : </label>
					<input name="birthPlace" type="text" maxlength="10" id="birthPlace" class="form-control input-res" onkeydown= "return isAlpha(event.keyCode);" data-validate="1"/> 
				</div>
				
				<div class="col-sm-4 form-group">
					<label>Birth Time  : </label>
					<?php
					$birthTime	= "00:00:AM";
					$birthTimeSplit = explode (":", $birthTime); 
					$hours = $birthTimeSplit[0];
					$mins  = $birthTimeSplit[1];
					$ampm  = $birthTimeSplit[2];
																
					$birthTimeHoursOptions  = array('00','01','02','03','04','05','06','07','08','09','10','11','12');
					echo "<select name='birthTimeHours' id='birthTimeHours' class='form-control select-res'>";
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
					echo "<select name='birthTimeMins' id='birthTimeMins' class='select-res'>";
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
					echo "<select name='birthTimeAMPM' id='birthTimeAMPM' class='select-res'>";
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
				
				<div class="col-sm-4 form-group">
					<label>Mangal : </label>
					<select name="mangal" id="mangal" class="form-control select1-res">
						<?php
						$mangalOptions  = array('No', 'Yes','Saumya','Nirdosh','Not Known');
						$mangal = "";
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
			</fieldset>
			
			<fieldset class="sf-step">
				<legend>5. Family Details</legend>
				<div class="col-sm-6 form-group">
					<label>Father Name  : </label>
					<input name="fatherName" type="text"  id="fatherName" class="form-control input-res" onkeydown= "return isAlpha(event.keyCode);" data-validate="1"/> 
				</div>
				
				<div class="col-sm-6 form-group">
					<label>Father Occupation : </label>
					<input name="fatherOccupation" type="text"  id="fatherOccupation" class="form-control input-res" onkeydown= "return isAlpha(event.keyCode);" data-validate="1"/> 
				</div>
				
				<div class="col-sm-6 form-group">
					<label>Mother Name  : </label>
					<input name="motherName" type="text"  id="motherName" class="form-control input-res" onkeydown= "return isAlpha(event.keyCode);" data-validate="1"/> 
				</div>
				
				<div class="col-sm-6 form-group">
					<label>Mother Occupation : </label>
					<input name="motherOccupation" type="text" id="motherOccupation" class="form-control input-res" onkeydown= "return isAlpha(event.keyCode);" data-validate="1"/> 
				</div>
				
				<div class="col-sm-6 form-group">
					<label>No.Of Brothers : </label>
					<select name="noofBrothers" id="noofBrothers" class="select-res"  onChange="checkNoOfBrotherSister();">
						<option value=" "></option>
						
						 <?php
						    $noofBrothers = ""; 
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
				
				<div class="col-sm-6 form-group">
					<label>No.Of Brothers Married : </label>
					<select name="noofBrothersMarried" id="noofBrothersMarried" class="select-res"  onChange="checkNoOfBrotherSister();">
						<option value=" "></option>
						
						 <?php
						 $noofBrothersMarried ="";
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
				</div>
				
				<div class="col-sm-6 form-group">
					<label>No.Of Sisters :&nbsp;&nbsp;&nbsp; </label>
					<select name="noofSisters" id="noofSisters" class="select-res"  onChange="checkNoOfBrotherSister();">
						<option value=" "></option>
						
						 <?php
						    $noofSisters = "";
							$noofBrothersOptions  = array('0','1','2','3','4','5','6','7','8','9');
							foreach($noofBrothersOptions  as $option){
								if($noofSisters== $option){
									echo "<option selected='selected' value='$option'>$option</option>" ;
								}else{
									echo "<option value='$option'>$option</option>" ;
								}
							}
							?>
					</select>
				</div>
				
				<div class="col-sm-6 form-group">
					<label>No.Of Sisters Married &nbsp;&nbsp;&nbsp;: </label>
					<select name="noofSistersMarried" id="noofSistersMarried" class="select-res"  onChange="checkNoOfBrotherSister();">
						<option value=" "></option>
						
						 <?php
						$noofSistersMarried = ""; 
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
				
				<div class="col-sm-6 form-group">
					<label>Mama's Last Name  : </label>
					<input name="mamaLastName" type="text"  id="mamaLastName" class="form-control input-res" onkeydown= "return isAlpha(event.keyCode);" data-validate="1"/> 
				</div>
				
				<div class="col-sm-6 form-group">
					<label>Last Name's Of Relatives  : </label>
					<textarea columns="10" rows="5" name="lastNameOfRelatives" id="lastNameOfRelatives" class="form-control input-res" data-validate="1"></textarea>
				</div>
			</fieldset>
	
			
			<fieldset class="sf-step">
				<legend>6. Partner Preferences</legend>
				<div class="col-sm-4 form-group">
					<label class="control-label" for="lookingFor">Looking For : </label>
					<select name="lookingFor" id="lookingFor" class="form-control select1-res" data-validate="1">
					<option value="">Select</option>
					<?php
					    $lookingFor = '';
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
				
				<div class="col-sm-4 form-group">
					<label class="control-label" for="partnerCaste">Caste</label>
					<select name="partnerCaste" id="partnerCaste" class="form-control select1-res" data-validate="1">
					<?php
					    $partnerCaste ='';
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
				
				<div class="col-sm-4 form-group">
					<label class="control-label" for="age">Age</label>
				   
				    <?php
			    	$ageTo = "";
					$ageFrom ="";
					
				    $ageFromOptions  = array('18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
					'51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70');
					echo "<br><select name='ageFrom' id='ageFrom' class='select-res'>";
					foreach($ageFromOptions as $option){
							echo "<option value='$option'>$option</option>" ;
						}
					echo "</select>";
					
					echo " to ";
					
				    $ageToOptions  = array('18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
					'51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70');
					
					echo "<select name='ageTo' id='ageTo' class='select-res'>";
					foreach($ageToOptions as $option){
						echo "<option value='$option'>$option</option>" ;
					}
					echo "</select>";
					?>
				</div>
				
				<div class="col-sm-4 form-group" align='left'>
					<label class="control-label" for="email">Education</label>
					<select name="partnerEducation[]" id="partnerEducation" multiple size="4" class="form-control">
						<script type="text/javascript">
						var from_array = new Array('M.C.A','H.S.C','B.A.M.S','B.C.A','B.H.M.S','B.Tech','M.Tech','B.A','B.S.C','B.Com','B.E',
						'Bachelors Of Architect','B.C.S','BPT','C.A','D.Pharma','B.Pharma','M.Pharma','Diploma','Fashion Desining','BL','ML','LLB',
						'LLM','M.B.B.S','B.D.S','M.ED','B.ED','D.ED','B.B.A','M.B.A','M.A','M.S.C','M.COM','M.E','Medicine - General','Medicine - Dental',
						'Medicine - Surgeon','Ph.d','IAS','IPS','S.S.C','M.C.S','M.C.M','I.T.I');
						for(var i=0;i<from_array.length;i++)
							{
							document.write('<option>'+from_array[i]+'</option>');
							}
						</script>
					</select>
				</div>
			<input type="submit" value="Submit" name='submit' class="btn btn-success">
			</fieldset>
    
		</form>
	</div>
</div>