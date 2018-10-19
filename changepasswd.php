
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
<h2 class="text-center text-success">welcome <?php echo $_SESSION['username']; ?></h2>

<div class="container-fluid">
<div class="row mt-4">
	<div class="col-md-3">
		<div class="list-group" id="myList" role="tablist" class="text-center">
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="index.php" role="tab"><span class="glyphicon glyphicon-home"></span>Go to Website</a>
  <a class="list-group-item list-group-item-action " data-toggle="list" href="select.php" role="tab">Add Menu</a>
  
  <a class="list-group-item list-group-item-action" data-toggle="list" href="changepasswd.php" role="tab">Change Password</a>
   <a class="list-group-item list-group-item-action" data-toggle="list" href="logout.php" role="tab" class="glyphicon glyphicon-off">Logout</a>
</div>

		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
					<form class="form-group" action="change.php" method="post" enctype="multipart/form-data">
						
						<label>Old password</label>
						<input type="password" name="opass" id="opass" class="form-control" data-minlength="6" placeholder="Previous Password" required><br>
						<span id="msg"></span>
						<label>New Password</label>
						<input type="password" name="npass" class="form-control" id="inputPassword" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
						<br>
						<label>Comfirm Password</label>
						<input type="password" name="cpass" id="inputPasswordConfirm" class="form-control" data-minlength="6" data-match="inputPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="Confirm password" onkeyup='check();' required>
						<span id='message'></span><br>

						<button class="btn btn-primary" type="submit" name="stu-submit" value="update student"> Submit</button>
					</form>

				</div>
				
			</div>
			</div>
		</div>
		
	
	
</div>
</body>
</html>
<script type="text/javascript">
		var check = function() {
  if (document.getElementById('inputPassword').value ==
    document.getElementById('inputPasswordConfirm').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
	}
</script>
