<?php
		

	 $conn = new mysqli("localhost","root","","scanteen");

	 if(isset($_POST['id1']))
	 {
	 	$sql = "SELECT noofitem FROM finalitem WHERE id = 1";
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	$nof = $row['noofitem'] + $_POST['id1'];
	 	$sql = "UPDATE finalitem SET noofitem = '$nof' WHERE id=1";
	 	$conn->query($sql);
	 }

	 if(isset($_POST['id2']))
	 {
	 	$sql = "SELECT noofitem FROM finalitem WHERE id = 2";
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	$nof = $row['noofitem'] + $_POST['id2'];
	 	$sql = "UPDATE finalitem SET noofitem = '$nof' WHERE id=2";
	 	$conn->query($sql);
	 }
	 
	 if(isset($_POST['id3']))
	 {
	 	$sql = "SELECT noofitem FROM finalitem WHERE id = 3";
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	$nof = $row['noofitem'] + $_POST['id3'];
	 	$sql = "UPDATE finalitem SET noofitem = '$nof' WHERE id=3";
	 	$conn->query($sql);
	 }

	 if(isset($_POST['id4']))
	 {
	 	$sql = "SELECT noofitem FROM finalitem WHERE id = 4";
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	$nof = $row['noofitem'] + $_POST['id4'];
	 	$sql = "UPDATE finalitem SET noofitem = '$nof' WHERE id=4";
	 	$conn->query($sql);
	 }

	 if(isset($_POST['id5']))
	 {
	 	$sql = "SELECT noofitem FROM finalitem WHERE id = 5";
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	$nof = $row['noofitem'] + $_POST['id5'];
	 	$sql = "UPDATE finalitem SET noofitem = '$nof' WHERE id=5";
	 	$conn->query($sql);
	 }

	 if(isset($_POST['id6']))
	 {
	 	$sql = "SELECT noofitem FROM finalitem WHERE id = 6";
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	$nof = $row['noofitem'] + $_POST['id6'];
	 	$sql = "UPDATE finalitem SET noofitem = '$nof' WHERE id=6";
	 	$conn->query($sql);
	 }

	 if(isset($_POST['id7']))
	 {
	 	$sql = "SELECT noofitem FROM finalitem WHERE id = 7";
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	$nof = $row['noofitem'] + $_POST['id7'];
	 	$sql = "UPDATE finalitem SET noofitem = '$nof' WHERE id=7";
	 	$conn->query($sql);
	 }
	 
	 if(isset($_POST['id8']))
	 {
	 	$sql = "SELECT noofitem FROM finalitem WHERE id = 8";
	 	$result = $conn->query($sql);
	 	$row = $result->fetch_assoc();
	 	$nof = $row['noofitem'] + $_POST['id8'];
	 	$sql = "UPDATE finalitem SET noofitem = '$nof' WHERE id=8";
	 	$conn->query($sql);
	 }
	 
	 echo "<script> alert('Successfully Added'); </script>";
	 header("location:add_item.php");

	 $conn->close();
?>