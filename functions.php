<?php 

function query($sql) {
    global $conn;
    // execute query
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all rows
    $result = $stmt->fetchAll();
    return $result;
}