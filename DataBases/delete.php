<?php
include_once 'config.php';

$id = $_GET['id'];

echo $id ;

$sql = 'DELETE FROM `users` WHERE `users`.`id`=:id  ';
$query = $pdo->prepare($sql);
$query->execute([
    'id' => $id

]);

header("Location:list.php") ;