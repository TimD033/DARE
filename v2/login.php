<?php
session_start();
include('scripts/dbconfig.php');
$username = $_POST['username'];
$password = $_POST['password'];
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(!$arr) exit('No rows');
var_export($arr);
echo $arr[0]['username'];

        if ($username == $arr[0]['username'] OR $username == $arr[0]['email']) {
            
            echo 'email klopt';
        if (password_verify($password, $arr[0]['passwd'])) {
             echo 'pass klopt klopt';
                $_SESSION['user_id'] = $arr[0]['id'];
                $_SESSION['loggedin'] = true;
                
            $codes = '    <script>
        
        
window.location.replace("main.php");
        </script>';
            }
        }
    
    
$stmt = null;
?>

<html>
    <head>
    
    </head>
    <body>
        <?php 
        
        echo $codes;
        
        ?>
    </body>
    
</html>