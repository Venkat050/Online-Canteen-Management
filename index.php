<?php

	$conn = new mysqli("localhost","root","","scanteen");

	$sql = "SELECT id,noofitem FROM finalitem";

	$result = $conn->query($sql);

	while($row = $result->fetch_assoc())
	{
		$finalitemid = $row["id"];
		$finalnoofitem = $row["noofitem"];
		$sql = "UPDATE items SET noofitem = '$finalnoofitem' WHERE id = '$finalitemid'";
		$re = $conn->query($sql);
	}

	//$sql = "SELECT purid FROM purhcase";

	//$result = $conn->query($sql);
	
	$sql = "SELECT id,price,noofitem FROM items";

	$result = $conn->query($sql);
 	while($row = $result->fetch_assoc())
	{
		$itemcount[$row["id"]] = $row["noofitem"];
		if($row["noofitem"] < 6)
		{
			$enable[$row["id"]] = "disabled";
		}
		else
		{
			$enable[$row["id"]] = "";
		}
		$price[$row["id"]] = $row["price"];
	}
	$acc = "wrok";

?>

<html>
	<head>
		<title>MIT CANTEEN</title>
		<style type="text/css">
			div.first_frame{
				font-size:22px;
				position: fixed;
				top:160px;
				left:280px;
			}
			div.second_frame{
				font-size:22px;
				position: fixed;
				top:160px;
				left:800px;
			}
			input[type=checkbox]
			{
 				 -webkit-transform: scale(2); /* Safari and Chrome */
  				padding: 10px;
			}
			input[type=submit]{
				background-color: black;
				color:white;
				font-size:20px;
				position: fixed;
				top:600px;
				left:1230px;
			}
			button{
				position: fixed;
				top:600px;
				left:40px;
				font-size: 20px;
				background-color: black;
				color:white;
			}
		</style>
	</head>
	<body background="Webp.net-resizeimage.jpg">

		<h1>MIT CANTEEN</h1>
		<form id="items" action="bill.php" method="GET">
			<div class="first_frame"><input type="checkbox" name="chickenpuf" value="1" onchange="update(this)" id="i1" <?php echo $enable[1] ?>>Chicken Puf @25
			<select id="s1" onchange="update2(this)" name="ss1">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><div name="noofitem" id="1"><?php echo "<pre>".$itemcount[1]."</pre>" ?></div><br>
			<input type="checkbox" name="vegpuf" value="2" onchange="update(this)" id="i2" <?php echo $enable[2] ?>>Veg Puf @15
			<select id="s2" onchange="update2(this)" name="ss2">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><div name="noofitem" id="2"><?php echo "<pre>".$itemcount[2]."</pre>" ?></div><br>
			<input type="checkbox" name="fruitnik" value="3" onchange="update(this)" id="i3" <?php echo $enable[3] ?>> FruitNik @10
			<select id="s3" onchange="update2(this)" name="ss3">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><div  name="noofitem" id="3"><?php echo "<pre>".$itemcount[3]."</pre>" ?></div><br>
			<input type="checkbox" name="sipup" value="4" onchange="update(this)" id="i4" <?php echo $enable[4] ?>>Sipup @5
			<select id="s4" onchange="update2(this)" name="ss4">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><div name="noofitem" id="4"><?php echo "<pre>".$itemcount[4]."</pre>" ?></div><br></div>
			<br><br>
			<div class="second_frame"><input type="checkbox" name="chickenroll" value="5" onchange="update(this)" id="i5" <?php echo $enable[5] ?>>ChickenRoll @25
			<select id="s5" onchange="update2(this)" name="ss5">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><div name="noofitem" id="5" onload="";><?php echo "<pre>".$itemcount[5]."</pre>" ?></div><br>
			<input type="checkbox" name="vegroll" value="6" onchange="update(this)" id="i6" <?php echo $enable[6] ?>>VegRoll @15
			<select id="s6" onchange="update2(this)" name="ss6">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><div name="noofitem" id="6"><?php echo "<pre>".$itemcount[6]."</pre>" ?></div><br>
			<input type="checkbox" name="dosai" value="7" onchange="update(this)" id="i7" <?php echo $enable[7] ?>>Dosai @20
			<select id="s7" onchange="update2(this)" name="ss7">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><div id="7"><?php echo "<pre>".$itemcount[7]."</pre>" ?></div><br>
			<input type="checkbox" name="vadai" value="8" onchange="update(this)" id="i8" <?php echo $enable[8] ?>>Vadai @10
			<select id="s8" onchange="update2(this)" name="ss8">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><div id="8"><?php echo "<pre>".$itemcount[8]."</pre>" ?></div><br></div>
 			<input type="submit" value="CheckOut...">
 		</form>
 		<div class="back"><a href="home.html"><button>BACK</button></a></div>
 		<script type='text/javascript' src="index.js"></script>
	</body>
</html>