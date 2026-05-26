<?php
/**
 * Title: Recent Posts Blue (FR)
 * Slug: idc-block-theme/recent-posts-blue-fr
 * Categories: idc-sections-fr
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Recent Posts","categories":["idc-sections-fr"],"patternName":"idc-block-theme/recent-posts-blue-fr"},"align":"full","className":"is-style-blue","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-blue" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"tagName":"header","metadata":{"name":"Section Heading: White"},"align":"wide","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignwide"><!-- wp:paragraph {"className":"has-thin-lines has-thin-lines\u002d\u002dblue","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-thin-lines has-thin-lines--blue">Continuez votre lecture</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"has-gray-400-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"400","textAlign":"center"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-gray-400-color has-text-color has-link-color has-white-color" style="font-style:normal;font-weight:400">D'autres articles<br><em><em><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-pale-color"><em>Choisis pour vous</em></mark></em></em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"textColor":"white","fontSize":"medium"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--60)">Des articles connexes, soigneusement sélectionnés pour approfondir vos connaissances. Une bonne lecture en appelle toujours une autre.</p>
<!-- /wp:paragraph --></header>
<!-- /wp:group -->

<!-- wp:query {"queryId":16,"query":{"perPage":3,"postType":"post","inherit":false},"namespace":"idc-block-theme/recent-posts","className":"alignwide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-article is-article\u002d\u002dblue is-recent-posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:group {"metadata":{"name":"Content"},"className":"is-article__content","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-article__content"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"className":"is-article__date","style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-article__date"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color">Publié le</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-article__read","style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-article__read"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color">Temps de lecture:</p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
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
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-primary-light"} -->
<div class="wp-block-button is-style-primary-light"><a class="wp-block-button__link wp-element-button" href="https://idc.local/informations-services-apostille-canada/articles-apostille-processus-canada/?lang=fr">Voir plus d'articles</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->