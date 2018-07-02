<?php
// require_once 'includes/header.php'; ?>

<?php 
//$user_id = $_SESSION['userId'];
//$sql = "SELECT * FROM users WHERE user_id = {$user_id}";
//$query = $connect->query($sql);
//$result = $query->fetch_assoc();

//$connect->close();
?> 

<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-wrench"></i> Assignment</div>
			</div> <!-- /panel-heading -->

			<div class="panel-body">

				

				<form action="php_action/changeUsername.php" method="post" class="form-horizontal" id="changeUsernameForm">
					<fieldset>
						<legend>Assignment</legend>

						<div class="changeUsenrameMessages"></div>			

						<div class="form-group">
					    <label for="username" class="col-sm-2 control-label">Young</label>
					    <div class="col-sm-6">
					     <select class="form-control">
					     <option>Young</option>
					      <option>Student</option>
					       <option>Old</option>
					     </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="username" class="col-sm-2 control-label">Young</label>
					    <div class="col-sm-6">
					     <select class="form-control">
					     <option>Young</option>
					      <option>Student</option>
					       <option>Old</option>
					     </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="username" class="col-sm-2 control-label">Young</label>
					    <div class="col-sm-6">
					     <select class="form-control">
					     <option>Young</option>
					      <option>Student</option>
					       <option>Old</option>
					     </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="username" class="col-sm-2 control-label">Young</label>
					    <div class="col-sm-6">
					     <select class="form-control">
					     <option>Young</option>
					      <option>Student</option>
					       <option>Old</option>
					     </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="username" class="col-sm-2 control-label">Young</label>
					    <div class="col-sm-6">
					     <select class="form-control">
					     <option>Young</option>
					      <option>Student</option>
					       <option>Old</option>
					     </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="username" class="col-sm-2 control-label">Young</label>
					    <div class="col-sm-6">
					     <select class="form-control">
					     <option>Young</option>
					      <option>Student</option>
					       <option>Old</option>
					     </select>
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					    	<input type="hidden" name="user_id" id="user_id" value="<?php echo $result['user_id'] ?>" /> 
					      <button type="submit" class="btn btn-success" data-loading-text="Loading..." id="changeUsernameBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes </button>
					    </div>
					  </div>
					</fieldset>
				</form>

				

			</div> <!-- /panel-body -->		

		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->	
</div> <!-- /row-->


<script src="custom/js/setting.js"></script>
<?php require_once 'includes/footer.php'; ?>