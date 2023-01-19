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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Infosys'";
	$Infosys = $conn->query($sql)->fetch_assoc();
	$Infosys_name = $Infosys['company_name'];
	$Infosys_remaining = $Infosys['remaining_stocks'];
	$Infosys_price = $Infosys['stock_price'];
?>