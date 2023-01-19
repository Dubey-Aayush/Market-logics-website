<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio</title>
	<link rel="stylesheet" href="main.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <?php	
		include 'getTata.php';
		include 'getHDFC.php';
		include 'getReliance.php';
		include 'getITC.php';
		include 'getKotak.php';
		include 'getInfosys.php';
		include 'getTCS.php';
		include 'getAdani.php';
		include 'getAsianPaints.php';
		include 'getAirtel.php';
		include 'getDrReddy.php';
		include 'getBurgerKing.php';
    ?>
</head>
<body>
<?php
		$servername = "localhost";
		$username="root";
		$password = "";
		$dbname = "log_in_info";
		$yes = 0;
		$flag=0;
		$user=Array();
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
		}
		$sql = "SELECT * FROM user_info";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
			if($row['user_id']==$_COOKIE['user_id'])
				break;
		}
		$conn->close();
	?>
<div class="split left"><img src="png market logics.png" width="120" height="120"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src="community.png" width="120" height="120">
  <div class="centered">
    <img height="180"  style="border:5px solid white;" src="bearr.jpg">
    <h1 style="font-family:Arial;"><?php echo $row['user_email'] ?></h1>
	<B style="font-family:Century Gothic;font-size:20px;">BALANCE:</B>
    <table style="position:relative; margin-left: auto;margin-right: auto;"><tr id="row"><th  id="balance" style="font-size:20px;background-color:black;color:white;width:100px;display:inline-table"><b><?php echo$row["user_balance"] ?></b></th></tr></table></br>
	<B style="font-family:Century Gothic;font-size:20px;">PROFIT/LOSS:</B>
	 <table style="position:relative; margin-left: auto;margin-right: auto;"><tr id="row"><th  id="balance" style="font-size:20px;background-color:black;color:white;width:100px;display:inline-table"><b><?php echo $row["user_balance"]-500000 ?></b></th></tr></table></br>
	<button class="buttonnn" style="vertical-align:middle" id="place_order_button"><span> PLACE&nbsp ORDER</span></button>
	<script>
		var bt=document.getElementById("place_order_button");
		bt.addEventListener("click",function(){location.href="order.php"});
	</script>
  </div>
</div>

<div class="split right">
<div class="topnav">
  <a href="about.html">About</a>
  <a href="home.html">Home</a>
</div>
	<marquee style="background-color:#D3D3D3;" direction="right">
	<h1>
	<span class="green_text" style="color:green;"> TATA 3.2%↑ </span> &nbsp &nbsp
	<span class="green_text" style="color:green;"> HDFC 5.2%↑ </span> &nbsp &nbsp
	<span class="red_text" style="color:red;"> RELIANCE 1.1%↓</span> &nbsp &nbsp
	<span class="green_text" style="color:green;"> ITC 2.7%↑</span> &nbsp &nbsp
	<span class="red_text" style="color:red;"> KOTAK 6.1%↓ </span> &nbsp &nbsp
	<span class="green_text" style="color:green;"> INFOSYS 1.2%↑</span> &nbsp &nbsp
	<span class="green_text" style="color:green;"> TCS 3.2%↑ </span> &nbsp &nbsp
	<span class="green_text" style="color:green;"> ADANI 1.9%↑</span> &nbsp &nbsp
	<span class="red_text" style="color:red;"> ASIAN PAINTS  5.6%↓</span> &nbsp &nbsp
	<span class="red_text" style="color:red;"> AIRTEL  2.7%↓ </span> &nbsp &nbsp
	<span class="green_text" style="color:green;"> DR REDDY'S 1.1%↑</span> &nbsp &nbsp
	<span class="green_text" style="color:green;"> BURGER KING 4.2%↑ </span> &nbsp &nbsp
	</h1>
	</marquee>
	<center> <table style="float:center;" class="table"> </center>
