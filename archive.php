<?php

//* Remove the post meta function
// remove_action('genesis_entry_header', 'genesis_post_info', 12);
// remove_action('genesis_entry_footer', 'genesis_entry_footer_markup_open', 5);
// remove_action('genesis_entry_footer', 'genesis_entry_footer_markup_close', 15);
// remove_action('genesis_entry_footer', 'genesis_post_meta');
// remove_action( 'genesis_before_post_content', 'genesis_post_info' );

//* Remove the entry title in the entry header
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

add_action('genesis_after_header', 'an_blog_header');
function an_blog_header() {
	echo "<h1>Blog</h1>";
}


genesis();
