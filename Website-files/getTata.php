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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Tata'";
	$Tata = $conn->query($sql)->fetch_assoc();
	$Tata_name = $Tata['company_name'];
	$Tata_remaining = $Tata['remaining_stocks'];
	$Tata_price = $Tata['stock_price'];
?>