<?php
/**
 * Title: Footer
 * Slug: idocs-block-theme/header
 * Categories: idocs-headers
 * Inserter: no
 */

// Load pattern in header.html after export
// <!-- wp:pattern {"slug":"idocs-block-theme/header"} /-->

if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE === 'fr' ) :
    require_once get_template_directory() . '/patterns/header-fr.php';
else :
    require_once get_template_directory() . '/patterns/header-en.php';
endif;