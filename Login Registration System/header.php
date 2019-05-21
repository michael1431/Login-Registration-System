<?php
include_once 'lib/Session.php';
session::init();

?>
<!Doctype html>
<html>
<head>
	 <title>Log in registration system</title>
	 <link rel="stylesheet"  href="css/bootstrap.css">

  <script src="js/jquery-3.2.1.min.js"></script>

  <script src="js/bootstrap.js"></script>

  <style type="text/css">

  body{
  	background-color:rgb(0,255,0);
  }


  </style>

</head>

<?php
if(isset($_GET['action']) && $_GET['action']=="logout")
{
	session::destroy();
}
?>
 <body>
	<div class ="container">
	<nav class="navbar navbar-default">
	<div class="container-fluid">
	<div class="navbar-header">
	<a class="navbar-brand" href="index.php"><b class="text-danger">Log In Registration System On PHP and PDO</b> </a>
	</div>
	<ul class="nav navbar-nav pull-right">
		<?php
		$id=session::get("id");
		$userlogin=session::get("login");
		if($userlogin==true)
		{
			?>
	<li><a href="index.php"><b class="text-success">Home</b></a></li>

	<li><a href="profile.php?id=<?php echo $id; ?>"><b class="text-primary">Profile</b></a></li>
	<li><a href="?action=logout"><b class="text-warning">Log Out</b></a></li>
	<?php } else { ?> 
	<li><a href="login.php"><b class="text-success">Log In</b></a></li>
	<li><a href="register.php"><b class="text-info">Register</b></a></li>

	<?php } ?>

	</ul>

	</div>

	</nav>