<div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading">
                    <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="panel-title">Change Theme</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal group-border-dashed" action="myprofileactions.php" method="post">
                         <div class="form-group">
                            <label class="col-sm-3 control-label">SMS Required</label>
                            <div class="col-sm-6">
				<input type="radio" name="color" value="RD"> Red Dark<br>
				<input type="radio" name="color" value="RL"> Red Light<br>
				<input type="radio" name="color" value="GD"> Green Dark<br>
				<input type="radio" name="color" value="GL"> Green Light<br>
				<input type="radio" name="color" value="BD"> Blue Dark<br>
				<input type="radio" name="color" value="BL"> Blue Light<br>
				<input type="radio" name="color" value="P">  Pink<br>
			    </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="savetheme">Submit</button>
                                    <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal" onClick="dismiss();">Close</button>
                                 </div>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->