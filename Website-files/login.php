<html>
<head>
<title>Log in</title>
</head>
<body>
<form action="" method="post">
Email: <input type="email" name="log_in_email"/></br></br>
Password: <input type="password" name="log_in_password"/></br></br>
<button type="submit" name="log_in"/>submit</br>
</form>
<?php
	if(isset($_POST['log_in']))
		{
				echo $_POST['email'];
		}
?>
</form>
</body>
</html>