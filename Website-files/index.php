<html>
<head>
<link rel="stylesheet" href="styles.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<title>Stock Market</title>
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
<!--
?php
	$servername = "localhost";
	$username="root";
	$password = "";
	$dbname = "log_in_info";
	$user=Array();
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
	}
	$sql = "SELECT * FROM user_info";
	$result = $conn->query($sql);
	echo $check="<script>sessionStorage.getItem('user_id')</script>";
	echo $check;
	while($row = $result->fetch_assoc())
	{
		if($row['user_id'] == $check)
		{
			$user=$row;
		}
	}
?>
-->
<div style="background-color:#D3D3D3;">
    <header>
        <div class="inner">
            <nav>
                <li><span><a href="">Trade</a></span></li>
                <li><span><a href="">Market data</a></span></li>
                <li><span><a href="">My Account &nbsp <img height="25" width="25" src="prof.png"></a></span></li>
            </nav>
			<navo>
				<li><span> Stock &nbsp   Market &nbsp    Site</span></li>
			</navo>
        </div>
    </header>
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
	</p> <i> <?php echo $row['user_email']?></i></p><br><p > Balance:</p><p style="float: right;margin-top:-20px">Total Valuation: </p><table border="10px"solids black><tr id = "row"><th id="balance"><?php echo $row['user_balance']?></th></tr></table>
	<table  style="float: right;margin-top:-44px;" border="10px" solids black><tr><th id="valuation"><?php echo $row['user_valuation']?></th></tr></table>
	<marquee direction="right">
	<h1>
	<span class="green_text"> RELIANCE 3.2% </span> &nbsp &nbsp
	<span class="green_text"> WIPRO 5.2% </span> &nbsp &nbsp
	<span class="red_text"> TATAMOTORS 1.1%</span> &nbsp &nbsp
	<span class="green_text"> SBILIFE 2.7%</span> &nbsp &nbsp
	<span class="red_text"> COALINDIA 6.1% </span> &nbsp &nbsp
	<span class="green_text"> NTPC 1.2%</span> &nbsp &nbsp
	<span class="green_text"> MARUTI 3.2% </span> &nbsp &nbsp
	<span class="green_text"> SHREECM 1.9%</span> &nbsp &nbsp
	<span class="red_text"> HERMODCO 5.6%</span> &nbsp &nbsp
	<span class="red_text"> BAJAJFINSERV 2.7% </span> &nbsp &nbsp
	<span class="green_text"> INFY 1.1%</span> &nbsp &nbsp
	<span class="red_text"> PES 34.2% </span> &nbsp &nbsp
	<span class="green_text"> SBIN 4.2% </span> &nbsp &nbsp
	</h1>
	</marquee>
	</br>
	</br>
<table bgcolor="lightblue" style="float: left;" class="scrolldown" border="10px" solid black>
<caption style="color:#3e21c2;font-family:Century Gothic;font-size:40px"><b><u>Live &nbspNews</u></b></caption>
<tr>
<th bgcolor="#5b41d1">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="tata.png">
	  </div>
	  <div class="text">
		<p><b><a style="color:white" href="https://economictimes.indiatimes.com/tata-motors-ltd/stocks/companyid-12934.cms target='_blank'">Tata Motors Ltd. share price moved up by 1.23% from its previous close of Rs 415.75.</br> Tata Motors Ltd. stock last traded price is 420.85.</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="hdfc.jpg">
	  </div>
	  <div class="text">
		<p><b><a href="https://economictimes.indiatimes.com/hdfc-bank-ltd/stocks/companyid-9195.cms">HDFC Bank Ltd. share price moved down by -0.67% from its previous close of Rs 1,593.60.</br>HDFC Bank Ltd. stock last traded price is 1,582.85</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="#5b41d1">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="reliance.jpg">
	  </div>
	  <div class="text">
		<p><b><a style="color:white" href="https://economictimes.indiatimes.com/reliance-industries-ltd/stocks/companyid-13215.cms">Reliance Industries Ltd. share price moved up by 0.57% from its previous close of Rs 2,652.65.</br>Reliance Industries Ltd. stock last traded price is 2,667.80</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="itc.jpg">
	  </div>
	  <div class="text">
		<p><b><a href="https://economictimes.indiatimes.com/itc-ltd/stocks/companyid-13554.cms">ITC Ltd. share price moved down by -0.84% from its previous close of Rs 225.10.</br>ITC Ltd. stock last traded price is 223.20</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="#5b41d1">
