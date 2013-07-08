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
    <article class="slide" id="home" style="background: url('assets/img/cc/backgrounds/indigo.jpg') repeat-x top center;">
        <div class="info">
            <img class="asset left-0 sp800 t40 z1" src="assets/img/footer-logo.png" />
            <div class="row">                
                <div class="span5">
                    <h2>Unified TaeKwon-Do<br /> International</h2>
                    <?php
                        $atts = array("title" => "Join Us");
                        echo ButtonLink($atts);
                    ?>
                </div>
            </div>
        </div>
    </article>
    <article class="slide" id="home" style="background: url('assets/img/cc/backgrounds/landscape.png') repeat-x top center;">
        <div class="info container">
            <img class="asset left-0 sp800 t40 z1" src="assets/img/footer-logo.png" />
            <div class="row">                
                <div class="span5">
                    <h2>Bringing TaeKwon-Do Styles Together Since 1989.</h2>
                    <?php
                        $atts = array("title" => "Join Us");
                        echo ButtonLink($atts);
                    ?>
                </div>
            </div>
        </div>
    </article>
</section>

<section class="section-content section-services" id="section-services">
    <div class="container">
      <div class="row">
        <div class="span4">
          <h4 class="section-title">
            About Unified TaeKwon-Do (UTI)
          </h4>
          <p>UTI is a non-political international organization dedicated to the continuing development and evolution of TaeKwon-Do.</p>

          <a class="btn btn-primary" href="#">Learn More</a>
        </div>
        
        <div class="span4">
          <h4 class="section-title">
            Become a Member
          </h4>
          <p>Key benefits include Access to UTI Rank Examination, Seminars, Tournaments, Instructional Resources and More!</p>

          <a class="btn btn-primary" href="#">Join Today</a>
        </div>

        <div class="span4">
          <h4 class="section-title">
            Meet the President
          </h4>
          <p>Grand Master Scott Luther Kopperud is an 8th Dan Black-Belt Grand Master committed to continuing the development of TaeKwon-Do.</p>

          <a class="btn btn-primary" href="#">Learn More</a>
        </div>
      </div>
    </div>
</section>


<section class="section-content section-services" id="section-services">
    <div class="container">
      <div class="row">
        <div class="span4">
          <h4 class="section-title">Member Resources</h4>
          <ul>
            <li><a href="#">Members Forum</a></li>
            <li><a href="#">Site Management</a></li>
            <li><a href="#">Book a Seminar</a></li>
            <li><a href="#">Training Manuals</a></li>
            <li><a href="#">Training Videos</a></li>
            <li><a href="#">Frequently Asked Questions</a></li>
          </ul>

        </div>
        
        <div class="span4">         
          <h4 class="section-title">Upcoming Seminars</h4>

          <ul>
            <li><a href="#">September 17th 2013: Lisbon, Germany</a></li>
          </ul>

          <ul>
            <li><a href="#">September 25th 2013: Ankara, Turkey</a></li>
          </ul>

          <ul>
            <li><a href="#">October 25th 2013: Camrose, Alberta</a></li>
          </ul>

          <ul>
            <li><a href="#">November 7th 2013: Kapolei Hale, Hawaii</a></li>
          </ul>

          
        </div>

        <div class="span4">
            <h4 class="section-title">Book a Seminar</h4>
            <p>Register an official UTI seminar to increase membership and visibility throughout the international community.</p>
            <a class="btn btn-primary" href="#">Book Today</a>
        </div>
    </div>
    </div>
</section>

<section class="section-content section-services" id="section-services">
    <div class="container">
        <div class="row">
              <div class="span4">
        <h4 class="section-title">Newsletter</h4>
          <p>
            Subscribe to our Newsletter!<br />
            Email: <input class="span2" type="text" /> <input class="btn btn-primary" type="button" value="Go" />
          </p>
      </div>
      <div class="span8">
        <h2 class="section-title">
            News and Events
        </h2>

        <p>
            September 7th, 2013 - Scott K.<br />
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lobortis ligula sed eros laoreet porttitor. Maecenas ac orci condimentum, tempus quam non, semper enim. Nulla tristique elit urna. Curabitur a tempus enim. Cras quis semper tortor. Vivamus gravida in sapien nec convallis. Suspendisse tortor libero, sodales sit amet augue tristique, pharetra volutpat sapien. Phasellus hendrerit erat tortor, eu ornare mauris dapibus eu. Donec lorem risus, venenatis vel consectetur vitae, suscipit quis tortor. Mauris vitae pellentesque sapien, vel gravida dui. Fusce sagittis risus felis, a ultrices ligula elementum ut.


        </p>

      </div>
    </div>
</div>
</section>



<?php /* if ($MM_Roots->get_setting('jumbotron_category')) get_template_part('templates/content', 'jumbotron'); */ ?>
<?php if ($MM_Roots->get_setting('service_category')) get_template_part('templates/content', 'services'); ?>
<?php if ($MM_Roots->get_setting('testimonial_category')) get_template_part('templates/content', 'testimonials'); ?>
<?php if ($MM_Roots->get_setting('news_category')) get_template_part('templates/content', 'news'); ?>