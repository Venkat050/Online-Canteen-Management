<html>
	<head>
		<title>BILL</title>
		<style type="text/css">
			div.billvalue{
				background-color:white;
				color:black;
				font-size: 25px;
				position: fixed;
				top:150px;
				left:500px;
				padding-left: 150px;
				padding-right: 150px;
				text-align: center;
			}
			body{
				filter:blur();
				-webkit-filter :blur();
				text-align: center;
			}
			.bg-image {
 				 background-image: url("second2.jpg");
  				filter: blur(5px);
  				-webkit-filter: blur(5px);
 			 height: 100%; 
   			background-position: center;
  			background-repeat: no-repeat;
 			background-size: cover;
			}
			div.bmenu{
				position: fixed;
				top:600px;
				left:550px;
			}
			.bpay{
				
				position: fixed;
				top:600px;
				left:880px;
				
			}
			button{
				font-size: 30px;
				background-color: black;
				color:white;
				border : 2px solid black;
			}	
			button:hover{
				background : Transparent;
				color:white;
			}
		</style>
	</head>
	<body>
	<div class="bg-image"></div>
	<div class="billvalue">
	<?php

		header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");

		session_start();
		$conn = new mysqli("localhost","root","","scanteen");
		$uid = uniqid();
		$_SESSION['uid'] = $uid;
		$sql = "INSERT INTO purchase VALUES ('$uid',0,0,0,0,0,0,0,0,0)";
		$conn->query($sql);
		$total = 0;
		echo "BILL<br>";
		if(isset($_GET['chickenpuf']))
		{
		$item1 = $_GET['chickenpuf'];
		if(!empty($item1))
		{
			$val1 = (int)$_GET['ss1'];
			$pri1 = $val1 * 25;
			$total+=$pri1;
			echo "ChickenPuf x ".$val1." = ".$pri1."<br>";
			$sql = "UPDATE purchase SET item1 = '$val1' WHERE purid='$uid'";
			$conn->query($sql);
		}
		}
		if(isset($_GET['vegpuf']))
		{
		$item1 = $_GET['vegpuf'];
		if(!empty($item1))
		{
			$val1 = (int)$_GET['ss2'];
			$pri1 = $val1 * 15;
			$total+=$pri1;
			echo "VegPuf x ".$val1." = ".$pri1."<br>";
			$sql = "UPDATE purchase SET item2 = '$val1' WHERE purid='$uid'";
			$conn->query($sql);
		}
		}
		if(isset($_GET['fruitnik']))
		{
		$item1 = $_GET['fruitnik'];
		if(!empty($item1))
		{
			$val1 = (int)$_GET['ss3'];
			$pri1 = $val1 * 10;
			$total+=$pri1;
			echo "FruitNik x ".$val1." = ".$pri1."<br>";
			$sql = "UPDATE purchase SET item3 = '$val1' WHERE purid='$uid'";
			$conn->query($sql);
		}
		}
		if(isset($_GET['sipup']))
		{
		$item1 = $_GET['sipup'];
		if(!empty($item1))
		{
			$val1 = (int)$_GET['ss4'];
			$pri1 = $val1 * 5;
			$total+=$pri1;
			echo "SipUp x ".$val1." = ".$pri1."<br>";
			$sql = "UPDATE purchase SET item4 = '$val1' WHERE purid='$uid'";
			$conn->query($sql);
		}
		}
		if(isset($_GET['chickenroll']))
		{
		$item1 = $_GET['chickenroll'];
		if(!empty($item1))
		{
			$val1 = (int)$_GET['ss5'];
			$pri1 = $val1 * 25;
			$total+=$pri1;
			echo "ChickenRoll x ".$val1." = ".$pri1."<br>";
			$sql = "UPDATE purchase SET item5 = '$val1' WHERE purid='$uid'";
			$conn->query($sql);
		}
		}
		if(isset($_GET['vegroll']))
		{
		$item1 = $_GET['vegroll'];
		if(!empty($item1))
		{
			$val1 = (int)$_GET['ss6'];
			$pri1 = $val1 * 15;
			$total+=$pri1;
			echo "VegRoll x ".$val1." = ".$pri1."<br>";
			$sql = "UPDATE purchase SET item6 = '$val1' WHERE purid='$uid'";
			$conn->query($sql);
		}
		}
		if(isset($_GET['dosai']))
		{
		$item1 = $_GET['dosai'];
		if(!empty($item1))
		{
			$val1 = (int)$_GET['ss7'];
			$pri1 = $val1 * 20;
			$total+=$pri1;
			echo "Dosai x ".$val1." = ".$pri1."<br>";
			$sql = "UPDATE purchase SET item7 = '$val1' WHERE purid='$uid'";
			$conn->query($sql);
		}
		}
		if(isset($_GET['vadai']))
		{
		$item1 = $_GET['vadai'];
		if(!empty($item1))
		{
			$val1 = (int)$_GET['ss8'];
			$pri1 = $val1 * 10;
			$total+=$pri1;
			echo "Vadai x ".$val1." = ".$pri1."<br>";
			$sql = "UPDATE purchase SET item8 = '$val1' WHERE purid='$uid'";
			$conn->query($sql);
		}
		}
		$sql = "UPDATE purchase SET price='$total'  WHERE purid='$uid'";
		$conn->query($sql);

		echo "TOTAL : ".$total;

		$_SESSION["total"] = $total;
	?>

	<!-- <a href="https://securegw.paytm.in/link/58571/LL_3730357"
        target='_blank' rel='im-checkout' data-behaviour='remote'
        data-style='light' data-text="Pay with Paytm" style="border-radius: 2px;display: inline-block;border: 1px solid #e6ebf3;padding: 0 23px;color: #182233;font-size: 12px;text-decoration: none;font-family: 'Nunito Sans', sans-serif;height: 32px;line-height: 28px;background: #ffffff;border: 1px solid #e8edf4;color: #182233;">
        <span>Pay  with</span>
            <img style="margin-left: 6px;vertical-align:sub;width: 50px;"
                 src="https://static1.paytm.in/1.4/plogo/paytmlogo-coloured.png" /></a>  -->
	<div class="bmenu"><a href="index.php"><button>BACK TO MENU</button></a></div> 
	<div class="bpay"><a href="TxnTest.php"><button>PAY</button></a></div>
</body>
</html>
