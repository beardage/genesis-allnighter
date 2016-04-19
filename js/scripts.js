jQuery(function() {
	activateNavigationEffect();
	listenForScrolled();
});

function listenForScrolled () {
	var lastScrollTop = 0;
	jQuery(window).on('scroll', function(event) {
		var st = jQuery(this).scrollTop();
        if (st <= 20) {
            jQuery('body').removeClass('scrolled');
        } else {
            jQuery('body').addClass('scrolled');
        }
	});
}

// add data attribute for navigation glitch effect
function activateNavigationEffect () {
	jQuery('#menu-primary-navigation .menu-item a').each(function(e) {
		jQuery(this).attr('data-text', jQuery(this).text());
	});
	jQuery('#menu-primary-navigation .menu-item a').on('hover', function() {
		jQuery(this).toggleClass('glitch');

	});
}
