<?php
/**
 * Title: archive
 * Slug: idocs-block-theme/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header","align":"full"} /-->

<!-- wp:group {"metadata":{"name":"Banner with Image"},"className":"is-style-default","backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group is-style-default has-primary-background-color has-background"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog-home-banner.jpg","isUserOverlayColor":true,"minHeight":300,"gradient":"custom-blue-outer-edges","sizeSlug":"full","style":{"color":{"duotone":"var:preset|duotone|grayscale"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:300px"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog-home-banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-custom-blue-outer-edges-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center"} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:query {"queryId":37,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-article","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:group {"metadata":{"name":"Content"},"className":"is-article__content","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-article__content"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-light"},":hover":{"color":{"text":"var:preset|color|tertiary"}}}}}} /-->

<!-- wp:group {"className":"is-article__date","style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-article__date"><!-- wp:paragraph -->
<p>Published on</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-article__read","style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-article__read"><!-- wp:paragraph -->
<p>Time to read:</p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"excerptLength":35} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","className":"is-article-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->