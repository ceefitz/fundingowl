<?php
/*
	Template Name: Programs
*/
?>

<?php if ( is_front_page() && is_home() ){
echo get_template_part( 'header', 'custom' );}
else {
echo get_header(); } ?>

<?php get_sidebar('three'); ?>

<?php get_template_part('content', 'programs'); ?>

<?php get_template_part('content', 'cta'); ?>

<?php get_footer(); ?>
