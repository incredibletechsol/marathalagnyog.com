<div class="row">
	<div class="col-sm-12">
		<div class="card-box">
			<div class="row">
				<div class="col-lg-6">
					<h5 class="m-b-5"><b>Physical Attributes</b></h5>
					<p class="text-muted font-13 m-b-30">
						
					</p>
					
					<form class="form-horizontal group-border-dashed" action="myprofileactions.php" name="physicalattr" method="post">
							<?php
							$fetch_physical_attr="select * from tbl_physical_attr where profile_id='$profileId'";	
							$physical_attr_rs= mysqli_query($conn,$fetch_physical_attr);
							
							$physical_numrows=mysqli_num_rows($physical_attr_rs);
							if($physical_numrows > 0) 
								{
								while($physical_attr_row = mysqli_fetch_array($physical_attr_rs)) 
									{
									$heightFt		= $physical_attr_row[1];
									$heightInch		= $physical_attr_row[2];
									$weight			= $physical_attr_row[3];
									$bloodGroup		= $physical_attr_row[4];
									$complexion		= $physical_attr_row[5];
									}
								}
							else
								{
								$heightFt   = "";
								$heightInch = "";
								$weight     = "";
								$bloodGroup = "";
								$complexion = "";
								}
							?>
									
						<div class="form-group">
							<label class="col-sm-3 control-label">Height</label>
							<div class="col-sm-6">
								<select name="heightFt" id="heightFt" class="select-res" required="">
								<?php
								$heightFtOptions  = array('4','5','6','7');
								
								foreach($heightFtOptions  as $option){
									if($heightFt== $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>
								</select>Ft
								<select name="heightInch" id="heightInch" style="width:60px;" class="select-res" required="">
								<?php
								$heightInchOptions  = array('0','1','2','3','4','5','6','7','8','9','10','11','12');
								
								foreach($heightInchOptions  as $option){
									if($heightInch == $option){
										echo "<option selected='selected' value='$option'>$option</option>" ;
									}else{
										echo "<option value='$option'>$option</option>" ;
									}
								}
								?>Inch
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Weight</label>
							<div class="col-sm-6">
								<select name="weight"  id="weight" class="select-res" required="" >
								<option value=" "></option>
								<?php
								$weightOptions  = array('30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50',
								'51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90',
								'91','92','93','94','95','96','97','98','99','100','101','102','103','104','105','106','107','108','109','110','111','112','113','114','115','116','117','118','119','120','121','122','123','124','125','126','127','128','129','130',
								'131','132','133','134','135','136','137','138','139','140','141','142','143','144','145','146','147','148','149','150',
								'151','152','153','154','155','156','157','158','159','160','161','162','163','164','165','166','167','168','169','170','171','172','173','174','175','176','177','178','179','180','181','182','183','184','185','186','187','188','189','190',
								'191','192','193','194','195','196','197','198','199','200');
								
								foreach($weightOptions  as $option){
									if($weight == $option){
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
							<label class="col-sm-3 control-label">Blood Group</label>
							<div class="col-sm-6">
							<select name="bloodGroup" id="bloodGroup" class="select-res" required="">
							 <option value=" "></option>
							 	<?php
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
							</div>
						</div>	
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Complexion</label>
							<div class="col-sm-6">
							<select name="complexion" id="complexion" class="select1-res" required="">
								 <option value=" "></option>
								 
								 <?php
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
							</div>
						</div>	
				
						
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9 m-t-15">
								<input type="submit" name="updatePhysicalAttr" value="Update" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div><!-- end col -->

				<div class="col-lg-6">
					<h5 class="m-b-5"><b>Professional Information</b></h5>
					<p class="text-muted font-13 m-b-30">
						
					</p>
					<form class="form-horizontal group-border-dashed" action="myprofileactions.php" name="profile" method="post">
						<?php
			
						$fetch_profile="select * from tbl_profile where profile_id='$profileId'";	
						$profile_rs= mysqli_query($conn,$fetch_profile);
						
						$profile_numrows=mysqli_num_rows($profile_rs);
						if($profile_numrows > 0) 
							{
							while($profile_row = mysqli_fetch_array($profile_rs)) 
								{
								$education	  = $profile_row[1];
								$annualIncome = $profile_row[2];
								$occupation   = $profile_row[3];
								}
							}
						else
							{
							$education	  = "";
							$annualIncome = "";
							$occupation   = "";
							}
						?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Education</label>
							<div class="col-sm-6">
								<select name="education" id="education" class="form-control" required="">
								<option value=" "></option> 
								 <?php
									$educationOptions  = array('M.C.A','H.S.C','B.A.M.S','B.C.A','B.H.M.S','B.Tech','M.Tech','B.A','B.S.C','B.Com','B.E-IT','B.E-COMPUTER','B.E-MECH','B.E-ENTC','B.E-ELEC','B.E-CIVIL',
									'Bachelors Of Architect','B.C.S','BPT','C.A','D.Pharma','B.Pharma','M.Pharma','Diploma','Fashion Desining','BL','ML','LLB',
									'LLM','M.B.B.S','B.D.S','M.ED','B.ED','D.ED','B.B.A','M.B.A','M.A','M.S.C','M.COM','M.E','Medicine - General','Medicine - Dental',
									'Medicine - Surgeon','Ph.d','IAS','IPS','S.S.C','M.C.S','I.T.I');
									
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
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Annual Income</label>
							<div class="col-sm-6">
								<input name="annualIncome" type="text" maxlength="10" id="annualIncome" value="<?php echo $annualIncome; ?>" onkeypress="return isNumberKey(event)" class="form-control" required=""/>
							</div>
						</div>
												
						<div class="form-group">
							<label class="col-sm-3 control-label">Occupation</label>
							<div class="col-sm-6">
								<input name="occupation" type="text" maxlength="50" id="occupation" value="<?php echo $occupation; ?>" onkeydown= "return isAlpha(event.keyCode);"  class="form-control" required=""/>
							</div>
						</div>
						
						<div class="form-group m-b-0">
							<div class="col-sm-offset-3 col-sm-9 m-t-15">
								<input type="submit" name="updateProfile" value="Update" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div><!-- end col -->
			</div><!-- end row -->
		</div>
	</div><!-- end col -->
</div>
<!-- end row -->