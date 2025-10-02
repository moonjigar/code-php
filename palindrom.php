<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<h3>palindrome checker</h3>
<form method="post"  action="">
<b>Enter Number</b>
<input type="text" name="text">
<br><br>
<input type="submit" name="submit" value="submit">
</form>
<br>

<?php 
if(isset($_POST['submit'])){
$num=$_POST['text'];
//$norm= strtolower (str_replace(' ','',$num));

$rev= strrev($num);
//if($norm === $rev) {
	//echo "this string is palindrome " .$num;
	
	//}else
//{echo "this string is not palindrome " .$num;
	
	//}	

if ($num ===  $rev){
	
	echo "this string is palindrom";
	
	}else{
		echo "this string is not palindrome";
		}
}

?>
</body>
</html>