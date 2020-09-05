
<?php 
	session_start();

	if(isset($_SESSION['user']))
	{
		header("location:admin_page.php");
	}
?>


<html>
	<head>
		<title>ADMIN</title>
		<style type="text/css">
				div.header{
					font-size: 40px;
					text-align: center;

				}
				div.username{
					text-align: center;
					font-size: 25px;

				}
				div.password{
					text-align: center;
					font-size: 25px;
				}
				div.form{
					background-color: black;
					color:white;
					text-align: center;
					
					width:300px;
					height: 500px;
					position: fixed;
					top :80px;
					left:600px;
				}
				body{

				}
				button{
				position: fixed;
				font-size: 20px;
				left:1200px;
				top:650px;
				background-color: black;
				color:white;
			}
			</style>
	</head>
	<body  background="admin.jpg">
	<div class="form"><form action="admin_valid.php" method="post">
		<div class="header"><h2>ADMIN</h2></div>
		<div class="username">Username : <input type="text" name="username"><br><br></div>
		<div class="password">Password : <input type="password" name="passwd"><br><br></div>
		<input type="submit" value="LOGIN">
	</form>
	<a href="home.html"><button>BACK</button></a>
</div>

	</body>

</html>