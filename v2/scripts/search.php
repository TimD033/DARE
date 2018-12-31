<?php

include "dbconfig.php";

$searchquery = $_POST["query"];
$type = $_POST["type"];



switch ($type) {
    case 'user':
        $query = 'SELECT username, id FROM users WHERE username LIKE ?';
        break;
    case 'challenge':
        $query = 'SELECT title, userid FROM challanges WHERE title LIKE ?';
        break;

}


$stmt = $conn->prepare($query);
$stmt->execute(['%'. $searchquery .'%']);
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($arr);

$stmt = null;





?>