<?php

// remove all the extra page stuff
remove_action('genesis_entry_header', 'genesis_do_post_format_image', 4);
remove_action('genesis_entry_header', 'genesis_entry_header_markup_open', 5);
remove_action('genesis_entry_header', 'genesis_entry_header_markup_close', 15);
remove_action('genesis_entry_header', 'genesis_do_post_title');
remove_action('genesis_entry_header', 'genesis_post_info', 12);
remove_action('genesis_entry_content', 'genesis_do_post_title');


// add sections
add_action('genesis_after_header', 'an_do_hero');
add_action('genesis_after_header', 'an_do_portfolio');
function an_do_hero() {
	?>
	<section class="hero" style="background-image:url();">
		<div class="hero-overlay">
			<h1>ux / ui / front-end development</h1>
		</div>
	</section>
	<?php
}

function an_do_portfolio () {
	$args = array(
	 'post_type' => 'portfolio',
   );
   $portfolioItems = new WP_Query( $args );
   ?>
   <section class="section-portfolio" id="portfolio">
	   <h2 class="section-headline">Portfolio</h2>
	   <div class="portfolio-items">
   <?php
   if( $portfolioItems->have_posts() ) {
	 while( $portfolioItems->have_posts() ) {
	   $portfolioItems->the_post();
	   ?>
	    <a class="portfolio-item" href="<?php the_permalink(); ?>" style="">
			<div class="image" style="background-image:url(<?php the_field('teaser_image'); ?>);"></div>
			<div class="overlay">
			   <h5><?php the_title(); ?></h5>
			   <p><?php the_field('teaser_description'); ?></p>
			</div>
	    </a>
	   <?php
	 }
   }
   else {
	 echo 'No portfolio items found :(';
   }

	?>
		</div>
	</section>
	<?php
}



genesis();
