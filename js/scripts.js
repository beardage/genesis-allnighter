jQuery(function() {
	activateNavigationEffect();
});

function activateNavigationEffect () {
	jQuery('#menu-primary-navigation .menu-item a').each(function(e) {
		jQuery(this).attr('text', jQuery(this).text());
	});
}
