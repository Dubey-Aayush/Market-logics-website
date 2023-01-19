<html>

<head>
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
	<title>Admin</title>
</head>

<body>
	<script>
    if ( window.history.replaceState ) 
	{
        window.history.replaceState( null, null, window.location.href);
    }
	</script>
	<div style="background-color:violet;">
		<header>
			<div class="inner">
				<navo>
					<li><span> Admin</span></li>
				</navo>
			</div>
		</header>

		<h2>Change Stock Price</h2>


		<?php

		$errorMessage = $message = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {


			if (empty($_POST['stock']) || empty($_POST['stockPrice'])) {

				$errorMessage = "*Fill all the fields";
				$varPrice = "";
				$varStock = "";
				$message = "";
			} else {

				$varStock = $_POST['stock'];
				$varPrice = $_POST['stockPrice'];

				$errorMessage = "";
				$message = "Stock Price of " . $varStock;
				$message = $message . " is set to Rs.";
				$message = $message . $varPrice;



				update($varStock, $varPrice);
			}
		}

		function update($varStock, $varPrice)
		{
			$link = mysqli_connect("localhost", "root", "", "log_in_info");

			$varPrice = '"' . $varPrice;
			$varPrice = $varPrice . '"';
			$varStock = '"' . $varStock;
			$varStock = $varStock . '"';


			// Check connection
			if ($link === false) {
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// Attempt update query execution
			$sql = "UPDATE `stock_info` SET`stock_price`= $varPrice WHERE `company_name` = $varStock";
			if (mysqli_query($link, $sql)) {
			} else {
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}

			// Close connection
			mysqli_close($link);
		}
		?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<select name="stock" value="<?php echo $varStock; ?>">
				<option value=Tata> Tata </option>
				<option value=HDFC> HDFC </option>
				<option value=Reliance> Reliance </option>
				<option value=ITC> ITC </option>
				<option value=Kotak> Kotak </option>
				<option value=Infosys> Infosys </option>
				<option value=TCS> TCS</option>
				<option value=Adani> Adani </option>
				<option value=Asian_Paints> Asian Paints </option>
				<option value=Airtel> Airtel </option>
				<option value=Dr_Reddy> Dr Reddy </option>
				<option value=Burger_King> Burger King </option>
			</select>
			<br><br>

			Stock Price: <input type="text" name="stockPrice" autocomplete="off" required>

			<br><br>

			<span class="error"> <?php echo $errorMessage; ?></span>
			<span><?php echo $message; ?></span>



			<br><br><input type="submit" name="submit" value="Submit">
		</form>

		<h2>News</h2>
		<form method="post" action="">
			<br><br>
			News: <input type="textarea" name="news" rows="5" cols="40" autocomplete="off" required></textarea>
			<br><br>
			<br><br><button type="submit" name="submitnews" value="Submit">Submit</button>
		</form>
		<?php
			if(isset($_POST['submitnews']))
			{
				$News = "'".$_POST['news']."'";
				$servername = "localhost";
				$username="root";
				$password = "";
				$dbname = "log_in_info";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) 
				{
					echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
				}
				$sql = "INSERT INTO `news` (`news_id`, `news`) VALUES (NULL, $News);";
				$conn->query($sql);
			}
		
		?>
	</div>
</body>

</html>