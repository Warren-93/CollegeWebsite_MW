<?php 
	include 'dbconnection.php';
	session_start();
	
if ($_SESSION['Admin'] == 2 || 3) {
		
	if (isset($_POST['id']))
	{
		$id = $_POST['id'];
		
		$sql = "DELETE FROM users WHERE id = :id";
  
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