<?php 
session_start ();

if(!isset($_SESSION['input'])){
	$_SESSION['input']=[];
	}
	
	if (isset ($_POST['input'])){
	$_SESSION['input'][]=$_POST['input'];
		
		}
		
		if (isset($_GET['delete'])){
			$del=$_GET['delete'];
			unset($_SESSION['input'][$del]);
			$_SESSION['input']=array_values($_SESSION['input']);
			}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<b>Input Task</b>
<input type="text" name="input" placeholder="Enter Your Task">
<input type="submit" name="submit" value="submit"> 

</form>

<h3>Tasks:</h3>
<ul>
<?php foreach ($_SESSION['input'] as $i => $t): ?>
    <li>
        <?php echo htmlspecialchars($t); ?>
        <a href="?delete=<?php echo $i; ?>">❌ Delete</a>
    </li>
<?php endforeach; ?>
</ul>





</body>
</html>