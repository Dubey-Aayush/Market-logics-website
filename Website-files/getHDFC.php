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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'HDFC'";
	$HDFC = $conn->query($sql)->fetch_assoc();
	$HDFC_name = $HDFC['company_name'];
	$HDFC_remaining = $HDFC['remaining_stocks'];
	$HDFC_price = $HDFC['stock_price'];
?>