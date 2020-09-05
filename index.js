
			var change = [1,1,1,1,1,1,1,1,1,1];
			
			function update(item){
				var snd = "";
				if(item.checked){
					  //var noofitems = document.getElementById(item.value).value;	
					  snd = item.value + "+" + document.getElementById("s"+item.value).value + "+" + "sub";
  				}
  				else
  				{
  					 snd = item.value + "+" + document.getElementById("s"+item.value).value + "+" + "add";
  				}
  				 var xmlhttp = new XMLHttpRequest();
    				  xmlhttp.onreadystatechange = function() {
   			   		  if (this.readyState == 4 && this.status == 200) {
       				 		document.getElementById(item.value).innerHTML = this.responseText;
      					}
    				};
    				
    				xmlhttp.open("GET", "items.php?q=" + snd, true);
    				xmlhttp.send();
			}

			function update2(noofitem)
			{
				
        if(parseInt(noofitem.value) > 0)
				{
					  var item = document.getElementById("i"+noofitem.id[1]);
					  if(item.checked)
					  {	
					  		var xmlhttp = new XMLHttpRequest();
    				  		xmlhttp.onreadystatechange = function() {
   			   		  			if (this.readyState == 4 && this.status == 200) {
       				 				document.getElementById(item.value).innerHTML = this.responseText;      						
                  }
    					};
    					var snd = "";
    					if(change[noofitem.id[1]] < noofitem.value)
						{
							snd = item.value + "+" + (noofitem.value-change[noofitem.id[1]]) + "+" + "sub"; 
						}
						else if(change[noofitem.id[1]] > noofitem.value)
						{
							 snd =  item.value + "+" + (change[noofitem.id[1]] - noofitem.value) + "+" + "add";
						}
						else
						{
							 snd =  item.value + "+" + (change[noofitem.id[1]] - noofitem.value) + "+" + "equal";
						}
						change[noofitem.id[1]] = noofitem.value;
    					xmlhttp.open("GET", "items.php?q=" + snd, true);
    					xmlhttp.send();
    				}
				}
			}

      function showvalues(item){
						var xmlhttp = new XMLHttpRequest();
    				  		xmlhttp.onreadystatechange = function() {
   			   		  			if (this.readyState == 4 && this.status == 200) {
       				 				document.getElementById(item.value).innerHTML = this.responseText;
      						}
    					};
    					var snd =  item.value + "+" + "free" + "+" + "upd";
    					xmlhttp.open("GET", "items.php?q=" + snd, true);
    					xmlhttp.send();
    			}

          var pri = "";
          function calculate(item){
            if(item.checked){
                
                var val = document.getElementById("s"+item.value).value;
                var idi = item.value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange =  function () {
                  if(this.readyState == 4 && this.status == 200){
                      pri = String(this.responseText);
                  }
                };
                var snd = item.value + "+" + "free" + "+" + "price";
                xmlhttp.open("GET","items.php?q="+snd,true);
                xmlhttp.send();
                //total += Integer.parseInt("<?php echo $price["+idi+"] ?>");
            }  
            else
            {
                pri = "0";
            } 
          }
          
          function totalcal(){
              var total= 0;

             
              calculate(document.getElementById("i1"));
              total += (parseInt(pri)*parseInt(document.getElementById("s1").value));
             
              setTimeout(function() {calculate(document.getElementById("i2"))},100,);
              total += (parseInt(pri)*parseInt(document.getElementById("s2").value));
             
              setTimeout(function() {calculate(document.getElementById("i3"))},100,);
              total += (parseInt(pri)*parseInt(document.getElementById("s3").value));;
             
              setTimeout(function() {calculate(document.getElementById("i4"))},100,);
              total += (parseInt(pri)*parseInt(document.getElementById("s4").value));
              
              setTimeout(function() {calculate(document.getElementById("i5"))},100,);
              total += (parseInt(pri)*parseInt(document.getElementById("s5").value));;
              
              setTimeout(function() {calculate(document.getElementById("i6"))},100,);
              total += (parseInt(pri)*parseInt(document.getElementById("s6").value));;
              
              setTimeout(function() {calculate(document.getElementById("i7"))},100,);
              total += (parseInt(pri)*parseInt(document.getElementById("s7").value));;
             
              setTimeout(function() {calculate(document.getElementById("i8"))},100,);
              total += (parseInt(pri)**parseInt(document.getElementById("s8").value));;
              
              document.getElementById("tot").innerHTML = "<h1>"+total.toString()+"</h1>";
          }

          function showmain(){
              setInterval(function() {showvalues(document.getElementById("i1"))},1000,);
              setInterval(function() {showvalues(document.getElementById("i2"))},1000,);
              setInterval(function() {showvalues(document.getElementById("i3"))},1000,);
              setInterval(function() {showvalues(document.getElementById("i4"))},1000,);
              setInterval(function() {showvalues(document.getElementById("i5"))},1000,);
              setInterval(function() {showvalues(document.getElementById("i6"))},1000,);
              setInterval(function() {showvalues(document.getElementById("i7"))},1000,);
              setInterval(function() {showvalues(document.getElementById("i8"))},1000,);
          }
        
    			showmain();

