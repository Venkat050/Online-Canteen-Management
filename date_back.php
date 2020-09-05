<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:admin.php");
	}

	$from = $_GET["from"];
	$to = $_GET["to"];

	$conn = new mysqli("localhost","root","","scanteen");
	$item1=0;
	$item2=0;
	$item3=0;
	$item4=0;
	$item5=0;
	$item6=0;
	$item7=0;
	$item8=0;

	$price = 0;

	$sql = "SELECT * FROM sales WHERE date >= '$from' AND date <= '$to'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		$sid = $row["saleid"];
		$sql = "SELECT * FROM purchase WHERE purid = '$sid'";
		$result1 = $conn->query($sql);
		$row1 = $result1->fetch_assoc();

		$item1 = $item1 + $row1["item1"];	
		$item2 = $item2 + $row1["item2"];
		$item3 = $item3 + $row1["item3"];
		$item4 = $item4 + $row1["item4"];
		$item5 = $item5 + $row1["item5"];
		$item6 = $item6 + $row1["item6"];
		$item7 = $item7 + $row1["item7"];
		$item8 = $item8 + $row1["item8"];

		$price = $price + $row1["price"];

	}

	$conn->close();
?>

<html>
	<head>
		<title>TRANSACTION DETAILS</title>
		<style type="text/css">
			h2{
				position: fixed;
				top:550px;
				left:530px;
				font-size: 40px;
				background-color: black;
				color:white;
				text-align: center;
			}
			h1{
				color:red;
				font-size: 70px;
				text-align: center;
			}
			div.form{
				text-align: center;
				position: fixed;
				top:100px;
				left:550px;
			}
			body{
				text-align: center;
			}
			td{
				font-size: 30px;
				text-align: center;
			}
			th{
				font-size: 40px;
			}
			button{
				position: fixed;
				font-size: 25px;
				left:1200px;
				top:650px;
				background-color: black;
				color:white;
			}
		</style>
	</head>
	<body>
		<h1>TRANSACTION DETAILS</h1>
		<div class="form">
		<table>
			<tr>
				<th>ITEMS</th>
				<th>NO OF ITEMS</th>
			</tr>
				<tr><td>ChickenPuff :</td> <td><?php echo $item1; ?></td></tr>
				<tr><td>VegPuff :</td> <td><?php echo $item2; ?></td></tr>
				<tr><td>FruitNik :</td> <td><?php echo $item3; ?></td></tr>
				<tr><td>SipUp :</td> <td><?php echo $item4; ?></td></tr>
				<tr><td>ChickenRoll :</td> <td><?php echo $item5; ?></td></tr>
				<tr><td>VegPuff :</td> <td><?php echo $item6; ?></td></tr>
				<tr><td>Dosai :</td> <td><?php echo $item7; ?></td></tr>
				<tr><td>Vadai :</td> <td><?php echo $item8; ?></td></tr>
		</table>
		</div>
		<h2>TOTAL SALES : Rs. <?php echo $price; ?></h2>
		<a href="admin_bill.php"><button>BACK</button></a>
	</body>
</html>