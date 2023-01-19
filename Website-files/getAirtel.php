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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Airtel'";
	$Airtel = $conn->query($sql)->fetch_assoc();
	$Airtel_name = $Airtel['company_name'];
	$Airtel_remaining = $Airtel['remaining_stocks'];
	$Airtel_price = $Airtel['stock_price'];
?>