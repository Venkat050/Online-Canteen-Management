<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:admin.php");
	}
	
?>
<html>
	<head>
		<title>BILL</title>
		<style type="text/css">
			div.form{
				position:fixed;
				top:100px;
				left:550px;
				font-size: 30px;
			}
			h1{
				font-size: 70px;
				color:red;
				text-align: center;
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
		<h1>SCAN QR CODE</h1>
		<div class="form"><form action="details.php" method="post">
			<input style="font-size:25px;" type="text" name="key">
			<input style="font-size:25px; background-color: black; color:white;" type="submit">
		</form></div>
		<a href="admin_page.php"><button>BACK</button></a>
	</body>

</html>