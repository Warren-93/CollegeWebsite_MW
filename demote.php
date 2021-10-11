<?php 
	include 'dbconnection.php';
	session_start();
	
if ($_SESSION['admin_id'] == 3) {
		
	if (isset($_POST['id']))
	{
		$id = $_POST['id'];
		
		$sql = "UPDATE users SET admin_id = 1 WHERE id = :id";
  
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['id' => $id]);
		header("location:admin.php"); 
	} else {
		echo "Error, failed to update.";
	}
}	
else {
	header:("location: code_academy.php");
}
?>