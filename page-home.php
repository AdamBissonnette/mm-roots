<?php
/*
Template Name: Homepage
*/
global $MM_Roots;

?>

<section id="feature_slider">
    <!-- 
        Each slide is composed by <img> and .info
        - .info's position is customized with css in index.css
        - each <img> parallax effect is declared by the following params inside its class:
        
        example: class="asset left-472 sp600 t120 z3"
        left-472 means left: -472px from the center
        sp600 is speed transition
        t120 is top to 120px
        z3 is z-index to 3
        Note: Maintain this order of params

        For the backgrounds, you can combine from the bgs folder :D
    -->
    <article class="slide" id="showcasing" style="background: url('assets/img/cc/backgrounds/landscape.png') repeat-x top center;">
        <img class="asset left-30 sp800 t80 z1" src="assets/img/Kick.png" />
        <div class="info">
            <h2>Beautiful theme for showcasing your works.</h2>
        </div>
    </article>
	<article class="slide" id="showcasing" style="background: url('assets/img/cc/backgrounds/landscape.png') repeat-x top center;">
        <img class="asset left-30 sp800 t80 z1" src="assets/img/Kick.png" />
        <div class="info">
            <h2>Beautiful theme for showcasing your works.</h2>
        </div>
    </article>     
</section>

<?php /* if ($MM_Roots->get_setting('jumbotron_category')) get_template_part('templates/content', 'jumbotron'); */ ?>
<?php if ($MM_Roots->get_setting('service_category')) get_template_part('templates/content', 'services'); ?>
<?php if ($MM_Roots->get_setting('testimonial_category')) get_template_part('templates/content', 'testimonials'); ?>
<?php if ($MM_Roots->get_setting('news_category')) get_template_part('templates/content', 'news'); ?>