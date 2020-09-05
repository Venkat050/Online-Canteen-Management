<?php
 // INCLUDE THE phpToPDF.php FILE
 require("phpToPDF.php"); 
 
 // GENERATE PDF FILE FROM SPECIFIED URL, SAVES TO CURRENT DIRECTORY ('')
 phptopdf_html('<html>
    <head>
        <title>Bill Generate</title>
    </head>
    <body>
        
      <img id=\'barcode\' 
            src="https://api.qrserver.com/v1/create-qr-code/?data= <?php session_start(); echo $_SESSION[\'uid\']; ?>  &amp;size=100x100" 
            alt="" 
            title="HELLO" 
            width="50" 
            height="50" />
    </body>
</html>','', 'yourbill.pdf');
 echo ("<a href='yourbill.pdf'>Download Your Bill</a>");
?> 