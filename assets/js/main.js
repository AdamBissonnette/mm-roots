jQuery(document).ready(function($) {
	$('#send').click(function(e) {
		e.preventDefault();
		if (ValidateForm("form#mail"))
		{
			SendMessage(jQuery("form#mail"));
		}
	});

	$('#terms').hide();
	$('#honey').hide();

	// ------------------------------------
	// FitVids
	// ------------------------------------
	$(".fitvids").fitVids();
});

function SendMessage(form)
{
	var formdata = jQuery(form).serializeArray()
	jQuery.post ('../wp-admin/admin-ajax.php',
		 { 'action':'do_ajax', 'fn':'contact', 'count':10, contact:formdata },
		  function(data){FinalizeSend(data)},
		   "json");
}



function FinalizeSend(data)
{
	ShowModal('Message Sent!', '<p>Your message has been sent.  We will be in touch shortly!</p>');

	document.getElementById('mail').reset()
}

jQuery(document).ready(function(){
	jQuery('#nav').localScroll(1000);
	jQuery('#nav2').localScroll(1000);
	jQuery('#nav3').localScroll(1000);
	jQuery('#nav4').localScroll(1000);
	jQuery('#nav5').localScroll(1000);
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	jQuery('#header-section').parallax("50%", 0.1);
	jQuery('#features-section').parallax("50%", 0.1);
	jQuery('#team-section').parallax("50%", 0.1);
	jQuery('.bg').parallax("50%", 0.3);
	jQuery('#portfolio-section').parallax("50%", 0.3);
	jQuery('#price-section').parallax("50%", 0.3);
	jQuery('#contact-section').parallax("50%", 0.1);
	jQuery('#slogan-section-1').parallax("50%", 0.3);
	
});

jQuery('#features-section .parallax-point-event').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.effect-box-1').addClass("active");
			jQuery('.effect-box-2').addClass("active");
			jQuery('.effect-box-3').addClass("active");
			jQuery('.effect-box-4').addClass("active");
			
        }else{
            jQuery('.effect-box-1').removeClass("active");
			jQuery('.effect-box-2').removeClass("active");
			jQuery('.effect-box-3').removeClass("active");
			jQuery('.effect-box-4').removeClass("active");
		
			//jQuery('.effect-box').unbind('inview');
        }
    });

jQuery('#slogan-section-1').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.large-slogan').addClass("active");
		 }else{
            jQuery('.large-slogan').removeClass("active"); 	
        }
    });

jQuery('#slogan-section-2 .parallax-point-event').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.browser-shot-1').addClass("active");
			jQuery('.browser-shot-2').addClass("active");
			jQuery('.browser-shot-3').addClass("active");
			
        }else{
            jQuery('.browser-shot-1').removeClass("active"); 
			jQuery('.browser-shot-2').removeClass("active");
			jQuery('.browser-shot-3').removeClass("active");
			
        }
    });

jQuery('#slogan-section-3').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.goprice').addClass("active");
		}else{
            jQuery('.goprice').removeClass("active"); 	
        }
    });

jQuery('#header-section').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.gobottom').addClass("active"); 
			jQuery('.hero-unit h1 span').addClass("active");
			
        }else{
            jQuery('.gobottom').removeClass("active");  
			jQuery('.hero-unit h1 span').removeClass("active"); 
			
			
        }
    });

var hero = jQuery('#header-section .hero-unit');
jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 550) {
			hero.addClass("hide");	
		} else {
			hero.removeClass("hide");	
		}
	});

var navbar = jQuery('#navbartop');
var navbartop = jQuery('#topnavbar');
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 640) {
		
			navbar.addClass("navbar-scroll");
			navbartop.removeClass("navbar-static-top");
			navbartop.addClass("navbar-fixed-top");
			
		} else {
			navbar.removeClass("navbar-scroll");
			navbartop.removeClass("navbar-fixed-top");
			navbartop.addClass("navbar-static-top");
		}
});