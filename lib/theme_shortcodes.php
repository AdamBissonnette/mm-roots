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
     
     /* 
     Load content "blurb" from a given post or page
     $postFormat = '%s <a href="%s">Read More</a>';
     
     if ($postid != '')
     {
     	$content = sprintf($postFormat, get_post_meta($postid, "blurb", true), get_permalink($postid));
     } */
     
     $output .= "</div></div></div>"; //break out of the current span
     $output .= '<section class="section-content' . $sectionColor . '" id="section-' . $titleSlug . '">
					<div class="container">
					  <h2 class="section-title">' .
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