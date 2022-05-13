<?php

$db = mysqli_connect("localhost","root","","trickster");

if(isset($_POST['username']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM record WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($db, $sql);
	$num = mysqli_fetch_array($result);

	if($num > 0) 
	{
		echo "Login Success";
	}
	else 
	{
		echo "Wrong User id or password";
	}
}

$db->close();
?>

