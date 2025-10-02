<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post"  action="">
<h2>Even or Odd </h2>
<b>Enter Number</b>
<input type="number" name="num">
<br><br>
<input type="submit" name="submit" value="submit">
</form>
<br>
<?php 
if(isset($_POST['submit'])){
$num=$_POST['num'];

if(is_numeric ($num)){
	
	if($num% 2==0){
		echo "this number is Even";
		
		}else {
		echo 	"this number is odd";
			}
}
	}
?>
</body>
</html>