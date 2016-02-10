<?php





add_action('genesis_after_header', 'an_do_hero');
function an_do_hero() {
	?>
	<section class="hero" style="background-image:url(/wp-content/themes/genesis-allnighter/images/hero.jpg);">
		<div class="hero-overlay">
			<h1>ux / ui / front-end development</h1>
		</div>
	</section>
	<section class="section-portfolio">
		<h2 class="section-headline">Portfolio</h2>
        <div class="portfolio-items">
			<div class="portfolio-item" style="background-image:url(http://placehold.it/350x350);">
				<div class="overlay">
					<h5>Portfolio Item #1</h5>
					<div class="portfolio-links">
						<a class="link-www" href="#">
							<i class="fa fa-globe"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
}




genesis();
