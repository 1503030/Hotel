<?php
session_start();
$passuser=$_SESSION['username'];
$ser="localhost";
$username="root";
$password="";
$db="vishakha";
$old=$_POST['opass'];
$new=$_POST['npass'];
$confirm=$_POST['cpass'];
$con=mysqli_connect($ser,$username,$password,$db);
if($con)
{
	echo "connected";

	$sql="select * from authentication where password='$old'and username='$passuser'";
    $res=mysqli_query($con,$sql) ;
	if($res==1)
	{
		if($new==$confirm && $old !=$new)
		{
			$sqll="update authentication set password='$new' where username='$passuser'";
			$result=mysqli_query($con,$sqll);
			if($result>0)
			{
			header('location:changepasswd.php');

			}
			else
			{
				echo "error:".mysqli_error($con);
		
			}
		}
	}
	else
	{
		echo "There was an error when creating the subject";
		echo("Error description: " . mysqli_error($con));
	}
}
else
{
	echo "no connection";
	
}
?>