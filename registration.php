<?php
session_start();
?>

<!DOCTYPE html
<html>
    <head>
       <title>Dundee and Angus College | Code Academy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/form.css" />
        
        <!--<link rel="stylesheet" type="text/css" href="css/courses 1809 1655.css" />
        <link rel="stylesheet" type="text/css" href="css/global.css" />
        <link rel="stylesheet" type="text/css" href="css/courses.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />-->
        <?php
		require "inc_design.php";
		?>
    </head>
    <body>
        <?php require "inc_header.php" ?>
        
        <section class="inner container">
            <form id="registration" name="registration" action="attempt_register.php" method="POST">
                
				<input type="text" name="username" id="username" placeholder="Username"/> </br>
                <input type="text" name="fname" id="fname" placeholder="First Name"/>  </br>
                <input type="text" name="lname" id="lname" placeholder="Last Name"/> </br>
                <input type="password" name="password" id="password" placeholder="Password" /> </br>
                <input type="submit" value="Submit"/>
            </form>		
        </section>
        <?php require_once ('inc_footer.php')?>	
    </body>
</html>
