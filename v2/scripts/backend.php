<?php
session_start();
include "dbconfig.php";








$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo $arr[0]['username'];


    
    
$stmt = null;





?>