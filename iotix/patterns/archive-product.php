<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: Product Archive
 * Slug: iotix/archive-product
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"40px"},"padding":{"right":"5vw","left":"5vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:40px;padding-right:5vw;padding-left:5vw"><!-- wp:query-title {"type":"archive","align":"wide"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:term-description /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"5vw","bottom":"var:preset|spacing|70","left":"5vw"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-right:5vw;padding-bottom:var(--wp--preset--spacing--70);padding-left:5vw"><!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":9,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":true,"taxQuery":null,"isProductCollectionBlock":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"]},"tagName":"div","displayLayout":{"type":"flex","columns":3},"collection":"woocommerce/product-collection/products","align":"wide"} -->
<div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isLink":true,"style":{"border":{"radius":"16px"}}} /-->

<!-- wp:woocommerce/product-title {"isLink":true,"headingLevel":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

<!-- wp:woocommerce/product-price /-->

<!-- wp:woocommerce/product-button {"width":100} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
