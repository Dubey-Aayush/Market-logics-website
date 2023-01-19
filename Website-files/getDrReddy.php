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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Dr_Reddy'";
	$DrReddy = $conn->query($sql)->fetch_assoc();
	$DrReddy_name = $DrReddy['company_name'];
	$DrReddy_remaining = $DrReddy['remaining_stocks'];
	$DrReddy_price = $DrReddy['stock_price'];
?>