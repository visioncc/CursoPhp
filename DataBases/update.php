<?php
session_start();
require_once  'config.php';


$queryResult = $pdo->query("SELECT * FROM users WHERE id= " );
$row = $queryResult->fetch(PDO::FETCH_ASSOC);




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
        <input type="text" name="name" id="name" value="<?php echo $row['name'] ; ?>">
        <br>
        <label for="user">User</label>
        <input type="text" name="user" id="user" value="<?php echo $row['name'] ; ?>">
        <br>
        <input type="submit" value="Ok">
    </form>
</div>

</body>
    </html><?php
