<?php
	
	session_start();
	$conn = $conn = new mysqli("localhost","root","","scanteen");

	$adid = $_POST["username"];
	$pass= $_POST["passwd"];	
	$sql = "SELECT admin_id,password FROM admin  WHERE admin_id = '$adid'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	if($pass === $row["password"]){
		header('location:admin_page.php');
		$_SESSION['user'] = $adid;
	}
	else
	{
		header('location:admin.php');
	}

?>