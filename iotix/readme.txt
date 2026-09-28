=== Iotix ===
Contributors: Automattic
Requires at least: 5.8
Tested up to: 7.1
Requires PHP: 7.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Iotix provides a great starting point for creating a business or startup website. It offers tailored templates and patterns, including a business landing page, blog, and pricing sections, to help you present yourself and your business more quickly and easily. With Iotix, you can create a professional and polished website that accurately reflects your brand and effectively communicates your message to your target audience.

== Changelog ==

= 1.0.17 =
* Full-theme accessibility audit beyond the homepage/hero. Three real findings, all fixed:
  - Three whole page types had no `<main>` landmark at all: the blog archive (`archive.html`), the homepage (`home.php`), and search results (`search.php`). Added one, matching the convention already used correctly in `index.html`/`page.html`/`single.php`. (Homepage main only wraps its first content section, matching `single.php`'s existing pattern, rather than restructuring the whole page.)
  - The 404 page's search field had an explicitly empty accessible label (`"label":""`) plus hardcoded, untranslated strings, unlike the matching search field on the search-results page. Fixed both.
  - Six `<nav>` landmarks across the header and footer (2 alternate primary navs, "Product"/"Company"/"Resources" footer columns, footer link row) had no way to tell them apart for screen-reader landmark navigation. Added a distinct `ariaLabel` to each.
* Reviewed every image in the theme for alt text: all of them use empty `alt=""`. The hero/cover/decorative photos are correctly decorative. The five client logos under "Over 700 teams worldwide rely on Desaign" are a content judgment call rather than a code bug — empty alt is defensible since the heading text already conveys the equivalent claim, but if these represent specific real companies, each should get its own descriptive alt text once real logos are in place.

= 1.0.16 =
* Fixed a keyboard focus-visibility bug in the scroll-reveal effect: elements were hidden with `opacity: 0`, which hides content visually but leaves it in the tab order, so a keyboard-only user could tab onto a link/button inside a pricing card, feature card, or the community CTA before it had scrolled into view and been revealed — landing focus on something invisible (WCAG 2.4.7 Focus Visible). `.iotix-reveal-armed:focus-within` now forces an instant, un-animated reveal the moment focus lands inside, independent of scroll position.
* Audited all other `:hover` styling added in this pass (pricing/feature cards) and confirmed each has a matching `:focus-within`; also confirmed no rule anywhere in the theme suppresses the browser's default focus outline on links, so pre-existing hover-only link styles (post title, site title, navigation, etc.) still have a visible keyboard focus indicator even without a custom `:focus` style.

= 1.0.15 =
* Fixed hero accessibility contrast, checked against WCAG contrast-ratio math rather than by eye:
  - The hero subheading failed 4.5:1 (3.02:1) when Style Variation 3's near-white accent color tints the hero's glow. Added a fixed-darkness scrim to the hero background that caps peak brightness regardless of which style variation is active; heading now 7.5:1, subheading 5.4:1 in that same worst case.
  - The "Sign In" button in automatic dark mode failed the 3:1 non-text-contrast requirement against the hero backdrop (1.23:1, effectively invisible). Same issue in reverse for "Get Started" in light mode (1.91:1). Both hero buttons now have a fixed, token-independent border so their boundary is always visible regardless of style variation or light/dark mode.

= 1.0.14 =
* Fixed: homepage plan labels ("Intro"/"Solo (Recommended)"/"Teams") had `border-radius: 200px;` pasted into their className, producing invalid class tokens that never rendered as the intended pill badge. Replaced with a real `.iotix-plan-badge` class, now also applied on the canonical Pricing Table pattern.
* Fixed: the homepage pricing section was a hand-duplicated copy of the Pricing Table pattern instead of reusing it, so it had drifted out of sync and didn't get the pricing-card hover effect. It now inserts the shared `iotix/pricing-table` pattern.
* Added the same hover lift/shadow treatment to the homepage's two feature cards ("No Code Necessary", "Software Support").
* Redesigned the homepage hero: replaced the stock photo + parallax cover with a gradient-mesh backdrop (built from the theme's own preset colors, so it re-themes with style variations) and two decorative product-UI mockup cards; removed the empty-column layout hack used to center the hero heading.
* Added automatic dark mode via `prefers-color-scheme`, reusing the palette already shipped as the "Variation 2" style variation.
* Added a small, progressive-enhancement scroll-reveal (fade/slide-in) on the pricing cards, feature cards, and the "Join the community" section, via a new `assets/js/motion.js`; content stays fully visible without JS, on unsupported browsers, or with reduced-motion preferences.

= 1.0.13 =
* Verified compatibility with WordPress 7.1: the theme ships no custom blocks/JS, so the new enforced iframe editor (which requires Block API v3) doesn't affect it; bumped "Tested up to" to 7.1.
* Audited against WooCommerce 11: no WooCommerce-specific code, hooks, or legacy shortcode/template APIs are used, so nothing in the theme conflicts with WooCommerce 11's removal of legacy cart/checkout shortcodes or HPOS changes. The theme currently has no dedicated WooCommerce templates of its own (see readme notes).

= 1.0.12 =
* Verified compatibility with PHP 8.1–8.4; corrected the invalid "Requires PHP: 5.7" header (PHP 5.7 was never released) to 7.4.
* Added pricing table hover effect (lift + shadow) for the Pricing Table pattern.
* Added AI Aurora, Soft Signal, and Studio Mist gradient presets and set AI Aurora as the default site/blog background.

= 1.0.11 =
* Iotix theme updates (Beafialho playground changes) (#7945)

= 1.0.10 =
* Lossless image optimization (#7671)

= 1.0.10 =
* Optimize images (#7671)

= 1.0.9 =
* Add navigation block markup provided by CBT (#7277)

= 1.0.8 =
* Fix heading color. (#7240)

= 1.0.7 =
* Small tweaks to force update following `style-variations` tag fix (#7209)

= 1.0.6 =
* Add the style-variations tag to themes with style variations (#7199)

= 1.0.5 =
* Comitting the supplied resources for Iotix (#7162)

= 1.0.4 =
* Replace 32721-column_2_image-1, 92de6-startup-hero-03, a39e1-woman-developers-fvwlqxwz1p with q=90 webp images (#7097)
* Iotix: make hero image much smaller (#7096)

= 1.0.3 =
* Add missing meta and remove extraneous. (#7043)

= 1.0.2 =
* Iotix: fix post content alignment (#7035)

= 1.0.1 =
* Fix sync w dotcom.

= 1.0.0 =
* Iotix: add global padding and fix footer (#6953)

= 0.0.3 =
* Iotix: add global padding and fix footer (#6953)

= 0.0.2 =
* Iotix: fix link and text styles (#6943)

= 0.0.1 =
* Initial release

== Copyright ==

Iotix WordPress Theme, (C) 2022 Automattic
Iotix is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

This theme bundles the following third-party resources:

Photo of Developers
License: CC0 Public domain
Source: https://stocksnap.io/photo/woman-developers-FVWLQXWZ1P 
Used in "Startup" pattern.

Photo of People Working and Drinking Coffee
License: CC0 Public domain
Source: https://stocksnap.io/photo/businessmeeting-people-QVIEE1UZSX 
Used in "Startup" pattern.

3D Rendering of Devices
License: CC0 Public domain
Source: Created by Filipe Varela (@keoshi) and are released under the CC0 license
Used in "Startup" pattern.

Manrope Font
Copyright 2019 The Manrope Project Authors (https://github.com/sharanda/manrope) 
This Font Software is licensed under the SIL Open Font License, Version 1.1. This license is available with a FAQ at: http://scripts.sil.org/OFL 
License URL: http://scripts.sil.org/OFL 
Source: http://gent.media
-- End of Manrope Font credits --

Playfair Display Font
Copyright 2017 The Playfair Display Project Authors (https://github.com/clauseggers/Playfair-Display), with Reserved Font Name "Playfair Display". 
This Font Software is licensed under the SIL Open Font License, Version 1.1. This license is available with a FAQ at: http://scripts.sil.org/OFL 
License URL: http://scripts.sil.org/OFL 
Source: http://www.forthehearts.net
-- End of Playfair Display Font credits --

Figtree Font
Copyright 2022 The Figtree Project Authors (https://github.com/erikdkennedy/figtree) 
This Font Software is licensed under the SIL Open Font License, Version 1.1. This license is available with a FAQ at: https://scripts.sil.org/OFL 
License URL: https://scripts.sil.org/OFL 
Source: https://erikdkennedy.com/
-- End of Figtree Font credits --

IBM Plex Serif Font
Copyright 2020 IBM Corp. All rights reserved. 
This Font Software is licensed under the SIL Open Font License, Version 1.1. This license is available with a FAQ at: http://scripts.sil.org/OFL 
License URL: http://scripts.sil.org/OFL 
Source: http://www.boldmonday.com
-- End of IBM Plex Serif Font credits --
