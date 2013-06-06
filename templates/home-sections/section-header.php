<?php
	global $MM_Roots;

	$tagline = $MM_Roots->get_post_meta(get_the_ID(), "tagline", true);
	$keyword = $MM_Roots->get_post_meta(get_the_ID(), "keyword", true);

	$keywordTemplate = '<span class="main-color"> %s</span>';

	if ($keyword != "")
	{
		$keyword = sprintf($keywordTemplate, $keyword);
		$tagline .= $keyword;
	}
?>

<div class="container">
	<div class="row"> 
	  <div class="text-center">
	    <header>
	      <div class="span12 page-header">
	          
	            <h3>
		            <span class="white">
		            	<?php echo $tagline; ?>
		           	</span>
	            </h3>
	            
	      </div>  
	    </header>
	  </div>
	</div>
</div>