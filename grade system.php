<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post"  action="">
<h2>Word count </h2>
<b>Math</b>
<input type="number" name="mark[]">
<br><br>
<b>English</b>
<input type="number" name="mark[]">
<br><br>
<b>Computer</b>
<input type="number" name="mark[]">
<br><br>
<b>Science</b>
<input type="number" name="mark[]">
<br><br>
<input type="submit" name="submit" value="submit">
</form>
<br>
<?php
if (isset ($_POST['submit'])){
	$marks=$_POST['mark'];
	$subject=count($marks);
	$sum=array_sum($marks);
	$percentage= ($sum / ($subject * 100)) * 100;
	
	if ($percentage>=85){
		echo "Congratulation You got A+ Grade ";
	 
		}elseif($percentage>=70){
			echo "Congratulation You got B Grade ";
			
			}elseif($percentage>=50){
				echo "Congratulation You got C Grade ";
				}elseif($percentage>=45){
					
					echo "Congratulation You got D Grade ";
					}else {
						echo "Fail";
						echo "<br>";
						}
echo "total Subjects <b> $subject</b><br>";
echo "total Marks <b>$sum /</b>".($subject*100)."<br>";
echo "your total is :".round ($percentage , 2). "%";
	}

?>
</body>
</html>