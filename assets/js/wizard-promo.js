/**
 * Raft Pro upsell injection for the Otter onboarding wizard.
 *
 * Two surfaces:
 *   - Sidebar nudge: appended to `.o-sidebar__content` on every step.
 *   - Finish card: appended to `.o-finish__container` (before its actions)
 *     when the wizard reaches its done state.
 *
 * We don't import from Otter — we treat its rendered DOM + Redux store as
 * the only interfaces, so changes to Otter's internals can't break us
 * unless they rename the BEM classes we target. The script is loaded only
 * when `?onboarding=true` is present AND Raft Pro is inactive, so paying
 * users never see either nudge.
 *
 * Re-injection is necessary because React owns the wizard DOM and can
 * remount sections on state changes — using marker IDs to avoid duplicates.
 *
 * @package
 */
( function () {
	'use strict';

	if (
		'undefined' === typeof window.wp ||
		! window.wp.data ||
		! window.raftWizardPromo
	) {
		return;
	}

	const data = window.wp.data;
	const domReady = window.wp.domReady;
	const config = window.raftWizardPromo;
	const strings = config.strings || {};
	const upgradeUrl = config.upgradeUrl;

	const SIDEBAR_ID = 'raft-pro-wizard-sidebar-nudge';
	const FINISH_ID = 'raft-pro-wizard-finish-card';

	/**
	 * Inject inline CSS for the two surfaces. Scoped via the marker IDs so
	 * we don't leak styles into Otter's own components.
	 */
	function injectStyles() {
		if ( document.getElementById( 'raft-pro-wizard-promo-style' ) ) {
			return;
		}
		const style = document.createElement( 'style' );
		style.id = 'raft-pro-wizard-promo-style';
		style.textContent =
			'' +
			'#' +
			SIDEBAR_ID +
			' { margin-top: 24px; padding: 16px; border: 1px dashed #C26148; border-radius: 8px; background: rgba(194, 97, 72, 0.06); }' +
			'#' +
			SIDEBAR_ID +
			' .raft-eyebrow { font-size: 11px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; color: #C26148; margin: 0 0 4px; }' +
			'#' +
			SIDEBAR_ID +
			' .raft-title { font-size: 15px; font-weight: 600; margin: 0 0 8px; color: #1e1e1e; }' +
			'#' +
			SIDEBAR_ID +
			' a { color: #C26148; font-weight: 600; text-decoration: none; font-size: 13px; }' +
			'#' +
			SIDEBAR_ID +
			' a:hover { text-decoration: underline; }' +
			'#' +
			FINISH_ID +
			' { margin: 24px 0; padding: 28px; border: 2px dashed #C26148; border-radius: 12px; background: rgba(194, 97, 72, 0.05); text-align: left; }' +
			'#' +
			FINISH_ID +
			' .raft-eyebrow { font-size: 12px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: #C26148; margin: 0 0 8px; }' +
			'#' +
			FINISH_ID +
			' h3 { font-size: 22px; font-weight: 600; margin: 0 0 12px; color: #1e1e1e; }' +
			'#' +
			FINISH_ID +
			' p { font-size: 15px; line-height: 1.5; margin: 0 0 20px; color: #50575e; }' +
			'#' +
			FINISH_ID +
			' a.raft-cta { display: inline-block; background: #C26148; color: #fff; padding: 10px 22px; border-radius: 999px; text-decoration: none; font-weight: 600; }' +
			'#' +
			FINISH_ID +
			' a.raft-cta:hover { background: #AC5039; color: #fff; }';
		document.head.appendChild( style );
	}

	/**
	 * Build a DOM node with the given tag, attributes, and child content.
	 * Tiny helper to avoid the verbosity of native createElement chains.
	 *
	 * @param {string}            tag
	 * @param {Object}            attrs
	 * @param {string|Node|Array} children
	 * @return {HTMLElement} HTML element
	 */
	function el( tag, attrs, children ) {
		const node = document.createElement( tag );
		if ( attrs ) {
			Object.keys( attrs ).forEach( function ( key ) {
				if ( 'className' === key ) {
					node.className = attrs[ key ];
				} else {
					node.setAttribute( key, attrs[ key ] );
				}
			} );
		}
		if ( children ) {
			if ( ! Array.isArray( children ) ) {
				children = [ children ];
			}
			children.forEach( function ( child ) {
				if ( 'string' === typeof child ) {
					node.appendChild( document.createTextNode( child ) );
				} else if ( child ) {
					node.appendChild( child );
				}
			} );
		}
		return node;
	}

	/**
	 * Build the sidebar nudge element. Separated from `injectSidebarNudge`
	 * so we can build-then-position without rebuilding on every re-render.
	 *
	 * @return {HTMLElement} HTML structure for the sidebar nudge
	 */
	function buildSidebarNudge() {
		return el( 'div', { id: SIDEBAR_ID }, [
			el(
				'p',
				{ className: 'raft-eyebrow' },
				strings.sidebarEyebrow || 'Want more?'
			),
			el(
				'p',
				{ className: 'raft-title' },
				strings.sidebarTitle || 'Try Raft Pro'
			),
			el(
				'a',
				{
					href: upgradeUrl,
					target: '_blank',
					rel: 'noopener noreferrer',
				},
				( strings.sidebarLink || "See what's included" ) + ' →'
			),
		] );
	}

	/**
	 * Make sure the nudge exists AND is the last child of the sidebar
	 * content area. React owns this subtree and re-mounts step-specific
	 * controls between wizard steps — if our node ends up sandwiched
	 * between `.o-sidebar__info` and the freshly-mounted controls, the
	 * nudge appears in the middle of the sidebar instead of at the bottom.
	 *
	 * Idempotent: if the nudge is already last child, do nothing — so
	 * MutationObserver loops don't re-trigger themselves.
	 */
	function injectSidebarNudge() {
		const container = document.querySelector( '.o-sidebar__content' );
		if ( ! container ) {
			return;
		}

		const existing = document.getElementById( SIDEBAR_ID );

		if ( existing && existing === container.lastElementChild ) {
			return;
		}

		if ( existing && existing.parentNode ) {
			existing.parentNode.removeChild( existing );
		}

		container.appendChild( buildSidebarNudge() );
	}

	/**
	 * Inject the larger Finish-step card before its action buttons. Returns
	 * early if the Finish container isn't in the DOM (we're not on Finish
	 * step yet) or if we already injected.
	 */
	function injectFinishCard() {
		if ( document.getElementById( FINISH_ID ) ) {
			return;
		}
		const container = document.querySelector( '.o-finish__container' );
		if ( ! container ) {
			return;
		}

		const card = el( 'div', { id: FINISH_ID }, [
			el(
				'p',
				{ className: 'raft-eyebrow' },
				strings.finishEyebrow || 'Get even more'
			),
			el(
				'h3',
				null,
				strings.finishTitle || 'Take it further with Raft Pro'
			),
			el(
				'p',
				null,
				strings.finishBody ||
					'Unlock 17 extra patterns, 8 style variations, 7 ready-made page templates, and a fully designed WooCommerce storefront.'
			),
			el(
				'a',
				{
					href: upgradeUrl,
					target: '_blank',
					rel: 'noopener noreferrer',
					className: 'raft-cta',
				},
				strings.finishCta || 'Upgrade to Pro'
			),
		] );

		// Insert before the actions row so it sits naturally above the
		// CTAs rather than after them (lower visual hierarchy).
		const actions = container.querySelector( '.o-finish__actions' );
		if ( actions ) {
			container.insertBefore( card, actions );
		} else {
			container.appendChild( card );
		}
	}

	let rafPending = false;

	function tick() {
		injectStyles();
		injectSidebarNudge();
		injectFinishCard();
	}

	/**
	 * Debounce tick() to the next animation frame. wp.data.subscribe fires
	 * synchronously DURING React's render phase, before commit — running
	 * tick() at that point can land our nodes between info and a
	 * not-yet-mounted Controls child. Deferring to rAF runs us after the
	 * commit phase, when the DOM matches React's intent.
	 */
	function scheduleTick() {
		if ( rafPending ) {
			return;
		}
		rafPending = true;
		(
			window.requestAnimationFrame ||
			function ( cb ) {
				return setTimeout( cb, 16 );
			}
		)( function () {
			rafPending = false;
			tick();
		} );
	}

	let observer = null;

	/**
	 * Watch the wizard root for child changes. Fires AFTER React's commit
	 * phase, so the DOM is settled when we re-inject. Idempotent: our
	 * inject functions short-circuit when the nudge is already in the
	 * right place, so the observer doesn't loop on its own mutations.
	 */
	function setupObserver() {
		if ( observer ) {
			return true;
		}
		const root =
			document.getElementById( 'otter-onboarding' ) || document.body;
		if ( ! root ) {
			return false;
		}
		observer = new MutationObserver( scheduleTick );
		observer.observe( root, { childList: true, subtree: true } );
		return true;
	}

	function start() {
		// React commit happens after subscribe fires — defer to next frame.
		try {
			data.subscribe( scheduleTick );
		} catch ( e ) {
			// Subscribe can throw before store registers; the poll below
			// covers that window.
		}

		setupObserver();

		// Initial poll covers the brief window before Otter mounts the
		// wizard root (the observer needs an existing node to attach to).
		let attempts = 0;
		const poll = setInterval( function () {
			attempts++;
			if ( setupObserver() ) {
				scheduleTick();
			}
			if ( attempts > 30 ) {
				clearInterval( poll );
			}
		}, 200 );
	}

	if ( domReady ) {
		domReady( start );
	} else if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', start );
	} else {
		start();
	}
} )();
