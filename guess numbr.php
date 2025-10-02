<?php 
session_start();

if (!isset($_SESSION['num'])) {
    $_SESSION['num'] = rand(1, 50);
}

$msg = "";
$color = "green"; // default color

if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $rand = $_SESSION['num'];

    if ($num == $rand) {
        $msg = "✅ Your input is correct!";
        unset($_SESSION['num']); // reset for next round
    } else {
        $msg = "❌ Your input is invalid! Please try again.";
        $color = "red";
    }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Number Guess Game</title>
</head>

<body>
<form method="post" action="">
    Enter Number <br>
    <input type="number" name="num" required> <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php 
if (!empty($msg)) echo "<p style='color:$color'>$msg</p>";
?>
</body>
</html>
