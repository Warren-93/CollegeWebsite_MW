<?php

include 'dbconnection.php';

//$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$fname = $_POST['fname'];
//$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$lname = $_POST['lname'];
//$un = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$un = $_POST['username'];
//$pw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$pw = $_POST['password'];

$salt = "br14n5ux";
//$pw = $salt .$pw;
//$pw = $sha1($pw);
$token = hash('sha1', "$salt$pw");


//  Setup our SQL

$query = "INSERT INTO tb_users (fname, lname, username, password)
            VALUES ( :fname, :lname, :username, :password )";

//  Prepare the statement
$stmt = $pdo->prepare($query);

//  Bind values and execute
$success = $stmt->execute([
    'fname' =>  $fname,
    'lname'  =>  $lname,
    'username' =>  $un,
    'password' => $token
]);

//  Check successful binding and
//  that affected rows is greater than none
//  Output corresponding result.

/*if($success && $stmt->rowCount() > 0){
    echo "Inserted Successfully.";
}else{
    echo "There has been an error:";
    }*/
    
$count = $stmt->rowCount();
if($success){
    echo "Registration successful";
	header("location:https://studentnet.dundeeandangus.ac.uk/~1520818/College%20Website/CollegeWebsite/code_academy.php");
}else{    
    echo $stmt->errorInfo()[2];
}