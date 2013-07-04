<?php
/*
Template Name: Homepage
*/
global $MM_Roots;

?>

<section id="feature_slider" class="">
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
    <article class="slide" id="showcasing" style="background: url('assets/img/backgrounds/landscape.png') repeat-x top center;">
        <img class="asset left-30 sp600 t120 z1" src="assets/img/slides/scene1/macbook.png" />
        <div class="info">
            <h2>Beautiful theme for showcasing your works.</h2>
        </div>
    </article>
    <article class="slide" id="ideas" style="background: url('assets/img/backgrounds/aqua.jpg') repeat-x top center;">
        <div class="info">
            <h2>We love to turn ideas into beautiful things.</h2>
        </div>
        <img class="asset left-480 sp600 t260 z1" src="assets/img/slides/scene2/left.png" />
        <img class="asset left-210 sp600 t213 z2" src="assets/img/slides/scene2/middle.png" />
        <img class="asset left60 sp600 t260 z1" src="assets/img/slides/scene2/right.png" />
    </article>
    <article class="slide" id="tour" style="background: url('assets/img/backgrounds/color-splash.jpg') repeat-x top center;">
        <img class="asset left-472 sp650 t210 z3" src="assets/img/slides/scene3/ipad.png" />
        <img class="asset left-365 sp600 t270 z4" src="assets/img/slides/scene3/iphone.png" />
        <img class="asset left-350 sp450 t135 z2" src="assets/img/slides/scene3/desktop.png" />
        <img class="asset left-185 sp550 t220 z1" src="assets/img/slides/scene3/macbook.png" />
        <div class="info">
            <h2>Fully Responsive theme</h2>
            <a href="features.html">TOUR THE PRODUCT</a>
        </div>
    </article>
    <article class="slide" id="responsive" style="background: url('img/backgrounds/indigo.jpg') repeat-x top center;">
        <img class="asset left-472 sp600 t120 z3" src="assets/img/slides/scene4/html5.png" />
        <img class="asset left-190 sp500 t120 z2" src="assets/img/slides/scene4/css3.png" />
        <div class="info">
            <h2>
                Responsive <strong>HTML5 & CSS3</strong>
                Theme
            </h2>                
        </div>
    </article>        
</section>

<?php if ($MM_Roots->get_setting('jumbotron_category')) get_template_part('templates/content', 'jumbotron'); ?>
<?php if ($MM_Roots->get_setting('service_category')) get_template_part('templates/content', 'services'); ?>
<?php if ($MM_Roots->get_setting('testimonial_category')) get_template_part('templates/content', 'testimonials'); ?>
<?php if ($MM_Roots->get_setting('news_category')) get_template_part('templates/content', 'news'); ?>