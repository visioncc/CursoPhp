<?php
try {
    $pdo = new PDO ("mysql:host=localhost;dbname=cursophp", "root", "tito1212");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
    echo $e->getMessage();
}
?>