<div class="container">
      <div class="image">
		<img height="100" width="150" src="kotak.jpg">
	  </div>
	  <div class="text">
		<p><b><a style="color:white" href="https://economictimes.indiatimes.com/kotak-mahindra-bank-ltd/stocks/companyid-12161.cms">Kotak Mahindra Bank Ltd. share price moved down by -3.21% from its previous close of Rs 2,098.50.</br>Kotak Mahindra Bank Ltd. stock last traded price is 2,031.15</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="infosys.jpg">
	  </div>
	  <div class="text">
		<p><b><a href="https://economictimes.indiatimes.com/infosys-ltd/stocks/companyid-10960.cms">Infosys Ltd. share price moved down by -2.12% from its previous close of Rs 1,703.90. Infosys Ltd.</br>Infosys Ltd. stock last traded price is 1,667.75</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="#5b41d1">
<div class="container">
      <div class="image">
		<img height="100" width="200" src="tcs.jpg">
	  </div>
	  <div class="text">
		<p><b><a style="color:white" href="https://economictimes.indiatimes.com/tata-consultancy-services-ltd/stocks/companyid-8345.cms">Tata Consultancy Services Ltd. share price moved down by -0.70% from its previous close of Rs 3,421.65. </br>India Cements Ltd. stock last traded price is 214.40 </a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="adani.jpg">
	  </div>
	  <div class="text">
		<p><b><a href="https://economictimes.indiatimes.com/adani-ports-special-economic-zone-ltd/stocks/companyid-20316.cms">Adani Ports & Special Economic Zone Ltd. share price moved up by 0.71% from its previous close of Rs 688.10.</br>Adani Ports & Special Economic Zone Ltd. stock last traded price is 693.00</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="#5b41d1">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="asian.jpg">
	  </div>
	  <div class="text">
		<p><b><a style="color:white" href="https://economictimes.indiatimes.com/asian-paints-ltd/stocks/companyid-14034.cms">Asian Paints Ltd. share price moved down by -0.52% from its previous close of Rs 3,116.30. </br>Asian Paints Ltd. stock last traded price is 3,100.10</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="airtel.jpg">
	  </div>
	  <div class="text">
		<p><b><a href="https://economictimes.indiatimes.com/bharti-airtel-ltd/stocks/companyid-2718.cms">Bharti Airtel Ltd. share price moved down by -0.64% from its previous close of Rs 689.75.  </br>Bharti Airtel Ltd. stock last traded price is 685.35</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="#5b41d1">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="reddy.jpg">
	  </div>
	  <div class="text">
		<p><b><a style="color:white" href="https://economictimes.indiatimes.com/dr-reddy's-laboratories-ltd/stocks/companyid-13841.cms">Dr. Reddy's Laboratories Ltd. share price moved up by 1.95% from its previous close of Rs 4,569.95.</br>Dr. Reddy's Laboratories Ltd. stock last traded price is 4,659.20</a></b></p>
	  </div>
</div>
</th>
</tr>
<tr>
<th bgcolor="white">
<div class="container">
      <div class="image">
		<img height="100" width="100" src="burger.jpg">
	  </div>
	  <div class="text">
		<p><b><a  href="https://economictimes.indiatimes.com/burger-king-india-ltd/stocks/companyid-1997181.cms">Burger King India Ltd. share price moved up by 1.19% from its previous close of Rs 150.85.</br>Burger King India Ltd. stock last traded price is 152.65</a></b></p>
	  </div>
