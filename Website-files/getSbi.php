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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'SBI'";
	$Sbi = $conn->query($sql)->fetch_assoc();
	$Sbi_name = $Sbi['company_name'];
	$Sbi_remaining = $Sbi['remaining_stocks'];
	$Sbi_price = $Sbi['stock_price'];
?>