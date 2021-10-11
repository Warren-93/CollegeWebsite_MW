

<!DOCTYPE html>
<!--
    Created on : 
    Author     :
-->

    
        <title>Dundee and Angus College | Code Academy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/form.css" />
          
       <!--<link rel="stylesheet" type="text/css" href="css/courses 1809 1655.css" />
        <link rel="stylesheet" type="text/css" href="css/global.css" />
        <link rel="stylesheet" type="text/css" href="css/courses.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />-->
        
        <?php require 'inc_design.php'; ?>
        
        
    
    
    <body>
       
           <?php require ("inc_header.php") ?> 
      
        

        <section class="inner container">
            <form id="login_form" name="login_form" action="attempt_login.php" method="post">
                <label for="username"><span>Username:</span></label>  
                <input type="text" name="username" id="username" />  
                <label for="password"><span>Password:</span></label>
                <input type="password" name="password" id="password" />
                <input type="submit" value="Login" />
            </form>		
        </section>
        <?php require_once ('inc_footer.php')?>	
    </body>


