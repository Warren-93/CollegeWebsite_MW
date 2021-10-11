<?php
    include "dbconnection.php";
    session_start();
    
  //  $un = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $un = $_POST['username'];
   // $pw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $pw = $_POST['password'];
    $salt = "br14n5ux";
    $token = hash('sha1', "$salt$pw");
    
    //  Note for later - encrypt password
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $un, 'password' => $token]);

#	$stmt = $pdo->query("SELECT * FROM users WHERE username='$un' AND password='$token'");
	
	if ($countx = $stmt->rowCount() == 0){
		$_SESSION['loggedin']= false;
		$_SESSION['username']="";	
	}
	else 
	if ($row = $stmt->fetch()) {
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $row['username'];
		$_SESSION['admin_id'] = $row['admin_id'];
		header("location:code_academy.php");
	}
	
		
   /*  if($success && $stmt->rowCount() > 0){
        echo "Successfully Logged In";
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $un;		
        echo $_SESSION['loggedIn'];
        echo $_SESSION['username'];
			header("location:https://studentnet.dundeeandangus.ac.uk/~1520818/College%20Website/CollegeWebsite/code_academy.php");
    }else{
        echo "failed to login.";
        $_SESSION['loggedIn'] = false;
        $_SESSION['username'] = "";
    } */
	

	