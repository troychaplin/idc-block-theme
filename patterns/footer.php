<?php
/**
 * Title: Footer
 * Slug: idc-block-theme/footer
 * Categories: idocs-footers
 * Inserter: no
 */

// Load pattern in footer.html after export
// <!-- wp:pattern {"slug":"idc-block-theme/footer"} /-->

if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE === 'fr' ) :
    require_once get_template_directory() . '/patterns/footer-fr.php';
else :
    require_once get_template_directory() . '/patterns/footer-en.php';
endif;