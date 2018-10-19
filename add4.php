<?php
$ser="localhost";
$username="root";
$password="";
$db="vishakha";


 // used to store the filename in a variable


$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$con=mysqli_connect($ser,$username,$password,$db);
if($con)
{
	echo "connected";
	$sql="insert into data4 values('$firstname','$lastname')";
	echo "".$firstname.",".$lastname."";
	//$sql="insert into student values('$rollno','$firstname','$lastname','$addr','$class','$emailid','$contactno','$image')";
//$sql="insert into user values('$fname','$lname');";

$res=mysqli_query($con,$sql);

	if($res>0)
	{
	header('location:four.php');

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