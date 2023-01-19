<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin SignIn</title>

	<style>
	body
	{

	}
	#Webite_name
	{
		position:relative;
		font-size:20;
		color:white;
		margin-left:10px;
		margin-top:9px;
	}
	#logo
	{
		position:relative;
		margin-left:13px;
	}
	#Sign_in_header
	{
		font-size:50px;
		font-family:Century Gothic;
		color:white;;
		margin-left:395px;
		margin-top:200px;
	}
	#email,#password
	{
		position: relative;
		background-color:transparent;
		border-radius:5px;
		border-width:1px;
		border-color:white;
		font-size:20px;
		color:white;
		margin-left:330px;
		margin-top:5px;
		width:300px;
		height:40px;
	}
	#email
	{
		margin-top:1px;
	}
	#Log_in_button
	{
		position: relative;
		background:#747574;
		opacity:0.8;
		border-radius:5px;
		border-width:1px;
		border-color:black;
		font-size:20px;
		color:white;
		margin-left:430px;
		margin-top:7px;
		width:100px;
		height:30px;
	}
	/*
	#myCanvas
	{
		background-color:#300963;
		width:100%;
		height:90px;
		border-radius:5px;
		opacity:0.8;
	}
	*/
	.hero
	{
		content:"";
		background-image: url('Website_Background.png');
		background-size: cover;
		position: absolute;
		top: 0px;
		right: 0px;
		bottom: 0px;
		left: 0px;
		opacity: 0.85;
	}
	.hero::before
	{
		
		opacity:1;
		background-color:black;
	}
	#Log_in_button:hover
	{
		background:black;
	}
</style>
<link rel="icon" type="image/vnd" href="SJCC_Project_logo_edited.jpg"/>
</head>
<body class = "hero">
<img src="log_in_page_logo.jpg" height="40px" width="70px" id="logo"/></br>
<h4 id="Webite_name">Market Logics</h4>
<h1 id="Sign_in_header">Admin Login</h1>
<form action ="" method="post" target='_self'>
<input type="email" name="Email" placeholder="Email" id="email" autocomplete="off" autofocus required/></br>
<input type="password" name="Password" placeholder="Password" id="password" required/></br>
<button type="submit" name="Sign_in_button" value="Sign in" id="Log_in_button"/>submit</br>  
</form>
<script>
var btn=document.getElementById("Log_in_button");
btn.addEventListener("mouseover",function(){btn.setAttribute("background","black");})
</script>
<?php
	if(isset($_POST['Sign_in_button']))
	{
		$servername = "localhost";
		$username="root";
		$password = "";
		$dbname = "log_in_info";
		$flag=0;
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			echo '<script>alert("Connection failed: " . $conn->connect_error)</script>';
		}

		$sql = "SELECT * FROM admin";
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()) 
		{
			if($row['user_email'] == $_POST['Email'] && $row['user_password'] == $_POST['Password'])
			{
				$flag=1;
			}
		}
		if($flag==1)
		{
			echo "<script>window.location.href='admin.php'</script>";
		}
		else
		{
			echo "<script>alert('Login failed')</script>";
		}
		$conn->close();
	}
?>
</body>
</html>