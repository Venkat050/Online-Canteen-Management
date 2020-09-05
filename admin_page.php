<?php
	session_start();
	if(isset($_SESSION['user']))
	{

	}
	else
	{
		header("location:admin.php");
	}

?>


<html>
	<head>
		<title>ADMIN PAGE</title>
		<style type="text/css">
			
			div.logout{
				position: fixed;
				font-size: 20px;
				top:650px;
				left:1200px;
				background-color: black;
				color: white;
			}
			div.head{
				font-size: 40px;
				text-align: center;
			}

			div.form{
				font-size: 30px;
				text-align: center;
			}
			div.bscan{
				position: fixed;
				text-align: center;
				top:200px;
				left:610px;
			}
			div.additem{
				position: fixed;
				text-align: center;
				top:260px;
				left:610px;
			}
			div.bill{
				position: fixed;
				text-align: center;
				top:320px;
				left:610px;
			}
			button{
				width :300px;
				font-size: 30px;
				background-color: black;
				color :white;
				border: 2px solid black;
			}
			button:hover{
				background-color: white;
				color:black;
			}
			body{
				background-color: #e6ffff;
			}
		</style>
	</head>
	<body>
		<div class="head"><h1>MIT CANTEEN</h1></div>
		<div class="bscan"><a href="qrcode_scan.php"><button>SCAN QRCODE</button></a></div>
		<div class="additem"><a href="add_item.php"><button>ADD ITEM</button></a></div>
		<div class="bill"><a href="admin_bill.php"><button>BILL</button></a></div>
		<!---->
		<div class="logout"><a href="logout.php"><button>LOGOUT</button></a></div>
		
	</body>
	
</html>