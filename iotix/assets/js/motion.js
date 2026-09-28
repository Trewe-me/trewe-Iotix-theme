( function () {
	'use strict';

	// Respect the visitor's preference and browser support: elements
	// stay at their default (visible) CSS state unless we get this far.
	if ( window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
		return;
	}

	if ( ! ( 'IntersectionObserver' in window ) ) {
		return;
	}

	var elements = document.querySelectorAll( '.iotix-reveal' );

	if ( ! elements.length ) {
		return;
	}

	var observer = new IntersectionObserver(
		function ( entries, obs ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) {
					entry.target.classList.add( 'is-visible' );
					obs.unobserve( entry.target );
				}
			} );
		},
		{ threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
	);

	elements.forEach( function ( el ) {
		// Only now does the element get the class that hides it via CSS,
		// right before we start watching it, so nothing ever gets stuck
		// hidden if the observer callback is somehow never reached.
		el.classList.add( 'iotix-reveal-armed' );
		observer.observe( el );
	} );
} )();
