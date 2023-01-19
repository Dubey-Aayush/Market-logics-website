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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'TCS'";
	$TCS = $conn->query($sql)->fetch_assoc();
	$TCS_name = $TCS['company_name'];
	$TCS_remaining = $TCS['remaining_stocks'];
	$TCS_price = $TCS['stock_price'];
?>