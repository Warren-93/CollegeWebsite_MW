<?php 
    session_start();
?>
<html>
<head>

<?php require_once ('inc_design.php')?>
<link rel="stylesheet" type="text/css" href="css/courses.css" /><!-- Page Specific CSS -->
<link rel="stylesheet" type="text/css" href="css/grid.css" />


<title>Dundee and Angus College | Code Academy</title>

</head>
<body>	
<?php require ("inc_header.php") ?>
<main>

	<section id="career_pathways" class = "CA_section">
	<!-- Career Pathways -->
	<h1 class="head1main">Courses</h1>
	<div class="section-header-180"></div>

<!-- Main Nav -->    
        
        <div class="Grid">            
			
			<!--<section id="course_nats"> <!-- note: course_nats, cn, title-bar icon-nats-s, hide-icon used in Javascript-->
				<div id="cn" class="title-bar nano-blue">
					<div class = "title">Networking and Technical Support </div>
					<div id="arrow_net" class="arrow_all">V</div>
				</div>	
				<div id="nats">
					<div class="course_blue course_submenu">
						<div id="n_content" class="course_content">Course<br/>content</div>
						<div id="n_career" class="career_oppertunities">Careers</div>
						<div id="n_university" class="univercity_links">University<br/>links</div>
						<div id="n_sample" class="sample_work">Student<br/>Projects</div><!-- Jquery Gallery / Link to active Work, opens in new windows -->
					</div>
					
					<div id="nats_content"></div>
					<div id="nats_career_oppertunities"></div>
					<div id="nats_univercity_links"></div>
					<div id="nats_sample_work"></div>
		
				</div>
			<!--</section>-->
			
				<!-- Course | Software development-->
		<!--<section id="course_sd">-->
		<div id="csd" class="title-bar nano-green">
		<div class= "title">Software Development</div> 
		<div id="arrow_sd" class="arrow_all">V</div>
		</div>
		<div id="sd">
		<div class="course_green course_submenu">
			<div id="s_content" class="course_content">Course<br/>content</div>
			<div id="s_career" class="career_oppertunities">Careers</div>
			<div id="s_university" class="univercity_links">Testimonials<br/>links</div>
			<div id="s_sample" class="sample_work">Sample<br/>Work</div>	
		</div>
		<div id="sd_content" class="contentlist"> <!-- this section will show each unit and what content is delivered-->
		    <script>
			     function showUnitDetail(detailNo){
				    var det;
				    det = document.getElementsByClassName("unitDetail")[detailNo];
				   
				   det.style.display = "inline";
				 }
				 function hideUnitDetail(detailNo){
				    var det;
				    det = document.getElementsByClassName("unitDetail")[detailNo];
				   
				   det.style.display = "none";
				 }
			</script>
			
			<div class = "unit">
			<div class = "unitName" onClick="showUnitDetail(0);">Developing Software Introduction</div>
			<div class = "unitDetail" onClick ="hideUnitDetail(0);">
			Introductory Programming unit using the Java language. This unit is designed
			to help students to understand the fundamental aspects of programming, using the Netbeans
			IDE we develop and progress skills in standard programming constructs, functions, parameter passing and of course testing as you go along.
			We also delve into some GUI for the more advanced.  This is not necessary but gives a bit extra if you have already done some JAVA.
			<div class = "unitImages">
     		<div class = "unitImagesInd"><img src = "images/courses/java/netbeansLogo.png" /></div>
			<div class = "unitImagesInd"><img src = "images/courses/java/simpleCode2.PNG" /></div>
			</div>
			</div>
			</div>
			
            <div class = "unit">
			<div class = "unitName" onClick="showUnitDetail(1);">Software Development: Programming Foundations</div>
			<div class = "unitDetail" onClick ="hideUnitDetail(1);">
			Follow on Programming unit using the Java language. This unit is designed
			to help students understand common standard algorithms and learn about object oriented concepts in programming.
			This is a good base for moving onto second year and helps to consolidate the learning in the first Java unit.  Our main aim is to get you good at coding and problem solving.
			<div class = "unitImages">
     		<div class = "unitImagesInd"><img src = "images/courses/java/objectBegin.png" /></div>
			<div class = "unitImagesInd"><img src = "images/courses/java/algorithms.PNG" /></div>
			
			</div>
			</div>
			</div> 
			
			<div class = "unit">
			<div class = "unitName" onClick="showUnitDetail(2);">Professionalism and Ethics in Computing</div>
			<div class = "unitDetail" onClick ="hideUnitDetail(2);">
			This Unit is designed to provide candidates with a knowledge and understanding of professional issues, including contemporary legislation, and ethical considerations for those fulfilling a computing related role within the workplace. This Unit is intended for candidates whose aim is to follow a career, or are currently following a career, as a computing professional to ensure work duties are carried out responsibly.
			<div class = "unitImages">
     		<div class = "unitImagesInd"><img src = "images/courses/ethics/bcs.png" /></div>
			<div class = "unitImagesInd"><img src = "images/courses/ethics/copy.jpg" /></div>
			</div>
			</div>
			</div>

			<!--Computer Systems Fundamentals<hr/>
			Troubleshooting Computing problems<hr/>
			Team working in Computinghr<hr/>
			Computing: Graded Unit Exam<hr/>
			Relational Database Management Systems<hr/>
		    Developing Mobile Web Based Applications: An Introduction<hr/>
			Systems Development: User Centred Design<hr/>
        	
            Systems Development: Introduction<hr/>
            Mobile Technology<hr/>
  			Human Computer Interaction-->
		</div>
		<div id="sd_career_oppertunities">
		    <div class = "career-container">
		    <div class="career-item"><img src="sdCareers/Programmer.jpg"/>Programmer</div>
			<div class="career-item"><img src="sdCareers/Programmer.jpg"/><br/>DB Analyst</div>
			<div class="career-item"><img src="sdCareers/businessAnalystW.jpg"/></div> 
			<div class="career-item"><img src="sdCareers/Programmer.jpg"/><br/>PHP Developer</div>
			<div class="career-item"><img src="sdCareers/Programmer.jpg"/><br/>Data Scientist</div>  
			<div class="career-item"><img src="sdCareers/projectManager.jpg"/></div>
			<div class="career-item"><img src="sdCareers/Programmer.jpg"/><br/>Software Developer</div>
			<div class="career-item"><img src="sdCareers/Programmer.jpg"/><br/>Web Developer</div>
			<div class="career-item"><img src="sdCareers/tester2.jpg"/></div>
			<div class="career-item"><img src="sdCareers/Programmer.jpg"/><br/>Test Engineer</div>
			<div class="career-item"><img src="sdCareers/Programmer.jpg"/><br/>Software Trainer</div>
		    </div> 
		</div>
		<div id="sd_testimonials"><!--  was called sd_univercity_links -->
		<div class = "sd_test">
		"This course has been a great challenge and I have enjoyed every moment of it."</br>
		<div class = "student">1st Year student - moving on to year 2 - no previous computing experience.</div>
		</div>
		<div class = "sd_test">
		"I applied to study an HND in Software Development at Dundee and Angus College, 
		as my school did not have the facilities to run an Advanced Higher in Computing. 
		It was absoutely the right decision to make, as I found that the work given to us by lecturers was up to date with industry standards, 
		as well as being challenging and demanding. 
		The teaching staff were, accross the board, wholly invested in our learning, providing help and assistance whenever it was needed. 
		The course is intense in its workload, but staff made it their job to give students all the important resources to complete assignments 
		and prepare for exams. My experience as a D&A student has been filled with positive memories and was definitely the most productive decision
		I could have made to further my education."<br/>
		<div class ="student">2nd Year Student - moving on to study Software Engineering Year 3.</div> 
		</div>


		</div>
		<div id="sd_sample_work"></div>
	</div>
	

	<!--</section>-->
	
		
		<!-------------------------- Course | Games development ------------------------------->
	<!--<section id="course_gd">-->
	<div id="cgd" class="title-bar nano-purple">
	<div class= "title">Games Development</div> 
	   <div id="arrow_games" class="arrow_all">V</div>
	</div>
	<div id="gd">
		<div class="course_purple course_submenu">
			<div class="course_content">Course<br/>content</div>
			<div class="career_oppertunities">Careers</div>
			<div class="univercity_links">University<br/>links</div>
			<div class="sample_work">Student<br/>Projects</div>
		</div>
	</div>

	<!--</section>-->	

	
	<!-- Course | Computer science-->
	<!--<section id="course_cs">-->
	<div id="ccs" class="title-bar nano-orange">
	   <div class= "title">Computer Science</div> 
	   <div id="arrow_cs" class="arrow_all">V</div>
	</div>
	<div id="cs">
		<div class="course_orange course_submenu">
		<div class="course_content">Course <br/>Content</div>
		<div class="career_oppertunities">Careers</div>
		<div class="univercity_links">University<br/>links</div>
		<div class="sample_work">Student<br/>Projects</div>
		</div>
	</div>
	

	<!--</section>	-->

	
	<!-- Course | digital design & web development -->
	<!--<section id="course_ddwd">-->
	<div id="cddwd" class="title-bar nano-pink">
	<div class= "title">Digital Design and Web Development</div> 
	   <div id="arrow_wd" class="arrow_all">V</div>
	</div>
	<div id="ddwd">
		<div class="course_pink course_submenu">
			<div class="course_content">Course content</div>
			<div class="career_oppertunities">Career opportunities</div>
			<div class="univercity_links">University links</div>
			<div class="sample_work">Student Projects</div>	
		</div>
	</div>
	

	<!--</section>	-->
</div>

	
</main>
 
<?php require_once ('inc_footer.php')?>	

</body>
</html>
	
					
        
			