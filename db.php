<?php

$host = "localhost";
$dbname = "whatsapp";
$usr = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $usr, $pass);    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}