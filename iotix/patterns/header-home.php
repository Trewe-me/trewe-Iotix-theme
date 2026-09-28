<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: header-home
 * Slug: iotix/header-home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"className":"iotix-hero","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull iotix-hero">

<!-- wp:html -->
<div class="iotix-hero-mockups" aria-hidden="true">
	<div class="iotix-hero-mockup-card a"><span class="bar accent"></span><span class="line"></span><span class="line short"></span></div>
	<div class="iotix-hero-mockup-card b"><span class="bar accent"></span><span class="line"></span></div>
</div>
<!-- /wp:html -->

<!-- wp:group {"className":"iotix-hero-content","align":"wide","style":{"spacing":{"padding":{"right":"5vw","left":"5vw","bottom":"var:preset|spacing|70"}},"dimensions":{"minHeight":"85vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide iotix-hero-content" style="min-height:85vh;padding-right:5vw;padding-bottom:var(--wp--preset--spacing--70);padding-left:5vw"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"0","bottom":"40px","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:40px;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:site-title /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:navigation {"overlayBackgroundColor":"primary","overlayTextColor":"tertiary"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-fill iotix-hero-btn","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-fill iotix-hero-btn has-small-font-size"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Sign In', 'iotix' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","className":"iotix-hero-heading","style":{"typography":{"fontSize":"3rem","lineHeight":"1"}}} -->
<h2 class="wp-block-heading has-text-align-center iotix-hero-heading" style="font-size:3rem;line-height:1"><?php esc_html_e( 'Machine learning for designers, made easy.', 'iotix' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"iotix-hero-subhead","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<p class="has-text-align-center iotix-hero-subhead has-medium-font-size" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Speed up your design process by creating realistic mockups with AI-driven content, all through the power of machine learning.', 'iotix' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill iotix-hero-btn"} -->
<div class="wp-block-button is-style-fill iotix-hero-btn"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'iotix' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
