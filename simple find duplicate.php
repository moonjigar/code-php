<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$number=[2,1,4,5,8,6,2,1,4,8,7,5,6];
$count=array_count_values($number);

foreach($count as $num => $count_values){
	if($count_values > 1){
		
		echo "Number $num <br> Repeated this <br> $count_values Times" ;
		}
	}
?>

</body>
</html>