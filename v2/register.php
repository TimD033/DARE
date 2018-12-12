<?php
session_start();
include "scripts/dbconfig.php";


$username = $_POST['username'];
    
   
    

    try {
    

        
        
        
        
        $stmt = $conn->prepare("INSERT INTO users (username, passwd, email, fullname, verified, emailcode) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$_POST['username'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['mail'], $_POST['name'], 0, 'nvt']);
$stmt = null;
        
        
        
        $id = $conn->lastInsertId();
        
        $_SESSION['user_id'] = $id;

$codes = '    <script>
        
        
window.location.replace("main.php");
        </script>';

    }
    
    
    
    catch (PDOException $e) {
    
        
        echo 'mislukt a niffo';
    if ($e->errorInfo[1] == 1062) {

    }
    
    else {}
        
    }
    
    



?>



<html>

    <head>
    </head>

    <body>

        <?php echo $codes; ?>

    </body>



</html>