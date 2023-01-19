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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Asian_Paints'";
	$AsianPaints = $conn->query($sql)->fetch_assoc();
	$AsianPaints_name = $AsianPaints['company_name'];
	$AsianPaints_remaining = $AsianPaints['remaining_stocks'];
	$AsianPaints_price = $AsianPaints['stock_price'];
?>