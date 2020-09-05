<html>
	<head>
		<title>BILL DETAILS</title>
		<style type="text/css">
			body{
				text-align: center;
			}

			table{
				border-style:solid;
				border-width: 3px;
			}
			th{
				font-size: 30px;
			}
			td{
				border-style:solid;
				border-width: 1px;
				text-align: center;
				font-size: 20px;
			}

			div.back{

				position: fixed;
				text-align: center;
				font-size: 20px;
				top:600px;
				background-color: black;
				color:white;
				left: 1200px;
			}
			
		</style>
	</head>
<body>
<?php
	
	session_start();

	$conn = $conn = new mysqli("localhost","root","","scanteen");



	$id = $_POST['key'];
	$sql = "SELECT * FROM paid WHERE paidid = '$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	if($result->num_rows > 0)
	{
	$sql = "SELECT * FROM purchase WHERE purid = '$id'";


	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	echo "<table>";
	echo "<tr><th>ITEM</th><th>NOOFITEM</th></tr>";
	if($row['item1'] > 0 )
	{
		$item = $row['item1'];
		echo "<tr><td>ChickenPuff</td><td>".$item."</td></tr>";
	}
	if($row['item2'] > 0 )
	{
		$item = $row['item2'];
		echo "<tr><td>VegPuff</td><td>".$item."</td></tr>";
	}
	if($row['item3'] > 0 )
	{
		$item = $row['item3'];
		echo "<tr><td>FruitNik</td><td>".$item."</td></tr>";
	}
	if($row['item4'] > 0 )
	{
		$item = $row['item4'];
		echo "<tr><td>SipUp</td><td>".$item."</td></tr>";
	}
	if($row['item5'] > 0 )
	{

		$item = $row['item5'];
		echo "<tr><td>ChickenRoll</td><td>".$item."</td></tr>";
	}
	if($row['item6'] > 0 )
	{
		$item = $row['item6'];
		echo "<tr><td>VegRoll</td><td>".$item."</td></tr>";
	}
	if($row['item7'] > 0 )
	{
		$item = $row['item7'];
		echo "<tr><td>Dosai</td><td>".$item."</td></tr>";
	}if($row['item8'] > 0 )
	{
		$item = $row['item8'];
		echo "<tr><td>Vadai</td><td>".$item."</td></tr>";
	}

	echo "</table>";

	$sql = "DELETE FROM paid WHERE paidid = '$id'";
	$conn->query($sql);
	}

	else
	{
		echo "<h1>Not Valid</h1>";
	}	//$conn->close();

?>

<div class="back"><a href="admin_page.php"><button>BACK</button></a></div>
</body>
</html>