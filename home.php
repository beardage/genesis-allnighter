<?php

//* Remove the post meta function
// remove_action('genesis_entry_header', 'genesis_post_info', 12);
// remove_action('genesis_entry_footer', 'genesis_entry_footer_markup_open', 5);
// remove_action('genesis_entry_footer', 'genesis_entry_footer_markup_close', 15);
// remove_action('genesis_entry_footer', 'genesis_post_meta');
// remove_action( 'genesis_before_post_content', 'genesis_post_info' );

//* Remove the entry title in the entry header
//remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

add_action('genesis_after_header', 'an_blog_header');


add_action('genesis_entry_header', 'an_blog_archive_panel');
remove_action('genesis_entry_header', 'genesis_do_post_title');

remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );


function an_blog_header() {
	echo 	'<header class="entry-header">';
	echo		'<h1 class="entry-title" itemprop="headline">Blog</h1>';
	echo	'</header>';
}

function an_blog_archive_panel () {
	$title = get_the_title();
	$permalink = get_the_permalink();
	$postdate = get_the_date();
	$markup = '';
	$markup = '<a class="overlay" href="' . $permalink . '">';
	$markup .= 	'<h3 class="post-title">' . $title . '</h3>';
	$markup .= '</a>';
	$markup .= '<h4 class="post-date">' . $postdate . '</h4>';

	echo $markup;
}


genesis();
