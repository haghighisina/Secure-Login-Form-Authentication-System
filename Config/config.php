<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$db = new PDO('mysql:host=localhost;dbname=login', 'root', '');

$stat = $db->prepare("SELECT * FROM users");
$stat->execute();

$rows = $stat->fetchAll(PDO::FETCH_ASSOC);

//foreach ($rows as $row)
//{
//    echo $row['user_username'];
//}