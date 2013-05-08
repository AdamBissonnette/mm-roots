<?php

function section_block ( $atts, $content="" ) {
	extract( shortcode_atts( array(
	      'color' => '',
	      'title' => '',
	      'tagline' => '',
	      'postid' => ''
     ), $atts ) );
     
     $titleSlug = str_replace(" ", "-", strtolower($title));
     
     $taglineOutput = "";
     if ($tagline != '') {
	     $taglineOutput = sprintf(" <small>%s</small>", $tagline);
     }
     
     $sectionColor = "";
     if ($color != '') {
	     $sectionColor = sprintf(" section-color-%s", $color);
     }
     $output .= "</div></div></div>"; //break out of the current span
     $output .= '<section class="section-content' . $sectionColor . '" id="section-' . $titleSlug . '">
					<div class="container">
					  <h2 class="section-' . $titleSlug . '">' .
						$title .
						$taglineOutput .
					  '</h2>
					  <div class="row block-content"><div class="span12">' .
						$content
					  .'</div>
					</div></div>
				</section>';
	 $output .= '<div class="container">
      <div class="row">
        <div class="span12">
          ';
     
     return $output;
}
add_shortcode( 'section_block', 'section_block' );

?>