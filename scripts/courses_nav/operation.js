// Networking and Technical Support  ---------------------------------------------------------------------
$(document).ready(function(){
    $("#cn").click(function(){
        $("#nats").slideToggle(800);		
		$("#sd").slideUp(800);	
		$("#gd").slideUp(800);
		$("#cs").slideUp(800);
		$("#ddwd").slideUp(800);
    });
});

/* NATS | Content */
$(document).ready(function(){
	$("#n_content").click(function(){
		$("#nats_content").fadeIn(0);
		$("#nats_career_oppertunities").fadeOut(0);
		$("#nats_univercity_links").fadeOut(0);
		$("#nats_sample_work").fadeOut(0);
		
    });
});

/* NATS | Career oppertunities */
$(document).ready(function(){
	$("#n_career").click(function(){
		$("#nats_content").fadeOut(0);
		$("#nats_career_oppertunities").fadeIn(0);
		$("#nats_univercity_links").fadeOut(0);
		$("#nats_sample_work").fadeOut(0);		
    });
});

/* NATS | University links */
$(document).ready(function(){
	$("#n_university").click(function(){
		$("#nats_content").fadeOut(0);
		$("#nats_career_oppertunities").fadeOut(0);
		$("#nats_univercity_links").fadeIn(0);
		$("#nats_sample_work").fadeOut(0);		
    });
});

/* NATS | Sample Work */
$(document).ready(function(){
	$("#n_sample").click(function(){
		$("#nats_content").fadeOut(0);
		$("#nats_career_oppertunities").fadeOut(0);
		$("#nats_univercity_links").fadeOut(0);
		$("#nats_sample_work").fadeIn(0);		
    });
});




// Software Development --------------------------------------------------------------
$(document).ready(function(){
    $("#csd").click(function(){
     	$("#nats").slideUp(800);
		$("#sd").slideToggle(800);
		$("#gd").slideUp(800);
		$("#cs").slideUp(800);
		$("#ddwd").slideUp(800);
   	//Added ---------------------------------------------------------------------
		$("#sd_content").fadeIn(0);
		$("#sd_career_oppertunities").fadeOut(0);
		$("#sd_testimonials").fadeOut(0);
		$("#sd_sample_work").fadeOut(0);
		
    });
});

/* SD | Content added */
$(document).ready(function(){
	$("#s_content").click(function(){
		$("#sd_content").fadeIn(0);
		$("#sd_career_oppertunities").fadeOut(0);
		$("#sd_testimonials").fadeOut(0);
		$("#sd_sample_work").fadeOut(0);
		
    });
});

/* SD | Career oppertunities */
$(document).ready(function(){
	$("#s_career").click(function(){
		$("#sd_content").fadeOut(0);
		$("#sd_career_oppertunities").fadeIn(0);
		$("#sd_testimonials").fadeOut(0);
		$("#sd_sample_work").fadeOut(0);		
    });
});

/* SD | University links */
$(document).ready(function(){
	$("#s_university").click(function(){
		$("#sd_content").fadeOut(0);
		$("#sd_career_oppertunities").fadeOut(0);
		$("#sd_testimonials").fadeIn(0);
		$("#sd_sample_work").fadeOut(0);		
    });
});

/* SD | Sample Work */
$(document).ready(function(){
	$("#s_sample").click(function(){
		$("#sd_content").fadeOut(0);
		$("#sd_career_oppertunities").fadeOut(0);
		$("#sd_testimonials").fadeOut(0);
		$("#sd_sample_work").fadeIn(0);		
    });
});



// Games Development -------------------------------------------------------------------------------------
$(document).ready(function(){
    $("#cgd").click(function(){
		$("#nats").slideUp(800);
     	$("#sd").slideUp(800);
		$("#gd").slideToggle(800);
		$("#cs").slideUp(800);
		$("#ddwd").slideUp(800);
   });
});

// Computer Science ----------------------------------------------------------------------------------
$(document).ready(function(){
    $("#ccs").click(function(){
		$("#nats").slideUp(800);
		$("#sd").slideUp(800);
		$("#gd").slideUp(800);
		$("#cs").slideToggle(800);
		$("#ddwd").slideUp(800);
    });
});

// Digital Design & Web Development
$(document).ready(function(){
    $("#cddwd").click(function(){
		$("#nats").slideUp(800);
		$("#sd").slideUp(800);
		$("#gd").slideUp(800);
		$("#cs").slideUp(800);
		$("#ddwd").slideToggle(800);
    });
});