</div>
</th>
</tr>
</table>
<table bgcolor="#5b41d1" class="tableSection" style="float: right;width:650px;" border="1px" solids black>
<caption style="color:#3e21c2;font-family:Century Gothic;font-size:40px"><u><b>Current Stock Market Data</b></u></caption>
<tr bgcolor="#5b41d1">
<th style="color:white;"> <center> Stock </center></th>
<th style="color:white;"> <center>Amount Available </center></th>
<th height="55" style="color:white;"> <center>Current price </center> </th>
</tr>
<tr bgcolor="white">
<!---------------------------------------------------->
<td> <img height="100" width="100" src="tata.png"> <button data-modal-target="#modal">Buy/Sell</button>
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
			document.getElementById("valuation").innerHTML=this.responseText-500000;
			
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
<tr bgcolor="#f5f5f5">
<!-------------------->
<td> <img height="100" width="100" src="hdfc.jpg"> <button data-modal-target="#modal1">Buy/Sell</button>
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
<tr bgcolor="white">
<td> <img height="100" width="100" src="reliance.jpg"> <button data-modal-target="#modal2">Buy/Sell</button>
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
<tr bgcolor="#f5f5f5">
<td> <img height="100" width="100" src="itc.jpg"> <button data-modal-target="#modal3">Buy/Sell</button>
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
<tr bgcolor="white">
<td> <img height="100" width="100" src="kotak.jpg"> <button data-modal-target="#modal4">Buy/Sell</button>
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
<tr bgcolor="#f5f5f5">
<!------>
<td> <img height="100" width="100" src="infosys.jpg"> <button data-modal-target="#modal5">Buy/Sell</button>
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
<tr bgcolor="white">
<!------>
<td> <img height="100" width="100" src="tcs.jpg"> <button data-modal-target="#modal6">Buy/Sell</button>
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
<tr bgcolor="#f5f5f5">
<!------>
<td> <img height="100" width="100" src="adani.jpg"> <button data-modal-target="#modal7">Buy/Sell</button>
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
<tr bgcolor="white">
<!------>
<td> <img height="100" width="100" src="asian.jpg"> <button data-modal-target="#modal8">Buy/Sell</button>
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
<tr bgcolor="#f5f5f5">
<!------>
<td> <img height="100" width="100" src="airtel.jpg"> <button data-modal-target="#modal9">Buy/Sell</button>
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
<tr bgcolor="white">
<!------>
<td> <img height="100" width="100" src="reddy.jpg"> <button data-modal-target="#modal10">Buy/Sell</button>
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
<tr bgcolor="#f5f5f5">
<!------>
<td> <img height="100" width="100" src="burger.jpg"> <button data-modal-target="#modal11">Buy/Sell</button>
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
<!--END OF CURRENT STOCK MARKET DATA TABLE-->
<table style="float:left;" class="table">
<caption style="color:#3e21c2;font-family:Century Gothic;font-size:40px"><u><b>Portfolio</b></u></caption>
     <thead>
     	<tr>
     	 <th>Stocks</th>
     	 <th>Quantity</th>
     	 <th>LTP</th>
     	 <th>Current Value</th>
     	 <th>P&ampL</th>
     	</tr>
     </thead>
     <tbody>
     	  <tr>
     	  	  <td data-label="S.No" >HDFC Bank</td>
     	  	  <td data-label="Name" id="HDFC_Portfolio_Quantity">1</td>
     	  	  <td data-label="Age" id="HDFC_Portfolio_Price">1000</td>
     	  	  <td data-label="Marks%" id="HDFC_Portfolio_Valuation">1000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="S.No">ITC</td>
     	  	  <td data-label="Name">25</td>
     	  	  <td data-label="Age">2000</td>
     	  	  <td data-label="Marks%">50000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="S.No">Kotak Mahindra</td>
     	  	  <td data-label="Name">25</td>
     	  	  <td data-label="Age">3000</td>
     	  	  <td data-label="Marks%">75000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="S.No">Infosys</td>
     	  	  <td data-label="Name">20</td>
     	  	  <td data-label="Age">4000</td>
     	  	  <td data-label="Marks%">80000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>
		       	  <tr>
     	  	  <td data-label="S.No">Reliance</td>
     	  	  <td data-label="Name">100</td>
     	  	  <td data-label="Age">5000</td>
     	  	  <td data-label="Marks%">500000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>
		       	  <tr>
     	  	  <td data-label="S.No">TCS</td>
     	  	  <td data-label="Name">65</td>
     	  	  <td data-label="Age">3000</td>
     	  	  <td data-label="Marks%">195000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>
		       	  <tr>
     	  	  <td data-label="S.No">Adani Port</td>
     	  	  <td data-label="Name">89</td>
     	  	  <td data-label="Age">5000</td>
     	  	  <td data-label="Marks%">445000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>
		       	  <tr>
     	  	  <td data-label="S.No">Tata Motors</td>
     	  	  <td data-label="Name">24</td>
     	  	  <td data-label="Age">4000</td>
     	  	  <td data-label="Marks%">96000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>
		       	  <tr>
     	  	  <td data-label="S.No">Asian Paints</td>
     	  	  <td data-label="Name">21</td>
     	  	  <td data-label="Age">5000</td>
     	  	  <td data-label="Marks%">105000</td>
     	  	  <td data-label="Staus">N/A</td>
     	  </tr>
     </tbody>

