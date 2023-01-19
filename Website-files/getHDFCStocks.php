<center>
<b>
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
	$sql = "SELECT remaining_stocks FROM stock_info WHERE company_id=2";
	$result = $conn->query($sql)->fetch_assoc();
	echo $result['remaining_stocks'];
?>
</b>
</center>