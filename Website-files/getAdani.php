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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Adani'";
	$Adani = $conn->query($sql)->fetch_assoc();
	$Adani_name = $Adani['company_name'];
	$Adani_remaining = $Adani['remaining_stocks'];
	$Adani_price = $Adani['stock_price'];
?>