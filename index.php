<?php
require_once('db.php');

$pdo = require('db.php');
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);

$stmt->execute();

var_dump($sql);