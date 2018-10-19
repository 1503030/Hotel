
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
</head>
<body>
<h3>Please enter Breakfast menu</h3>

<div class="container-fluid">
<div class="row mt-4">
	<div class="col-md-3">
		<div class="list-group" id="myList" role="tablist" class="text-center">
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="index.php" role="tab"><span class="glyphicon glyphicon-home"></span>Go to Website</a>
  <a class="list-group-item list-group-item-action " data-toggle="list" href="select.php" role="tab">Add Menu</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="crude.php" role="tab">Manage Student</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="changepasswd.php" role="tab">Change Password</a>
   <a class="list-group-item list-group-item-action" data-toggle="list" href="logout.php" role="tab" class="glyphicon glyphicon-off">Logout</a></div>


		</div>
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
					<form class="form-group" action="add1.php" method="post" enctype="multipart/form-data">
						
						<label>Enter Menu Name:</label>
						<input type="text" name="fname" class="form-control" placeholder="Enter Menu Name" required><br>
						<label>Enter Price</label>
						<input type="text" name="lname" class="form-control" placeholder="Enter Price" required><br>
						
						<button class="btn btn-primary" type="submit" name="stu-submit" value="add student" onclick="alertdialog()" id="submit">Submit</button>
					

					</form>

				</div>
				
			</div>
			</div>
		</div>
		
	
	
</div>

</body>
</html>
<script type="text/javascript">
	function alertdialog()
	{
		var v=document.getElementById("submit").value;
		alert("inserted");
	}
</script>
