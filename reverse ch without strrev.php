<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post">
    <label>Enter any word or sentence:</label><br>
    <input type="text" name="text" placeholder="e.g. hello"><br><br>
    <input type="submit" name="submit" value="Reverse It">
</form>

<?php 
if(isset($reverse)){
	echo "<h3> reersed word is :  </h3>";
	
	echo "<strong>" .$reverse."</strong>";
	}

 ?>
</body>
</html>
<?php
if(isset ($_POST['submit'])){
	$text=$_POST['text'];
	
	$arry= "";
	for($i=strlen($text)-1; $i>=0; $i--){
$reverse=$text($i);		
		
		}
	}

 ?>