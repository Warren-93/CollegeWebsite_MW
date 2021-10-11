<!Doctype html><html>
<head>

<title>D&A Digital | Code Academy</title>
<?php require_once ('inc_design.php')?>

</head>
<body>
	<div id="splash">
	
		<div id="splash-container">
		<img id="splash-logo" src="images/logo/splash/logo.gif" alt="Dundee and Angus College Digital, Career Pathways" width="60%" height="auto"/>
		<img id="splash-code" src="images/logo/splash/code_academy.png" alt="Code Academy" width="55%" height="auto"/>
		</div>

	</div>
	
	<script>
	/* was 3000, 5000*/
	$(function(){
		setTimeout(function(){
			$("#splash-container").fadeOut(1000,function(){
			   window.location.href = "code_academy.php"
			})
		},2000)
	 });
	</script>
 
	
</body>
</html>