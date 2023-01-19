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
	$id=$_COOKIE['user_id'];
	$sql = "SELECT user_balance FROM user_info WHERE user_id=$id";
	$result = $conn->query($sql)->fetch_assoc();
	echo $result['user_balance'];
?>
</b>