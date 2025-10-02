<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
Name <br>
<input type="text" name="name"> <br>
Email <br>
<input type="email" name="email" required> <br>
 Message: <br>
      <textarea name="message" rows="4" cols="30"></textarea> <br>
<input type="submit" name="submit" value="submit">

</form>
<?php 
if (isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['message'];
	 if(empty($name) || empty ($email) || empty ($msg)) {
		 echo "<p style='color:red'> X All Fields are Required ! </p>";
		 
		 }elseif (!filter_var ($email , FILTER_VALIDATE_EMAIL)) {
			 
			 echo "<p style='color:red'> X All Fields Are Required</p>";
			 } else {
				 echo "<p style='color:green'>Thank You $name for your Submission</p>";
				 
				 }
	}

?>
</body>
</html>