<?php

include "dbconfig.php";
$type = 'user';
$query = $_POST["query"];



switch ($type) {
    case 'user':
        $istype = 'users';
        break;
    case 'challenge':
        $istype = 'challanges';
        break;

}


$stmt = $conn->prepare('SELECT username, id FROM '. $istype .' WHERE username LIKE ?');
$stmt->execute(['%'. $query .'%']);
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($arr);

$stmt = null;





?>