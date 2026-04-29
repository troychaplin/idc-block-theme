<?php
/**
 * Language-aware template part slug router.
 *
 * Alternative to {@see Block_Router}. Instead of registering a PHP-only block
 * that ServerSideRenders the right template part, this class hooks
 * `render_block_data` and rewrites the `slug` attribute of `core/template-part`
 * blocks at frontend render time. The Site Editor never calls `do_blocks()`,
 * so the filter does not run there — meaning the editor previews the canonical
 * (default-language) template part natively, with full layout/style cascade
 * and per-block selection outlines.
 *
 * Migration notes when activating this in place of Block_Router:
 *   - Restore `parts/header.html` and `parts/footer.html` to hold the canonical
 *     (English) block markup (currently they each contain a single router block).
 *   - Delete the now-redundant `parts/header-en.html` and `parts/footer-en.html`.
 *   - Keep `parts/header-fr.html` and `parts/footer-fr.html` as the FR overrides.
 *   - In `functions.php`, swap `new IDOCS\Block_Router()` for
 *     `new IDOCS\Template_Part_Language_Filter()`.
 *
 * @package IDOCS
 */

namespace IDOCS;

/**
 * Class Template_Part_Language_Filter
 */
class Template_Part_Language_Filter {

	/**
	 * Source slug => language code => override slug.
	 *
	 * The default language ('en') has no entry, so the original slug is used.
	 */
	private const OVERRIDES = array(
		'header' => array(
			'fr' => 'header-fr',
		),
		'footer' => array(
			'fr' => 'footer-fr',
		),
	);

	/**
	 * Initialize the module.
	 */
	public function init(): void {
		add_filter( 'render_block_data', array( $this, 'rewrite_template_part_slug' ) );
	}

	/**
	 * Rewrite the slug attribute on `core/template-part` blocks based on the
	 * active WPML language. No-op for any other block, any unmapped slug, or
	 * any language without an override.
	 *
	 * @param array $parsed_block Parsed block data.
	 * @return array
	 */
	public function rewrite_template_part_slug( array $parsed_block ): array {
		if ( 'core/template-part' !== ( $parsed_block['blockName'] ?? '' ) ) {
			return $parsed_block;
		}

		$slug = $parsed_block['attrs']['slug'] ?? '';
		if ( '' === $slug || ! isset( self::OVERRIDES[ $slug ] ) ) {
			return $parsed_block;
		}

		$lang     = apply_filters( 'wpml_current_language', 'en' );
		$override = self::OVERRIDES[ $slug ][ $lang ] ?? null;

		if ( null !== $override ) {
			$parsed_block['attrs']['slug'] = $override;
		}

		return $parsed_block;
	}
}
