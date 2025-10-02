<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<b>Input Array </b>
<input type="text" name="name">
<input type="submit" name="submit" value="submit">

</form>
<?php 
if(isset ($_POST['submit'])){
	$text=$_POST['name'];
	 
	$number= array_map ('trim', explode(',', $text));
	
	$count_value=array_count_values($number);
	
	foreach($count_value as $num => $count) {
		if($count > 1){
			echo "Number <b>$num</b> repeated <b>$count </b> Times";
			}
		}
		
	
	}

?>


</body>
</body>
</html>