<table style="float:right;" class="table">
<caption style="color:#3e21c2;font-family:Century Gothic;font-size:40px"><u><b>Transaction&nbsp History</b></u></caption>
     <thead>
     	<tr>
     	 <th>Stocks</th>
     	 <th>Quantity</th>
     	 <th>Buy/Sell</th>
     	 <th>Price</th>
     	 <th>Total</th>
     	</tr>
     </thead>
     <tbody>
     	  <tr>
     	  	  <td data-label="S.No">HDFC Bank</td>
     	  	  <td data-label="Name">31</td>
     	  	  <td data-label="Age">B</td>
     	  	  <td data-label="Marks%">1000</td>
     	  	  <td data-label="Staus">31000</td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="S.No">Kotak Mahindra</td>
     	  	  <td data-label="Name">2</td>
     	  	  <td data-label="Age">B</td>
     	  	  <td data-label="Marks%">2000</td>
     	  	  <td data-label="Staus">4000</td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="S.No">Kotak Mahindra</td>
     	  	  <td data-label="Name">1</td>
     	  	  <td data-label="Age">S</td>
     	  	  <td data-label="Marks%">2500</td>
     	  	  <td data-label="Staus">2500</td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="S.No">Reliance Ltd</td>
     	  	  <td data-label="Name">4</td>
     	  	  <td data-label="Age">B</td>
     	  	  <td data-label="Marks%">1000</td>
     	  	  <td data-label="Staus">4000</td>
     	  </tr>
		  <tr>
     	  	  <td data-label="S.No">TCS</td>
     	  	  <td data-label="Name">4</td>
     	  	  <td data-label="Age">B</td>
     	  	  <td data-label="Marks%">1000</td>
     	  	  <td data-label="Staus">4000</td>
     	  </tr>
		  <tr>
     	  	  <td data-label="S.No">Adani Port</td>
     	  	  <td data-label="Name">80</td>
     	  	  <td data-label="Age">B</td>
     	  	  <td data-label="Marks%">1000</td>
     	  	  <td data-label="Staus">80000</td>
     	  </tr>
		  <tr>
     	  	  <td data-label="S.No">Tata Motors</td>
     	  	  <td data-label="Name">23</td>
     	  	  <td data-label="Age">B</td>
     	  	  <td data-label="Marks%">1000</td>
     	  	  <td data-label="Staus">23000</td>
     	  </tr>
		  <tr>
     	  	  <td data-label="S.No">Asian Paints</td>
     	  	  <td data-label="Name">12</td>
     	  	  <td data-label="Age">B</td>
     	  	  <td data-label="Marks%">1000</td>
     	  	  <td data-label="Staus">12000</td>
     	  </tr>
     </tbody>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>          
<script type="text/javascript">
    // Check if the page has loaded completely                                         
    $(document).ready( function() { 
        $('#tata_remaining').load('getTataStocks.php'); 
    }); 
</script>

</body>
</html>
