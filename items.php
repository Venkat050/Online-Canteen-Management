<?php
	$conn = new mysqli("localhost","root","","scanteen");

	$item = $_REQUEST["q"];

	$qarr = explode(" ",$item);

	$itemid = $qarr[0];
	$noofitempurchase = $qarr[1];
	$method = $qarr[2];

	if($method === "upd"){
		$sql = "SELECT noofitem FROM items WHERE id ='$itemid'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$cnoofitem = $row["noofitem"];
		echo "<pre>".$cnoofitem."</pre>";
	}
	else if($method === "price")
	{
		$sql = "SELECT price FROM items WHERE id = '$itemid'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		echo $row["price"];

	}
	else
	{
		$sql = "SELECT noofitem FROM items WHERE id = '$itemid'";

		$result = $conn->query($sql);

		$row = $result->fetch_assoc();

		$noofitem = $row["noofitem"];
		if($method === "sub")
			$noofitem = $noofitem - $noofitempurchase;
		else if($method === "add")
			$noofitem = $noofitem + $noofitempurchase;

		if($noofitem > 0)
		{
			$sql = "UPDATE items SET noofitem = '$noofitem' WHERE id= '$itemid'";
			$result = $conn->query($sql);
			echo "<pre>".$noofitem."</pre>";	
		}
		else if($noofitem <= 0)
		{
			echo "<pre>Out of Stock</pre>";
		}
	}
	
		
?>