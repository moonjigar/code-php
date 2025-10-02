<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<!-- HTML Form -->
<form method="post">
    <label>Enter a number:</label><br>
    <input type="number" name="number" min="0" placeholder="e.g. 5"><br><br>
    <input type="submit" name="submit" value="Find Factorial">
</form>
<?php 
if(isset($return)){
	echo "Yor Factorla Of Given Number is :" .$return;
	
	}


?>


</body>
</html>
<?php
function factorial ($num){
	if($num==0 || $num==1){
		return 1;
		
		}else {
			return $num*factorial($num-1);
			
			}
	
	}
	
	 if (isset($_POST['submit'])){
	 $number= $_POST['number'];
	 $return=factorial($number);
	 }
 ?>