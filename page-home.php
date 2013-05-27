<?php
/*
Template Name: Homepage
*/
global $MM_Roots;

?>

<?php if ($MM_Roots->get_setting('jumbotron_category')) get_template_part('templates/content', 'jumbotron'); ?>
<?php if ($MM_Roots->get_setting('service_category')) get_template_part('templates/content', 'services'); ?>
<?php if ($MM_Roots->get_setting('news_category')) get_template_part('templates/content', 'news'); ?>