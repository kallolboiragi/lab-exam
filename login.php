<?php

	$ierror="";
	$perror="";

	if(isset($_REQUEST['submit'])){

		$uid 		= $_REQUEST['uname'];
		$password 	= $_REQUEST['password'];

		if($uid == ""){
			$ierror = "null id";
		}else{
			$ierror = $uid;
		}

		if($password == ""){
			$perror = "null password";
		}else{
			$perror = $password;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1> Login </h1>
	<form method="GET">
		<fieldset>
			<legend> Login </legend>
			<table border="0">
				<tr>
					<td>User Id</td>
				</tr>
				<tr>
					<td><input type="text" name="uid"><?php echo $ierror; ?></td>
				</tr>
				<tr>
					<td>Password</td>
				</tr>
				<tr>
					<td><input type="password" name="password"> <?php echo $perror; ?><td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Login">
						<a href="registration.html">Register</a>
					</td>
				</tr>
				
			</table>
		</fieldset>
	</form>
</body>
</html>