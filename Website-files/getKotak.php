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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Kotak'";
	$Kotak = $conn->query($sql)->fetch_assoc();
	$Kotak_name = $Kotak['company_name'];
	$Kotak_remaining = $Kotak['remaining_stocks'];
	$Kotak_price = $Kotak['stock_price'];
?>