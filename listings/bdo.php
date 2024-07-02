<?php



$sql ='SELECT * FROM users';
$stmt = $pdo->query($sql);

$allResult =$stmt->fetchAll();
