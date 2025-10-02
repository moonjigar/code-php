<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
function evennum($num){
	
if(is_numeric ($num)){
	
	if($num% 2==0){
		echo "this number is Even";
		
		}else {
		echo 	"this number is odd";
			}
	} return evennum($num);

}
?>

</body>
</html>