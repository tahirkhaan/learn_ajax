<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test_ajax';
$con = new mysqli($host, $user, $pass, $db);

if (!$con)
{
	die("connection failed:" . mysqli_connect_error());
}

$sel ="select * from users where email ='$email'";
$run = mysqli_query($con,$sel);

$check = mysql_num_rows($run);
if ($check==1) {
	echo "<h2>This email is already registered</h2>";
	exit();
}
else{
	$insert = "insert into users (name,pass,email) values ('$name','$pass',$email)";
	$run_insert = mysqli_query($con,$insert);

	if ($run_insert) {
		echo "<h2>Registration Successfull </h2>";
	}
}
?>