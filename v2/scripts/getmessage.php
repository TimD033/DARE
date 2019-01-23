<?php
session_start();

include "dbconfig.php";

$searchquery = $_GET["query"];





$query = 'select username as `from`, message, time, opened from users inner join message on users.id = message.from_id where message.to_id = ?';




$stmt = $conn->prepare($query);
$stmt->execute([$_SESSION['user_id']]);
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($arr);

$stmt = null;





?>