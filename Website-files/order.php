<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Place Order</title>
	<link rel="stylesheet" href="main.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	
<meta charset="UTF-8">
	
	<script defer src="scrip1.js"></script>	
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
<script>
    if ( window.history.replaceState ) 
	{
        window.history.replaceState( null, null, window.location.href);
    }
</script>
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
	</br><B style="font-family:Century Gothic;font-size:20px;">PROFIT/LOSS:</B>
	 <table style="position:relative; margin-left: auto;margin-right: auto;"><tr><th id="valuation" style="font-size:20px;background-color:black;color:white;width:100px;display:inline-table"><b><?php echo$row["user_balance"]-500000 ?></b></th></tr></table>
	<br><br><br><br><button class="buttonnn" style="vertical-align:middle" id="portfolio_button"><span> PORTFOLIO</span></button></br></br>
	<script>
		var bt=document.getElementById("portfolio_button");
		bt.addEventListener("click",function(){window.open('Portfolio.php', '_blank');});
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

	<table bgcolor="#5b41d1" class="tableSection" style="float: left;width:650px;margin-left:40px;" border="1px" solids black>
<caption style="color:#3e21c2;font-family:Century Gothic;font-size:40px"><u><b>Current Stock Market Data</b></u></caption>
<tr bgcolor="#5b41d1">
<th style="color:white;"> <center> Stock </center></th>
<th style="color:white;"> <center>Quantity Available </center></th>
<th height="55" style="color:white;"> <center>Current price </center> </th>
</tr>
<tr bgcolor="white" id="row_Tata">
<!---------------------------------------------------->
<td> <button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal">TATA</button>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
	<form method="post">
    <button  class="button" id="buyTata" name="bTata" style="vertical-align:middle;"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellTata" name="sTata" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	<a style ="margin-left:10px;font-size:40px;" href="https://www.google.com/finance/quote/TATAMOTORS:NSE?sa=X&ved=2ahUKEwjTxLHmqc30AhXR4jgGHU8ZDTMQ3ecFegQICRAe">Stock History</a>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="tata_price_modal"> <u>Price: <?php $Tata_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="tataQuantity" name="tataQ" value=0 min=0 max=<?php echo $Tata_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- TATA MOTORS BUY BUTTON-->
	<script>
	buy=document.getElementById("buyTata");
	buy.addEventListener("click",sub);
	function sub()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		
		if(document.getElementById('tataQuantity').value > <?php echo $Tata_remaining ?> || document.getElementById('tataQuantity').value < 0 || bal < <?php echo $Tata_price ?>*document.getElementById('tataQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('tataQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+1;
	}
	
	</script>
	<?php
		
		if(isset($_POST['bTata']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($Tata_price*$_COOKIE['quantity']);
			$Tata_remaining=$Tata_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $Tata_remaining WHERE company_id = 1";
			$sql2 = "UPDATE user_info SET Tata_Motors = Tata_Motors+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--TATA MOTORS SELL BUTTON-->
<script>
	sell=document.getElementById("sellTata");
	sell.addEventListener("click",sub1);
	function sub1()
	{
		
		if(document.getElementById('tataQuantity').value > <?php echo $row['Tata_Motors'] ?> || document.getElementById('tataQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('tataQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+1;
	}
	</script>
	<?php
		if(isset($_POST['sTata']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($Tata_price*$_COOKIE['quantity']);
			$new_stock=$Tata_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Tata_Motors = Tata_Motors-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div>  </td>
<td id="tata_remaining" style="font-size:27px;"><center><b><?php echo $Tata_remaining?></b></center></td>
<td id="tata_price" style="font-size:27px;"><center><b><?php echo $Tata_price ?></b></center></td>
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
function refresh1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getTataStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("tata_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refresh2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getTataPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("tata_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refresh3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getTataPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("tata_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refresh();},1000);
setInterval(function(){refresh1();},1000);
setInterval(function(){refresh2();},1000);
setInterval(function(){refresh3();},1000);
</script>
</tr>
<tr bgcolor="#f5f5f5" id="row_HDFC">
<!-------------------->
<td> <button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal1">HDFC BANK</button>
  <div class="modal" id="modal1">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
	<form method="post">
    <button class="button" id="buyHDFC" name="bHDFC" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellHDFC" name="sHDFC" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	<a style ="margin-left:10px;font-size:40px;" href="https://www.google.com/finance/quote/HDFCBANK:NSE?sa=X&ved=2ahUKEwj236Wotc30AhVwyzgGHWY_BZwQ3ecFegQICxAe">Stock History</a>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="HDFC_price_modal"> <u>Price: <?php $HDFC_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="HDFCQuantity" name="HDFCQ" value=0 min=0 max=<?php echo $HDFC_remaining?> autofocus/></b></br></br>
	</form>
    </div>
  <!-- HDFC BUY BUTTON-->
	<script>
	buy=document.getElementById("buyHDFC");
	buy.addEventListener("click",subHDFC);
	function subHDFC()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('HDFCQuantity').value > <?php echo $HDFC_remaining ?> || document.getElementById('HDFCQuantity').value < 0 || bal < <?php echo $HDFC_price ?>*document.getElementById('HDFCQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('HDFCQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+2;
	}
	</script>
	<?php
		if(isset($_POST['bHDFC']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($HDFC_price*$_COOKIE['quantity']);
			$new_stock=$HDFC_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET HDFC = HDFC+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--HDFC SELL BUTTON-->
<script>
	sell=document.getElementById("sellHDFC");
	sell.addEventListener("click",subHDFC1);
	function subHDFC1()
	{
		
		if(document.getElementById('HDFCQuantity').value > <?php echo $row['HDFC'] ?> || document.getElementById('HDFCQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('HDFCQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+2;
	}
	</script>
	<?php
		if(isset($_POST['sHDFC']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($HDFC_price*$_COOKIE['quantity']);
			$new_stock=$HDFC_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET HDFC = HDFC-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="HDFC_remaining" style="font-size:27px;"><center><b><?php echo $HDFC_remaining?></b></center></td>
<td id="HDFC_price" style="font-size:27px;"><center><b><?php echo $HDFC_price ?></b></center></td>
<script>
function refreshHDFC()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshHDFC1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getHDFCStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("HDFC_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshHDFC2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getHDFCPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("HDFC_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshHDFC3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getHDFCPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("HDFC_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshHDFC();},1000);
setInterval(function(){refreshHDFC1();},1000);
setInterval(function(){refreshHDFC2();},1000);
setInterval(function(){refreshHDFC3();},1000);
</script>
</tr>
<tr bgcolor="white" id="row_Reliance">
<td> <button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal2">RELIANCE</button>
  <div class="modal" id="modal2">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyReliance" name="bReliance" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellReliance" name="sReliance" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	<a style ="margin-left:10px;font-size:40px;" href="https://www.google.com/finance/quote/RELIANCE:NSE?sa=X&ved=2ahUKEwiajdX6tc30AhWRzDgGHTJdAh4Q3ecFegQICRAc">Stock History</a>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="Reliance_price_modal"> <u>Price: <?php $Reliance_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="RelianceQuantity" name="RelianceQ" value=0 min=0 max=<?php echo $Reliance_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- Reliance BUY BUTTON-->
	<script>
	buy=document.getElementById("buyReliance");
	buy.addEventListener("click",subReliance);
	function subReliance()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('RelianceQuantity').value > <?php echo $Reliance_remaining ?> || document.getElementById('RelianceQuantity').value < 0 || bal < <?php echo $Reliance_price ?>*document.getElementById('RelianceQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('RelianceQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+3;
	}
	</script>
	<?php
		if(isset($_POST['bReliance']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($Reliance_price*$_COOKIE['quantity']);
			$new_stock=$Reliance_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Reliance = Reliance+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--Reliance SELL BUTTON-->
<script>
	sell=document.getElementById("sellReliance");
	sell.addEventListener("click",subReliance1);
	function subReliance1()
	{
		
		if(document.getElementById('RelianceQuantity').value > <?php echo $row['Reliance'] ?> || document.getElementById('RelianceQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('RelianceQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+3;
	}
	</script>
	<?php
		if(isset($_POST['sReliance']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($Reliance_price*$_COOKIE['quantity']);
			$new_stock=$Reliance_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Reliance = Reliance-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="Reliance_remaining" style="font-size:27px;"><center><b><?php echo $Reliance_remaining?></b></center></td>
<td id="Reliance_price" style="font-size:27px;"><center><b><?php echo $Reliance_price ?></b></center></td>
<script>
function refreshReliance()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshReliance1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getRelianceStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Reliance_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshReliance2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getReliancePrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Reliance_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshReliance3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getReliancePriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Reliance_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshReliance();},1000);
setInterval(function(){refreshReliance1();},1000);
setInterval(function(){refreshReliance2();},1000);
setInterval(function(){refreshReliance3();},1000);
</script>
</tr>
<tr bgcolor="#f5f5f5" id="row_ITC">
<td> <button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal3">ITC</button>
  <div class="modal" id="modal3">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyITC" name="bITC" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellITC" name="sITC" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	<a style ="margin-left:10px;font-size:40px;" href="https://www.google.com/finance/quote/ITC:NSE?sa=X&ved=2ahUKEwiJlb6Zts30AhUtzjgGHf6TCZcQ3ecFegQIDBAe">Stock History</a>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="ITC_price_modal"> <u>Price: <?php $ITC_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="ITCQuantity" name="ITCQ" value=0 min=0 max=<?php echo $ITC_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- ITC BUY BUTTON-->
	<script>
	buy=document.getElementById("buyITC");
	buy.addEventListener("click",subITC);
	function subITC()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('ITCQuantity').value > <?php echo $ITC_remaining ?> || document.getElementById('ITCQuantity').value < 0 || bal < <?php echo $ITC_price ?>*document.getElementById('ITCQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('ITCQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+4;
	}
	</script>
	<?php
		if(isset($_POST['bITC']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($ITC_price*$_COOKIE['quantity']);
			$new_stock=$ITC_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET ITC = ITC+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--ITC SELL BUTTON-->
<script>
	sell=document.getElementById("sellITC");
	sell.addEventListener("click",subITC1);
	function subITC1()
	{
		
		if(document.getElementById('ITCQuantity').value > <?php echo $row['ITC'] ?> || document.getElementById('ITCQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('ITCQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+4;
	}
	</script>
	<?php
		if(isset($_POST['sITC']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($ITC_price*$_COOKIE['quantity']);
			$new_stock=$ITC_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET ITC = ITC-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div></td>
<td id="ITC_remaining" style="font-size:27px;"><center><b><?php echo $ITC_remaining?></b></center></td>
<td id="ITC_price" style="font-size:27px;"><center><b><?php echo $ITC_price ?></b></center></td>
<script>
function refreshITC()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshITC1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getITCStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("ITC_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshITC2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getITCPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("ITC_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshITC3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getITCPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("ITC_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshITC();},1000);
setInterval(function(){refreshITC1();},1000);
setInterval(function(){refreshITC2();},1000);
setInterval(function(){refreshITC3();},1000);
</script>
</tr>
<tr bgcolor="white" id="row_Kotak">
<td > <button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal4">KOTAK</button>
  <div class="modal" id="modal4">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyKotak" name="bKotak" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellKotak" name="sKotak" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	<a style ="margin-left:10px;font-size:40px;" href="https://www.google.com/finance/quote/KOTAKBANK:NSE?sa=X&ved=2ahUKEwih0eSqts30AhXVyzgGHUYrAz4Q3ecFegQIBhAe">Stock History</a>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="Kotak_price_modal"> <u>Price: <?php $Kotak_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="KotakQuantity" name="KotakQ" value=0 min=0 max=<?php echo $Kotak_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- Kotak BUY BUTTON-->
	<script>
	buy=document.getElementById("buyKotak");
	buy.addEventListener("click",subKotak);
	function subKotak()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('KotakQuantity').value > <?php echo $Kotak_remaining ?> || document.getElementById('KotakQuantity').value < 0 || bal < <?php echo $Kotak_price ?>*document.getElementById('KotakQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('KotakQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+5;
	}
	</script>
	<?php
		if(isset($_POST['bKotak']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($Kotak_price*$_COOKIE['quantity']);
			$new_stock=$Kotak_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Kotak_Mahindra = Kotak_Mahindra+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--Kotak SELL BUTTON-->
<script>
	sell=document.getElementById("sellKotak");
	sell.addEventListener("click",subKotak1);
	function subKotak1()
	{
		
		if(document.getElementById('KotakQuantity').value > <?php echo $row['Kotak_Mahindra'] ?> || document.getElementById('KotakQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('KotakQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+5;
	}
	</script>
	<?php
		if(isset($_POST['sKotak']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($Kotak_price*$_COOKIE['quantity']);
			$new_stock=$Kotak_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Kotak_Mahindra = Kotak_Mahindra-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="Kotak_remaining" style="font-size:27px;"><center><b><?php echo $Kotak_remaining?></b></center></td>
<td id="Kotak_price" style="font-size:27px;"><center><b><?php echo $Kotak_price ?></b></center></td>
<script>
function refreshKotak()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshKotak1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getKotakStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Kotak_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshKotak2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getKotakPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Kotak_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshKotak3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getKotakPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Kotak_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshKotak();},1000);
setInterval(function(){refreshKotak1();},1000);
setInterval(function(){refreshKotak2();},1000);
setInterval(function(){refreshKotak3();},1000);
</script>
</tr>
<tr bgcolor="#f5f5f5" id="row_Infosys">
<!------>
<td> <button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal5">INFOSYS</button>
  <div class="modal" id="modal5">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyInfosys" name="bInfosys" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellInfosys" name="sInfosys" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	<a style ="margin-left:10px;font-size:40px;" href="https://www.google.com/finance/quote/INFY:NSE?sa=X&ved=2ahUKEwi5mbK9ts30AhUXzjgGHavgBhcQ3ecFegQICRAe">Stock History</a>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="Infosys_price_modal"> <u>Price: <?php $Infosys_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="InfosysQuantity" name="InfosysQ" value=0 min=0 max=<?php echo $Infosys_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- Infosys BUY BUTTON-->
	<script>
	buy=document.getElementById("buyInfosys");
	buy.addEventListener("click",subInfosys);
	function subInfosys()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('InfosysQuantity').value > <?php echo $Infosys_remaining ?> || document.getElementById('InfosysQuantity').value < 0 || bal < <?php echo $Infosys_price ?>*document.getElementById('InfosysQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('InfosysQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+6;
	}
	</script>
	<?php
		if(isset($_POST['bInfosys']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($Infosys_price*$_COOKIE['quantity']);
			$new_stock=$Infosys_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Infosys = Infosys+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--Infosys SELL BUTTON-->
<script>
	sell=document.getElementById("sellInfosys");
	sell.addEventListener("click",subInfosys1);
	function subInfosys1()
	{
		
		if(document.getElementById('InfosysQuantity').value > <?php echo $row['Infosys'] ?> || document.getElementById('InfosysQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('InfosysQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+6;
	}
	</script>
	<?php
		if(isset($_POST['sInfosys']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($Infosys_price*$_COOKIE['quantity']);
			$new_stock=$Infosys_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Infosys = Infosys-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="Infosys_remaining" style="font-size:27px;"><center><b><?php echo $Infosys_remaining?></b></center></td>
<td id="Infosys_price" style="font-size:27px;"><center><b><?php echo $Infosys_price ?></b></center></td>
<script>
function refreshInfosys()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshInfosys1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getInfosysStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Infosys_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshInfosys2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getInfosysPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Infosys_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshInfosys3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getInfosysPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Infosys_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshInfosys();},1000);
setInterval(function(){refreshInfosys1();},1000);
setInterval(function(){refreshInfosys2();},1000);
setInterval(function(){refreshInfosys3();},1000);
</script>
</tr>
<tr bgcolor="white" id="row_TCS">
<!------>
<td><button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal6">TCS</button>
  <div class="modal" id="modal6">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyTCS" name="bTCS" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellTCS" name="sTCS" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	<a style ="margin-left:10px;font-size:40px;" href="https://www.google.com/finance/quote/TCS:NSE?sa=X&ved=2ahUKEwjl59vXts30AhWVxTgGHcGwBeEQ3ecFegQIDRAe">Stock History</a>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="TCS_price_modal"> <u>Price: <?php $TCS_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="TCSQuantity" name="TCSQ" value=0 min=0 max=<?php echo $TCS_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- TCS BUY BUTTON-->
	<script>
	buy=document.getElementById("buyTCS");
	buy.addEventListener("click",subTCS);
	function subTCS()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('TCSQuantity').value > <?php echo $TCS_remaining ?> || document.getElementById('TCSQuantity').value < 0 || bal < <?php echo $TCS_price ?>*document.getElementById('TCSQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('TCSQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+7;
	}
	</script>
	<?php
		if(isset($_POST['bTCS']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($TCS_price*$_COOKIE['quantity']);
			$new_stock=$TCS_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET TCS = TCS+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--TCS SELL BUTTON-->
<script>
	sell=document.getElementById("sellTCS");
	sell.addEventListener("click",subTCS1);
	function subTCS1()
	{
		
		if(document.getElementById('TCSQuantity').value > <?php echo $row['TCS'] ?> || document.getElementById('TCSQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('TCSQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+7;
	}
	</script>
	<?php
		if(isset($_POST['sTCS']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($TCS_price*$_COOKIE['quantity']);
			$new_stock=$TCS_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET TCS = TCS-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="TCS_remaining" style="font-size:27px;"><center><b><?php echo $TCS_remaining?></b></center></td>
<td id="TCS_price" style="font-size:27px;"><center><b><?php echo $TCS_price ?></b></center></td>
<script>
function refreshTCS()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshTCS1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getTCSStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("TCS_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshTCS2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getTCSPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("TCS_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshTCS3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getTCSPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("TCS_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshTCS();},1000);
setInterval(function(){refreshTCS1();},1000);
setInterval(function(){refreshTCS2();},1000);
setInterval(function(){refreshTCS3();},1000);
</script>
</tr>
<tr bgcolor="#f5f5f5" id="row_Adani">
<!------>
<td><button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal7">ADANI</button>
  <div class="modal" id="modal7">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyAdani" name="bAdani" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellAdani" name="sAdani" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="Adani_price_modal"> <u>Price: <?php $Adani_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="AdaniQuantity" name="AdaniQ" value=0 min=0 max=<?php echo $Adani_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- Adani BUY BUTTON-->
	<script>
	buy=document.getElementById("buyAdani");
	buy.addEventListener("click",subAdani);
	function subAdani()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('AdaniQuantity').value > <?php echo $Adani_remaining ?> || document.getElementById('AdaniQuantity').value < 0 || bal < <?php echo $Adani_price ?>*document.getElementById('AdaniQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('AdaniQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+8;
	}
	</script>
	<?php
		if(isset($_POST['bAdani']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($Adani_price*$_COOKIE['quantity']);
			$new_stock=$Adani_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Adani_Port = Adani_Port+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--Adani SELL BUTTON-->
<script>
	sell=document.getElementById("sellAdani");
	sell.addEventListener("click",subAdani1);
	function subAdani1()
	{
		
		if(document.getElementById('AdaniQuantity').value > <?php echo $row['Adani_Port'] ?> || document.getElementById('AdaniQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('AdaniQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+8;
	}
	</script>
	<?php
		if(isset($_POST['sAdani']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($Adani_price*$_COOKIE['quantity']);
			$new_stock=$Adani_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Adani_Port = Adani_Port-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="Adani_remaining" style="font-size:27px;"><center><b><?php echo $Adani_remaining?></b></center></td>
<td id="Adani_price" style="font-size:27px;"><center><b><?php echo $Adani_price ?></b></center></td>
<script>
function refreshAdani()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshAdani1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getAdaniStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Adani_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshAdani2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getAdaniPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Adani_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshAdani3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getAdaniPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Adani_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshAdani();},1000);
setInterval(function(){refreshAdani1();},1000);
setInterval(function(){refreshAdani2();},1000);
setInterval(function(){refreshAdani3();},1000);
</script>
</tr>
<tr bgcolor="white" id="row_AsianPaints">
<!------>
<td><button style="font-family:Century Gothic;font-size:26px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal8">ASIAN PAINTS</button>
  <div class="modal" id="modal8">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyAsianPaints" name="bAsianPaints" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellAsianPaints" name="sAsianPaints" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="AsianPaints_price_modal"> <u>Price: <?php $AsianPaints_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="AsianPaintsQuantity" name="AsianPaintsQ" value=0 min=0 max=<?php echo $AsianPaints_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- AsianPaints BUY BUTTON-->
	<script>
	buy=document.getElementById("buyAsianPaints");
	buy.addEventListener("click",subAsianPaints);
	function subAsianPaints()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('AsianPaintsQuantity').value > <?php echo $AsianPaints_remaining ?> || document.getElementById('AsianPaintsQuantity').value < 0 || bal < <?php echo $AsianPaints_price ?>*document.getElementById('AsianPaintsQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('AsianPaintsQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+9;
	}
	</script>
	<?php
		if(isset($_POST['bAsianPaints']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($AsianPaints_price*$_COOKIE['quantity']);
			$new_stock=$AsianPaints_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Asian_Paints = Asian_Paints+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--AsianPaints SELL BUTTON-->
<script>
	sell=document.getElementById("sellAsianPaints");
	sell.addEventListener("click",subAsianPaints1);
	function subAsianPaints1()
	{
		
		if(document.getElementById('AsianPaintsQuantity').value > <?php echo $row['Asian_Paints'] ?> || document.getElementById('AsianPaintsQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('AsianPaintsQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+9;
	}
	</script>
	<?php
		if(isset($_POST['sAsianPaints']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($AsianPaints_price*$_COOKIE['quantity']);
			$new_stock=$AsianPaints_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Asian_Paints = Asian_Paints-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="AsianPaints_remaining" style="font-size:27px;"><center><b><?php echo $AsianPaints_remaining?></b></center></td>
<td id="AsianPaints_price" style="font-size:27px;"><center><b><?php echo $AsianPaints_price ?></b></center></td>
<script>
function refreshAsianPaints()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshAsianPaints1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getAsianPaintsStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("AsianPaints_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshAsianPaints2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getAsianPaintsPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("AsianPaints_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshAsianPaints3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getAsianPaintsPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("AsianPaints_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshAsianPaints();},1000);
setInterval(function(){refreshAsianPaints1();},1000);
setInterval(function(){refreshAsianPaints2();},1000);
setInterval(function(){refreshAsianPaints3();},1000);
</script>

</tr>
<tr bgcolor="#f5f5f5" id="row_Airtel">
<!------>
<td><button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal9">AIRTEL</button>
  <div class="modal" id="modal9">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyAirtel" name="bAirtel" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellAirtel" name="sAirtel" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="Airtel_price_modal"> <u>Price: <?php $Airtel_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="AirtelQuantity" name="AirtelQ" value=0 min=0 max=<?php echo $Airtel_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- Airtel BUY BUTTON-->
	<script>
	buy=document.getElementById("buyAirtel");
	buy.addEventListener("click",subAirtel);
	function subAirtel()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('AirtelQuantity').value > <?php echo $Airtel_remaining ?> || document.getElementById('AirtelQuantity').value < 0 || bal < <?php echo $Airtel_price ?>*document.getElementById('AirtelQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('AirtelQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+10;
	}
	</script>
	<?php
		if(isset($_POST['bAirtel']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($Airtel_price*$_COOKIE['quantity']);
			$new_stock=$Airtel_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Bharti_Airtel = Bharti_Airtel+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--Airtel SELL BUTTON-->
<script>		
	sell=document.getElementById("sellAirtel");
	sell.addEventListener("click",subAirtel1);
	function subAirtel1()
	{
		
		if(document.getElementById('AirtelQuantity').value > <?php echo $row['Bharti_Airtel'] ?> || document.getElementById('AirtelQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('AirtelQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+10;
	}
	</script>
	<?php
		if(isset($_POST['sAirtel']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($Airtel_price*$_COOKIE['quantity']);
			$new_stock=$Airtel_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Bharti_Airtel = Bharti_Airtel-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="Airtel_remaining" style="font-size:27px;"><center><b><?php echo $Airtel_remaining?></b></center></td>
<td id="Airtel_price" style="font-size:27px;"><center><b><?php echo $Airtel_price ?></b></center></td>
<script>
function refreshAirtel()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshAirtel1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getAirtelStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Airtel_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshAirtel2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getAirtelPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Airtel_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshAirtel3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getAirtelPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("Airtel_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshAirtel();},1000);
setInterval(function(){refreshAirtel1();},1000);
setInterval(function(){refreshAirtel2();},1000);
setInterval(function(){refreshAirtel3();},1000);
</script>
</tr>
<tr bgcolor="white" id="row_DrReddy">
<!------>
<td> <button style="font-family:Century Gothic;font-size:30px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal10">DR REDDY'S</button>
  <div class="modal" id="modal10">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyDrReddy" name="bDrReddy" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellDrReddy" name="sDrReddy" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="DrReddy_price_modal"> <u>Price: <?php $DrReddy_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="DrReddyQuantity" name="DrReddyQ" value=0 min=0 max=<?php echo $DrReddy_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- DrReddy BUY BUTTON-->
	<script>
	buy=document.getElementById("buyDrReddy");
	buy.addEventListener("click",subDrReddy);
	function subDrReddy()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('DrReddyQuantity').value > <?php echo $DrReddy_remaining ?> || document.getElementById('DrReddyQuantity').value < 0 || bal < <?php echo $DrReddy_price ?>*document.getElementById('DrReddyQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('DrReddyQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+11;
	}
	</script>
	<?php
		if(isset($_POST['bDrReddy']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($DrReddy_price*$_COOKIE['quantity']);
			$new_stock=$DrReddy_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Dr_Reddy_Labs = Dr_Reddy_Labs+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--DrReddy SELL BUTTON-->
<script>		
	sell=document.getElementById("sellDrReddy");
	sell.addEventListener("click",subDrReddy1);
	function subDrReddy1()
	{
		
		if(document.getElementById('DrReddyQuantity').value > <?php echo $row['Dr_Reddy_Labs'] ?> || document.getElementById('DrReddyQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('DrReddyQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+11;
	}
	</script>
	<?php
		if(isset($_POST['sDrReddy']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($DrReddy_price*$_COOKIE['quantity']);
			$new_stock=$DrReddy_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Dr_Reddy_Labs = Dr_Reddy_Labs-$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="DrReddy_remaining" style="font-size:27px;"><center><b><?php echo $DrReddy_remaining?></b></center></td>
<td id="DrReddy_price" style="font-size:27px;"><center><b><?php echo $DrReddy_price ?></b></center></td>
<script>
function refreshDrReddy()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshDrReddy1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getDrReddyStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("DrReddy_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshDrReddy2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getDrReddyPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("DrReddy_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshDrReddy3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getDrReddyPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("DrReddy_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshDrReddy();},1000);
setInterval(function(){refreshDrReddy1();},1000);
setInterval(function(){refreshDrReddy2();},1000);
setInterval(function(){refreshDrReddy3();},1000);
</script>

</tr>
<tr bgcolor="#f5f5f5" id="row_BurgerKing">
<!------>
<td><button style="font-family:Century Gothic;font-size:26px;color:white;background-color:#5b41d1;border-radius:15px;border-width:2px;" data-modal-target="#modal11">BURGER KING</button>
  <div class="modal" id="modal11">
    <div class="modal-header">
      <div class="title">BUY/SELL Stock</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form method="post">
    <button class="button" id="buyBurgerKing" name="bBurgerKing" style="vertical-align:middle"><span>BUY</span></button> &nbsp &nbsp
	</form>
	<form method="post">
	<button class="buttonn" id="sellBurgerKing" name="sBurgerKing" style="vertical-align:middle"><span>SELL </span></button>
	</form>
	</br> <hr> </br>
	<h2 style="font-family: Century Gothic;" id="BurgerKing_price_modal"> <u>Price: <?php $BurgerKing_price ?><u></h2>
	</br>
	<form method="post" id="quantityForm">
	Quantity: <b><input type=number id="BurgerKingQuantity" name="BurgerKingQ" value=0 min=0 max=<?php echo $BurgerKing_remaining?> autofocus/></b></br></br>
	</form>
    </div>
	<!-- BurgerKing BUY BUTTON-->
	<script>
	buy=document.getElementById("buyBurgerKing");
	buy.addEventListener("click",subBurgerKing);
	function subBurgerKing()
	{
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		if(document.getElementById('BurgerKingQuantity').value > <?php echo $BurgerKing_remaining ?> || document.getElementById('BurgerKingQuantity').value < 0 || bal < <?php echo $BurgerKing_price ?>*document.getElementById('BurgerKingQuantity').value )
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Trade?"))
		{
			document.cookie="quantity="+document.getElementById('BurgerKingQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+12;
	}
	</script>
	<?php
		if(isset($_POST['bBurgerKing']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="B";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance-($BurgerKing_price*$_COOKIE['quantity']);
			$new_stock=$BurgerKing_remaining-$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Burger_King = Burger_King+$quantity WHERE user_id = $id";
			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
<!--BurgerKing SELL BUTTON-->
<script>		
	sell=document.getElementById("sellBurgerKing");
	sell.addEventListener("click",subBurgerKing1);
	function subBurgerKing1()
	{
		
		if(document.getElementById('BurgerKingQuantity').value > <?php echo $row['Burger_King'] ?> || document.getElementById('BurgerKingQuantity').value < 0)
		{
			alert("Invalid Transaction");
			document.cookie="quantity="+0;
		}
		else if(confirm("Confirm Transaction?"))
		{
			document.cookie="quantity="+document.getElementById('BurgerKingQuantity').value;
		}
		else
		{
			document.cookie="quantity="+0;
		}
		
		document.cookie="company="+12;
	}
	</script>
	<?php
		if(isset($_POST['sBurgerKing']))
		{
			$servername = "localhost";
			$username="root";
			$password = "";
			$dbname = "log_in_info";
			$company_id = $_COOKIE['company'];
			$transaction="S";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
				echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
			}
			//$change=456;
			$balance=$row['user_balance'];
			$id=$row['user_id'];
			$yes=1;
			$new=$balance+($BurgerKing_price*$_COOKIE['quantity']);
			$new_stock=$BurgerKing_remaining+$_COOKIE['quantity'];
			$quantity=$_COOKIE['quantity'];
			$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
			$sql1 = "UPDATE stock_info SET remaining_stocks = $new_stock WHERE company_id = $company_id";
			$sql2 = "UPDATE user_info SET Burger_King = Burger_King-$quantity WHERE user_id = $id";

			$conn->query($sql);
			$conn->query($sql1);
			$conn->query($sql2);
			$conn->close();
			echo "<script>location.reload();</script>";
		}
	?>
	<!---------------->
  </div>
  <div id="overlay"></div> </td>
<td id="BurgerKing_remaining" style="font-size:27px;"><center><b><?php echo $BurgerKing_remaining?></b></center></td>
<td id="BurgerKing_price" style="font-size:27px;"><center><b><?php echo $BurgerKing_price ?></b></center></td>
<script>
function refreshBurgerKing()
	{
		var http = new XMLHttpRequest();
		http.open("GET","get_balance.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("balance").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
	}
function refreshBurgerKing1()
{
	//console.log("refresh1");
	var http1 = new XMLHttpRequest();
		http1.open("GET","getBurgerKingStocks.php",true);
		http1.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("BurgerKing_remaining").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http1.send();
}
function refreshBurgerKing2()
{
	//console.log("refresh1");
	var http2 = new XMLHttpRequest();
		http2.open("GET","getBurgerKingPrice.php",true);
		http2.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("BurgerKing_price").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http2.send();
}
function refreshBurgerKing3()
{
	//console.log("refresh1");
	var http3 = new XMLHttpRequest();
		http3.open("GET","getBurgerKingPriceModal.php",true);
		http3.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("BurgerKing_price_modal").innerHTML="Price: "+this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http3.send();
}
setInterval(function(){refreshBurgerKing();},1000);
setInterval(function(){refreshBurgerKing1();},1000);
setInterval(function(){refreshBurgerKing2();},1000);
setInterval(function(){refreshBurgerKing3();},1000);
</script>
</tr>
</table>
<table bgcolor="white" style="float: right;margin-right:2%;" class="scrolldown" border="10px" solid black>
<caption style="color:#3e21c2;font-family:Century Gothic;font-size:40px"><b><u>Live &nbspNews</u></b></caption>
<tr>
<th bgcolor="#f5f5f5">
<?php
	$servername = "localhost";
	$username="root";
	$password = "";
	$dbname = "log_in_info";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
	}
	$sql1 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)";
	$sql2 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-1";
	$sql3 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-2";
	$sql4 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-3";
	$sql5 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-4";
	$sql6 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-5";
	$sql7 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-6";
	$sql8 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-7";
	$sql9 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-8";
	$sql10 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-9";
	$sql11 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-10";
	$sql12 = "SELECT news FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)-11";
	$news1 = $conn->query($sql1)->fetch_assoc();
	$news2 = $conn->query($sql2)->fetch_assoc();
	$news3 = $conn->query($sql3)->fetch_assoc();
	$news4 = $conn->query($sql4)->fetch_assoc();
	$news5 = $conn->query($sql5)->fetch_assoc();
	$news6 = $conn->query($sql6)->fetch_assoc();
	$news7 = $conn->query($sql7)->fetch_assoc();
	$news8 = $conn->query($sql8)->fetch_assoc();
	$news9 = $conn->query($sql9)->fetch_assoc();
	$news10= $conn->query($sql10)->fetch_assoc();
	$news11= $conn->query($sql11)->fetch_assoc();
	$news12= $conn->query($sql12)->fetch_assoc();
?>

<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p id="news1" style="align:left;color:black;font-family:Comic Sans;"><?php echo $news1['news'] ?></p></b>
	  </div>
	  <script>
		function refreshnews1()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews1.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news1").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews1();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news2" style="color:black;font-family:Comic Sans;"><?php echo $news2['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews2()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews2.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news2").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews2();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="#f5f5f5">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news3" style="color:black;font-family:Comic Sans;"><?php echo $news3['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews3()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews3.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news3").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews3();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news4" style="color:black;font-family:Comic Sans;"><?php echo $news4['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews4()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews4.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news4").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews4();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="#f5f5f5">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news5" style="color:black;font-family:Comic Sans;" ><?php echo $news5['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews5()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews5.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news5").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews5();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news6" style="color:black;font-family:Comic Sans;"><?php echo $news6['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews6()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews6.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news6").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews6();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="#f5f5f5">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news7" style="color:black;font-family:Comic Sans;"><?php echo $news7['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews7()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews7.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news7").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews7();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news8" style="color:black;font-family:Comic Sans;"><?php echo $news8['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews8()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews8.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news8").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews8();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="#f5f5f5">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news9" style="color:black;font-family:Comic Sans;"><?php echo $news9['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews9()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews9.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news9").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews9();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news10" style="color:black;font-family:Comic Sans;"><?php echo $news10['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews10()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews10.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news10").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews10();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="#f5f5f5">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news11" style="color:black;font-family:Comic Sans;"><?php echo $news11['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews11()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews11.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news11").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews11();},1000);
	  </script>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		
	  </div>
	  <div class="text">
		<p><b><p id="news12" style="color:black;font-family:Comic Sans;" ><?php echo $news12['news'] ?></p></b></p>
	  </div>
	  <script>
		function refreshnews12()
{
		//console.log("refresh1");
		var http = new XMLHttpRequest();
		http.open("GET","getNews12.php",true);
		http.onreadystatechange = function()
		{
		 if(this.readyState==4 && this.status==200) 
		 {
			document.getElementById("news12").innerHTML=this.responseText;
			//console.log(this.responseText);
		 }
		}
		//document.getElementById("tataQuantity");
		http.send();
}		setInterval(function(){refreshnews12();},1000);
	  </script>
</div>
</th>
</tr>
</table>
<script>
        var Row_Tata = document.getElementById("row_Tata");
	    var Cells_Tata = Row.getElementsByTagName("td");
	    var bal_Tata = Cells[2].innerText;
	
	    var Row_HDFC = document.getElementById("row_HDFC");
	    var Cells_HDFC = Row.getElementsByTagName("td");
	    var bal_HDFC = Cells[2].innerText;
	
	    var Row_Reliance = document.getElementById("row_Reliance");
		var Cells_Reliance = Row.getElementsByTagName("td");
		var bal_Reliance = Cells[2].innerText;
		
		var Row_ITC = document.getElementById("row_ITC");
		var Cells_ITC = Row.getElementsByTagName("td");
		var bal_ITC = Cells[2].innerText;
		
		var Row_Kotak = document.getElementById("row_Kotak");
		var Cells_Kotak = Row.getElementsByTagName("td");
		var bal_Kotak = Cells[2].innerText;
		
		var Row_Infosys = document.getElementById("row_Infosys");
		var Cells_Infosys = Row.getElementsByTagName("td");
		var bal_Infosys = Cells[2].innerText;
		
		var Row_TCS = document.getElementById("row_TCS");
		var Cells_TCS = Row.getElementsByTagName("td");
		var bal_TCS = Cells[2].innerText;
		
		var Row_Adani = document.getElementById("row_Adani");
		var Cells_Adani = Row.getElementsByTagName("td");
		var bal_Adani = Cells[2].innerText;
		
		var Row_AsianPaints = document.getElementById("row_AsianPaints");
		var Cells_AsianPaints = Row.getElementsByTagName("td");
		var bal_AsianPaints = Cells[2].innerText;
		
		var Row_Airtel = document.getElementById("row_Airtel");
		var Cells_Airtel = Row.getElementsByTagName("td");
		var bal_Airtel = Cells[2].innerText;
		
		var Row_DrReddy = document.getElementById("row_DrReddy");
		var Cells_DrReddy = Row.getElementsByTagName("td");
		var bal_DrReddy = Cells[2].innerText;
		
		var Row_BurgerKing = document.getElementById("row_BurgerKing");
		var Cells_BurgerKing = Row.getElementsByTagName("td");
		var bal_BurgerKing = Cells[2].innerText;
		
		var Row = document.getElementById("row");
		var Cells = Row.getElementsByTagName("th");
		var bal = Cells[0].innerText;
		
		var val = document.getElementById("valuation");
</script>
</body>
</html>