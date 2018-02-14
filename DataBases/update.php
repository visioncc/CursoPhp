<?php
session_start();
require_once  'config.php';

if(!empty($_POST)){

    $id = $_POST['id'];
    $newName = $_POST['name'];
    $newUser = $_POST['user'];

    echo $id ;
    echo $newName ;
    echo $newUser ;

    $sql = "UPDATE users SET name=:name, user=:user WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute([
    'id' => $id,
    'name' => $newName,
    'user' => $newUser

    ]);

    echo '<div class="alert alert-success">Los datos se mandaron correctamente.</div>';

    $nameValue = $newName;
    $userValue = $newUser;

?>

    <html>

<head>
    <title>UpdateUser</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<nav>

    <div class="container">

        <h1>Update User</h1>
        <ul>
            <li><a href="index.php" >Home</a> </li>
            <li><a href="list.php" >List Users </a></li>
            <li><a href="add.php" >Add Users </a></li>
        </ul>
    </div>
</nav>

<div class="container" >
    <form action="update.php" method="post" >
        <label for="name">Name</label >
        <input type="text" name="name" id="name" value="<?php echo $nameValue ; ?>">
        <br>
        <label for="user">User</label>
        <input type="text" name="user" id="user" value="<?php echo $userValue ; ?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $id ; ?>">
        <input type="submit" value="Ok">
    </form>
</div>

</body>
    </html><?php

}else{

    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $query = $pdo->prepare($sql);

    $query->execute();

    $row = $query->fetch(PDO::FETCH_ASSOC);
    $nameValue = $row['name'];
    $userValue = $row['user'];

?>

    <html>

<head>
    <title>UpdateUser</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<nav>

    <div class="container">

        <h1>Update User</h1>
        <ul>
            <li><a href="index.php" >Home</a> </li>
            <li><a href="list.php" >List Users </a></li>
            <li><a href="add.php" >Add Users </a></li>
        </ul>
    </div>
</nav>

<div class="container" >
    <form action="update.php" method="post" >
        <label for="name">Name</label >
        <input type="text" name="name" id="name" value="<?php echo $nameValue ; ?>">
        <br>
        <label for="user">User</label>
        <input type="text" name="user" id="user" value="<?php echo $userValue ; ?>">
        <br>
        <input type="text" name="id" value="<?php echo $id  ?>">
        <input type="submit" value="Ok">
    </form>
</div>

</body>
    </html><?php

}