<caption style="color:#3e21c2;font-family:Century Gothic;font-size:40px"><u><b>Portfolio</b></u></caption>
     <thead>
     	<tr>
     	 <th style="font-size:30px"><b>Stocks</b></th>
     	 <th style="font-size:30px"><b>Quantity</b></th>
     	 <th style="font-size:30px"><b>Value Per Stock</b></th>
     	 <th style="font-size:30px"><b>Total Value</b></th>
     	</tr>
     </thead>
     <tbody>
     	  <tr id="row_one">
     	  	  <td data-label="S.No" >HDFC Bank</td>
     	  	  <td data-label="Name" id="HDFC_Portfolio_Quantity"><?php echo $row['HDFC'] ?></td>
     	  	  <td data-label="Age" id="HDFC_Portfolio_Price"><?php echo $HDFC_price ?></td>
     	  	  <td data-label="Marks%" id="HDFC_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>

     	  <tr id="row_two">
     	  	  <td data-label="S.No">ITC</td>
     	  	  <td data-label="Name" id="ITC_Portfolio_Quantity"><?php echo $row['ITC'] ?></td>
     	  	  <td data-label="Age" id="ITC_Portfolio_Price"><?php echo $ITC_price ?></td>
     	  	  <td data-label="Marks%" id="ITC_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>

     	  <tr id="row_three">
     	  	  <td data-label="S.No">Kotak Mahindra</td>
     	  	  <td data-label="Name" id="Kotak_Portfolio_Quantity"><?php echo $row['Kotak_Mahindra'] ?></td>
     	  	  <td data-label="Age" id="Kotak_Portfolio_Price"><?php echo $Kotak_price ?></td>
     	  	  <td data-label="Marks%" id="Kotak_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>

     	  <tr id="row_four">
     	  	  <td data-label="S.No">Infosys</td>
     	  	  <td data-label="Name" id="Infosys_Portfolio_Quantity"><?php echo $row['Infosys'] ?></td>
     	  	  <td data-label="Age" id="Infosys_Portfolio_Price"><?php echo $Infosys_price ?></td>
     	  	  <td data-label="Marks%" id="Infosys_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
		       	  <tr id="row_five">
     	  	  <td data-label="S.No">Reliance</td>
     	  	  <td data-label="Name" id="Reliance_Portfolio_Quantity"><?php echo $row['Reliance'] ?></td>
     	  	  <td data-label="Age" id="Reliance_Portfolio_Price"><?php echo $Reliance_price ?></td>
     	  	  <td data-label="Marks%" id="Reliance_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
		       	  <tr id="row_six">
     	  	  <td data-label="S.No">TCS</td>
     	  	  <td data-label="Name" id="TCS_Portfolio_Quantity"><?php echo $row['TCS'] ?></td>
     	  	  <td data-label="Age" id="TCS_Portfolio_Price"><?php echo $TCS_price ?></td>
     	  	  <td data-label="Marks%" id="TCS_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
		       	  <tr id="row_seven">
     	  	  <td data-label="S.No">Adani Port</td>
     	  	  <td data-label="Name" id="Adani_Portfolio_Quantity"><?php echo $row['Adani_Port'] ?></td>
     	  	  <td data-label="Age" id="Adani_Portfolio_Price"><?php echo $Adani_price ?></td>
     	  	  <td data-label="Marks%" id="Adani_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
		       	  <tr id="row_eight">
     	  	  <td data-label="S.No">Tata Motors</td>
     	  	  <td data-label="Name" id="Tata_Portfolio_Quantity"><?php echo $row['Tata_Motors'] ?></td>
     	  	  <td data-label="Age" id="Tata_Portfolio_Price"><?php echo $Tata_price ?></td>
     	  	  <td data-label="Marks%" id="Tata_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
		       	  <tr id="row_nine">
     	  	  <td data-label="S.No">Asian Paints</td>
     	  	  <td data-label="Name" id="AsianPaints_Portfolio_Quantity"><?php echo $row['Asian_Paints'] ?></td>
     	  	  <td data-label="Age" id="AsianPaints_Portfolio_Price"><?php echo $AsianPaints_price ?></td>
     	  	  <td data-label="Marks%" id="AsianPaints_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
		  <tr id="row_ten">
     	  	  <td data-label="S.No">Dr.Reddy Labs</td>
     	  	  <td data-label="Name" id="DrReddy_Portfolio_Quantity"><?php echo $row['Dr_Reddy_Labs'] ?></td>
     	  	  <td data-label="Age" id="DrReddy_Portfolio_Price"><?php echo $DrReddy_price ?></td>
     	  	  <td data-label="Marks%" id="DrReddy_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
		  <tr id="row_eleven">
     	  	  <td data-label="S.No">Burger King</td>
     	  	  <td data-label="Name" id="BurgerKing_Portfolio_Quantity"><?php echo $row['Burger_King'] ?></td>
     	  	  <td data-label="Age" id="BurgerKing_Portfolio_Price"><?php echo $BurgerKing_price ?></td>
     	  	  <td data-label="Marks%" id="BurgerKing_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
		  <tr id="row_twelve">
     	  	  <td data-label="S.No">Airtel</td>
     	  	  <td data-label="Name" id="Airtel_Portfolio_Quantity"><?php echo $row['Bharti_Airtel'] ?></td>
     	  	  <td data-label="Age" id="Airtel_Portfolio_Price"><?php echo $Airtel_price ?></td>
     	  	  <td data-label="Marks%" id="Airtel_Portfolio_Valuation">Loading...</td>
     	  	  
     	  </tr>
     </tbody>
     </table>
     <center><p style="margin-top:30px;font-family:Century Gothic;font-size:20px;background-color:#5b41d1;color:white;" > ©Copyrighted  by  Market  Logics</p><center>
     <script>
