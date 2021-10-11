<header>
		<a href="code_academy.php"><div id="logo"></div></a>  <!--  D&A logo and code academy image-->
		<div id="icon-block">  <!-- middle spacer before hamburger -->
		<div id="nav-mini"><div id="mini-format"></div></div>	<!-- hamburger -->
		</div>
</header>	

<div class="nano-enforcer">
	<nav class="nano">		
		<!--<a class="url" href="code_academy.php"><div class="nav-con nano-blue">Home</div></a>-->
		<a class="url" href="code_academy.php"><div class="nav-con nano-menu">Home</div></a>		
		 <?php
		if($_SESSION['loggedin']){
                            echo 
						"<a class='url' href='logout.php'><div class='nav-con nano-menu'>Logout</div></a>";
                        }
						else {
							echo
						"<a class='url' href='login.php'><div class='nav-con nano-menu'>Login</div></a>";
						}
						
		 	
		
		?>
		
		<?php
		if(($_SESSION['loggedin']) && ($_SESSION['admin_id'] = 2 || 3 )) {
                            echo 
						"<a class='url' href='admin.php'><div class='nav-con nano-menu'>Admin</div></a>";
                        }
						else {
							echo
						"<a class='url' href='registration.php'><div class='nav-con nano-menu'>Register</div></a> ";
						}
		?>
		
		                             
		<a class="url" href="https://dundeeandangus.ac.uk/"><div class="nav-con nano-menu">D&A College</div></a> 
	</nav>
</div> 
