jQuery(function() {
	activateNavigationEffect();
});


// add data attribute for navigation glitch effect
function activateNavigationEffect () {
	jQuery('#menu-primary-navigation .menu-item a').each(function(e) {
		jQuery(this).attr('data-text', jQuery(this).text());
	});
	jQuery('#menu-primary-navigation .menu-item a').on('hover', function() {
		jQuery(this).toggleClass('glitch');

	});
}
