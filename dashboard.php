
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
	<div class="jumbotron">
<h1 class="text-center">Welcome <?php echo $_SESSION['username']; ?></h1>
</div>
<div class="container-fluid">
<div class="row mt-4">
	
	<div class="col-md-4 offset-md-1">
		<div class="list-group" id="myList" role="tablist" class="text-center">
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="index.php" role="tab"><span class="glyphicon glyphicon-home"></span>Go to Website</a>
  <a class="list-group-item list-group-item-action " data-toggle="list" href="select.php" role="tab">Add Menu</a>
  
  <a class="list-group-item list-group-item-action" data-toggle="list" href="changepasswd.php" role="tab">Change Password</a>
   <a class="list-group-item list-group-item-action" data-toggle="list" href="logout.php" role="tab" class="glyphicon glyphicon-off">Logout</a>
</div>
</div>
<div class="col-md-4 offset-md-2">
	<img src="images2.png"><br>
	&nbsp<h2>Admin Dashboard</h2>
</div>


</div>
</div>

</body>
</html>