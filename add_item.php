<?php

	session_start();

	if(!isset($_SESSION['user']))
	{
		header("location:admin.php");
	}
		
?>

<html>
	<head>
	<title>ADD ITEM</title>
	<style type="text/css">
		form{
			width:350px;
			text-align: center;
			margin-left:600px;
			background-color: #ccffff;
			color:black;
		}
		table{
			text-align: center;
			font-size: 25px;
		}
		input[type="submit"]{
			font-size: 30px;
			background-color: black;
			color:white;
		}
		button{
			background-color: black;
			color:white;
			font-size: 25px;
		}
		div.back{
			margin-left:1300px;
			margin-top:250px;
		}
	</style>
	</head>
	<body style="background-color: #e6ffff;">
		<h1 style="text-align: center;">UPDATE ITEMS</h1>
		<div class="form"><form action="add_item_back.php" method="post">
			<table>
			<tr>
				<th>ITEMS</th>
				<th>NO OF ITEMS</th>
			</tr>
				<tr><td>ChickenPuff :</td> <td><input type="text" name="id1"></td></tr>
				<tr><td>VegPuff :</td> <td><input type="text" name="id2"></td></tr>
				<tr><td>FruitNik :</td> <td><input type="text" name="id3"></td></tr>
				<tr><td>SipUp :</td> <td><input type="text" name="id4"></td></tr>
				<tr><td>ChickenRoll :</td> <td><input type="text" name="id5"></td></tr>
				<tr><td>VegPuff :</td> <td><input type="text" name="id6"></td></tr>
				<tr><td>Dosai :</td> <td><input type="text" name="id7"></td></tr>
				<tr><td>Vadai :</td> <td><input type="text" name="id8"></td></tr>
				</table>
				<input type="submit" value="UPDATE">
		</form></div>
		<div class="back"><a href="admin_page.php"><button>BACK</button></a></div>
	</body>
</html>