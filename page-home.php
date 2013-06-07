<?php
/*
Template Name: Homepage
*/
global $MM_Roots;
$logo = $MM_Roots->get_setting("homepage-logo");
$primaryTagline = $MM_Roots->get_setting("primary-tagline");
$secondaryTagline = $MM_Roots->get_setting("secondary-tagline");

if ($logo == '')
{
	$logo = 'assets/img/logo_1.png?d=1';
}

?>

<section class="headertop needhead" id="header-section" style="background-position: 50% -63px;">
	<?php get_template_part('templates/header-top-navbar'); ?>

	<header class="container">
	  <div class="row-fluid">
	    <div class="wrap-hero">
	      <div class="hero-unit text-center hide">

	        <div class="logo">
	          <a href="#" title="Scroll&amp;Strap">
	            <img src="<?php echo $logo; ?>" alt="logo">
	          </a>
	        </div>
	        
	          <div class="inner-wrap-hero">
	          
	            <h1 class="text-center main-color"> 
	              
	              <span class="visible-desktop"><?php echo $primaryTagline; ?></span>
	              <span class="visible-desktop"><?php echo $secondaryTagline; ?></span>
	              
	            </h1>
	            
	          </div>

	      <span class="gobottom" id="nav2">
	          <a href="#service-offerings-section" title="">
	            <i class="icon-chevron-down icon-4x"></i>
	          </a>
	      </span>
	        
	      
	      </div>  
	    </div>
	  </div>
	</header>
</section>

<?php

/* get_template_part('templates/content', 'service-offerings');
get_template_part('templates/content', 'work');
get_template_part('templates/content', 'reviews'); */

get_template_part('templates/home-sections/section', 'listing');

?>