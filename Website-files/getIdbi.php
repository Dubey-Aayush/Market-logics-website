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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'IDBI'";
	$Idbi = $conn->query($sql)->fetch_assoc();
	$Idbi_name = $Idbi['company_name'];
	$Idbi_remaining = $Idbi['remaining_stocks'];
	$Idbi_price = $Idbi['stock_price'];
?>