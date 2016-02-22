<?php





add_action('genesis_after_header', 'an_do_hero');
add_action('genesis_after_header', 'an_do_portfolio');
function an_do_hero() {
	?>
	<section class="hero" style="background-image:url(/wp-content/themes/genesis-allnighter/images/hero.jpg);">
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
			<div class"image" style="background-image:url(background-image:url(http://placehold.it/350x350);)"></div>
			<div class="overlay">
			   <h5><?php the_title(); ?></h5>
			   <p><?php the_excerpt(); ?></p>
			   <!-- <div class="portfolio-links">
				   <a class="link-www" href="#">
					   <i class="fa fa-globe"></i> View Website
				   </a>
			   </div> -->
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
