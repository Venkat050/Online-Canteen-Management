<?php
    session_start();

    if(!isset($_SESSION['uid']))
    {
        header("location:bill.php");
    }
    $uid = $_SESSION['uid'];
    $total = $_SESSION["total"];

    $conn = new mysqli("localhost","root","","scanteen");

    $sql = "INSERT INTO sales  VALUES (CURDATE(), '$uid')";
    $conn->query($sql);

    $sql = "INSERT INTO paid VALUES('$uid')";
    $conn->query($sql);

    $sql = "SELECT * FROM purchase WHERE purid = '$uid'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    

    $sql1 = "SELECT noofitem FROM finalitem WHERE id=1";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $noofitem = $row1['noofitem'] - $row['item1'];
    echo $noofitem;
    $sql = "UPDATE finalitem SET noofitem = '$noofitem' WHERE id = 1";
    $conn->query($sql);

    $sql1 = "SELECT noofitem FROM finalitem WHERE id=2";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $noofitem = $row1['noofitem'] - $row['item2'];
    $sql = "UPDATE finalitem SET noofitem = '$noofitem' WHERE id = 2";
    $conn->query($sql);
    
     $sql1 = "SELECT noofitem FROM finalitem WHERE id=3";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $noofitem = $row1['noofitem'] - $row['item3'];
    $sql = "UPDATE finalitem SET noofitem = '$noofitem' WHERE id = 3";
    $conn->query($sql);

     $sql1 = "SELECT noofitem FROM finalitem WHERE id=4";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $noofitem = $row1['noofitem'] - $row['item4'];
    $sql = "UPDATE finalitem SET noofitem = '$noofitem' WHERE id = 4";
    $conn->query($sql);

     $sql1 = "SELECT noofitem FROM finalitem WHERE id=5";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $noofitem = $row1['noofitem'] - $row['item5'];
    $sql = "UPDATE finalitem SET noofitem = '$noofitem' WHERE id = 5";
    $conn->query($sql);

     $sql1 = "SELECT noofitem FROM finalitem WHERE id=6";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $noofitem = $row1['noofitem'] - $row['item6'];
    $sql = "UPDATE finalitem SET noofitem = '$noofitem' WHERE id = 6";
    $conn->query($sql);

     $sql1 = "SELECT noofitem FROM finalitem WHERE id=7";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $noofitem = $row1['noofitem'] - $row['item7'];
    $sql = "UPDATE finalitem SET noofitem = '$noofitem' WHERE id = 7";
    $conn->query($sql);

     $sql1 = "SELECT noofitem FROM finalitem WHERE id=8";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $noofitem = $row1['noofitem'] - $row['item8'];
    $sql = "UPDATE finalitem SET noofitem = '$noofitem' WHERE id = 8";
    $conn->query($sql);
    
    $conn->close();
?>


<html>
    <head>
        <title>Bill Generate</title>
        <style type="text/css">
            
            body{
                text-align: center;
            }        
            button {
                background-color: black;
                color :white;
                font-size: 20px;
                position: fixed;
                top:600px;
                left:1200px;
            }
        </style>
    </head>
    <body>
        
       <h1>MIT CANTEEN</h1> 
      <img id='barcode' 
            src="https://api.qrserver.com/v1/create-qr-code/?data= <?php  echo $uid ?> &amp;size=100x100" 
            alt="" 
            title="canteen_bill" 
            width="300" 
            height="300" />
            <a href="index.php"><button>BACK TO MENU</button></a>
    </body>
</html>