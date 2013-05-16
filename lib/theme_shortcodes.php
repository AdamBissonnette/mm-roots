<?php

function section_block ( $atts, $content="" ) {
	extract( shortcode_atts( array(
	      'color' => '',
	      'title' => '',
	      'tagline' => '',
	      'postid' => '',
	      'linktext' => 'Read More'
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
     
     if ($postid != '')
     {
     	$postContent = getFormattedPostContent($postid, $linktext);
     }
     
     
     $output .= "</div></div></div>"; //break out of the current span
     $output .= '<section class="section-content' . $sectionColor . '" id="section-' . $titleSlug . '">
					<div class="container">
					  <h2 class="section-title">' .
						$title .
						$taglineOutput .
					  '</h2>
					  <div class="row block-content"><div class="span12">' .
						do_shortcode($content) . ' ' . $postContent .
					  '</div>
					</div></div>
				</section>';
	 $output .= '<div class="container">
      <div class="row">
        <div class="span12">
          ';
     
     return $output;
}

add_shortcode( 'section_block', 'section_block' );

function getFormattedPostContent($postid, $linktext)
{
	//Load content "blurb" from a given post or page
     $output = '';
     $postFormat = '<p class="post-content">%s</p><a class="btn btn-small btn-primary" href="%s"><i class="icon-search"></i>%s</a>';
     $postContent = '';
     
     if ($postid != '')
     {
    	if (has_excerpt($postid))
    	{
    		$postContent = get_post($postid)->post_excerpt;
    	}
    	else
    	{
     		$postContent = get_post_meta($postid, "blurb", true);
     	}
     	
        $output = sprintf($postFormat, $postContent, get_permalink($postid), $linktext);
     }
     
     return $output;
}

function row($atts, $content="")
{
	extract( shortcode_atts( array(
	      'cssClass' => ''
     ), $atts ) );

	$output = '';
	$spanFormat = '<div class="row%s">%s</div>';
	
	if ($cssClass != '')
	{
		$cssClass = ' ' . $cssClass;
	}
	
	$output = sprintf($spanFormat, $cssClass, do_shortcode($content));
	
	return $output;
}
add_shortcode( 'row', 'row' );

function span($atts, $content="")
{
	extract( shortcode_atts( array(
	      'size' => '3',
	      'cssClass' => ''
     ), $atts ) );

	$output = '';
	$spanFormat = '<div class="span%s">%s</div>';
	
	if ($cssClass != '')
	{
		$size .= ' ' . $cssClass;
	}
	
	$output = sprintf($spanFormat, $size, do_shortcode($content));
	
	return $output;
}
add_shortcode( 'span', 'span' );

?>