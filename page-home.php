<?php
/*
Template Name: Homepage
*/
global $MM_Roots;

?>

<?php if (isset($MM_Roots->get_setting('jumbotron_category')) get_template_part('templates/content', 'jumbotron'); ?>
<?php if (isset($MM_Roots->get_setting('services_category'))get_template_part('templates/content', 'services'); ?>
<?php if (isset($MM_Roots->get_setting('news_category'))get_template_part('templates/content', 'news'); ?>