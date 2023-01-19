<html>
<head>
</head>
<body>
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
	$change=456;
	$balance=$row['user_balance'];
	$id=$row['user_id'];
	$new=$balance-$change;
	$sql = "UPDATE user_info SET user_balance = $new WHERE user_id = $id";
	$conn->query($sql);
?>
</body>
</html>