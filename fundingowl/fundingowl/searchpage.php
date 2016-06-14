<?php
/*
Template Name: Search Page
*/
global $wp_query;
$total_results = $wp_query->found_posts;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);

if ( is_front_page() && is_home() ){
echo get_template_part( 'header', 'custom' );}
else {
echo get_header(); } ?>

	<section class="topBlurb">

	<h1>Search Posts</h1>
	<?php get_search_form(); ?>

	</section>

<?php get_footer(); ?>
