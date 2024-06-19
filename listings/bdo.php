<?php
$pdo = new \PDO('mysql:host=localhost;dbname=fmdh;port=3308;charset=utf8', 'root', 'dwwm_2024', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$sql ='SELECT * FROM users';
$stmt = $pdo->query($sql);

$allResult =$stmt->fetchAll();
