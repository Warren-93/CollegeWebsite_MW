<?php
	include "dbconnection.php";
	session_start();
 ?>
<html>
    <head>
 
		<title>Dundee and Angus College | Code Academy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
       
        <?php
			require "inc_header.php"; 
			include "inc_design.php";
		?>
    <body>

		<section class='inner container'>
            <section class='inner container'>
			
<?php
		$result = $pdo->query('SELECT * FROM users WHERE admin_id <= 2');
				
		echo "<br><br><br><br><br><br><br><table><tr><th>id</th><th>User</th><th>Name</th><th>Surname</th><th>Delete</th><th>Admin</th></tr>";
				
		foreach ($result as $row)
		{
		$id = $row['id'];
				
			echo "<tr>";
			echo "<td>" . $id . "</td>";
			echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['fname'] . "</td>";
			echo "<td>" . $row['lname'] . "</td>";
				
			echo "<td><form action='delete.php' method='post'>";
			echo "<input type='hidden' name='id' value='$id'>";
			echo "<input type='submit' value='Delete' class=''></td></form>";
				
			if($row['admin_id'] == 2){
				echo "<td><form action='demote.php' method='post'>";
				echo "<input type='hidden' name='id' value='$id'>";
				echo "<input type='submit' value='Demote' class=''></td></form>";
			}else if($row['admin_id'] == 1) {
				echo "<td><form action='promote.php' method='post'>";
				echo "<input type='hidden' name='id' value='$id'>";
				echo "<input type='submit' value='Promote' class=''></td></form>";
			}
			echo "</tr>";
		}
			echo "</table>";
			
?>
			
<!--				<form id='admin' name='admin_form' action='update.php' method 'get'>
					<label for='username'><span>Username:</span></label>  
					<input type='text' name='username' id='username' />  
					<input type='submit' value='update' />
				</form>
-->				
			</section>
        </section>

		
		
       
    </body>
	
	 
</html>
