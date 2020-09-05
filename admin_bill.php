<?php
	session_start();

	if(!isset($_SESSION['user']))
	{
		header("location:admin.php");
	}


?>
<html>
	<head>
		<title>TRANSACTION DETAILS</title>
		<style>
			button{
				position: fixed;
				font-size: 25px;
				left:1200px;
				top:650px;
				background-color: black;
				color:white;
			}
			div.form{
				font-size : 30px;
				
			}
			input [type="submit"]{
				font-size:20px;
				background-color:black;
				color:white;
			}
			form{
				height: 300px;
				width: 500px;
				text-align: center;
				font-size: 40px;
				position: fixed;
				top:120px;
				left:500px;
				background-color: black;
				color:white;
			}
			input[type="submit"]{
				font-size: 40px;
			}
			h1{
				text-align: center;
				font-size: 70px;
				color:red;
			}
		</style>
	</head>
	<body>
		<div class="form">
		<h1>TRANSACTION DETAILS</h1>
		<form action="date_back.php" action="get">
			From : <input style="font-size: 25px;" type="date" name="from" required><br><br>
			To  : <input style="font-size: 25px;" type="date" name="to" required><br><br>
			<input type="submit" value="Submit">
		</form>
		</div>
		<a href="admin_page.php"><button>BACK</button></a>
	</body>
</html>