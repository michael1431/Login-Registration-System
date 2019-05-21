    <?php include 'header.php';
      include 'lib/user.php';
     session::checkSession();

    ?>

    <?php
    if(isset($_GET['id']))
    {
    	$userid=(int)$_GET['id'];
    }
    	
    $user=new User();
    if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['updatepass']))
    {
    	$updatepass=$user->updatePassword($id,$_POST);
    
    }

    ?>
	<div class="panel panel-default">
	<div class ="panel-heading">
	<h2>Change Password <span class="pull-right"><a  class ="btn btn-primary" href="Profile.php">Back</a></span></h2>
	</div>

	<div class="panel-body">
	<div style="max-width:600px; margin:0 auto">
		<?php
		if(isset($updatepass))
		{
			echo $updatepass;
		} 

		?>

	
	<form action="" method="POST">

	<div class="form-group">
	<label for="old_pass">Old Password </label>
	<input type="Password" id="old_pass" name="old_pass" class="form-control">

	</div>

	<div class="form-group">
	<label for="Password">New Password</label>
	<input type="Password" id="Password" name="password" class="form-control">

	</div>

	
	<button type="submit" name="updatepass" class="btn btn-success">Update</button>

	</form>



	</div>

	</div>


	<?php include 'footer.php';?>