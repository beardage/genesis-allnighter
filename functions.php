<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Allnighter' );
define( 'CHILD_THEME_URL', 'http://www.kylebeard.com/' );

// Add Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
function sample_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

// stylesheet / js imports
add_action( 'wp_enqueue_scripts', 'allnighter_scripts_and_styles' );
function allnighter_scripts_and_styles() {
	wp_enqueue_style( 'various-styles', get_stylesheet_directory_uri() . '/css/compiled-styles.css' );
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_script( 'various-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
}




// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );


remove_action('genesis_header', 'genesis_do_header');
add_action('genesis_before', 'allnighter_do_header');
function allnighter_do_header() {
	?>
	<div class="site-header">
		<div class="logo left">
			kylebeard //
		</div>

		<ul class="navigation right">
			<li><a href="#contact">contact</a></li>
			<li><a href="#portfolio">portfolio</a></li>

		</ul>
	</div>
	<?php
}
