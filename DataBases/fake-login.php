<?php

$user = null;
$query =null;

if (!empty($_POST)) {

    require_once 'config.php';
    $query = "SELECT * FROM users WHERE user = :user AND password = :password";
    $prepared = $pdo->prepare($query);

    $prepared->execute([
        'user' => $_POST['user'],
        'password' => md5($_POST['pass'])

        ]);

    $user = $prepared->fetch(PDO::FETCH_ASSOC);


}
?>


<html>

<head>
    <title>DataBases</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<nav>
    <div class="container">

        <h1>DataBases</h1>
        <ul>
            <li><a href="../index.php">Home</a> </li>
            <li><a href="list.php">List Users</a> </li>
            <li><a href="add.php">Add User </a></li>
            <li><a href="update.php">Update User</a></li>
            <li><a href="fake-login.php">FakeLogin</a></li>

        </ul>
    </div>
</nav>

<div class="container">
<form action="fake-login.php" method="post" >

    <label for="user">User</label>
    <input type="text" name="user" id="user">
    <br>
    <label for="pass">Pass</label>
    <input type="password" name="pass" id="pass">
    <br>
    <input type="submit" value="Ok">
</form>
</div>
<div class="container">
<h2>Query</h2>
<div>
<?php
print_r($query);
?>
</div>
<h2>User Data</h2>
<div>
<?php
print_r($user);
?>
</div>
</div>
</body>
</html>