<?php
$users = [
    ['id' => 1, 'name' => 'Ali'],
    ['id' => 2, 'name' => 'Sara'],
    ['id' => 3, 'name' => 'Ahmed']
];

function findUserIdByName($userList, $searchName) {
    foreach ($userList as $user) {
        if ($user['name'] == $searchName) {
            return $user['id'];
        }
    }
    return null;
}

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $id = findUserIdByName($users, $name);
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Find User ID</title>
</head>
<body>
    <form method="post">
        <label>Enter user name:</label><br>
        <input type="text" name="name" placeholder="e.g. Sara"><br><br>
        <input type="submit" name="submit" value="Find ID">
    </form>

    <?php
    if (isset($id)) {
        if ($id !== null) {
            echo "<h3>User ID is: $id</h3>";
        } else {
            echo "<h3>User not found.</h3>";
        }
    }
    ?>
</body>
</html>
