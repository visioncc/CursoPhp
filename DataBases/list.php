<?php

session_start();

require_once  'config.php';

$queryResult = $pdo->query("SELECT * FROM users");
$row = $queryResult->fetch(PDO::FETCH_ASSOC);




?>

<html>

<head>
    <title>ListUsers</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<nav>

<div class="container">
    <h1>List Users</h1>
    <ul>
        <li><a href="index.php">Home</a> </li>
        <li><a href="add.php">Add User</a></li>
        <li><a href="update.php">Update User</a></li>
    </ul>
</div>
</nav>

<table class="table">
<tr>
    <th>Name</th>
    <th>User</th>
    <th>Edit</th>
</tr>
    <?php foreach($queryResult as $row):  ?>

    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['user']; ?></td>
        <td><a href="update.php?id='<?php echo $row['id']  ?>'">Edit</a> </td>
        <?php    ?>
    </tr>

    <?php endforeach; ?>
</table>

</body>
</html>