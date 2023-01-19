<?php
		$servername = "localhost";
		$username="root";
		$password = "";
		$dbname = "log_in_info";
        $id=$_COOKIE['user_id'];
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
		}
		$sql = "SELECT * FROM user_info WHERE user_id = $id";
		$result1 = $conn->query($sql)->fetch_assoc();
        echo $result1['Reliance'];
		$conn->close();
	?>