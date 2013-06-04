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
	jQuery('#menu-primary-navigation').localScroll(1000);
	jQuery('#nav2').localScroll(1000);
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	jQuery('#header-section').parallax("50%", 0.1);
	jQuery('#service-offerings-section').parallax("50%", 0.1);
	jQuery('#about-us-section').parallax("50%", 0.1);
	jQuery('.bg').parallax("50%", 0.3);
	jQuery('#reviews-section').parallax("50%", 0.3);
	jQuery('#footer').parallax("50%", 0.1);	
});

jQuery('#NeedWorkDone .parallax-point-event').bind('inview', function (event, visible) {
        if (visible == true) {
            jQuery('.work-shot').addClass("active");
        }else{
            jQuery('.work-shot').removeClass("active");
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


/***************************************************
responsive menu
***************************************************/

jQuery(function (jQuery) {
    jQuery("#main-nav").append("<select/>");
    jQuery("<option />", {
        "selected": "selected",
        "value": "",
        "text": "Choose section"
    }).appendTo("#main-nav select");
    //new dropdown menu
    jQuery("#main-nav a").each(function () {
        var el = jQuery(this);
        var perfix = '';
        switch (el.parents().length) {
            case (11):
                perfix = '-';
                break;
            case (13):
                perfix = '--';
                break;
            default:
                perfix = '';
                break;

        }
        jQuery("<option />", {
            "value": el.attr("href"),
            "text": perfix + el.text()
        }).appendTo("#main-nav select");
    });

    jQuery('#main-nav select').change(function () {

        window.location.href = this.value;

    });
});