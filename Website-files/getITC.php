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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'ITC'";
	$ITC = $conn->query($sql)->fetch_assoc();
	$ITC_name = $ITC['company_name'];
	$ITC_remaining = $ITC['remaining_stocks'];
	$ITC_price = $ITC['stock_price'];
?>