<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'featured-content', array(
    'filter'     => 'wpfo_get_featured_posts',
    'max_posts'  => 1,
    'post_types' => array( 'post', 'page' ),
) );
set_post_thumbnail_size( 400, 400 );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu', 'treehouse-portfolio' )			
		)
	);

}
add_action( 'init', 'register_theme_menus' );

function wpfo_get_featured_content() {
    apply_filters( 'wpfo_featured_content', array() );
}
add_action( 'init', 'register_theme_menus' );

function wpfo_theme_styles(){
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'pure_css', get_template_directory_uri() . '/css/pure-min.css' );
	wp_enqueue_style( 'ui_css', get_template_directory_uri() . '/css/jquery-ui.min.css' );
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Montserrat|Lora|Ubuntu|Candal|Exo+2|Quicksand|EB+Garamond|Copse|Fredericka+the+Great|Cinzel+Decorative|Alegreya+SC|Trocchi|Forum|Marcellus+SC|Convergence|Federo' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wpfo_theme_styles' );

function wpfo_theme_js() {

	wp_enqueue_script( 'ui_js', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '', false );	
	wp_enqueue_script( 'sticky_js', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );		

}
add_action( 'wp_enqueue_scripts', 'wpfo_theme_js' );

function add_custom_types_to_tax( $query ) {
if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

// Get all your post types
$post_types = get_post_types();

$query->set( 'post_type', $post_types );
return $query;
}
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Blog right sidebar', 
		'id'            => 'home_right_1', 
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Universal Search',
		'id'            => 'two',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Programs',
		'id'            => 'three',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>