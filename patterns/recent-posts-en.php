<?php
/**
 * Title: Recent Posts (EN)
 * Slug: idc-block-theme/recent-posts-en
 * Categories: idocs-sections-en
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Recent Posts","categories":["idocs-sections-en"]},"align":"full","className":"is-style-beige","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-beige" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"tagName":"header","metadata":{"name":"Section Heading: Center"},"align":"wide","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignwide"><!-- wp:paragraph {"className":"has-thin-lines","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-thin-lines">Keep Exploring</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"has-gray-400-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-dark"}}},"typography":{"fontStyle":"normal","fontWeight":"400","textAlign":"center"}},"textColor":"grey-dark"} -->
<h2 class="wp-block-heading has-text-align-center has-gray-400-color has-text-color has-link-color has-grey-dark-color" style="font-style:normal;font-weight:400">More Insights<br><em><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-light-color"><em>Curated for You</em></mark></em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"textColor":"black","fontSize":"medium"} -->
<p class="has-text-align-center has-black-color has-text-color has-link-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">Discover related articles hand-picked to deepen your understanding and keep the conversation going, because one good read deserves another.</p>
<!-- /wp:paragraph --></header>
<!-- /wp:group -->

<!-- wp:query {"queryId":16,"query":{"perPage":3,"postType":"post","inherit":false},"namespace":"idc-block-theme/recent-posts","className":"alignwide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-article is-recent-posts","layout":{"type":"grid","columnCount":3}} -->
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

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/resources/articles/">Browse More Articles</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->