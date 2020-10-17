<div class="row">
	<div class="col-md-4">
		<div class="card-box">
			<h4 class="header-title m-t-0 m-b-30">Search by District</h4>
				<form name="searchbydistrict" method="post" action="searchdata.php">
					<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
				
					   <tr>
							<td height="43"><b>Search What</b></td>
							<td height="43">:</td>
							<td height="43">
								<select name="gender" id="gender" class="form-control">
								<option value="Female">Brides</option>
								<option value="Male">Grooms</option>
								</select>
							</td>
						</tr>
						<tr>
							<td height="46"><b>Search In</b></td>
							<td height="46">:</td>
							<td height="46">
								<select name="district" id="district"  class="form-control">
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
								<option value="28">Nagpur</option>
								<option value="Nagpur">Nanded</option>
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
							</td>
						</tr>
						<tr>
							<td colspan="3" align="center">
							<input type="submit" value="Submit" class="btn btn-primary" name="searchbydistrict"> 
							</td>
						</tr>
					</table>	
				</form>	
				<form name="searchbyid" method="post" action="searchdata.php" onSubmit="return searchByProfileId(this)">
							<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
								<tr>
									<td colspan="3" align="left">
										<h4 class="header-title m-t-0 m-b-30">&nbsp;</h4>
										<h4 class="header-title m-t-0 m-b-30">Search by Profile Id</h4>
									</td>
								</tr>
							   <tr>
									<td height="48"><b>Profile Id</b></td>
									<td height="48">:</td>
									<td height="48">
										<input name="profileId" type="text" maxlength="20" id="profileId" class="form-control" onkeypress="return isNumberKey(event)" required=""/>
									</td>
									
								</tr>
								<tr>
									<td colspan="3" align="center">
										<input type="submit" value="Submit" class="btn btn-primary" name="searchbyprofileid"> <br><br>
									</td>
								</tr>
							</table>	
						</form>	
		</div>
	</div><!-- end col -->

	<div class="col-md-4">
		<div class="card-box">
			<h4 class="header-title m-t-0 m-b-30">Advance Search</h4>
			 <form name="advancesearch" method="post" action="searchdata.php">
				<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
				   <tr>
						<td height="50"><b>Search What</b></td>
						<td height="50">:</td>
						<td height="50">
							<select name="gender" id="gender" class="form-control" required>
							<option value="Female">Brides</option>
							<option value="Male">Grooms</option>
							</select>
						</td>
					</tr>
					<tr>
						<td height="52"><b>Search In</b></td>
						<td height="52">:</td>
						<td height="52">
							<select name="district" id="district"  class="form-control" required="">
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
							<option value="28">Nagpur</option>
							<option value="Nagpur">Nanded</option>
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
						</td>
					</tr>
					 <tr>
						<td height="47"><b>Caste</b></td>
						<td height="47">:</td>
						<td height="47">
						<select name="caste" id="caste" class="form-control" required="">
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
						</td>
					</tr>
					
					<tr>
						<td height="57"><b>Age</b></td>
						<td height="57">:</td>
						<td height="57">
						<select name="ageFrom" id="ageFrom" class="select-res" required="">
						<option selected='selected' value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option><option value='61'>61</option><option value='62'>62</option><option value='63'>63</option><option value='64'>64</option><option value='65'>65</option><option value='66'>66</option><option value='67'>67</option><option value='68'>68</option><option value='69'>69</option><option value='70'>70</option>			</select>
						<select name="ageTo" id="ageTo" class="select-res" required="">
						<option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option selected='selected' value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option><option value='61'>61</option><option value='62'>62</option><option value='63'>63</option><option value='64'>64</option><option value='65'>65</option><option value='66'>66</option><option value='67'>67</option><option value='68'>68</option><option value='69'>69</option><option value='70'>70</option>	</select>
						</td>
					</tr>
								
					<tr>
						<td colspan="3" align="center">
						<input type="submit" value="Submit" class="btn btn-primary" name="advancesearch"><br><br>
						</td>
					</tr>
				</table>	
			</form>	
			<br><br><br>
		</div>
	</div><!-- end col -->

	<div class="col-md-4">
		<div class="card-box">
			<h4 class="header-title m-t-0 m-b-30">Search by Education</h4>
			  <form name="searchbyeducation" method="post" action="searchdata.php">
				<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0">
					<tr>
						<td height="46"><b>Search What</b></td>
						<td height="46">:</td>
						<td height="46">
							<select name="gender" id="gender" class="form-control" required>
							<option value="Female">Brides</option>
							<option value="Male">Grooms</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><b>Search In</b></td>
						<td>:</td>
						<td>
							<select name="district" id="district"  class="form-control" required>
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
							<option value="28">Nagpur</option>
							<option value="Nagpur">Nanded</option>
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
						</td>
					</tr>
					<tr>
						<td height="64"><b>Education</b></td>
						<td height="64">:</td>
						<td height="64">
							<select name="education" id="education" class="form-control" required>
							 <option selected='selected' value='M.C.A'>M.C.A</option>
							 <option value='H.S.C'>H.S.C</option>
							 <option value='B.A.M.S'>B.A.M.S</option>
							 <option value='B.C.A'>B.C.A</option>
							 <option value='B.H.M.S'>B.H.M.S</option>
							 <option value='B.Tech'>B.Tech</option>
							 <option value='M.Tech'>M.Tech</option>
							 <option value='B.A'>B.A</option>
							 <option value='B.S.C'>B.S.C</option>
							 <option value='B.Com'>B.Com</option>
							 <option value='B.E'>B.E</option>
							 <option value='Bachelors Of Architect'>Bachelors Of Architect</option>
							 <option value='B.C.S'>B.C.S</option>
							 <option value='BPT'>BPT</option>
							 <option value='C.A'>C.A</option>
							 <option value='D.Pharma'>D.Pharma</option>
							 <option value='B.Pharma'>B.Pharma</option>
							 <option value='M.Pharma'>M.Pharma</option>
							 <option value='Diploma'>Diploma</option>
							 <option value='Fashion Desining'>Fashion Desining</option>
							 <option value='BL'>BL</option>
							 <option value='ML'>ML</option>
							 <option value='LLB'>LLB</option>
							 <option value='LLM'>LLM</option>
							 <option value='M.B.B.S'>M.B.B.S</option>
							 <option value='B.D.S'>B.D.S</option>
							 <option value='M.ED'>M.ED</option>
							 <option value='B.ED'>B.ED</option>
							 <option value='D.ED'>D.ED</option>
							 <option value='B.B.A'>B.B.A</option>
							 <option value='M.B.A'>M.B.A</option>
							 <option value='M.A'>M.A</option>
							 <option value='M.S.C'>M.S.C</option>
							 <option value='M.COM'>M.COM</option>
							 <option value='M.E'>M.E</option>
							 <option value='Medicine - General'>Medicine - General</option>
							 <option value='Medicine - Dental'>Medicine - Dental</option>
							 <option value='Medicine - Surgeon'>Medicine - Surgeon</option>
							 <option value='Ph.d'>Ph.d</option>
							 <option value='IAS'>IAS</option>
							 <option value='IPS'>IPS</option>
							 <option value='S.S.C'>S.S.C</option>
							 <option value='M.S.C'>M.S.C</option>
							 <option value='M.C.M'>M.C.M</option>
							 <option value='I.T.I'>I.T.I</option>
							</select>

						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
						<input type="submit" value="Submit" class="btn btn-primary" name="searchbyeducation"><br><br><br><br><br>
					</tr>
				</table>	
			</form>	
			<br><br><br>
		</div>
	</div><!-- end col -->
</div>
<!-- end row -->
