<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="bootstrap.js"></script>
	
</head>
<body>
<div class="container-fluid" style="background: url('bg.jpg');width: 100%;height:100vh;" >
	<div class="row">
		<div class="col-md-5 offset-md-3 mt-4">

  <div class="card mb-3">
    <img class="card-img-top" src="login.jpg" alt="Card image cap" style="max-width: 150px;margin-left: 200px;">
    <div class="card-body">
      <h5 class="card-title" style="font:bold;"><h3>Administrator Login</h3></h5>
      				<form id="form_id" method="post" name="myform" class="form-control" action="auth.php" required>
             <label for="user"><h4>Username</h4></label><br>
		<input type="text" name="user" placeholder="Username" class="form-control" required>
		<br>
		<label for="password"><h4>Password</h4></label><br>
		<input type="Password" name="password" class="form-control" placeholder="password" required>
		<br><br>
		<button class="btn btn-primary" type="Submit" class="form-control" style="position: center;">Submit</button>
				</form>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div></div>
		
		</div>
		
	</div>
</div>
</body>
</html>