function refreshCurrentValueHDFC()
	{
		var http7 = new XMLHttpRequest();
		http7.open("GET","getHDFCPricePortfolio.php",true);
		http7.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("HDFC_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http7.send();
	}
function refreshQuantityHDFC()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getHDFCQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("HDFC_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueHDFC();},1000);
setInterval(function(){refreshQuantityHDFC();},1000);
setInterval(function(){
    var Row = document.getElementById("row_one");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("HDFC_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueITC()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getITCPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("ITC_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityITC()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getITCQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("ITC_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setTimeout(function(){
setInterval(function(){refreshCurrentValueITC();},1000);
setInterval(function(){refreshQuantityITC();},1000);
setInterval(function(){
    var Row = document.getElementById("row_two");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("ITC_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
},1000);
</script>

<script>
function refreshCurrentValueKotak()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getKotakPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Kotak_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityKotak()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getKotakQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Kotak_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueKotak();},1000);
setInterval(function(){refreshQuantityKotak();},1000);
setInterval(function(){
    var Row = document.getElementById("row_three");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("Kotak_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueInfosys()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getInfosysPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Infosys_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityInfosys()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getInfosysQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Infosys_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueInfosys();},1000);
setInterval(function(){refreshQuantityInfosys();},1000);
setInterval(function(){
    var Row = document.getElementById("row_four");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("Infosys_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueReliance()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getReliancePricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Reliance_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityReliance()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getRelianceQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Reliance_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueReliance();},1000);
setInterval(function(){refreshQuantityReliance();},1000);
setInterval(function(){
    var Row = document.getElementById("row_five");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("Reliance_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueTCS()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getTCSPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("TCS_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityTCS()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getTCSQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("TCS_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueTCS();},1000);
setInterval(function(){refreshQuantityTCS();},1000);
setInterval(function(){
    var Row = document.getElementById("row_six");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("TCS_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueAdani()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getAdaniPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Adani_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityAdani()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getAdaniQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Adani_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueAdani();},1000);
setInterval(function(){refreshQuantityAdani();},1000);
setInterval(function(){
    var Row = document.getElementById("row_seven");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("Adani_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueTata()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getTataPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Tata_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityTata()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getTataQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Tata_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueTata();},1000);
setInterval(function(){refreshQuantityTata();},1000);
setInterval(function(){
    var Row = document.getElementById("row_eight");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("Tata_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueAsianPaints()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getAsianPaintsPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("AsianPaints_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityAsianPaints()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getAsianPaintsQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("AsianPaints_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueAsianPaints();},1000);
setInterval(function(){refreshQuantityAsianPaints();},1000);
setInterval(function(){
    var Row = document.getElementById("row_nine");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("AsianPaints_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueDrReddy()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getDrReddyPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("DrReddy_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityDrReddy()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getDrReddyQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("DrReddy_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueDrReddy();},1000);
setInterval(function(){refreshQuantityDrReddy();},1000);
setInterval(function(){
    var Row = document.getElementById("row_ten");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("DrReddy_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueBurgerKing()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getBurgerKingPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("BurgerKing_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityBurgerKing()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getBurgerKingQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("BurgerKing_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueBurgerKing();},1000);
setInterval(function(){refreshQuantityBurgerKing();},1000);
setInterval(function(){
    var Row = document.getElementById("row_eleven");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("BurgerKing_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

<script>
function refreshCurrentValueAirtel()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getAirtelPricePortfolio.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Airtel_Portfolio_Price").innerHTML=this.responseText;
		 }
		}
		http.send();
	}
function refreshQuantityAirtel()
	{
		var http = new XMLHttpRequest();
		http.open("GET","getAirtelQuantity.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Airtel_Portfolio_Quantity").innerHTML=this.responseText;
		 }
		}
		http.send();
	}	
setInterval(function(){refreshCurrentValueAirtel();},1000);
setInterval(function(){refreshQuantityAirtel();},1000);
setInterval(function(){
    var Row = document.getElementById("row_twelve");
    var Cells = Row.getElementsByTagName("td");
    var  PL= Cells[1].innerText*Cells[2].innerText;
    document.getElementById("Airtel_Portfolio_Valuation").innerHTML = PL;
    },1000
    );
</script>

  <div class="centered">
  
  </div>
</div>
<script>
function refresh()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//document.getElementById("valuation").innerHTML=this.responseText-500000;
			
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
	setInterval(function(){refresh();},1000);
</script>

</body>
</html>