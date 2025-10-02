<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form method="post"  action="">
<h2>Word count </h2>
<b>Enter Text</b>
<input type="text" name="num">
<br><br>
<input type="submit" name="submit" value="submit">
</form>
<br>

<?php
if(isset ($_POST['submit'])){
	$num= ($_POST['num']);
	
	$word= str_word_count($num);
	echo "here is the result of your code : <br> <b> $word </b> <br>";
	
	$char= strlen($num);
	echo "here is the length of charachters : <br><b>$char</b>" ;	
	}

?>
</body>
</html>