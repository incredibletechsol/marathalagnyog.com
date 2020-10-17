<?php
session_start(); 
include('logincommon.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <title>Whom I Contacted</title>

        <!-- DataTables -->
        <link href="assets\plugins\datatables\jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="assets\plugins\datatables\buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\plugins\datatables\fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\plugins\datatables\responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\plugins\datatables\scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets\css\lightbox.css">
       <?php include('theme.php'); ?>
        
         <!-- jQuery  -->
        <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets\js\modernizr.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-77043005-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">
		function disablefield()
		{ 
			if (document.getElementById('yes_radio').checked == 1){ 
			document.getElementById('smsday').disabled=''; 
			document.getElementById('smsday').value='';
			}else{ 
			document.getElementById('smsday').disabled='disabled'; 
			document.getElementById('smsday').value='NA'; } 
		} 
			
		function disablefield1()
		{ 
			if (document.getElementById('yes_radio1').checked == 1){ 
			document.getElementById('smsday1').disabled=''; 
			document.getElementById('smsday1').value='';
			}else{ 
			document.getElementById('smsday1').disabled='disabled'; 
			document.getElementById('smsday1').value='NA'; } 
		}
			
		function dismiss() 
		{
		    window.location='listbachatgats.php';
		}	
		
		function nospaces(t)
		{
          if(t.value.match(/\s/g)){
           t.value=t.value.replace(/\s/g,'');
          }
       }
	</script>
	
    </head>
	
    <body>
   

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">
					<?php include('logo.php'); ?>

                    <?php include('topmenu.php'); ?>
                </div>
            </div>

        </header>
        <!-- End Navigation Bar-->

        <br>
        <div class="wrapper">
              <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12" >
                         <h4 class="page-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whom I Contacted</h4>
                    </div>
                </div>
		
            <div class="container">
               <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                              <table id="datatable" class="table table-striped dt-responsive nowrap">
									 <thead>
                                        <tr>
										    <th>Photo</th>
                                            <th>Profile Id</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Height</th>
											<th>Native District</th>
										 </tr>
                                    </thead>
                                    <tbody>
								<?php
									include('conn.php');
									$profileId=$_SESSION['profile_id'];

									$fetch_all_contacted_profiles="select to_profile_id from tbl_request_contact_details where from_profile_id='$profileId'";

									$all_contacted_rs=mysqli_query($conn,$fetch_all_contacted_profiles) or die(mysqli_error($conn));

									while($all_contacted_row =  mysqli_fetch_array($all_contacted_rs)) 
									{

									$to_profile_id=$all_contacted_row[0];


									$fetch_basic_profile="select photo.imagename,basicprofile.profile_id,basicprofile.last_name,basicprofile.age,phyattr.heightFt,phyattr.heightInch,
								contactinfo.district,contactinfo.city from tbl_basic_profile basicprofile,tbl_profile_photo photo,tbl_physical_attr phyattr,tbl_contact_info contactinfo where basicprofile.profile_id=photo.profile_id and basicprofile.profile_id=phyattr.profile_id  and basicprofile.profile_id=contactinfo.profile_id  and basicprofile.profile_id='$to_profile_id' and basicprofile.status='Y' order by basicprofile.profile_id desc";	

									$basic_profile_rs= mysqli_query($conn,$fetch_basic_profile);

									while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
										{
										  echo "<tr>";
										
										   if($basic_profile_row [0]=="noimg.gif")
											{
											echo "<td width='133' height='100'><img src='../	images/noimg.gif' border=0 class='img-500'></td>";
											}
										else
											{	
											echo "<td width='133' height='100'><div style='width:100px;height:133px;'><img src='../profilepics/$basic_profile_row[0]' border='0' width='133' height='100' class='img-500'></div></td>";
											}
										   echo "<td width=10><a href='showpartnerdetails.php?id=$basic_profile_row[1]&senddetails=no&who=who'>".$basic_profile_row[1]."</a></td>";
										 
										  echo "<td>".$basic_profile_row[2]."</td>";
										  echo "<td>".$basic_profile_row[3]."</td>";
										  echo "<td>".$basic_profile_row[4]."ft ".$basic_profile_row[5]."Inch</td>";
										  echo "<td>".$basic_profile_row[6].",".$basic_profile_row[7]."</td>";
										  echo "</tr>";
										} 
}
									?>
                                   </tbody>
                             </table>
                    
                        </div>
                    </div>
                </div>
				<br><br><br><br><br><br>
			<?php include('footer.php'); ?>
            </div>
            <!--List Of All Bachat Gats - End -->
            
            <!--Create Bachat Gat - Start -->
            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Create Bachat Gat</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal group-border-dashed" action="bachatgatactions.php" method="post">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Database Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="Database Name" name="BachatGat_DBName" onkeyup="nospaces(this)">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bachat Gat Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="Bachat Gat Name" name="BachatGat_Name">
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bachat Gat Owner Name</label>
                                    <div class="col-sm-6">
                                        <input type="text"  class="form-control" required="" placeholder="Bachat Gat Owner Name" name="BachatGat_Owner_Name">
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bachat Gat Owner Contact No</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="Bachat Gat Owner Contact No" name="BachatGat_Owner_ContactNo">
                                    </div>
                                </div>
    							
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bachat Gat Address</label>
                                    <div class="col-sm-6">
                                        <textarea required="" class="form-control" required="" placeholder="BachatGat Address" name="BachatGat_Address"></textarea>
                                    </div>
                                </div>
    							
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">No Of Members</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="No Of Members" name="BachatGat_NoOfMembers">
                                    </div>
                                </div>
    							
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">SMS Required</label>
                                    <div class="col-sm-6">
    									<input type="radio" name="smsrequired" id="yes_radio" value="Y" onClick="disablefield();" required="">Yes
    									<input type="radio" name="smsrequired" id="no_radio" value="N" onClick="disablefield();" required="">No
                                    </div>
                                </div>
    							
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">SMS Day</label>
                                    <div class="col-sm-6">
                                         <input type="text" class="form-control" required="" placeholder="SMS Day" name="smsday" id="smsday">
                                    </div>
                                </div>
    							
    						    <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="savebachatgat">Submit</button>
                                        <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal" onClick="dismiss();">Close</button>
                                     </div>
                                </div>
                            </form>
                        </div>
                   </div>
                </div>
            </div>
             <!--Create Bachat Gat - End -->
             <!--Edit Bachat Gat - Start -->
             <?php
             if(isset($_GET['msg'])) 
                {
                $param=$_GET['msg'];
               
                if($param  == "editbachatgat")
                	{
                		$myid = $_GET['id'];
                        $db = new Database();
                        $db->connect();
                      	$db->sql("select * from tbl_bachat_gat_info where id='$myid' "); 
                		$rs = $db->getResult();
                		foreach($rs as $x) 
                				{
                				     $id = $x['id'];
                					 $name = $x['BachatGat_Name'];
                					 $dbname = $x['BachatGat_DBName'];
                					 $ownername = $x['BachatGat_Owner_Name'];    
                				     $contactno =  $x['BachatGat_Owner_ContactNo'];
                					 $address = $x['BachatGat_Address'];
                					 $noofmembers= $x['BachatGat_NoOfMembers'];
                				     $smsr  = $x['SmsRequired'];
                					 $smsd = $x['SmsDay'];
                					 $regDate = $x['RegDate'];
                					 $expDate = $x['ExpDate'];
                					 $active = $x['active'];
                				}
                				if($smsr == "N") 
                				   $smsd = 0;
            ?>
            <div id="popModel" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Bachat Gat</h4>
                      </div>
                      <div class="modal-body">
                            <form class="form-horizontal group-border-dashed" action="bachatgatactions.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bachat Gat Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="Bachat Gat Name" name="BachatGat_Name1" value="<?php echo $name; ?>" >
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bachat Gat Owner Name</label>
                                    <div class="col-sm-6">
                                        <input type="text"  class="form-control" required="" placeholder="Bachat Gat Owner Name" name="BachatGat_Owner_Name1" value="<?php echo $ownername; ?>">
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bachat Gat Owner Contact No</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="Bachat Gat Owner Contact No" name="BachatGat_Owner_ContactNo1" value="<?php echo $contactno; ?>">
                                    </div>
                                </div>
    							
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Bachat Gat Address</label>
                                    <div class="col-sm-6">
                                        <textarea required="" class="form-control" required="" placeholder="BachatGat Address" name="BachatGat_Address1"><?php echo $address; ?></textarea>
                                    </div>
                                </div>
    							
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">No Of Members</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required="" placeholder="No Of Members" name="BachatGat_NoOfMembers1" value="<?php echo $noofmembers; ?>">
                                    </div>
                                </div>
    							
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">SMS Required</label>
                                    <div class="col-sm-6">
    									<input type="radio" name="smsrequired1" id="yes_radio1" value="Y" onClick="disablefield1();" required="" <?php echo ($smsr=='Y')?'checked':'' ?>>Yes
    									<input type="radio" name="smsrequired1" id="no_radio1" value="N" onClick="disablefield1();" <?php echo ($smsr=='N')?'checked':'' ?>>No
                                    </div>
                                </div>
    							
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">SMS Day</label>
                                    <div class="col-sm-6">
                                         <input type="text" class="form-control" required="" placeholder="SMS Day" name="smsday1" id="smsday1" value="<?php echo $smsd; ?>">
                                    </div>
                                </div>
    							
    						    <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="updatebachatgat">Submit</button>
                                        <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal" onClick="dismiss();">Close</button>
                                     </div>
                                </div>
                            </form>
                      </div>
                    </div>
                 </div>
            </div>
            <script>
            $(function() {  
              $("#popModel").modal('show');
            });
            </script>
            <?php
                	}
                }
            ?>    
             <!--Edit Bachat Gat - End -->
             
             <!--Download Backup - Start -->
             <?php
             if(isset($_GET['msg'])) 
                {
                $param=$_GET['msg'];
               
                if($param  == "dnldBkp")
                	{
              ?>
             <div id="dnldBkp" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Download Backup</h4>
                      </div>
                      <div class="modal-body">
                            <?php
                            $type = $_GET['type'];
                            if($type == "single") {
                                $dbname = $_GET['dbname'];    
                                $filename = "/BG/".$dbname."/database/"."bachatga_bg_".$dbname.".sql";
                                echo "<h3>Backup Generated Successfully...</h3>";
                                echo "<br><a href='$filename' class='btn btn-custom waves-effect waves-light'>Download</a>";
                                echo "  <button type='button' class='btn btn-default waves-effect waves-light' data-dismiss='modal' onClick='dismiss();'>Close</button>";
                                }
                            else  if($type == "multiple") {
                                $zipfile = "/BG/All_Bachat_Gats_DBs.zip";
                                echo "<h3>Backup Generated Successfully...</h3>";
                                echo "<br><a href='$zipfile' class='btn btn-custom waves-effect waves-light'>Download</a>";
                                echo "  <button type='button' class='btn btn-default waves-effect waves-light' data-dismiss='modal' onClick='dismiss();'>Close</button>";
                                }
                            ?>
                      </div>
                    </div>
                 </div>
            </div>
            <script>
            $(function() {  
              $("#dnldBkp").modal('show');
            });
            </script>
            <?php
                	}
                }
            ?> 
            <!--Download Backup - End -->
            <?php include('settheme.php'); ?>
        </div>
        
        
       
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
        <script src="assets\js\waves.js"></script>
        <script src="assets\js\wow.min.js"></script>
        <script src="assets\js\jquery.nicescroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>

        <!-- Datatables-->
        <script src="assets\plugins\datatables\jquery.dataTables.min.js"></script>
        <script src="assets\plugins\datatables\dataTables.bootstrap.js"></script>
        <!--<script src="assets\plugins\datatables\dataTables.buttons.min.js"></script>
        <script src="assets\plugins\datatables\buttons.bootstrap.min.js"></script>-->
        <script src="assets\plugins\datatables\jszip.min.js"></script>
        <script src="assets\plugins\datatables\pdfmake.min.js"></script>
        <script src="assets\plugins\datatables\vfs_fonts.js"></script>
        <script src="assets\plugins\datatables\buttons.html5.min.js"></script>
        <script src="assets\plugins\datatables\buttons.print.min.js"></script>
        <script src="assets\plugins\datatables\dataTables.fixedHeader.min.js"></script>
        <script src="assets\plugins\datatables\dataTables.keyTable.min.js"></script>
        <script src="assets\plugins\datatables\dataTables.responsive.min.js"></script>
        <script src="assets\plugins\datatables\responsive.bootstrap.min.js"></script>
        <script src="assets\plugins\datatables\dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets\pages\jquery.datatables.init.js"></script>

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
       </script>

    </body>
</html>