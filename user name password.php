<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sign in</title>
</head>

<body>
<form method="post" action="">
<b>Name</b>
<input type="text" name="user" required>
<b>Password</b>
<input type="password" name="pass" required>
<input type="submit" name="submit" value="submit"> 
</form>
<?php
if(isset($_POST["submit"])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	if($user=='admin' & $pass=='1234'){
		echo "welcome ". $user;
		
		}
		else {
			echo "your Username and Password is incorrect";
			}
}



   ?>
</body>
</html>