<?php
require_once  'config.php';

$result = false;
if (!empty($_POST)){
$name = $_POST['name'];
$user = $_POST['user'];
$password = md5($_POST['pass']);

$sql = "INSERT INTO users(name, user, password) VALUES (:name, :user, :password )";
$query = $pdo->prepare($sql);

$result = $query->execute([
    'name' => $name,
    'user' => $user,
    'password' => $password

]);

}

?>

<html>

<head>
    <title>AddUser</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<nav>
    <?php
if ($result) {
    echo '<div class="alert alert-success">Los datos se mandaron correctamente.</div>';
}
    ?>
<div class="container">

    <h1>DataBases</h1>
    <ul>
        <li><a href="index.php">Home</a> </li>
        <li><a href="list.php">List Users </a>
    </ul>
</div>
</nav>

<div class="container" >
    <form action="add.php" method="post" >
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="user">User</label>
        <input type="text" name="user" id="user">
        <br>
        <label for="pass">Pass</label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Ok">
    </form>
</div>

</body>
</html>