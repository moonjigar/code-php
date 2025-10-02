<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<b>1st Number</b>
<input type="number" name="num">
<br>
<b>2st Number</b>
<input type="number" name="num1">
<br>
<b>calculation</b>
<select id="calclate" name="calculation">
<option value="sum">Sum +</option>
<option value="divide">Divide /</option>
<option value="multiply">Multiply *</option>
<option value="subtract">Subtract -</option>
</select>
<input type="submit" name="submit" value="submit">

</form>

<br><br>
<?php  
if(isset($_POST['submit'])){
$num=$_POST['num'];
$num1=$_POST['num1'];
$calculate=$_POST['calculation'];

if(is_numeric($num) && is_numeric($num1)){
	if($calculate== "sum"){
	echo "Result of sum is :" .($num+$num1);	
		} elseif($calculate=="divide") {
			echo "Result of Division is :" .($num/$num1);
			
			} elseif($calculate=="multiply"){
				echo "Result of Multiplication is :" .($num*$num1);
				} elseif ($calculate== "subtract"){
					echo "Result of Subtraction is :" .($num-$num1);
					
					} else {
						
						echo "Error"  ;
						}
	
	}
	
}
?>
</body>
</html>