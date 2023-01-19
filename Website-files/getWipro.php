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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Wipro'";
	$Wipro = $conn->query($sql)->fetch_assoc();
	$Wipro_name = $Wipro['company_name'];
	$Wipro_remaining = $Wipro['remaining_stocks'];
	$Wipro_price = $Wipro['stock_price'];
?>