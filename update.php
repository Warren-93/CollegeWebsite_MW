<?php 
    session_start();
    if(!$_SESSION['loggedIn'] && admin == true){
        ('location: admin.php');
    }
    
    $username = filter_input(INPUT_GET, 'username');
    
    include 'dbconnection.php';
    
    $sql = "UPDATE users SET admin = 'Y' WHERE username = :username ";
    
    $stmt = $pdo->prepare($sql);
    $success = $stmt->execute([
        "username" => $username
    ]);
    $count = $stmt->rowCount();
    if($success && $count = 1){
        echo "update successful";
    }else{
        echo "Failed to update";
	}
	