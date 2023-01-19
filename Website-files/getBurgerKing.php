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
	$sql = "SELECT * FROM stock_info WHERE company_name = 'Burger_King'";
	$BurgerKing = $conn->query($sql)->fetch_assoc();
	$BurgerKing_name = $BurgerKing['company_name'];
	$BurgerKing_remaining = $BurgerKing['remaining_stocks'];
	$BurgerKing_price = $BurgerKing['stock_price'];
?>